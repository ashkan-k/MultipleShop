@extends('layouts.front-master')

@section('title') {{ __('User profile') }} @endsection

@section('content')
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content">{{ __('Edit personal information') }}</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="title-tab-content">{{ __('Personal Account') }}</h1>
                                    </div>
                                </div>
                                <form action="{{ route('user_profile_edit_submit') }}" method="post"
                                      class="form-account">
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('First Name') }}</div>
                                            <div class="form-account-row">
                                                <input name="first_name"
                                                       value="@if(old('first_name')){{ old('first_name') }}@elseif(isset($user->first_name)){{ $user->first_name }}@endif"
                                                       class="input-field text-right" type="text"
                                                       placeholder="{{ __('Enter your name') }}">
                                                @error('title')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Last Name') }}</div>
                                            <div class="form-account-row">
                                                <input name="last_name"
                                                       value="@if(old('last_name')){{ old('last_name') }}@elseif(isset($user->last_name)){{ $user->last_name }}@endif"
                                                       class="input-field text-right" type="text"
                                                       placeholder="{{ __('Enter your last name') }}">
                                                @error('last_name')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Email') }}</div>
                                            <div class="form-account-row">
                                                <input name="email" required
                                                       value="@if(old('email')){{ old('email') }}@elseif(isset($user->email)){{ $user->email }}@endif"
                                                       class="input-field" type="email"
                                                       placeholder="{{ __('Enter your email') }}">
                                                @error('email')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Phone') }}</div>
                                            <div class="form-account-row">
                                                <input name="phone"
                                                       value="@if(old('phone')){{ old('phone') }}@elseif(isset($user->phone)){{ $user->phone }}@endif"
                                                       class="input-field" type="text"
                                                       placeholder="{{ __('Enter your phone') }}">
                                                @error('phone')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Username') }}</div>
                                            <div class="form-account-row">
                                                <input name="username"
                                                       value="@if(old('username')){{ old('username') }}@elseif(isset($user->username)){{ $user->username }}@endif"
                                                       class="input-field" type="text"
                                                       placeholder="{{ __('Enter your username') }}">
                                                @error('username')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-account-title">{{ __('Address') }}</div>
                                            <div class="form-account-row">
                                                <textarea name="address" rows="10" class="input-field" required
                                                          placeholder="{{ __('Enter your address') }}">@if(old('address')){{ old('address') }}@elseif(isset($user->address)){{ $user->address }}@endif</textarea>
                                                @error('address')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Password') }}</div>
                                            <div class="form-account-row">
                                                <input name="password"
                                                       value="{{ old('password') }}"
                                                       class="input-field" type="text"
                                                       placeholder="{{ __('Enter your password') }}">
                                                @error('password')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">{{ __('Password Confirmation') }}</div>
                                            <div class="form-account-row">
                                                <input name="password_confirmation"
                                                       value="{{ old('password_confirmation') }}"
                                                       class="input-field" type="text"
                                                       placeholder="{{ __('Enter your Password Confirmation') }}">
                                                @error('password_confirmation')
                                                <span
                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-default btn-lg">{{ __('Save') }}</button>
                                        <button onclick="window.location.href = '{{ url()->previous() }}'" type="button"
                                                class="btn btn-default btn-lg">{{ __('Cancel') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @include('front.components.dashboard_sidebar')

            </div>
        </div>
    </main>
@endsection
