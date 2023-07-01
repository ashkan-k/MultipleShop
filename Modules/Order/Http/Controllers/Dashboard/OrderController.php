<?php

namespace Modules\Order\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Order\Entities\Order;

class OrderController extends Controller
{
    use Responses;

    private $order_relations = ['user', 'product', 'payment', 'size', 'color'];

    public function index()
    {
        $objects = Order::Search(request('search'))
            ->with($this->order_relations)
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('order::dashboard.list', compact('objects'));
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
