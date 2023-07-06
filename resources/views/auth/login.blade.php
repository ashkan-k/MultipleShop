<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                       name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@extends('layouts.front-master')

@section('title')ورود / ثبت نام@endsection

@section('content')
    <div class="wrapper default mt-5">
        <main class="cart-page default">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 ">
                        <div class="main-content  mx-auto">
                            <div class="account-box">
                                <ul class="nav nav-tabs justify-content-center mt-3">
                                    <div class="d-flex">
                                        <li class="px-2">
                                            <a class="active show btn-radius" data-toggle="tab" href="#home">عضویت</a>
                                        </li>

                                        <li class="px-2">
                                            <a data-toggle="tab" class="btn-radius" href="#menu1">ورود</a>
                                        </li>
                                    </div>

                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane show in active ">

                                        <div class="message-light">اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به
                                            ثبت‌نام مجدد با شماره
                                            همراه ندارید
                                        </div>
                                        <div class="account-box-content">
                                            <form class="form-account" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-account-title">پست الکترونیک یا شماره موبایل</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="text"
                                                           placeholder="پست الکترونیک یا شماره موبایل خود را وارد نمایید">
                                                </div>
                                                <div class="form-account-title">کلمه عبور</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password"
                                                           placeholder="کلمه عبور خود را وارد نمایید">
                                                </div>
                                                <div class="form-account-agree">
                                                    <label class="checkbox-form checkbox-primary">
                                                        <input type="checkbox" checked="checked">
                                                        <span class="checkbox-check"></span>
                                                    </label>
                                                    <label for="agree">
                                                        <a href="#" class="btn-link-border">حریم خصوصی</a> و <a href="#"
                                                                                                                class="btn-link-border">شرایط
                                                            و قوانین</a> استفاده از سرویس های سایت
                                                        جی تی کالا را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                                                </div>
                                                <div class="form-account-row form-account-submit">
                                                    <div class="parent-btn">
                                                        <button class="dk-btn dk-btn-info">
                                                            ثبت نام در جی تی کالا
                                                            <i class="now-ui-icons users_circle-08"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="account-box-footer">
                                            <span>قبلا در جی تی کالا ثبت‌نام کرده‌اید؟</span>
                                            <a href="#" class="btn-link-border">وارد شوید</a>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">

                                        <div class="account-box-content">
                                            <form class="form-account" method="post" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-account-title">ایمیل</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="email" name="email"
                                                           placeholder="ایمیل خود را وارد نمایید">
                                                </div>
                                                <div class="form-account-title">رمز عبور
                                                    <a href="" class="btn-link-border form-account-link">رمز
                                                        عبور خود را فراموش
                                                        کرده ام</a>
                                                </div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           placeholder="رمز عبور خود را وارد نمایید">
                                                </div>
                                                <div class="form-account-row form-account-submit">
                                                    <div class="parent-btn">
                                                        <button type="submit" class="dk-btn dk-btn-info">
                                                            @if($lang == 'fa')
                                                                ورود به {!! $settings['website_title'] !!}
                                                            @else
                                                                Login to {!! $settings['website_en_title'] !!}
                                                            @endif
                                                            <i class="fa fa-sign-in"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-account-agree">
                                                    <label class="checkbox-form checkbox-primary">
                                                        <input type="checkbox" name="remember" checked="checked" id="agree">
                                                        <span class="checkbox-check"></span>
                                                    </label>
                                                    <label for="agree">مرا به خاطر داشته باش</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="account-box-footer">
                                            <span>کاربر جدید هستید؟</span>
                                            <a href="#" class="btn-link-border">ثبت‌نام در
                                                جی تی کالا</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </main>
    </div>
@endsection
