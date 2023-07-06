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
                                            ثبت‌نام مجدد با ایمیل ندارید. وارد شوید
                                        </div>
                                        <div class="account-box-content">
                                            <form class="form-account" method="post" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-account-title">{{ __('Email') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="text" name="email"
                                                           required
                                                           placeholder="{{ __('Email') }} خود را وارد نمایید">
                                                </div>

                                                <div class="form-account-title">{{ __('Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           required
                                                           placeholder="{{ __('Password') }} خود را وارد نمایید">
                                                </div>

                                                <div class="form-account-title">{{ __('Confirm Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password_confirmation"
                                                           required
                                                           placeholder="{{ __('Confirm Password') }} خود را وارد نمایید">
                                                </div>

                                                <div class="form-account-agree">
                                                    <label class="checkbox-form checkbox-primary">
                                                        <input type="checkbox" required>
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
                                                        <button type="submit" class="dk-btn dk-btn-info">
                                                            @if($lang == 'fa')
                                                                ثبت نام در {!! $settings['website_title'] !!}
                                                            @else
                                                                Register in {!! $settings['website_en_title'] !!}
                                                            @endif
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
