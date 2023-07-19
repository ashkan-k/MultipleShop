@extends('layouts.admin-master')
@section('title','پاسخ تیکت ها')
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
                        پاسخ</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">خانه</a>
                        </li>

                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>

                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('tickets.index') }}" class="text-muted text-hover-primary">تیکت ها</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::فیلتر menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#"
                           class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>فیلتر</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                             id="kt_menu_641ac4310911a">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label fw-semibold">وضعیت:</label>
                                    <!--end::Tags-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="انتخاب گزینه"
                                                data-dropdown-parent="#kt_menu_641ac4310911a" data-allow-clear="true"
                                                data-select2-id="select2-data-7-ffip" tabindex="-1" aria-hidden="true"
                                                data-kt-initialized="1">
                                            <option data-select2-id="select2-data-9-hf8r"></option>
                                            <option value="1">تایید شده</option>
                                            <option value="2">در انتظار</option>
                                            <option value="2">در حال پردازش</option>
                                            <option value="2">رد شد</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                                       dir="rtl" data-select2-id="select2-data-8-sd5k"
                                                       style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-cyd5-container"
                                                    aria-controls="select2-cyd5-container"><span
                                                        class="select2-selection__rendered" id="select2-cyd5-container"
                                                        role="textbox" aria-readonly="true" title="انتخاب گزینه"><span
                                                            class="select2-selection__placeholder">انتخاب گزینه</span></span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label fw-semibold">نوع عضویت:</label>
                                    <!--end::Tags-->
                                    <!--begin::تنظیمات-->
                                    <div class="d-flex">
                                        <!--begin::تنظیمات-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">نویسنده</span>
                                        </label>
                                        <!--end::تنظیمات-->
                                        <!--begin::تنظیمات-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">مشتری</span>
                                        </label>
                                        <!--end::تنظیمات-->
                                    </div>
                                    <!--end::تنظیمات-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Tags-->
                                    <label class="form-label fw-semibold">اعلان ها:</label>
                                    <!--end::Tags-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                               checked="checked">
                                        <label class="form-check-label">فعال</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">ریست
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">
                                        تایید
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::فیلتر menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::اصلی button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app">ساختن</a>
                    <!--end::اصلی button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::صندوق پیام اپلیکیشن - نمایش & پاسخ -->
                <div class="d-flex flex-column flex-lg-row">
                    <div class="flex-lg-row-fluid ms-lg-10 ms-xl-10">
                        <!--begin::کارت-->
                        <div class="card">
                            <div class="card-body">
                                <!--begin::Title-->
                                <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <!--begin::Heading-->
                                        <h2 class="fw-semibold me-3 my-1">{{ $ticket->title ?: '---'  }}</h2>
                                        {{--                                        <span class="badge badge-light-primary my-1 me-2">اینباکس</span>--}}
{{--                                        @if($ticket->file)--}}
{{--                                            <span onclick="window.open('{{ $ticket->file ?: '---' }}','_blank')"--}}
{{--                                                  style="font-size: 13px !important;"--}}
{{--                                                  class="active_modal_buttons badge badge-light-danger my-1">فایل ضمیمه</span>--}}
{{--                                        @endif--}}
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::پیام accordion-->
                                <div data-kt-inbox-message="message_wrapper"  style="margin-bottom: 80px !important;">
                                    <!--begin::پیام header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"
                                         data-kt-inbox-message="header">
                                        <!--begin::نویسنده-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50 me-4">
                                                <span class="symbol-label"
                                                      style="background-image:url({{ $ticket->user ? $ticket->user->get_avatar() : '---'  }});"></span>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="pe-5">
                                                <!--begin::نویسنده details-->
                                                <div class="d-flex align-items-center flex-wrap gap-1">
                                                    <a href="#"
                                                       class="fw-bold text-dark text-hover-primary">{{ $ticket->user ? $ticket->user->full_name() : '---' }}</a>
                                                    &nbsp;&nbsp;
                                                    <span
                                                        class="text-muted fw-bold">{{ \Carbon\Carbon::parse( $ticket->created_at )->diffForHumans() }}</span>
                                                </div>
                                                <!--end::نمایش message-->
                                            </div>
                                        </div>
                                        <!--end::نویسنده-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <!--begin::تاریخ-->
                                            <span
                                                class="fw-semibold text-muted text-end me-3">{{ \Hekmatinasser\Verta\Verta:: instance($ticket->created_at)->format('%B %d، %Y') }}</span>
                                        </div>
                                    </div>

                                    <div class="collapse fade show" data-kt-inbox-message="message">
                                        <div class="py-5">{!! $ticket->text ?: '---' !!}</div>
                                        @if($ticket->file)
                                            <a href="{{ $ticket->file ?: '---' }}" target="_blank" class="btn btn-sm btn-warning">فایل ضمیمه</a>
                                        @endif
                                    </div>
                                </div>

                                @foreach($answers as $answer)
                                    <div class="separator my-6 "></div>
                                    <div data-kt-inbox-message="message_wrapper">
                                        <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer"
                                             data-kt-inbox-message="header">
                                            <!--begin::نویسنده-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50 me-4">
                                                <span class="symbol-label"
                                                      style="background-image:url({{ $answer->user ? $answer->user->get_avatar() : '---'  }});"></span>
                                                </div>
                                                <!--end::Avatar-->
                                                <div class="pe-5">
                                                    <!--begin::نویسنده details-->
                                                    <div class="d-flex align-items-center flex-wrap gap-1">
                                                        <a href="#"
                                                           class="fw-bold text-dark text-hover-primary">{{ $answer->user ? $answer->user->full_name() : '---' }}</a>
                                                        &nbsp;&nbsp;
                                                        <span
                                                            class="text-muted fw-bold">{{ \Carbon\Carbon::parse( $answer->created_at )->diffForHumans() }}</span>
                                                    </div>

                                                    <div class="text-muted fw-semibold mw-450px">
                                                        {!! $answer->text !!}
                                                        @if($answer->file)
                                                            <a href="{{ $answer->file ?: '---' }}" target="_blank" class="btn btn-sm btn-warning">فایل ضمیمه</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-6"></div>
                                @endforeach

                                <label for="id_text"
                                       class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-20">
                                    <span class="required">متن پاسخ</span>
                                </label>
                                <form id="ticket_frm" class="rounded border "
                                      action="{{ route('ticket-answers.store', $ticket->id) }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <input style="display: none" type="file" name="file" id="id_file" value="">

                                    <div class="d-flex flex-column fv-row">
                                            <textarea type="text" id="id_text" class="form-control form-control-solid"
                                                      style="height: 100% !important;"
                                                      placeholder="متن پاسخ را وارد کنید" name="text" rows="12"
                                                      required>@if(old('text')){{ old('text') }}@elseif(isset($object->text)){{ $object->text }}@endif</textarea>

                                        @error('text')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="meta_title" data-validator="notEmpty">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::ارسال-->
                                            <div class="btn-group me-4">
                                                <!--begin::ثبت-->
                                                <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
																		<span
                                                                            onclick="$('#ticket_frm').submit()"
                                                                            class="indicator-label">ارسال</span>
																		<span class="indicator-progress">لطفا صبر کنید...</span>
																	</span>
                                            </div>
                                            <span onclick="$('#id_file').click()"
                                                  class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2 dz-clickable"
                                                  id="kt_inbox_reply_attachments_select"
                                                  data-kt-inbox-form="dropzone_upload">
																	<i class="ki-duotone ki-paper-clip fs-2 m-0"></i>
																</span>
                                        </div>
                                    </div>
                                    <!--end::Footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::کارت-->
                    </div>
                </div>
                <!--end::صندوق پیام اپلیکیشن - نمایش & پاسخ -->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('Scripts')
    <script>
        CKEDITOR.replace('id_text');
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.ChangeStatusModal = function (id, status) {
                $scope.id = id;
                $scope.status = status;
                $('#changeStatusModal').modal('show');
            }

            $scope.ChangeStatus = function () {
                $scope.is_submited = true;

                var data = {
                    "status": $scope.status
                };

                $http.post(`/api/tickets/status/change/${$scope.id}`, data).then(res => {
                    showToast('وضعیت آیتم مورد نظر با موفقیت تغییر کرد.', 'success');
                    $scope.is_submited = false;
                    setTimeout(() => {
                        location.reload()
                    }, 500)
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

