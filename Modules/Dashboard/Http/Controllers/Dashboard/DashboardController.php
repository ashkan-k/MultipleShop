<?php

namespace Modules\Dashboard\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Http\Requests\ProfileRequest;

class DashboardController extends Controller
{
    use Responses, Uploader;

    public function index()
    {
        return view('dashboard::index');
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
            }
            return $this->SuccessRedirect('اطلاعات پروفایل شما با موفقیت ویرایش شد.', $request->get('next', 'profile'));

        }
        return view('dashboard::profile', compact('user'));
    }
}
