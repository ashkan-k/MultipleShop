<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthHelpers;
use App\Http\Traits\Responses;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Modules\Auth\Http\Requests\ResetPasswordConfirmRequest;
use Modules\Auth\Http\Requests\ResetPasswordRequest;
use Modules\Auth\Http\Requests\ResetPasswordSetRequest;
use Modules\Auth\Http\Requests\VerifyRequest;
use Modules\User\Entities\User;

class AuthController extends Controller
{
    use Responses, AuthHelpers;

    public function verify(VerifyRequest $request)
    {
        $user = User::whereEmail($request->email)->firstOrFail();
        $this->verify_code($request->code, $user);
        $user->update(['email_verified_at' => Carbon::now()]);

        return $this->SuccessResponse('تایید حساب کاربری شما باموفقیت انجام شد.');
    }

    public function send_verify_again(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $this->SendCode($user);
        return $this->SuccessResponse(__('The verification code has been successfully sent to you.'));
    }
}
