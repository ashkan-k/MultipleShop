@extends('layouts.admin-master')

@section('title')
    @if(isset($object))
        ویرایش اسلایدر {{ $object->title }}
    @else
        افزودن اسلایدر
    @endif
@endsection

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
                        @if(isset($object))
                            ویرایش اسلایدر {{ $object->title }}
                        @else
                            افزودن اسلایدر
                        @endif
                    </h1>
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
                            <a href="{{ route('sliders.index') }}" class="text-muted text-hover-primary">اسلایدر
                                ها</a>
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
                                      action="@if(isset($object)){{ route('sliders.update' , $object->id) }}@else{{ route('sliders.store') }}@endif">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_title"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">عنوان</span>
                                        </label>

                                        <input type="text" id="id_title" class="form-control form-control-solid"
                                               value="@if(old('title')){{ old('title') }}@elseif(isset($object->title)){{ $object->title }}@endif"
                                               placeholder="عنوان را وارد کنید" name="title" required/>

                                        @error('title')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_url"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">لینک</span>
                                        </label>

                                        <input type="url" id="id_url" class="form-control form-control-solid"
                                               value="@if(old('url')){{ old('url') }}@elseif(isset($object->url)){{ $object->url }}@endif"
                                               placeholder="لینک را وارد کنید" name="url" required/>

                                        @error('url')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_url"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">الویت</span>
                                        </label>

                                        <input type="number" id="id_priority" class="form-control form-control-solid"
                                               value="@if(old('priority')){{ old('priority') }}@elseif(isset($object->priority)){{ $object->priority }}@else 1 @endif"
                                               placeholder="الویت را وارد کنید" name="priority" required/>

                                        @error('priority')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_image" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">عکس</span>
                                        </label>

                                        <input type="file" id="id_image" class="form-control form-control-solid"
                                               value="{{ old('image') }}" name="image"/>

                                        @error('image')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                        @if(isset($object) && $object->image)
                                            <div class="input-field col s12 mt-3">
                                                <p>تصویر قبلی:</p>
                                                <a href="{{ $object->image }}" target="_blank"><img
                                                        src="{{ $object->image }}"
                                                        width="70"
                                                        alt="{{ $object->title }}"></a>
                                            </div>
                                        @endif

                                    </div>

                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex" style="float: left !important;">
                                                <button onclick="window.location.href='{{ route('sliders.index') }}'"
                                                        type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">انصراف
                                                </button>
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

