@extends('layouts.admin-master')
@section('title','تنظیمات ها')
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
                        @if(isset($form['title']))
                            تغغیر تنظیمات {{ $form['title'] }}
                        @else
                            ویرایش تنظیمات
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
                                    @method('PATCH')

                                    @foreach($forms as $form)
                                        <input type="hidden" name="key" value="{{ $form['key'] }}">

                                        @if($form['field']['type'] == 'select')

                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Tags-->
                                                <label for="id_value_{{ $form['key'] }}"
                                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">{{ $form['title'] }}</span>
                                                </label>
                                                <!--end::Tags-->

                                                <select id="id_value_{{ $form['key'] }}" name="value"
                                                        data-kt-select2="true" required
                                                        class="form-control form-control-solid">
                                                    <option value="" disabled>{{ $form['title'] }} را انتخاب کنید
                                                    </option>
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

                                        @elseif($form['field']['type'] == 'textarea')

                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Tags-->
                                                <label for="id_value_{{ $form['key'] }}"
                                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">{{ $form['title'] }}</span>
                                                </label>
                                                <!--end::Tags-->
                                                <textarea type="text" id="id_value_{{ $form['key'] }}"
                                                          class="form-control form-control-solid value_class"
                                                          rows="8" required
                                                          placeholder="{{ $form['title'] }} را وارد کنید"
                                                          name="value">@if(old('value')){{ old('value') }}@elseif(isset($form['object'])){{ $form['object']->value }}@endif</textarea>

                                                @error('value')
                                                <div class="fv-plugins-message-container invalid-feedback">
                                                    <div data-field="meta_title" data-validator="notEmpty">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                                @enderror

                                            </div>

                                        @endif


                                        @if($form['has_active_status'])
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <label for="id_is_active_{{ $form['key'] }}"
                                                       class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">وضعیت (فعال / غیرفعال)</span>
                                                </label>

                                                <div
                                                    class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                    <input
                                                        @if(isset($form['object']) && $form['object']->is_active) checked
                                                        @elseif(old('is_active')) checked
                                                        @elseif(!isset($form['object'])) checked
                                                        @endif  name="is_active"
                                                        class="form-check-input w-45px h-30px" type="checkbox"
                                                        id="id_is_active_{{ $form['key'] }}" value="1">
                                                    <label class="form-check-label"
                                                           for="id_is_active_{{ $form['key'] }}"></label>
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
                                            <input type="hidden" name="is_active" value="1"
                                                   id="id_is_active_{{ $form['key'] }}">
                                        @endif

                                        <div class="row py-5">
                                            <div class="col-md-9 offset-md-3">
                                                <div class="d-flex" style="float: left !important;">
                                                    <button type="button" data-kt-ecommerce-settings-type="submit"
                                                            ng-disabled="is_submited"
                                                            ng-click="SubmitChanges('{{ $form['key'] }}', '{{ $form['field']['type'] }}', '{{ $form['has_active_status'] }}')"
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
                                @endforeach

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
        CKEDITOR.replaceAll('value_class', {
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: '{{ route('upload_ckeditor_image') }}',
            filebrowserImageUploadUrl: '{{ route('upload_ckeditor_image') }}'
        });
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.SubmitChanges = function (key, type, has_active_status) {
                if (type == 'textarea') {
                    var value = CKEDITOR.instances[`id_value_${key}`].getData();
                } else if (type == 'select') {
                    var value = $('#id_value_${key}').find(":selected").val();
                }

                if (has_active_status) {
                    var is_active = $(`#id_is_active_${key}`).is(':checked');
                } else {
                    var is_active = $(`#id_is_active_${key}`).val();
                }

                $scope.is_submited = true;

                var data = {
                    "key": key,
                    "value": value,
                    "is_active": is_active,
                };

                $http.post(`/api/settings/${key}`, data).then(res => {
                    showToast('آیتم مورد نظر با موفقیت ویرایش شد.', 'success');
                    $scope.is_submited = false;
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

