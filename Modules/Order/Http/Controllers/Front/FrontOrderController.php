<?php

namespace Modules\Order\Http\Controllers\Front;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Order\Entities\Order;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class FrontOrderController extends Controller
{
    use Responses;

    public function orders()
    {
        return view('order::front.orders');
    }

    public function order_submit()
    {
        if (auth()->user()->carts()->get()->sum('total_price') <= 0){
            return redirect(route('cart', ['locale' => app()->getLocale()]));
        }
        return view('order::front.order_submit');
    }
}
