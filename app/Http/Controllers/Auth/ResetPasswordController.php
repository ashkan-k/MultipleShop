<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthHelpers;
use App\Http\Traits\Responses;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Modules\Auth\Http\Requests\ResetPasswordConfirmRequest;
use Modules\Auth\Http\Requests\ResetPasswordRequest;
use Modules\Auth\Http\Requests\ResetPasswordSetRequest;
use Modules\Email\Emails\SendEmailMail;
use Modules\Sms\Helpers\sms_helper;
use Modules\User\Entities\User;

class ResetPasswordController extends Controller
{
    use Responses, AuthHelpers;

    public function reset_password()
    {
        return view('auth.passwords.reset_password');
    }

    public function reset_password_store(ResetPasswordRequest $request)
    {
        $user = User::whereEmail($request->email)->first();
        $this->SendCode($user);

        $this->set_helper_sessions($user, true);
        return $this->SuccessRedirect(__('The password recovery code has been successfully sent to you.'),'reset_password_confirm');
    }

    public function reset_password_confirm()
    {
        User::whereEmail(session()->get('user_email'))->firstOrFail();
        return view('auth.passwords.reset_password_confirm');
    }

    public function reset_password_confirm_store(ResetPasswordConfirmRequest $request)
    {
        $user = User::whereEmail(session()->get('user_email'))->firstOrFail();
        $this->verify_code($request->code, $user);
        $this->change_is_used($user);
        return $this->SuccessRedirect( __('Your account has been successfully verified and you can now enter your new password.'),'reset_password_set');
    }

    public function reset_password_set()
    {
        User::whereEmail(session()->get('user_email'))->firstOrFail();
        return view('auth.passwords.reset_password_enter');
    }

    public function reset_password_set_store(ResetPasswordSetRequest $request)
    {
        $user = User::whereEmail(session()->get('user_email'))->firstOrFail();
        $user->set_password($request->password);
        return $this->SuccessRedirect(__('Your password has been changed successfully. You can log in now.'),'login');
    }
}
