@extends('layouts.admin-master')
@section('title','ارسال پیامک')
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
                        افزودن سبد خرید</h1>
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
                            <a href="{{ route('send_sms') }}" class="text-muted text-hover-primary">ارسال پیامک</a>
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
                                      action="@if(isset($object)){{ route('carts.update' , $object->id) }}@else{{ route('carts.store') }}@endif">

                                    @csrf
                                    @if(isset($object))
                                        @method('PATCH')
                                    @endif

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label for="id_user"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">کاربران</span>
                                        </label>

                                        <select id="id_user" name="user_id"
                                                data-kt-select2="true" required multiple
                                                class="form-control form-control-solid">
                                            @foreach($users as $item)
                                                <option value="{{ $item->phone }}">{{ $item->full_name() }}
                                                    ({{ $item->phone }})
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
                                        <label for="id_count"
                                               class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">متن</span>
                                        </label>

                                        <textarea rows="8" class="form-control form-control-solid" ng-model="text"
                                                  name="text" id="id_text"
                                                  required
                                                  placeholder="متن پیامک را وارد کنید">@if(old('text')){{ old('text') }}@elseif(isset($blog->text)){{ $blog->text }}@endif</textarea>

                                        @error('text')
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
                                                <button onclick="window.location.href='{{ url()->previous() }}'"
                                                        type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">انصراف
                                                </button>
                                                <button type="button" ng-click="Submit()"
                                                        ng-disabled="is_submited || !text"
                                                        data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">ارسال</span>
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
        $('#id_user').select2();
    </script>
    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.text = null;
            $scope.users = [];
            $scope.is_submited = '';

            $scope.Submit = function () {
                $scope.users = $('#id_user').val();

                if (!$scope.text) {
                    showToast('لطفا متن پیامک را وارد کنید.', 'error');
                    return;
                }
                if ($scope.users.length == 0) {
                    showToast('لطفا حداقل یک شماره موبایل برای ارسال پیامک انتخاب کنید.', 'error');
                    return;
                }

                $scope.is_submited = true;

                var data = {
                    "users": $scope.users,
                    "message": $scope.text,
                };

                $http.post('{{ route('api.sms.send') }}', data).then(res => {
                    showToast('با موفقیت ارسال شد.', 'success');
                    $("#id_user").val('').trigger('change');
                    $scope.text = null;
                    $scope.is_submited = false;
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

