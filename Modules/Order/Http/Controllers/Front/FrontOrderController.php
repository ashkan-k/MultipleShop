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

    private $order_relations = ['product', 'payment'];

    public function orders()
    {
        return view('order::front.orders');
    }

    public function order_submit()
    {
        return view('order::front.order_submit');
    }
}
