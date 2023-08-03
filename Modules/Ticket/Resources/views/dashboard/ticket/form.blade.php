@extends('layouts.admin-master')

@section('title')
    @if(isset($object))
        ویرایش تیکت {{ $object->title }}
    @else
        ثتب تیکت
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
                            ویرایش تیکت {{ $object->title }}
                        @else
                            ثتب تیکت
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
                            <a href="{{ route('tickets.index') }}" class="text-muted text-hover-primary">تیکت
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
                                      action="@if(isset($object)){{ route('tickets.update' , $object->id) }}@else{{ route('tickets.store') }}@endif">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_user_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">کاربر مربوطه</span>
                                        </label>

                                        <select id="id_user_id" name="user_id"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="" disabled>کاربر مربوطه را انتخاب کنید</option>
                                            @foreach($users as $user)

                                                <option
                                                    @if(isset($object->user_id) && $object->user_id == $user->id) selected
                                                    @endif value="{{ $user->id }}">{{ $user->full_name() }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('user_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

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
                                        <label for="id_ticket_category_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">دسته بندی</span>
                                        </label>

                                        <select id="id_ticket_category_id" name="ticket_category_id"
                                                data-kt-select2="true" required
                                                class="form-control form-control-solid">
                                            <option value="" disabled>دسته بندی را انتخاب کنید</option>
                                            @foreach($categories as $category)

                                                <option
                                                    @if(old('ticket_category_id') && $category->id == old('ticket_category_id')) selected
                                                    @endif value="{{ $category->id }}">{{ $category->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('ticket_category_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>


                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Tags-->
                                        <label for="id_text" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">متن</span>
                                        </label>
                                        <!--end::Tags-->
                                        <textarea type="text" id="id_text" class="form-control form-control-solid"
                                                  rows="8" required
                                                  placeholder="متن را وارد کنید"
                                                  name="text">@if(old('text')){{ old('text') }}@elseif(isset($object->text)){{ $object->text }}@endif</textarea>

                                        @error('text')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_file" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>فایل ضمیمه</span>
                                        </label>

                                        <input type="file" id="id_file" class="form-control form-control-solid"
                                               value="{{ old('file') }}" name="file"/>

                                        @error('file')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                        @if(isset($object) && $object->file)
                                            <div class="input-field col s12 mt-3">
                                                <p>فایل قبلی:</p>

                                                <a href="{{ $object->file }}" target="_blank"
                                                   class="btn btn-sm btn-warning">
                                                    فایل ضمیمه
                                                </a>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex" style="float: left !important;">
                                                <button onclick="window.location.href='{{ route('tickets.index') }}'"
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

