@extends('layouts.front-master')

@section('title'){{ __('Reset Password') }}@endsection

@section('content')
    <main class="cart-page default">
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
                            <form class="form-account" method="POST" action="{{ route('reset_password_confirm_store') }}">
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
