<?php

namespace Modules\User\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\UserRequest;

class UserController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = User::Search(request('search'))
            ->Filter(\request())
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        $status_filters = [['1', 'فعال'], ['0', 'غیرفعال']];
        $role_filters = [
            ['admin', 'مدیر'], ['staff', 'کارمند'],
            ['user', 'کاربر']
        ];

        return view('user::dashboard.list', compact('objects', 'status_filters', 'role_filters'));
    }

    public function create()
    {
        return view('user::dashboard.form');
    }

    public function store(UserRequest $request)
    {
        $avatar = $this->UploadFile($request, 'avatar' , 'avatars', $request->email);
        $user = User::create(array_merge($request->all(), ['avatar' => $avatar]));
        $user->email_verified_at = Carbon::now();
        $user->set_password($request->password);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'users.index');
    }

    public function edit(User $user)
    {
        return view('user::dashboard.form')->with('object', $user);
    }

    public function update(UserRequest $request, User $user)
    {
        $avatar = $this->UploadFile($request, 'avatar' , 'avatars', $user->email, $user->avatar);
        $request['password'] = $request->password ? Hash::make($request->password) : $user->password;

        $request['is_admin'] = $request->has('is_admin') ?? false;
        $request['is_staff'] = $request->has('is_staff') ?? false;

        $user->update(array_merge($request->all(), ['avatar' => $avatar]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'users.index');
    }

    public function change_status(User $user)
    {
        $status = \request('status') == '1' ? now() : null;
        $user->update(['email_verified_at' => $status]);
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
