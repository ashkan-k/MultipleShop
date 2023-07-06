@extends('layouts.front-master')

@section('title')ورود / ثبت نام@endsection

@section('content')
    <?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

    <div class="wrapper default mt-5">
        <main class="cart-page default">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 ">
                        <div class="main-content  mx-auto">
                            <div class="account-box">
                                <ul class="nav nav-tabs justify-content-center mt-3">
                                    <div class="d-flex">
                                        <li class="px-2" ng-click="ChangePage('register')">
                                            <a class="[[ current_page == 'register' ? 'active show' : '' ]] btn-radius"
                                               data-toggle="tab" href="#register">{{ __('Register') }}</a>
                                        </li>

                                        <li class="px-2" ng-click="ChangePage('login')">
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
                                            <form class="form-account" method="post" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-account-title">{{ __('Email') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="text" name="email"
                                                           required
                                                           placeholder="{{ __('Enter your email') }}">
                                                </div>

                                                <div class="form-account-title">{{ __('Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           required
                                                           placeholder="{{ __('Enter your password') }}">
                                                </div>

                                                <div class="form-account-title">{{ __('Confirm Password') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password"
                                                           name="password_confirmation"
                                                           required
                                                           placeholder="{{ __('Enter your confirmation password') }}">
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
                                            <form class="form-account" method="post" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-account-title">{{ __('Email') }}</div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="email" name="email"
                                                           placeholder="{{ __('Enter your email') }}">
                                                </div>
                                                <div class="form-account-title">{{ __('Password') }}
                                                    <a href=""
                                                       class="btn-link-border form-account-link">{{ __('Forgot your password?') }}</a>
                                                </div>
                                                <div class="form-account-row">
                                                    <label class="input-label"></label>
                                                    <input class="input-field" type="password" name="password"
                                                           placeholder="{{ __('Enter your password') }}">
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
    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.current_page = 'register';

            $scope.ChangePage = function (new_page) {
                $scope.current_page = new_page;
            }
        });
    </script>
@endsection
