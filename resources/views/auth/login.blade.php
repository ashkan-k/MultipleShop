@extends('layouts.front-master')

@section('title')ورود / ثبت نام@endsection

@section('content')
    <?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

    <div class="wrapper default mt-5" ng-init="init()">
        <main class="cart-page default">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 ">
                        <div class="main-content  mx-auto">
                            <div class="account-box">
                                <ul class="nav nav-tabs justify-content-center mt-3">
                                    <div class="d-flex">
                                        <li id="id_register_button" class="px-2" ng-click="ChangePage('register')">
                                            <a class="[[ current_page == 'register' ? 'active show' : '' ]] btn-radius"
                                               data-toggle="tab" href="#register">{{ __('Register') }}</a>
                                        </li>

                                        <li id="id_login_button" class="px-2" ng-click="ChangePage('login')">
                                            <a data-toggle="tab"
                                               class="[[ current_page == 'login' ? 'active show' : '' ]] btn-radius"
                                               href="#login">{{ __('Login') }}</a>
                                        </li>
                                    </div>

                                </ul>

                                <div class="tab-content">
                                    <div id="register"
                                         class="tab-pane [[ current_page == 'register' ? 'show in active' : 'fade' ]]  ">

                                        <div
                                            class="message-light">{{ __('If you have already registered with email, you do not need to register again with email.') }}
                                            <a data-toggle="tab" href="#login"
                                               ng-click="ChangePage('login')">{{ __('Please Login') }}</a>
                                        </div>
                                        <div class="account-box-content">
                                            <form class="form-account" method="post"
                                                  action="{{ route('register') }}?next={{ request('next') }}">
                                                @csrf

                                                <div class="form-account-title">{{ __('Email') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="text" name="email"
                                                           required value="{{ old('email') }}"
                                                           placeholder="{{ __('Enter your email') }}">

                                                    @error('email')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-account-title">{{ __('Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           required
                                                           placeholder="{{ __('Enter your password') }}">

                                                    @error('password')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-account-title">{{ __('Confirm Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password"
                                                           name="password_confirmation"
                                                           required
                                                           placeholder="{{ __('Enter your confirmation password') }}">

                                                    @error('password_confirmation')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-account-title mt-3" style="margin-bottom: 0 !important;">{{ __('Captcha') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <div class="captcha">
                                                        <span class="captcha-image">{!! captcha_img() !!}</span>
                                                        <button type="button"
                                                                style="background-color: #ef5661 !important;"
                                                                class="btn btn-success rounded refresh_button"><i
                                                                class="fa fa-refresh"></i></button>
                                                    </div>
                                                    <input id="captcha" type="text" required
                                                           value=""
                                                           placeholder="{{ __('Enter the captcha code') }}"
                                                           class="input-field @error('captcha') is-invalid @enderror"
                                                           name="captcha">

                                                    @error('captcha')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-account-agree">
                                                    <label class="checkbox-form checkbox-primary">
                                                        <input type="checkbox" required id="terms">
                                                        <span class="checkbox-check"></span>
                                                    </label>
                                                    <label for="terms">
                                                        <a href="#"
                                                           class="btn-link-border">{{ __('Privacy') }}</a> {{ __('And') }}
                                                        <a href="#"
                                                           class="btn-link-border">{{ __('Terms and rules') }}</a>
                                                        استفاده از سرویس های سایت
                                                        {{ $website_title }} را مطالعه نموده و با کلیه موارد آن موافقم.</label>
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
                                            <span>{{ __('Already registered?') }}</span>
                                            <a data-toggle="tab" href="#login" ng-click="ChangePage('login')"
                                               class="btn-link-border">{{ __('Please Login') }}</a>
                                        </div>
                                    </div>

                                    <div id="login"
                                         class="tab-pane [[ current_page == 'login' ? 'show in active' : 'fade' ]]">

                                        <div class="account-box-content">
                                            <form class="form-account" method="post"
                                                  action="{{ route('login') }}?next={{ request('next') }}">
                                                @csrf

                                                <div class="form-account-title">{{ __('Email') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="email" name="email"
                                                           value="{{ old('email') }}"
                                                           placeholder="{{ __('Enter your email') }}">

                                                    @error('email')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-account-title">{{ __('Password') }}
                                                    <a href="{{ route('reset_password') }}"
                                                       class="btn-link-border form-account-link">{{ __('Forgot your password?') }}</a>
                                                </div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           placeholder="{{ __('Enter your password') }}">

                                                    @error('password')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-account-title mt-3" style="margin-bottom: 0 !important;">{{ __('Captcha') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <div class="captcha">
                                                        <span class="captcha-image">{!! captcha_img() !!}</span>
                                                        <button type="button"
                                                                style="background-color: #ef5661 !important;"
                                                                class="btn btn-success rounded refresh_button"><i
                                                                class="fa fa-refresh"></i></button>
                                                    </div>
                                                    <input id="captcha" type="text" required
                                                           value=""
                                                           placeholder="{{ __('Enter the captcha code') }}"
                                                           class="input-field @error('captcha') is-invalid @enderror"
                                                           name="captcha">

                                                    @error('captcha')
                                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
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
                                                        <input type="checkbox" name="remember" id="remember_me">
                                                        <span class="checkbox-check"></span>
                                                    </label>
                                                    <label for="remember_me">{{ __('Remember me') }}</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="account-box-footer">
                                            <span>{{ __('Are you a new user?') }}</span>
                                            <a data-toggle="tab" href="#login" ng-click="ChangePage('register')"
                                               class="btn-link-border">
                                                {{ __('Register In') }}  {{ $website_title }}
                                            </a>
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

@section('scripts')
    @include('front.components.captcha_js')

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.current_page = 'register';

            $scope.SaveAndGetSearchHistory = function () {
                var searchHistory = (localStorage.searchHistory) ? JSON.parse(localStorage.searchHistory) : [];

                @if(request('q'))
                searchHistory.push('{{ request('q') }}');
                searchHistory = [...new Set(searchHistory)];
                localStorage.searchHistory = JSON.stringify(searchHistory);
                @endif

                console.log(searchHistory)
                $scope.search_history = searchHistory.reverse();
            }

            $scope.init = function () {
                $scope.SaveAndGetSearchHistory();

                @if(!$errors->any() && !session()->has('message'))
                localStorage.removeItem('current_auth_page')
                @endif

                if (localStorage.getItem('current_auth_page') == 'login') {
                    $scope.ChangePage('login');
                }
            }

            $scope.ChangePage = function (new_page) {
                localStorage.setItem('current_auth_page', new_page);
                $scope.current_page = new_page;
            }
        });
    </script>
@endsection
