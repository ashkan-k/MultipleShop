<?php

namespace Modules\Dashboard\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Modules\Dashboard\Http\Requests\ProfileRequest;
use Modules\Payment\Entities\Payment;

class DashboardController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        // Get all incomes (all, today, last week, last month)
        $all_incomes = Payment::whereStatus(1)->sum('amount');
        $today_incomes = Payment::whereStatus(1)->whereDate('created_at', '=', date('Y-m-d'))->sum('amount');
        $last_week = Payment::whereStatus(1)->whereBetween('created_at',
            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
        )->sum('amount');
        $last_month = Payment::whereStatus(1)->whereBetween('created_at',
            [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]
        )->sum('amount');

        // Calculate today and yesterday incomes, difference percent
        $yesterday_incomes = Payment::whereStatus(1)->whereDate('created_at', '=', Carbon::now()->subDay()->toDate())->sum('amount');
        $degree_difference = (($today_incomes - $yesterday_incomes) / (($today_incomes + $yesterday_incomes) / 2)) * 100;

        return view('dashboard::index', compact('all_incomes', 'today_incomes', 'last_week', 'last_month', 'degree_difference'));
    }

    public function profile(ProfileRequest $request)
    {
        $user = auth()->user();

        if (\request()->method() == 'POST'){
            $avatar = $this->UploadFile($request, 'avatar' , 'avatars', $user->email, $user->avatar);

            $data = $request->validated();

            $password = $data['password'];
            unset($data['password']);

            $user->update(array_merge($data, ['avatar' => $avatar]));
            if ($password){
                $user->set_password($password);
                auth()->login($user);
            }
            return $this->SuccessRedirect('اطلاعات پروفایل شما با موفقیت ویرایش شد.', $request->get('next', 'profile'));

        }
        return view('dashboard::profile', compact('user'));
    }
}
