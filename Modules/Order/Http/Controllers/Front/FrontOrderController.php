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
        $objects = Order::Search(request('search'))->with($this->order_relations)->get();
//            ->Filter(\request())
//            ->with($this->order_relations)
//            ->latest()
//            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('order::front.orders', compact('objects'));
    }
}
