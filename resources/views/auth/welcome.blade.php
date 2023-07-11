@extends('layouts.front-master')

@section('title'){{ __('Welcome') }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('styles')
    <style>
        @media screen and (max-width: 1077px) {
            .ddddd {
                margin-top: 100px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="wrapper default mt-5">
        <div class="container">
            <div class="row ddddd">
                <div class="main-content col-12 col-md-7 col-lg-5 mx-auto">
                    <div class="account-box text-center">

                        @if($lang == 'fa')
                            <div class="account-box-title text-center">به {{ $website_title }} خوش آمدید</div>
                        @else
                            <div class="account-box-title text-center">Welcome to {{ $website_title }}</div>
                        @endif
                        <div class="account-box-content">
                            <div class="account-box-message">
                                <i class="account-box-message-icon now-ui-icons users_single-02"></i>
                                <h3>{{ __('Your account has been successfully created') }}</h3>
                                <p>{{ __('Now you can return to the page you were on or access all the facilities and services of the website and related services by completing your user account information.') }}</p>
                                <ul class="account-box-message-links">
                                    <li>
                                        <div class="parent-btn">
                                            <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
                                               class="dk-btn dk-btn-info">
                                                {{ __('Completing the user account') }}
                                                <i class="now-ui-icons users_single-02"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li><a href="{{ $next_url }}"
                                           class="btn-link-border">{{ __('Return to the page you were on') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
