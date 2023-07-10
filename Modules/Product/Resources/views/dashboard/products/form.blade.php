@extends('layouts.admin-master')
@section('title','محصولات')
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
                        افزودن محصول</h1>
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
                        <!--begin:::Tab content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                                <!--begin::Form-->
                                <form role="form" enctype="multipart/form-data"
                                      method="post"
                                      action="@if(isset($object)){{ route('products.update' , $object->id) }}@else{{ route('products.store') }}@endif">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_is_english"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">فیلد های زبان انگلیسی</span>
                                        </label>

                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input name="is_english" ng-model="is_english"
                                                   class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="id_is_english" value="1">
                                            <label class="form-check-label" for="id_is_english"></label>
                                        </div>

                                        @error('is_english')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                    </div>

                                    <div ng-show="!is_english" class="d-flex flex-column mb-8 fv-row">
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

                                    <div ng-show="!is_english" class="d-flex flex-column mb-8 fv-row">
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

                                    <div ng-show="is_english" class="d-flex flex-column mb-8 fv-row">
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

                                    <div ng-show="is_english" class="d-flex flex-column mb-8 fv-row">
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
                                                  placeholder="توضیحات را وارد کنید" name="description" rows="12"
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
                                        <label for="id_brand_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>برند</span>
                                        </label>

                                        <select id="id_brand_id" name="brand_id"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="">بدون برند</option>
                                            @foreach($brands as $brand)

                                                <option
                                                    @if(isset($object->brand_id) && $object->brand_id == $brand->id) selected
                                                    @endif value="{{ $brand->id }}">{{ $brand->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('brand_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_color_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>رنگ</span>
                                        </label>

                                        <select id="id_color_id" name="color_id[]"
                                                data-kt-select2="true" multiple
                                                class="form-control form-control-solid">
                                            <option value="">بدون رنگ</option>
                                            @foreach($colors as $color)

                                                <option
                                                    @if(isset($object) && in_array($color->id, $object->colors_pluck_id())) selected
                                                    @elseif(old('color_id') && in_array($color->id, old('color_id'))) selected
                                                    @endif value="{{ $color->id }}">{{ $color->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('color_id')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_size_id"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>سایز</span>
                                        </label>

                                        <select id="id_size_id" name="size_id[]"
                                                data-kt-select2="true" multiple
                                                class="form-control form-control-solid">
                                            <option value="">بدون سایز</option>
                                            @foreach($sizes as $size)

                                                <option
                                                    @if(isset($object) && in_array($size->id, $object->sizes_pluck_id())) selected
                                                    @elseif(old('size_id') && in_array($size->id, old('size_id'))) selected
                                                    @endif value="{{ $size->id }}">{{ $size->title }}
                                                </option>

                                            @endforeach
                                        </select>

                                        @error('size_id')
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
                                            <span class="required">آیا ویژه است؟</span>
                                        </label>

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
                                            <span class="required">وضعیت فعال</span>
                                        </label>

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
    <script>
        CKEDITOR.replace('id_description');
        $('#id_color_id').select2();
        $('#id_size_id').select2();
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
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.is_english = false;
        });
    </script>
@endsection

