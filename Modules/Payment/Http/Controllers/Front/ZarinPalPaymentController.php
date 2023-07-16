<?php

namespace Modules\Payment\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Order\Entities\Order;
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
        $data['amount'] = auth()->user()->carts()->get()->sum('total_price');

        $order = auth()->user()->orders()->create($data);
        abort_unless($order->user_id == auth()->id(), 404);

        if ($lang == 'fa')
            $description =  Setting::firstOrCreate(['key' => 'gateway_description'] , [
                'key' => 'gateway_description',
                'value' => 'خرید محصول از وبسایت جی تی کالا'
            ])->value;
        else
            $description =  Setting::firstOrCreate(['key' => 'en_gateway_description'] , [
                'key' => 'gateway_description',
                'value' => 'Buy the product from the GT Kala website'
            ])->value;

        $result = $this->GetZarinPalClientStatus($order, $description);
        if ($result[0]) {
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result[1]->Authority);
        }

        $error_code = $result[1]->Status;
        echo 'ERR: ' . $result[1]->Status;
//        return view('payment::front.fail', compact('error_code'));
    }

    public function call_back()
    {
        $result = $this->GetZarinPalClientCallBackStatus(\request('Authority'));
        if ($result[0]) {
            $payment = $result[1];
            echo 'success: ' . $payment->refID;
//            return view('payment::front.success', compact('payment'));
        }
        echo 'ERR: ';
//        return view('payment::front.fail');
    }
}
