<?php

namespace Modules\Payment\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupon\Entities\Coupon;
use Modules\Payment\Entities\Payment;
use Modules\User\Entities\User;

class PaymentController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Payment::Search(request('search'))
            ->Filter(\request())
            ->with(['user', 'coupon'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_users = [];
        foreach (User::all() as $item){
            $filter_users[] = [$item->id, $item->full_name()];
        }
        $filter_coupons = [];
        foreach (Coupon::all()->pluck('code', 'id') as $key => $item){
            $filter_coupons[] = [$key, $item];
        }
        $status_filters = [['1', 'موفق'], ['0', 'ناموفق']];

        return view('payment::dashboard.list', compact('objects', 'filter_users', 'filter_coupons', 'status_filters'));
    }
}
