<?php

namespace Modules\Coupon\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Coupon\Entities\Coupon;
use Modules\Coupon\Http\Requests\CouponRequest;
use Modules\User\Entities\User;

class CouponController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Coupon::Search(request('search'))
            ->Filter(\request())
            ->with(['user'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $filter_users = [];
        foreach (User::all() as $item){
            $filter_users[] = [$item->id, $item->full_name()];
        }

        return view('coupon::dashboard.list', compact('objects', 'filter_users'));
    }

    public function create()
    {
        $users = User::all();
        return view('coupon::dashboard.form', compact('users'));
    }

    public function store(CouponRequest $request)
    {
        Coupon::create($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'coupons.index');
    }

    public function edit(Coupon $coupon)
    {
        $users = User::all();
        return view('coupon::dashboard.form', compact('users'))->with('object', $coupon);
    }

    public function update(CouponRequest $request, Coupon $coupon)
    {
        $coupon->update($request->validated());
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'coupons.index');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'coupons.index');
    }
}
