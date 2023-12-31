@extends('layouts.admin-master')

@section('title')
    @if(isset($object))
        ویرایش محصول {{ $object->title }}
    @else
        افزودن محصول
    @endif
@endsection

@section('Styles')
    <style>
        .disabled-table {
            cursor: not-allowed;
        }
    </style>

    <style>
        .select2-results__option {
            padding-right: 30px !important;
        }
    </style>
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
                            ویرایش محصول {{ $object->title }}
                        @else
                            افزودن محصول
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
                            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">محصول
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
                              action="@if(isset($object)){{ route('products.update' , $object->id) }}@else{{ route('products.store') }}@endif">

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
                                        <label for="id_price"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">قیمت (تومان)</span>
                                        </label>

                                        <input type="number" id="id_price" class="form-control form-control-solid"
                                               value="@if(old('price')){{ old('price') }}@elseif(isset($object->price)){{ $object->price }}@endif"
                                               placeholder="قیمت را وارد کنید" name="price" required/>

                                        @error('price')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_quantity"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">تعداد موجودی</span>
                                        </label>

                                        <input type="number" id="id_quantity" class="form-control form-control-solid"
                                               value="@if(old('quantity')){{ old('quantity') }}@elseif(isset($object->quantity)){{ $object->quantity }}@endif"
                                               placeholder="تعداد موجودی را وارد کنید" name="quantity" required/>

                                        @error('quantity')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_description"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">توضیحات</span>
                                        </label>

                                        <textarea type="text" id="id_description"
                                                  class="form-control form-control-solid"
                                                  placeholder="توضیحات را وارد کنید" name="description" rows="18"
                                                  required>@if(old('description')){{ old('description') }}@elseif(isset($object->description)){{ $object->description }}@endif</textarea>

                                        @error('description')
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
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="" disabled>دسته بندی را انتخاب کنید</option>

                                            @foreach($categories as $category)
                                                <option
                                                    @if(isset($object->category_id) && $object->category_id == $category->id) selected
                                                    @endif value="{{ $category->id }}">{{ $category->title }}
                                                </option>
                                                @if(count($category->children))
                                                    @foreach($category->children()->orderBy('title')->get() as $child)
                                                        <option
                                                            @if(isset($object->category_id) && $object->category_id == $child->id) selected
                                                            @endif value="{{ $child->id }}">- {{ $child->title }}
                                                        </option>

                                                        @if(count($child->children))
                                                            @foreach($child->children()->orderBy('title')->get() as $child_2)
                                                                <option
                                                                    @if(isset($object->category_id) && $object->category_id == $child_2->id) selected
                                                                    @endif value="{{ $child_2->id }}">
                                                                    -- {{ $child_2->title }}
                                                                </option>

                                                                @if(count($child_2->children))
                                                                    @foreach($child_2->children()->orderBy('title')->get() as $child_3)
                                                                        <option
                                                                            @if(isset($object->category_id) && $object->category_id == $child_3->id) selected
                                                                            @endif value="{{ $child_3->id }}">
                                                                            --- {{ $child_3->title }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif

                                                            @endforeach
                                                        @endif

                                                    @endforeach
                                                @endif
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
                                        <label for="id_user_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">مالک</span>
                                        </label>

                                        <select id="id_user_id" name="user_id"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="" disabled>مالک را انتخاب کنید</option>
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
                                        <label for="id_discount_price"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>قیمت تخفیفی (تومان)</span>
                                        </label>

                                        <input type="number" id="id_discount_price"
                                               class="form-control form-control-solid"
                                               value="@if(old('discount_price')){{ old('discount_price') }}@elseif(isset($object->discount_price)){{ $object->discount_price }}@endif"
                                               placeholder="قیمت تخفیفی را وارد کنید" name="discount_price"/>

                                        @error('discount_price')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_discount_start_date"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>تاریخ شروع تخفیف</span>
                                        </label>

                                        <input type="text" id="id_discount_start_date"
                                               class="form-control form-control-solid"
                                               value="@if(old('discount_start_date')){{ old('discount_start_date') }}@elseif(isset($object->discount_start_date)){{ $object->discount_start_date }}@endif"
                                               placeholder="تاریخ شروع تخفیف را وارد کنید" name="discount_start_date"/>

                                        @error('discount_start_date')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_discount_end_date"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>تاریخ پایان تخفیف</span>
                                        </label>

                                        <input type="text" id="id_discount_end_date"
                                               class="form-control form-control-solid"
                                               value="@if(old('discount_end_date')){{ old('discount_end_date') }}@elseif(isset($object->discount_end_date)){{ $object->discount_end_date }}@endif"
                                               placeholder="تاریخ پایان تخفیف را وارد کنید" name="discount_end_date"/>

                                        @error('discount_end_date')
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
                                            <span>آیا ویژه است؟</span>
                                        </label>
                                        <p>نمایش محصول در قسمت محصولات ویژه پایین اسلایدر</p>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if(isset($object) && $object->is_special) checked
                                                   @elseif(old('is_special')) checked @endif  name="is_special"
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
                                        <label for="id_is_active"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>وضعیت فعال</span>

                                        </label>
                                        <p>فعال / غیرفعال کردن وضعیت نمایش محصول در سایت</p>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if(isset($object) && $object->is_active) checked
                                                   @elseif(old('is_active')) checked @endif  name="is_active"
                                                   class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="id_is_active" value="1">
                                            <label class="form-check-label" for="id_is_active"></label>
                                        </div>

                                        @error('is_active')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_is_virtual"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>آیا محصول مجازی است؟</span>

                                        </label>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if(isset($object) && $object->is_virtual) checked
                                                   @elseif(old('is_virtual')) checked @endif  name="is_virtual"
                                                   class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="id_is_virtual" value="1">
                                            <label class="form-check-label" for="id_is_virtual"></label>
                                        </div>

                                        @error('is_virtual')
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
                                                <button onclick="window.location.href='{{ route('products.index') }}'"
                                                        type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">انصراف
                                                </button>
                                                @if(isset($object->id))
                                                    <button
                                                        onclick="window.location.href='{{ route('products.duplicate', $object->id) }}'"
                                                        type="button" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-primary me-3">کپی
                                                    </button>
                                                @endif
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
                                        <label for="id_en_description"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>توضیحات انگلیسی</span>
                                        </label>

                                        <textarea type="text" id="id_en_description"
                                                  class="form-control form-control-solid"
                                                  placeholder="توضیحات انگلیسی را وارد کنید" name="en_description"
                                                  rows="18"
                                                  required>@if(old('en_description')){{ old('en_description') }}@elseif(isset($object->en_description)){{ $object->en_description }}@endif</textarea>

                                        @error('en_description')
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

    @if(isset($object))
        <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::کارت-->
                    <div class="card">
                        <!--begin::کارت header-->
                        <div class="card-header border-0 pt-6">
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                    <button type="button" ng-click="AddEditFeatureModal()"
                                            class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_add_user">
                                        <i class="ki-duotone ki-plus fs-2"></i>افزودن ویژگی جدید به
                                        محصول {{ $object->title }}
                                    </button>
                                    <!--end::Add user-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::کارت toolbar-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table
                                {{--                                ng-class="{ 'disabled-table': is_submited }" --}}
                                class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_items">
                                <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th>شناسه</th>
                                    <th>ویژگی</th>
                                    <th>مقدار</th>
                                    <th>جایگاه</th>
                                    <th>قیمت</th>
                                    <th>قیمت تخفیفی</th>
                                    <th>تاریخ شروع تخفیف</th>
                                    <th>تاریخ پایان تخفیف</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">

                                <tr ng-repeat="(key, item) in feature_items">
                                    <td>[[ key + 1 ]]</td>

                                    <td>[[ item['feature']['title'] ]]</td>

                                    <td>

                                        <span ng-show="item['feature']['filter_type'] != 'text'">
                                             <div class="container">
                                                  <div class="row">

                                                   <div class="col-6" id="id_feature_items_list_[[ item.id ]]"
                                                        data-all-feature-items-list="[[ item['value'] ]]">
                                                           <label ng-show="item['feature']['filter_type'] != 'text'"
                                                                  ng-repeat="(key2, item2) in item['feature']['filter_items'].split('،')"
                                                                  class="form-check form-check-custom form-check-solid mt-1">
                                                                <input class="form-check-input feature_item"
                                                                       {{--                                                                       ng-class="{ 'disabled-table': is_submited }" ng-disabled="is_submited"--}}
                                                                       ng-checked="CheckSelectedFeatureExistInFeatureItems(item['value'], item2)"
                                                                       id="id_feature_item_[[ item.id ]]_[[ key2 ]]"
                                                                       onchange="itemChanged(this)"
                                                                       data-list-index="[[ key2 ]]"
                                                                       data-product-feature-id="[[ item.id ]]"
                                                                       type="checkbox"
                                                                       value="[[ item2 ]]">
                                                                <span class="fw-semibold ps-2 fs-6"> [[ item2 ]]</span>
                                                            </label>
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>

                                        <span ng-show="item['feature']['filter_type'] == 'text'">
                                             <div class="container">
                                                  <div class="row">

                                                     <div class="col-8">
                                                         <span class="fw-semibold ps-2 fs-6">مقدار:</span>
                                                        <input value="[[ item.value ]]" type="text"
                                                               {{--                                                               ng-class="{ 'disabled-table': is_submited }" ng-disabled="is_submited"--}}
                                                               id="id_feature_item_[[ item.id ]]_[[ key2 ]]"
                                                               data-product-feature-id="[[ item.id ]]"
                                                               onblur="itemTextTypeChanged(this)"
                                                               class="form-control form-control-solid">
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>

                                    </td>

                                    <td>
                                        {{--                                        [[ item['get_place'] ]]--}}
                                        <span>
                                             <div class="container">
                                                  <div class="row">

                                                    <div class="col-6">
                                                         <span class="fw-semibold ps-2 fs-6">جایگاه:</span>
                                                       <select ng-model="item.place"
                                                               {{--                                                               ng-class="{ 'disabled-table': is_submited }" ng-disabled="is_submited"--}}
                                                               ng-change="ChangeFeatureItemPlace(item.id, item.place, item.value)"
                                                               id="id_place" name="contents"
                                                               class="form-control">
                                                            <option value="" disabled>جایگاه را انتخاب کنید</option>
                                                            <option value="up">بالا</option>
                                                            <option value="down">پایین</option>
                                                            <option value="both">هر دو</option>
                                                        </select>
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>
                                    </td>

                                    <td>
                                         <span>
                                             <div class="container">
                                                  <div class="row">

                                                     <div class="col-8">
                                                         <span class="fw-semibold ps-2 fs-6">قیمت:</span>
                                                        <input value="[[ item.price ]]" type="number"
                                                               id="id_item_price_[[ item.id ]]_[[ key2 ]]"
                                                               data-product-feature-id="[[ item.id ]]"
                                                               onblur="ItemPriceRelatedFieldsChanged(this)"
                                                               name="price"
                                                               class="form-control form-control-solid">
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>
                                    </td>

                                    <td>
                                         <span>
                                             <div class="container">
                                                  <div class="row">

                                                     <div class="col-8">
                                                         <span class="fw-semibold ps-2 fs-6">قیمت تخفیفی:</span>
                                                        <input value="[[ item.discount_price ]]" type="number"
                                                               id="id_item_discount_price_[[ item.id ]]_[[ key2 ]]"
                                                               data-product-feature-id="[[ item.id ]]"
                                                               onblur="ItemPriceRelatedFieldsChanged(this)"
                                                               name="discount_price"
                                                               class="form-control form-control-solid">
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>
                                    </td>

                                    <td>
                                         <span>
                                             <div class="container">
                                                  <div class="row">

                                                     <div class="col-10">
                                                         <span class="fw-semibold ps-2 fs-6">تاریخ شروع تخفیف:</span>
                                                        <input value="[[ item.discount_start_date ]]" type="text"
                                                               id="id_item_discount_start_date_[[ item.id ]]_[[ key2 ]]"
                                                               data-product-feature-id="[[ item.id ]]"
                                                               onblur="ItemPriceRelatedFieldsChanged(this)"
                                                               name="discount_start_date"
                                                               class="form-control form-control-solid discount_start_date_picker">
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>
                                    </td>

                                    <td>
                                         <span>
                                             <div class="container">
                                                  <div class="row">

                                                     <div class="col-10">
                                                         <span class="fw-semibold ps-2 fs-6">تاریخ پایان تخفیف:</span>
                                                        <input value="[[ item.discount_end_date ]]" type="text"
                                                               id="id_item_discount_end_date_[[ item.id ]]_[[ key2 ]]"
                                                               data-product-feature-id="[[ item.id ]]"
                                                               onblur="ItemPriceRelatedFieldsChanged(this)"
                                                               name="discount_end_date"
                                                               class="form-control form-control-solid discount_end_date_picker">
                                                    </div>

                                                  </div>
                                                </div>
                                       </span>
                                    </td>

                                    <td class="">
                                        {{--                                        <a ng-click="AddEditFeatureModal(item)"--}}
                                        {{--                                           class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">--}}
                                        {{--                                            ویرایش--}}
                                        {{--                                        </a>--}}

                                        <a ng-click="RemoveFeature(item.id)"
                                           class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">
                                            حذف
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->


            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::کارت-->
                    <div class="card">
                        <!--begin::کارت header-->
                        <div class="card-header border-0 pt-6">
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                    <button type="button" ng-click="AddEditGalleryModal()"
                                            class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_add_user">
                                        <i class="ki-duotone ki-plus fs-2"></i>افزودن تصویر جدید به
                                        محصول {{ $object->title }}
                                    </button>
                                    <!--end::Add user-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::کارت toolbar-->
                        </div>
                        <!--end::کارت header-->
                        <!--begin::کارت body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_items">
                                <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th>محصول</th>
                                    <th>عکس</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">

                                <tr ng-repeat="item in gallery_items">
                                    <td>[[ item.product.title ]]</td>

                                    <td>
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="[[ item.image ]]" target="_blank">
                                                <div class="symbol-label">
                                                    <img src="[[ item.image ]]" alt="[[ item.title ]]"
                                                         class="w-100">
                                                </div>
                                            </a>
                                        </div>
                                    </td>

                                    <td class="">
                                        <a ng-click="removeGallery([[item.id]])"
                                           class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">حذف</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::کارت body-->
                    </div>
                    <!--end::کارت-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        @endif
    </div>

    @if(isset($object))
        <div class="modal fade" id="addEditFeatureModal" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                        <form id="addEditFeatureModal_form" class="form" action="#">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">الحاق ویژگی به محصول ({{ $object->title }})</h1>
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_feature_id" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">ویژگی</span>
                                </label>

                                <select ng-model="feature_id" id="id_feature_id" name="contents"
                                        {{--                                        data-kt-select2="true"--}}
                                        ng-options="item.id as item.title for item in features"
                                        class="form-control">
                                </select>

                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_value" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">مقدار</span>
                                </label>

                                <select ng-model="obj.value" id="id_value" name="contents" multiple
                                        ng-if="feature['filter_type'] == 'checkbox' || feature['filter_type'] == 'radio'"
                                        ng-options="item as item for item in filter_items"
                                        class="form-control">
                                    {{--                                    <option value="" disabled>مقدار را انتخاب کنید</option>--}}
                                    <option value="">هیچ</option>
                                </select>

                                <textarea ng-model="obj.value" id="id_value" name="value"
                                          ng-if="!feature['filter_type'] || feature['filter_type'] == 'text'"
                                          class="form-control" rows="4"></textarea>
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_place" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">جایگاه</span>
                                </label>

                                <select ng-model="obj.place" id="id_place" name="contents"
                                        class="form-control">
                                    <option value="" disabled>جایگاه را انتخاب کنید</option>
                                    <option value="up">بالا</option>
                                    <option value="down">پایین</option>
                                    <option value="both">هر دو</option>
                                </select>
                            </div>



                        <div ng-show="feature.is_use_cart">
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_feature_price" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">قیمت</span>
                                </label>

                                <input type="number" ng-model="obj.price" id="id_feature_price" name="price"
                                       class="form-control">
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_feature_discount_price"
                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>قیمت تخفیفی</span>
                                </label>

                                <input type="number" ng-model="obj.discount_price" id="id_feature_discount_price"
                                       name="discount_price" class="form-control">
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_feature_discount_start_date"
                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>تاریخ شروع تخفیف</span>
                                </label>

                                <input type="text" ng-model="obj.discount_start_date"
                                       id="id_feature_discount_start_date" name="discount_start_date"
                                       class="form-control">
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_feature_discount_end_date"
                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span>تاریخ پایان تخفیف</span>
                                </label>

                                <input type="text" ng-model="obj.discount_end_date" id="id_feature_discount_end_date"
                                       name="discount_end_date" class="form-control">
                            </div>
                        </div>





                            <div class="text-center">
                                <button ng-disabled="is_submited" onclick="$('#addEditFeatureModal').modal('hide');"
                                        type="reset" id="addEditFeatureModal_cancel" class="btn btn-light me-3">انصراف
                                </button>
                                <button type="button" ng-click="SubmitAddEditFeature()" ng-disabled="is_submited"
                                        class="btn btn-primary">
                                    <span class="indicator-label">ثبت</span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>

        <div class="modal fade" id="addEditGalleyModal" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                        <form id="addEditGalleyModal_form" class="form" action="#">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">الحاق تصویر به محصول ({{ $object->title }})</h1>
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Tags-->
                                <label for="id_gallery_image" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">تصویر</span>
                                </label>

                                <input type="file" id="id_gallery_image" accept="image/*" multiple class="form-control">
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="meta_title" data-validator="notEmpty">
                                        <h5 class="text-danger">امکان آپلود چند تصویر به صورت همزمان وجود دارد.</h5>
                                    </div>
                                </div>

                                <div ng-if="obj.image" class="input-field col s12 mt-3">
                                    <p>تصویر قبلی:</p>
                                    <a href="[[ obj.image]]" target="_blank"><img
                                            src="[[ obj.image]]"
                                            width="70"
                                            alt="[[ obj.title ]]"></a>
                                </div>

                            </div>

                            <div class="text-center">
                                <button ng-disabled="is_submited" onclick="$('#addEditGalleyModal').modal('hide');"
                                        type="reset" id="addEditGalleyModal_cancel" class="btn btn-light me-3">انصراف
                                </button>
                                <button type="button" ng-click="SubmitAddEditGallery()" ng-disabled="is_submited"
                                        class="btn btn-primary">
                                    <span class="indicator-label">آپلود</span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    @endif
@endsection

@section('Scripts')
    <script>
        CKEDITOR.replace('id_description', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });

        CKEDITOR.replace('id_en_description', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#id_discount_start_date').val(toEnglishDigits($('#id_discount_start_date').val()))
            $('#id_discount_end_date').val(toEnglishDigits($('#id_discount_end_date').val()))

        });
        $('#id_discount_start_date').persianDatepicker({
            theme: 'dark',
            format: 'YYYY-MM-DD',
            // initialValueType: 'persian',
            timePicker: {
                enabled: false
            },
            autoClose: true,
            calendar: {
                persian: {
                    locale: 'fa'
                }
            },
            onSelect: function () {
                $('#id_discount_start_date').val($('#id_discount_start_date').val().replaceAll('/', '-'))
            },
        });
        $("#id_discount_start_date").attr('autocomplete', 'off');


        //////////////

        $('#id_discount_end_date').persianDatepicker({
            theme: 'dark',
            format: 'YYYY-MM-DD',
            initialValueType: 'persian',
            timePicker: {
                enabled: false
            },
            autoClose: true,
            calendar: {
                persian: {
                    locale: 'fa'
                }
            },
            onSelect: function () {
                $('#id_discount_end_date').val($('#id_discount_end_date').val().replaceAll('/', '-'))
            },
        });
        $("#id_discount_end_date").attr('autocomplete', 'off');

        //////////////

        $('#id_feature_discount_start_date').persianDatepicker({
            theme: 'dark',
            format: 'YYYY-MM-DD',
            initialValueType: 'persian',
            timePicker: {
                enabled: false
            },
            autoClose: true,
            calendar: {
                persian: {
                    locale: 'fa'
                }
            },
            onSelect: function () {
                $('#id_feature_discount_start_date').val($('#id_feature_discount_start_date').val().replaceAll('/', '-'))
            },
        });
        $("#id_feature_discount_start_date").attr('autocomplete', 'off');

        //////////////

        $('#id_feature_discount_end_date').persianDatepicker({
            theme: 'dark',
            format: 'YYYY-MM-DD',
            initialValueType: 'persian',
            timePicker: {
                enabled: false
            },
            autoClose: true,
            calendar: {
                persian: {
                    locale: 'fa'
                }
            },
            onSelect: function () {
                $('#id_feature_discount_end_date').val($('#id_feature_discount_end_date').val().replaceAll('/', '-'))
            },
        });
        $("#id_feature_discount_end_date").attr('autocomplete', 'off');
    </script>

    <script>
        function itemChanged(event) {
            var status = event.checked;
            var value = event.value;
            var product_feature_id = $(`#${event.id}`).attr('data-product-feature-id');
            var list_index = $(`#${event.id}`).attr('data-list-index');

            var all_feature_items_list = $(`#id_feature_items_list_${product_feature_id}`).attr('data-all-feature-items-list');

            if (!Array.isArray(all_feature_items_list)) {
                all_feature_items_list = all_feature_items_list.split(',');
            }

            if (status) {
                all_feature_items_list.push(value);
            } else {
                all_feature_items_list = $.grep(all_feature_items_list, function (arrau_value, index) {
                    return arrau_value !== value;
                });
            }

            var all_feature_items_list = all_feature_items_list.filter(function (item) {
                return item !== '';
            });

            $(`#id_feature_items_list_${product_feature_id}`).attr('data-all-feature-items-list', all_feature_items_list.toString());

            angular.element(event).scope().ChangeFeatureItemValue(product_feature_id, all_feature_items_list.toString());
        }

        function ItemPriceRelatedFieldsChanged(event) {
            var value = event.value;
            var field_name = event.name;
            var product_feature_id = $(`#${event.id}`).attr('data-product-feature-id');

            console.log(value)
            console.log(product_feature_id)
            console.log(field_name)

            angular.element(event).scope().ChangeItemPriceRelatedFields(field_name, product_feature_id, value);
        }

        function itemTextTypeChanged(event) {
            var value = event.value;
            var product_feature_id = $(`#${event.id}`).attr('data-product-feature-id');

            angular.element(event).scope().ChangeFeatureItemValue(product_feature_id, value);
        }
    </script>

    <script>
        @if(isset($object))
        app.controller('myCtrl', function ($scope, $http) {

            $scope.gallery_items = [];

            $scope.feature_items = [];
            $scope.filter_items = [];
            $scope.features = <?php echo json_encode($features); ?>;

            $scope.init = function () {
                $scope.GetProductFeatures();
                $scope.GetGallery();
            }

            $scope.CheckSelectedFeatureExistInFeatureItems = function (selected_feature, current_item) {
                if (selected_feature === '' || selected_feature === null) {
                    selected_feature = [];
                }
                if (!Array.isArray(selected_feature)) {
                    selected_feature = selected_feature.split(',');
                }
                return selected_feature.includes(current_item);
            }

            $scope.ChangeFeatureItemPlace = function (product_feature_id, place, value) {

                var data = {
                    'product_id': {{ $object->id }},
                    'value': value,
                    'place': place,
                };

                var url = `/api/products/products-features/${product_feature_id}`;
                $scope.UpdateFeatureItem(url, data);
            };

            $scope.ChangeFeatureItemValue = function (product_feature_id, all_feature_items_list) {

                console.log(all_feature_items_list)

                var data = {
                    'product_id': {{ $object->id }},
                    'value': all_feature_items_list,
                };

                var url = `/api/products/products-features/${product_feature_id}`;
                $scope.UpdateFeatureItem(url, data);
            };

            $scope.ChangeItemPriceRelatedFields = function (field_name, product_feature_id, value) {
                var data = {
                    'product_id': {{ $object->id }},
                };

                data[field_name] = value;

                var url = `/api/products/products-features/${product_feature_id}`;
                $scope.UpdateFeatureItem(url, data);
            };

            //////////////////////////////////////////////////

            $scope.GetProductFeatures = function () {
                $scope.is_submited = true;

                var url = `/api/products/products-features?product_id={{ $object->id }}`

                $http.get(url).then(res => {
                    $scope.is_submited = false;
                    $scope.feature_items = res['data']['data'];
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.AddEditFeatureModal = function (obj) {
                $scope.obj = {
                    'place': 'down'
                };
                if (obj) {
                    $scope.obj = obj;
                    $scope.feature_id = obj['feature_id'];
                    if ($scope.obj['value'] && $scope.obj['feature']['filter_type'] != 'text') {
                        if (!Array.isArray($scope.obj['value'])) {
                            $scope.obj['value'] = $scope.obj['value'].split(',');
                        }
                    }
                }
                $('#addEditFeatureModal').modal('show');
            }

            $scope.$watch('feature_id', function (newValue, oldValue) {
                if (newValue) {
                    $scope.feature = $scope.features.filter(element => element['id'] == newValue)[0];
                    $scope.GetFeatureFilterItems(newValue);
                    $scope.obj['feature_id'] = newValue;
                    // $scope.obj['value'] = '';
                }
            });

            $scope.GetFeatureFilterItems = function (feature_id) {
                var url = `/api/products/features/items/${feature_id}/`

                $http.get(url).then(res => {
                    $scope.is_submited = false;
                    $scope.filter_items = res['data']['data'];
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.RemoveFeature = function (itemId) {
                let title = 'حذف آیتم';
                let description = 'آیا از حذف این آیتم مطمئن هستید؟ این عملیات غیرقابل بازگشت است.';
                let url = '/api/products/products-features/';
                createSwal("warning", description, title).then((result) => {
                    if (result.value) {
                        $http.delete(`${url}${itemId}/`).then(function () {
                            $scope.GetProductFeatures();
                            showToast('آیتم مورد نظر با موفقیت حذف شد.', 'success');
                        }).catch(function (err) {
                            parseError(err);
                        })
                    }
                });
            };

            $scope.GetRawValue = function (value) {
                return value ? value.toString() : '';
            }

            $scope.SubmitAddEditFeature = function (type = 'create') {
                if (!$scope.obj['feature_id']) {
                    showToast('فیلد ویژگی اجباری است!', 'error');
                    return;
                }
                if (!$scope.obj['value'] || $scope.obj['value'] == '') {
                    showToast('فیلد مقدار اجباری است!', 'error');
                    return;
                }
                if (!$scope.obj['place']) {
                    showToast('فیلد جایگاه ویژگی اجباری است!', 'error');
                    return;
                }

                $scope.obj['value'] = $scope.obj['value'].toString();
                $scope.obj['product_id'] = {{ $object->id }};

                if ($('#id_feature_discount_start_date').val()){
                    $scope.obj['discount_start_date'] = $('#id_feature_discount_start_date').val();
                }
                if ($('#id_feature_discount_end_date').val()){
                    $scope.obj['discount_end_date'] = $('#id_feature_discount_end_date').val();
                }

                $scope.is_submited = true;

                if ($scope.obj['id']) {
                    var url = `/api/products/products-features/${$scope.obj['id']}`;

                    $scope.UpdateFeatureItem(url, $scope.obj);
                } else {
                    var url = `/api/products/products-features`;

                    $http.post(url, $scope.obj).then(res => {
                        $scope.is_submited = false;
                        $scope.GetProductFeatures();
                        showToast(res['data']['data'], 'success');
                        $('#addEditFeatureModal').modal('hide');
                    }).catch(err => {
                        $scope.is_submited = false;
                        if (err['data']['errors']['feature_id']) {
                            showToast(err['data']['errors']['feature_id'][0], 'error');
                            return;
                        }
                        if (err['data']['errors']['product_id']) {
                            showToast(err['data']['errors']['product_id'][0], 'error');
                            return;
                        }
                        showToast('خطایی رخ داد.', 'error');
                    });

                }
            }

            $scope.UpdateFeatureItem = function (url, data) {
                $scope.is_submited = true;

                $http.patch(url, data).then(res => {
                    $scope.is_submited = false;
                    data = {};
                    $scope.GetProductFeatures();
                    showToast(res['data']['data'], 'success');
                    $('#addEditFeatureModal').modal('hide');
                }).catch(err => {
                    $scope.is_submited = false;
                    if (err['data']['errors']['feature_id']) {
                        showToast(err['data']['errors']['feature_id'][0], 'error');
                        return;
                    }
                    if (err['data']['errors']['product_id']) {
                        showToast(err['data']['errors']['product_id'][0], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            //

            $scope.AddEditGalleryModal = function (obj) {
                $scope.gallery_obj = {};
                if (obj) {
                    $scope.gallery_obj = obj;
                }
                $('#addEditGalleyModal').modal('show');
            }

            $scope.GetGallery = function () {
                var url = `{{ route('galleries.api.index', $object->id) }}`

                $http.get(url).then(res => {
                    $scope.is_submited = false;
                    $scope.gallery_items = res['data']['data'];
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.removeGallery = function (itemId) {
                let title = 'حذف آیتم';
                let description = 'آیا از حذف این آیتم مطمئن هستید؟ این عملیات غیرقابل بازگشت است.';
                let url = '/api/products/galleries/';
                createSwal("warning", description, title).then((result) => {
                    if (result.value) {
                        $http.delete(`${url}${itemId}/`).then(function () {
                            showToast('آیتم مورد نظر با موفقیت حذف شد.', 'success');
                            $scope.GetGallery();
                        }).catch(function (err) {
                            parseError(err);
                        })
                    }
                });
            };

            $scope.SubmitAddEditGallery = function (type = 'create') {
                if (!$("#id_gallery_image")[0].files[0]) {
                    showToast('فیلد تصویر اجباری است!', 'error');
                    return;
                }

                fd = new FormData();
                for (item = 0; item < $("#id_gallery_image")[0].files.length; item++) {
                    fd.append('image[]', $("#id_gallery_image")[0].files[item]);
                }

                $scope.is_submited = true;

                var url = `{{ route('galleries.api.store', $object->id) }}`

                $http.post(url, fd, {
                    headers: {
                        'Content-Type': undefined
                    },
                }).then(res => {
                    showToast(res['data']['data'], 'success');
                    $scope.is_submited = false;
                    $scope.gallery_obj = {};

                    $('#id_gallery_image').val('');
                    $('#addEditGalleyModal').modal('hide');
                    $scope.GetGallery();

                }).catch(err => {
                    $scope.is_submited = false;
                    if (err['data']['errors']['image']) {
                        showToast(err['data']['errors']['image'][0], 'error');
                        showToast(err['data']['errors']['image'][1], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
        @endif
    </script>
@endsection

