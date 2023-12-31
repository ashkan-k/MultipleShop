<?php

namespace Modules\Payment\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Modules\Cart\Entities\CartFeature;
use Modules\Coupon\Entities\Coupon;
use Modules\Email\Helpers\email_helpers;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\OrderProduct;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Payment\Http\Controllers\BaseGatewayController;
use Modules\Setting\Entities\Setting;
use Modules\Sms\Jobs\SendSmsJob;
use SoapClient;

class ZarinPalPaymentController extends BaseGatewayController
{
    private function CheckUserCoupon($data)
    {
        if (isset($data['coupon_code'])) {
            $coupon = Coupon::CheckCoupon($data['coupon_code'], $data['user_id']);
            if (isset($coupon['error'])) {
                throw ValidationException::withMessages(['coupon_code' => $coupon['error']])->status(400);
            }

            $data['amount'] = $coupon->CalculateCouponAmount($data['amount']);
        }

        return $data['amount'];
    }

    //

    public function pay($lang, OrderRequest $request)
    {
        $data = $request->validated();
        abort_unless($data['user_id'] == auth()->id(), 404);

        // Get Current User Carts List
        $user_carts = auth()->user()->carts()->get();

        // Calculate Amount and Check Coupon
        $data['amount'] = $user_carts->sum('total_price');
        $data['amount'] = $this->CheckUserCoupon($data);

        $order = auth()->user()->orders()->create($data);

        // Add User Products Info To OrderProduct Table(attach size_id, color_id ,...)
        $order->order_products()->createMany($user_carts->toArray());

        // Add Order Features (sync with Cart Features)
        $user_cart_features = CartFeature::whereIn('cart_id', $user_carts->pluck('id')->toArray())->get()->toArray();
        $order->order_features()->createMany($user_cart_features);

        // Get Transaction Description
        if ($lang == 'fa')
            $description = Setting::firstOrCreate(['key' => 'gateway_description'], [
                'key' => 'gateway_description',
                'value' => 'خرید محصول از وبسایت جی تی کالا'
            ])->value;
        else
            $description = Setting::firstOrCreate(['key' => 'en_gateway_description'], [
                'key' => 'gateway_description',
                'value' => 'Buy the product from the GT Kala website'
            ])->value;

        // Redirect User To Zarinpal Gateway website
        $result = $this->GetZarinPalClientStatus($order, $description);
        if ($result[0]) {
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result[1]->Authority);
        }

        $error_code = $result[1]->Status ?? '-1';
        return view('payment::front.fail', compact('error_code'));
    }

    public function call_back()
    {
        $result = $this->GetZarinPalClientCallBackStatus(\request('Authority'));
        $payment = $result[1];

        if ($result[0]) {
            DB::table('carts')->where('user_id', auth()->id())->delete();

            // Send Sms for user who were ordered
            $user_text = sprintf(email_helpers::$EMAIL_PATTERNS['user_order_message'], auth()->user()->full_name(), $payment->order->order_number);
            dispatch(new SendSmsJob(auth()->user()->phone, $user_text));

            // Send Sms for website,s manager
            $admin_phone = Setting::where('key', 'email')->first()->value;
            $manager_text = sprintf(email_helpers::$EMAIL_PATTERNS['admin_order_message'], $payment->order->order_number, auth()->user()->full_name());
            dispatch(new SendSmsJob($admin_phone, $manager_text));

            return view('payment::front.success', compact('payment'));
        }
        return view('payment::front.fail', compact('payment'));
    }
}
