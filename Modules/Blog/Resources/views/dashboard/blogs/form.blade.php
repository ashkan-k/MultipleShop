@extends('layouts.admin-master')

@section('title')
    @if(isset($object))
        ویرایش مقاله {{ $object->title }}
    @else
        افزودن مقاله
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
                            ویرایش مقاله {{ $object->title }}
                        @else
                            افزودن مقاله
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
                            <a href="{{ route('blogs.index') }}" class="text-muted text-hover-primary">مقاله
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
                        <!--begin:::Tabs-->
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5 active"
                                   data-bs-toggle="tab" href="#kt_ecommerce_settings_general">فارسی</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-active-primary d-flex align-items-center pb-5"
                                   data-bs-toggle="tab" href="#kt_ecommerce_settings_store">انگلیسی</a>
                            </li>
                        </ul>

                        <form role="form" enctype="multipart/form-data"
                              method="post"
                              action="@if(isset($object)){{ route('blogs.update' , $object->id) }}@else{{ route('blogs.store') }}@endif">

                            @csrf
                            @if(isset($object))
                                @method('PATCH')
                            @endif

                            <div class="tab-content" id="myTabContent">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general"
                                     role="tabpanel">

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_title"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نام</span>
                                        </label>

                                        <input type="text" id="id_title" class="form-control form-control-solid"
                                               value="@if(old('title')){{ old('title') }}@elseif(isset($object->title)){{ $object->title }}@endif"
                                               placeholder="نام را وارد کنید" name="title"/>

                                        @error('title')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_slug"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>نامک</span>
                                        </label>

                                        <input type="text" id="id_slug" class="form-control form-control-solid"
                                               value="@if(old('slug')){{ old('slug') }}@elseif(isset($object->slug)){{ $object->slug }}@endif"
                                               placeholder="نامک را وارد کنید" name="slug"/>

                                        @error('slug')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_text"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">متن</span>
                                        </label>

                                        <textarea type="text" id="id_text" class="form-control form-control-solid"
                                                  placeholder="متن را وارد کنید" name="text" rows="18"
                                                  required>@if(old('text')){{ old('text') }}@elseif(isset($object->text)){{ $object->text }}@endif</textarea>

                                        @error('text')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_category_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">دسته بندی</span>
                                        </label>

                                        <select id="id_category_id" name="category_id"
                                                data-kt-select2="true" required
                                                class="form-control form-control-solid">
                                            <option value="" disabled>دسته بندی را انتخاب کنید</option>
                                            @foreach($categories as $category)

                                                <option
                                                    @if(isset($object->category_id) && $object->category_id == $category->id) selected
                                                    @endif value="{{ $category->id }}">{{ $category->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('category_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_status"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">وضعیت</span>
                                        </label>

                                        <select id="id_status" name="status"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="" disabled>وضعیت را انتخاب کنید</option>


                                            <option
                                                @if((isset($object->status) && $object->status == 'draft') || old('status') == 'draft') selected
                                                @endif value="draft">پیش نویس
                                            </option>
                                            <option
                                                @if((isset($object->status) && $object->status == 'publish') || old('status') == 'publish') selected
                                                @endif value="publish">انتشار
                                            </option>
                                            <option
                                                @if((isset($object->status) && $object->status == 'done') || old('status') == 'done') selected
                                                @endif value="done">بسته
                                            </option>
                                        </select>

                                        @error('status')
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

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_schema_type"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نوع مقاله (schema)</span>
                                        </label>

                                        <select id="id_schema_type" name="schema_type"
                                                data-kt-select2="true" required
                                                class="form-control form-control-solid">

                                            @foreach(\Modules\Blog\Entities\Blog::$SCHEMA_TYPES as $key => $schema_type)

                                                <option
                                                    @if(isset($object->schema_type) && $object->schema_type == $key) selected
                                                    @endif value="{{ $key }}">{{ $schema_type }}
                                                </option>

                                            @endforeach

                                        </select>

                                        @error('schema_type')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex" style="float: left !important;">
                                                <button onclick="window.location.href='{{ route('blogs.index') }}'"
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

                                </div>

                                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_en_title"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">نام انگلیسی</span>
                                        </label>

                                        <input type="text" id="id_en_title" class="form-control form-control-solid"
                                               value="@if(old('en_title')){{ old('en_title') }}@elseif(isset($object->en_title)){{ $object->en_title }}@endif"
                                               placeholder="نام انگلیسی را وارد کنید" name="en_title"/>

                                        @error('en_title')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_en_slug"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>نامک انگلیسی</span>
                                        </label>

                                        <input type="text" id="id_en_slug" class="form-control form-control-solid"
                                               value="@if(old('en_slug')){{ old('en_slug') }}@elseif(isset($object->en_slug)){{ $object->en_slug }}@endif"
                                               placeholder="نامک انگلیسی را وارد کنید" name="en_slug"/>

                                        @error('en_slug')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_en_text"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">متن انگلیسی</span>
                                        </label>

                                        <textarea type="en_text" id="id_en_text" class="form-control form-control-solid"
                                                  placeholder="متن انگلیسی را وارد کنید" name="en_text" rows="18"
                                                  required>@if(old('en_text')){{ old('en_text') }}@elseif(isset($object->en_text)){{ $object->en_text }}@endif</textarea>

                                        @error('en_text')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                </div>

                            </div>

                        </form>
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
    <script>
        CKEDITOR.replace('id_text', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });

        CKEDITOR.replace('id_en_text', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.is_english = false;
        });
    </script>
@endsection

