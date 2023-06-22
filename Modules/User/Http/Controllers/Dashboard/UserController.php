<?php

namespace Modules\User\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;

class UserController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        $objects = User::Search(request('search'))
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));
        return view('user::dashboard.list', compact('objects'));
    }

    public function create()
    {
        return view('setting::dashboard.form');
    }

    public function store(UserRequest $request)
    {
        $avatar = $this->UploadFile($request, 'avatar' , 'avatars', $request->phone);

        $user = User::create(array_merge($request->validated(), ['avatar' => $avatar]));
        $user->set_password($request->password);
        $user->set_admin($request->is_admin || 0);
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ثبت شد.', 'users.index');
    }

    public function edit(User $user)
    {
        return view('setting::dashboard.form')->with('object', $user);
    }

    public function update(UserRequest $request, User $user)
    {
        $avatar = $this->UploadFile($request, 'avatar' , 'avatars', $user->phone, $user->avatar);
        $request['password'] = $request->password ? Hash::make($request->password) : $user->password;

        $user->update(array_merge($request->validated(), ['avatar' => $avatar]));
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت ویرایش شد.', 'users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'settings.index');
    }
}
