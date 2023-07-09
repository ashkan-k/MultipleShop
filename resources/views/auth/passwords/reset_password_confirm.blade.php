@extends('layouts.front-master')

@section('title'){{ __('Reset Password') }}@endsection

@section('content')
    <main class="cart-page default" ng-init="init()">
        <div class="container">
            <div class="row">
                <div class="main-content mt-4 col-12 col-md-7 col-lg-5 mx-auto">
                    <div class="account-box">

                        @if (session()->has('message'))
                            <div class="mt-3 mr-5 ml-5 text-success" style="margin-bottom: 0 !important;">
                                <span>{{ session('message') }}</span>
                            </div>
                        @endif

                        <div class="account-box-title">{{ __('Reset Password') }}</div>
                        <div class="account-box-content">
                            <form class="form-account" method="POST"
                                  action="{{ route('reset_password_confirm_store') }}">
                                @csrf

                                <div class="form-account-title">{{ __('6-digit verification code') }}</div>
                                <div class="form-account-row">
                                    <label class="input-label"></label>
                                    <input class="input-field" type="number" required
                                           value="{{ old('code') }}" name="code"
                                           placeholder="{{ __('Enter your verification code') }}">


                                    @error('code')
                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-account-row form-account-submit">
                                    <div class="parent-btn">
                                        <button type="submit" class="dk-btn dk-btn-info">
                                            {{ __('Confirm') }}
                                            <i class="fa fa-sign-in"></i>
                                        </button>

                                        <button ng-style="counter > 0 && {'cursor': 'not-allowed'}" ng-click="SendNewCode()" ng-disabled="counter > 0 || is_submited" type="submit" class="dk-btn dk-btn-info">
                                            <span ng-show="counter > 0">
                                                @if($lang == 'fa')
                                                    دریافت مجدد کد تایید ([[counter]] ثانیه)
                                                @else
                                                    Receive confirmation code again ([[counter]] seconds)
                                                @endif
                                            </span>
                                            <span ng-show="counter <= 0">{{ __('Resend') }}</span>
                                            <i class="now-ui-icons arrows-1_refresh-69"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('scripts')

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.email = null;
            $scope.email = null;
            $scope.is_submited = false;

            @include('auth.auth_js')

            $scope.init = function () {
                $scope.email = '{{ session('user_email') }}';
                countDown();
            }

            $scope.SendNewCode = function () {
                if ($scope.counter > 0) {
                    return;
                }

                $scope.is_submited = true;

                var url = '{{ route('send_verify_code') }}';
                var data = {'email': $scope.email};

                $http.post(url, data).then(res => {
                    $scope.is_submited = false
                    showToast(res.data['data'], 'success');
                    $scope.counter = 0;
                    countDown();
                }).catch(err => {
                    $scope.is_submited = false
                    if (err['data']['errors'] && err['data']['errors']['code'] && err['data']['errors']['code'][0]) {
                        showToast(err['data']['errors']['code'][0], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد. لطفا دوباره امتحان کنید.', 'error');
                });
            }
        });
    </script>

@endsection
