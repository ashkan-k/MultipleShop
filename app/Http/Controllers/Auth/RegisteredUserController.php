<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthHelpers;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Modules\User\Entities\User;

class RegisteredUserController extends Controller
{
    use AuthHelpers;

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'captcha' => 'required|captcha',
        ], ['captcha.required' => __('The captcha field is required.'),]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

//        $this->SendVerifyCode($user);

        Auth::login($user);

        $next_url = '/';
        if (\request('next')){
            $next_url = \request('next');
        }elseif ($user->is_staff()){
            $next_url = RouteServiceProvider::HOME;
        }

        return redirect($next_url);
    }
}
