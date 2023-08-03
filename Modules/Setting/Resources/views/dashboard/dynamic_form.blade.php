@extends('layouts.admin-master')

@section('title')
    @if($form)
        تغغیر تنظیمات {{ $form['title'] }}
    @else
        افزودن تنظیمات
    @endif
@endsection

@section('Styles')

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
                        @if($form)
                            تغغیر تنظیمات {{ $form['title'] }}
                        @else
                            افزودن تنظیمات
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
                            <a href="{{ route('settings.index') }}" class="text-muted text-hover-primary">تنظیمات ها</a>
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
                                      action="@if(isset($object)){{ route('settings.update' , $object->id) }}@else{{ route('settings.store') }}@endif?next=/{{ request()->path() }}">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <input type="hidden" name="key" value="{{ $form['key'] }}">

                                    @if($form['field']['type'] == 'select')

                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Tags-->
                                            <label for="id_value"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">{{ $form['title'] }}</span>
                                            </label>
                                            <!--end::Tags-->

                                            <select id="id_value" name="value"
                                                    data-kt-select2="true" required
                                                    class="form-control form-control-solid">
                                                <option value="" disabled>{{ $form['title'] }} را انتخاب کنید</option>
                                                @foreach($form['field']['options'] as $key => $value)

                                                    <option
                                                        @if(isset($object->value) && $object->value == $key) selected
                                                        @endif value="{{ $key }}">{{ $value }}
                                                    </option>

                                                @endforeach
                                            </select>

                                            @error('value')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="meta_title" data-validator="notEmpty">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror

                                        </div>

                                    @elseif($form['field']['type'] == 'text')

                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Tags-->
                                            <label for="id_value"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">{{ $form['title'] }}</span>
                                            </label>
                                            <!--end::Tags-->
                                            <input type="text" id="id_value" class="form-control form-control-solid"
                                                   required placeholder="{{ $form['title'] }} را وارد کنید"
                                                   value="@if(old('value')){{ old('value') }}@elseif(isset($object->value)){{ $object->value }}@endif"
                                                   name="value">

                                            @error('value')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="meta_title" data-validator="notEmpty">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror

                                        </div>

                                    @elseif($form['field']['type'] == 'textarea')

                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Tags-->
                                            <label for="id_value"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">{{ $form['title'] }}</span>
                                            </label>
                                            <!--end::Tags-->
                                            <textarea type="text" id="id_value" class="form-control form-control-solid"
                                                      rows="8" required
                                                      placeholder="{{ $form['title'] }} را وارد کنید"
                                                      name="value">@if(old('value')){{ old('value') }}@elseif(isset($object->value)){{ $object->value }}@endif</textarea>

                                            @error('value')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="meta_title" data-validator="notEmpty">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror

                                        </div>

                                    @elseif($form['field']['type'] == 'file')

                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Tags-->
                                            <label for="id_value"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">{{ $form['title'] }}</span>
                                            </label>
                                            <!--end::Tags-->
                                            <input type="file" id="id_value" class="form-control form-control-solid"
                                                   required placeholder="{{ $form['title'] }} را وارد کنید"
                                                   value="@if(old('value')){{ old('value') }}@elseif(isset($object->value)){{ $object->value }}@endif"
                                                   name="value">

                                            @error('value')
                                            <div class="fv-plugins-message-container invalid-feedback">
                                                <div data-field="meta_title" data-validator="notEmpty">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror

                                            @if(isset($object) && $object->value)
                                                <div class="input-field col s12 mt-3">
                                                    <p>فایل قبلی:</p>

                                                    <a href="[[ file_value ]]" target="_blank"
                                                       class="btn btn-sm btn-warning">
                                                        مشاهده فایل
                                                    </a>
                                                </div>
                                            @endif

                                        </div>

                                    @endif


                                    @if($form['has_active_status'])
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label for="id_is_active"
                                                   class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">وضعیت (فعال / غیرفعال)</span>
                                            </label>

                                            <div
                                                class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input @if(isset($object) && $object->is_active) checked
                                                       @elseif(old('is_active')) checked
                                                       @elseif(!isset($object)) checked
                                                       @endif  name="is_active"
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
                                    @else
                                        <input type="hidden" id="id_is_active" name="is_active" value="1">
                                    @endif

                                    <div class="row py-5">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="d-flex" style="float: left !important;">
                                                <!--begin::Button-->
                                                <button onclick="window.location.href='{{ route('settings.index') }}'"
                                                        type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">انصراف
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="button" data-kt-ecommerce-settings-type="submit"
                                                        ng-disabled="is_submited"
                                                        ng-click="SubmitChanges('{{ $form['key'] }}')"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">ذخیره</span>
                                                    <span class="indicator-progress">لطفا صبر کنید...
																		<span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::عملیات buttons-->
                                </form>
                                <!--end::Form-->
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
        @if($form['field']['type'] == 'textarea')
        CKEDITOR.replace('id_value', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });
        @endif
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.file_value = '';

            $scope.init = function () {
                @if($form['field']['type'] == 'file' && isset($object->value))
                    $scope.file_value = '{{ $object->value }}';
                @endif
            }

            $scope.SubmitChanges = function () {
                @if($form['field']['type'] == 'textarea')
                var value = CKEDITOR.instances[`id_value`].getData();
                @elseif($form['field']['type'] == 'select')
                var value = $('#id_value').find(":selected").val();
                @elseif($form['field']['type'] == 'text')
                var value = $('#id_value').val();
                @elseif($form['field']['type'] == 'file')
                var value = $("#id_value")[0].files[0];
                @endif

                if (!value) {
                    showToast('فیلد {{ $form['title'] }} الزامی است!', 'error');
                    return;
                }

                @if($form['has_active_status'])
                var is_active = $(`#id_is_active`).is(':checked');
                @else
                var is_active = $(`#id_is_active`).val();
                @endif

                    $scope.is_submited = true;

                fd = new FormData();
                fd.append('key', '{{ $form['key'] }}');
                fd.append('is_active', is_active);
                fd.append('value', value);

                $http.post(`/api/settings/{{ $form['key'] }}`, fd, {
                    headers: {
                        'Content-Type': undefined
                    },
                }).then(res => {
                    showToast('آیتم مورد نظر با موفقیت ویرایش شد.', 'success');
                    $scope.is_submited = false;
                    @if($form['field']['type'] == 'file')
                        $scope.file_value = res['data']['data']['value'];
                    @endif
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

