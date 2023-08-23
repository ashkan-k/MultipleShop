@extends('layouts.admin-master')

@section('title')
    @if(isset($object))
        ویرایش دسته بندی {{ $object->title }}
    @else
        افزودن دسته بندی
    @endif
@endsection

@section('Styles')
{{--    <style>--}}
{{--        .select2-results__option--selectable {--}}
{{--            font-family: FontAwesome !important;--}}
{{--            font-style: normal !important;--}}
{{--        }--}}
{{--    </style>--}}
@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid" ng-init="init()">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        @if(isset($object))
                            ویرایش دسته بندی {{ $object->title }}
                        @else
                            افزودن دسته بندی
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
                            <a href="{{ route('categories.index') }}" class="text-muted text-hover-primary">دسته بندی
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
                              action="@if(isset($object)){{ route('categories.update' , $object->id) }}@else{{ route('categories.store') }}@endif">

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
                                        <label for="id_index"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>ترتیب نمایش</span>
                                        </label>

                                        <input type="number" id="id_index" class="form-control form-control-solid"
                                               value="@if(old('index')){{ old('index') }}@elseif(isset($object->index)){{ $object->index }}@endif"
                                               placeholder="ترتیب نمایش را وارد کنید" name="index"/>

                                        @error('index')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class=" d-flex flex-column mb-8 fv-row">
                                        <label for="id_parent_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">والد</span>
                                        </label>

                                        <select id="id_parent_id" name="parent_id"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="">بدون والد</option>
                                            @foreach($parents as $parent)

                                                <option
                                                    @if(isset($object->parent_id) && $object->parent_id == $parent->id) selected
                                                    @endif value="{{ $parent->id }}">{{ $parent->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('parent_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_is_best"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>ایا بهترین دسته بندی شود؟</span>
                                        </label>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if(isset($object) && $object->is_best) checked
                                                   @elseif(old('is_best')) checked @endif  name="is_best"
                                                   ng-model="is_best"
                                                   class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="id_is_best" value="1">
                                            <label class="form-check-label" for="id_is_best"></label>
                                        </div>

                                        @error('is_best')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_is_special"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>ایا ویژه است؟</span>
                                        </label>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if(isset($object) && $object->is_special) checked
                                                   @elseif(old('is_special')) checked @endif  name="is_special"
                                                   ng-model="is_special"
                                                   class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="id_is_special" value="1">
                                            <label class="form-check-label" for="id_is_special"></label>
                                        </div>

                                        @error('is_special')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_icon_name"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">آیکون</span>
                                        </label>

                                        <select id="id_icon_name" name="icon_name"
                                                data-kt-select2="true" ng-model="selected_icon"
                                                class="form-control form-control-solid">
                                            @foreach($icons as $icon)
                                                <option
                                                    @if((isset($object->icon_name) && $object->icon_name == $icon) || old('icon_name') == $icon) selected
                                                    @endif value="{{ $icon }}">{{ $icon }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('icon_name')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                        <p ng-show="selected_icon" class="mt-3">پیش نمایش: &nbsp;&nbsp; <i class="fa fa-[[ selected_icon ]]" style="font-size: 40px"></i></p>

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_image" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">عکس</span>
                                        </label>
                                        <input type="file" id="id_image" class="form-control form-control-solid"
                                               value="{{ old('image') }}" name="image"/>

                                        @if(isset($object) && $object->image)
                                            <label for="id_is_delete_image"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2">
                                                <span class="required">عکس حذف شود</span>
                                            </label>

                                            <div
                                                class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input name="is_delete_image"
                                                       class="form-check-input w-45px h-30px" type="checkbox"
                                                       id="id_is_delete_image" value="1">
                                                <label class="form-check-label" for="id_is_delete_image"></label>
                                            </div>
                                        @endif

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
                                                <button onclick="window.location.href='{{ route('categories.index') }}'"
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
        app.controller('myCtrl', function ($scope, $http) {
            $scope.is_english = false;
            $scope.is_special = false;
            $scope.is_best = false;
            $scope.selected_icon = @if(isset($object) && $object->icon_name) '{{ $object->icon_name }}' @else null @endif;

            $scope.init = function () {
                @if((isset($object) && $object->is_special) || old('is_special'))
                    $scope.is_special = true;
                @endif

                    @if((isset($object) && $object->is_best) || old('is_best'))
                    $scope.is_best = true;
                @endif
            }
        });
    </script>
@endsection

