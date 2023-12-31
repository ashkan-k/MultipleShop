<?php

namespace App\Http\Traits;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Modules\Auth\Entities\ActivationCode;
use Modules\Email\Emails\SendEmailMail;
use Modules\Email\Helpers\email_helpers;
use Modules\Sms\Jobs\SendSmsJob;

trait AuthHelpers
{
    private function verify_code($code, $user)
    {
        $code_obj = ActivationCode::where('code', $code)->where('user_id', $user->id)->first();
        if ($code_obj && !$code_obj->is_used) {
            return true;
        }
        throw ValidationException::withMessages(['code' => 'کد وارد شده نامعتبر است!'])->status(400);
    }

    public function SendCode($user)
    {
        $code = $this->CreateNewCode($user);

        $message = [
//            sprintf(email_helpers::$EMAIL_PATTERNS['verify_user'], $code->code),
            __('Dear user, your verification code'),
            $code->code
        ];
        $title = 'بازیابی رمز عبور';
        $template = 'email::emails/auth/verify_email';

        try {
            Mail::to($user->email)->send(new SendEmailMail($user->email, $title, $message, $template));
        } catch (\Exception $exception) {
            throw ValidationException::withMessages(['email' => __('Internet error! Please try again.')])->status(400);
        }
    }

    private function check_code_sent($user)
    {
        $code = $user->activation_codes()->latest()->first();
        if ($code) {
            $diff_minutes = Carbon::parse($code->created_at)->diffInMinutes(Carbon::now());
            if ($diff_minutes < 1) {
                return false;
            }
        }
        return true;
    }

    private function change_is_used($user)
    {
        $user->activation_codes()->where('is_used', false)->update(['is_used' => true]);
    }

    private function CreateNewCode($user)
    {
        if (!$this->check_code_sent($user)) {
            throw ValidationException::withMessages(['code' => 'کد یکبار مصرف ورود برای شما ارسال شده است ، پس از گذشت 1 دقیقه میتوانید دوباره درخواست کنید!'])->status(400);
        }

        $user->activation_codes()->update(['is_used' => true]);

        $code = ActivationCode::create([
            'user_id' => $user->id
        ]);
        return $code;
    }

    private function set_helper_sessions($user, $remember_me)
    {
        $this->remove_helper_sessions();
        session()->put('remember_me', $remember_me);
        session()->put('user_email', $user->email);
    }

    private function remove_helper_sessions()
    {
        session()->remove('login_email');
        session()->remove('remember_me');
    }

    public function CheckPhoneEmailExistsInUpdate($request, $instance)
    {
        if (User::wherePhone($request->email)->WhereNot('id', $instance->id)->exists()) {
            throw ValidationException::withMessages(['email' => 'این شماره موبایل قبلا ثبت شده است.']);
        }

        if (User::whereEmail($request->email)->WhereNot('id', $instance->id)->exists()) {
            throw ValidationException::withMessages(['email' => 'این ایمیل قبلا ثبت شده است.']);
        }
    }

    public function SendVerifyCode($user)
    {
        if ($user && !$user->email_verified_at) {
            $this->SendCode($user);
            $this->set_helper_sessions($user, true);
            session()->flash('message', 'یک پیامک حاوی کد احراز هویت به شماره تلفن شما ارسال شده است.');
            return true;
        }
        return false;
    }
}
