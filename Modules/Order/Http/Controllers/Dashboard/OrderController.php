<?php

namespace Modules\Order\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Order\Entities\Order;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class OrderController extends Controller
{
    use Responses;

    private $order_relations = ['user', 'product', 'payment', 'size', 'color'];

    public function index()
    {
        $objects = Order::Search(request('search'))
            ->Filter(\request())
            ->with($this->order_relations)
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_products = [];
        foreach (Product::all()->pluck('title', 'id') as $key => $item){
            $filter_products[] = [$key, $item];
        }
        $filter_users = [];
        foreach (User::all()->pluck('email', 'id') as $key => $item){
            $filter_users[] = [$key, $item];
        }
        $filter_colors = [];
        foreach (Color::all()->pluck('title', 'id') as $key => $item){
            $filter_colors[] = [$key, $item];
        }
        $filter_sizes = [];
        foreach (Color::all()->pluck('title', 'id') as $key => $item){
            $filter_sizes[] = [$key, $item];
        }

        $status_filters = [['sending', 'درحال ارسال'], ['posted', 'ارسال شده'], ['delivered', 'تحویل داده شده']];
        $payment_type_filters = [['online', 'آنلاین'], ['cash', 'نقدی']];

        return view('order::dashboard.list', compact('objects', 'filter_products', 'payment_type_filters', 'filter_users', 'filter_colors', 'filter_sizes', 'status_filters'));
    }

    public function show(Order $order)
    {
        return view('order::dashboard.detail')->with('object', $order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'orders.index');
    }

    public function change_status(Order $order)
    {
        $order->update(['status' => \request('status')]);
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }

    public function change_payment_type(Order $order)
    {
        $order->update(['payment_type' => \request('payment_type')]);
        return $this->SuccessResponse('نوع پرداخت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
