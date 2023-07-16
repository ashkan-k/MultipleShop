<?php

namespace Modules\Payment\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\OrderProduct;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Payment\Http\Controllers\BaseGatewayController;
use Modules\Setting\Entities\Setting;
use Modules\Sms\Helpers\sms_helper;
use Modules\Sms\Jobs\SendSmsJob;
use SoapClient;

class ZarinPalPaymentController extends BaseGatewayController
{
    public function pay($lang, OrderRequest $request)
    {
        $data = $request->validated();
        abort_unless($data['user_id'] == auth()->id(), 404);

        // Get Current User Carts List
        $user_carts = auth()->user()->carts()->get();

        // Calculate Amount
        $data['amount'] = $user_carts->sum('total_price');
        $order = auth()->user()->orders()->create($data);

        // Add User Products Info To OrderProduct Table(attach size_id, color_id ,...)
        $order->order_products()->createMany($user_carts->toArray());

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

        $error_code = $result[1]->Status;
        return view('payment::front.fail', compact('error_code'));
    }

    public function call_back()
    {
        $result = $this->GetZarinPalClientCallBackStatus(\request('Authority'));
        $payment = $result[1];

        if ($result[0]) {
            auth()->user()->carts()->truncate();
            return view('payment::front.success', compact('payment'));
        }
        return view('payment::front.fail', compact('payment'));
    }
}
