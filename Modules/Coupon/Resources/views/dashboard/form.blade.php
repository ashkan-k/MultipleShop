@extends('layouts.admin-master')
@section('title','کد های تخفیف')
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
                        افزودن کد تخفیف</h1>
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
                            <a href="{{ route('coupons.index') }}" class="text-muted text-hover-primary">کد تخفیف
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
                                      action="@if(isset($object)){{ route('coupons.update' , $object->id) }}@else{{ route('coupons.store') }}@endif">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_code"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">کد</span>
                                        </label>

                                        <input type="text" id="id_code" class="form-control form-control-solid"
                                               value="@if(old('code')){{ old('code') }}@elseif(isset($object->code)){{ $object->code }}@endif"
                                               placeholder="کد را وارد کنید" name="code" required/>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <input type="checkbox" onchange="GenerateUniqueCode(this)"
                                                   id="id_auto_code" value="1">
                                            <label for="id_auto_code" style="color: black; font-size: 15px">ساخت اتوماتیک کد منحصر بفرد</label>
                                        </div>

                                        @error('code')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_percent"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">درصد تخفیف</span>
                                        </label>

                                        <input type="number" id="id_percent" class="form-control form-control-solid"
                                               value="@if(old('percent')){{ old('percent') }}@elseif(isset($object->percent)){{ $object->percent }}@endif"
                                               placeholder="درصد تخفیف را وارد کنید" name="percent" required/>

                                        @error('percent')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_uses_number"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>تعداد قابل استفاده <span style="font-size: 10px" class="text-danger">(اگر وارد نکنید پیشفرض 1 میشود)</span></span>
                                        </label>

                                        <input type="number" id="id_uses_number" class="form-control form-control-solid"
                                               value="@if(old('uses_number')){{ old('uses_number') }}@elseif(isset($object->uses_number)){{ $object->uses_number }}@endif"
                                               placeholder="تعداد قابل استفاده را وارد کنید" name="uses_number"/>

                                        @error('uses_number')
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
                                            <span>کاربر</span>
                                        </label>

                                        <select id="id_user_id" name="user_id"
                                                data-kt-select2="true"
                                                class="form-control form-control-solid">
                                            <option value="">بدون کاربر</option>
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
                                        <label for="id_expiration"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span>تاریخ انقضا</span>
                                        </label>

                                        <input type="text" id="id_expiration" class="form-control form-control-solid"
                                               value="@if(old('expiration')){{ old('expiration') }}@elseif(isset($object->expiration)){{ $object->expiration }}@endif"
                                               placeholder="تاریخ انقضا را وارد کنید" name="expiration"/>

                                        @error('expiration')
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
                                                <button onclick="window.location.href='{{ route('coupons.index') }}'"
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
        $(document).ready(function() {
            $('#id_expiration').val(toEnglishDigits($('#id_expiration').val()))
            $('#id_discount_end_date').val(toEnglishDigits($('#id_discount_end_date').val()))

        });
        $('#id_expiration').persianDatepicker({
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
                $('#id_expiration').val($('#id_expiration').val().replaceAll('/', '-'))
            },
        });
        $("#id_expiration").attr('autocomplete', 'off');
    </script>


    <script>

        function generateUUID() { // Public Domain/MIT
            var d = new Date().getTime();//Timestamp
            var d2 = ((typeof performance !== 'undefined') && performance.now && (performance.now() * 1000)) || 0;//Time in microseconds since page-load or 0 if unsupported
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
                var r = Math.random() * 16;//random number between 0 and 16
                if (d > 0) {//Use timestamp until depleted
                    r = (d + r) % 16 | 0;
                    d = Math.floor(d / 16);
                } else {//Use microseconds since page-load if supported
                    r = (d2 + r) % 16 | 0;
                    d2 = Math.floor(d2 / 16);
                }
                return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
            });
        }

        function GenerateUniqueCode(event) {
            if (event.checked) {
                var code = generateUUID();
                $('#id_code').val(code);
                $('#id_code').prop('readonly', true);
            } else {
                $('#id_code').val('');
                $('#id_code').prop('readonly', false);
            }

        }

    </script>
@endsection

