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
                            <form class="form-account" method="POST" id="frm_reset_password" action="{{ route('reset_password_store') }}">
                                @csrf

                                <div class="form-account-title">{{ __('Email') }}</div>
                                <div class="form-account-row">
                                    <label class="input-label"></label>
                                    <input class="input-field" type="email" required
                                           value="{{ old('email') }}" name="email"
                                           placeholder="{{ __('Enter your email') }}">


                                    @error('email')
                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-account-title mt-3" style="margin-bottom: 0 !important;">{{ __('Captcha') }}</div>
                                <div class="form-account-row">
                                    <label class="input-label"></label>
                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                    @error('g-recaptcha-response')
                                    <span class="text-danger text-wrap">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-account-row form-account-submit">
                                    <div class="parent-btn">
                                        <button type="submit" class="dk-btn dk-btn-info">
                                            {{ __('Send verification code') }}
                                            <i class="fa fa-sign-in"></i>
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
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
@endsection

@push('StackScript')
    @include('front.components.google_captcha_js', ['form_id' => 'frm_reset_password'])
@endpush
