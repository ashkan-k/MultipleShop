@extends('layouts.admin-master')
@section('title','پروفایل')
@section('Styles')

@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        ویرایش مشخصات پروفایل</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">خانه</a>
                        </li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('profile') }}" class="text-muted text-hover-primary">پروفایل کاربری</a>
                        </li>
                        <!--end::آیتم-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->


        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::کارت-->
                <div class="card card-flush">
                    <!--begin::کارت body-->
                    <div class="card-body">
                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                                <!--begin::Form-->
                                <form role="form" enctype="multipart/form-data"
                                      method="post"
                                      action="{{ route('profile_store') }}">

                                    @csrf

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_first_name"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نام</span>
                                        </label>

                                        <input type="text" id="id_first_name" class="form-control form-control-solid"
                                               value="@if(old('first_name')){{ old('first_name') }}@elseif(isset($user->first_name)){{ $user->first_name }}@endif"
                                               placeholder="نام را وارد کنید" name="first_name" required/>

                                        @error('first_name')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_last_name"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نام خانوادگی</span>
                                        </label>

                                        <input type="text" id="id_last_name" class="form-control form-control-solid"
                                               value="@if(old('last_name')){{ old('last_name') }}@elseif(isset($user->last_name)){{ $user->last_name }}@endif"
                                               placeholder="نام خانوادگی را وارد کنید" name="last_name" required/>

                                        @error('last_name')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_email" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">ایمیل</span>
                                        </label>

                                        <input type="text" id="id_email" class="form-control form-control-solid"
                                               value="@if(old('email')){{ old('email') }}@elseif(isset($user->email)){{ $user->email }}@endif"
                                               placeholder="ایمیل را وارد کنید" name="email" required/>

                                        @error('email')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_username"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نام کاربری</span>
                                        </label>

                                        <input type="text" id="id_username" class="form-control form-control-solid"
                                               value="@if(old('username')){{ old('username') }}@elseif(isset($user->username)){{ $user->username }}@endif"
                                               placeholder="نام کاربری را وارد کنید" name="username" required/>

                                        @error('username')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_phone" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">شماره موبایل</span>
                                        </label>

                                        <input type="text" id="id_phone" class="form-control form-control-solid"
                                               value="@if(old('phone')){{ old('phone') }}@elseif(isset($user->phone)){{ $user->phone }}@endif"
                                               placeholder="شماره موبایل را وارد کنید" name="phone" required/>

                                        @error('phone')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_password"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span @if(!isset($user)) class="required" @endif>رمز عبور</span>
                                        </label>

                                        <input type="text" id="id_password" class="form-control form-control-solid"
                                               @if(!isset($user)) required @endif
                                               value="{{ old('password') }}"
                                               placeholder="رمز عبور را وارد کنید" name="password"/>

                                        @error('password')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_password_confirmation"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span @if(!isset($user)) class="required" @endif>تکرار رمز عبور</span>
                                        </label>

                                        <input type="text" id="id_password_confirmation"
                                               class="form-control form-control-solid"
                                               @if(!isset($user)) required @endif
                                               value="{{ old('password_confirmation') }}"
                                               placeholder="تکرار رمز عبور را وارد کنید" name="password_confirmation"/>

                                        @error('password_confirmation')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Tags-->
                                        <label for="id_address" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">آدرس</span>
                                        </label>
                                        <!--end::Tags-->
                                        <textarea type="text" id="id_address" class="form-control form-control-solid"
                                                  rows="8" required
                                                  placeholder="آدرس را وارد کنید"
                                                  name="address">@if(old('address')){{ old('address') }}@elseif(isset($user->address)){{ $user->address }}@endif</textarea>

                                        @error('address')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_avatar" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>آواتار</span>
                                        </label>

                                        <input type="file" id="id_avatar" class="form-control form-control-solid"
                                               value="{{ old('avatar') }}" name="avatar"/>

                                        @error('avatar')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                        @if(isset($user) && $user->avatar)
                                            <div class="input-field col s12 mt-3">
                                                <p>تصویر قبلی:</p>
                                                <a href="{{ $user->avatar }}" target="_blank"><img
                                                        src="{{ $user->avatar }}"
                                                        width="70"
                                                        alt="{{ $user->full_name() }}"></a>
                                            </div>
                                        @endif

                                    </div>

                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex" style="float: left !important;">
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">ذخیره</span>
                                                    <span class="indicator-progress">لطفا صبر کنید...
																		<span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::کارت body-->
                </div>
                <!--end::کارت-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
@endsection

@section('Scripts')
@endsection

