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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">پاسخ</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">خانه</a>
                        </li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">صندوق پیام</li>
                        <!--end::آیتم-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::فیلتر menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>فیلتر</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac4310911a">
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
                                        <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_641ac4310911a" data-allow-clear="true" data-select2-id="select2-data-7-ffip" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-9-hf8r"></option>
                                            <option value="1">تایید شده</option>
                                            <option value="2">در انتظار</option>
                                            <option value="2">در حال پردازش</option>
                                            <option value="2">رد شد</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-8-sd5k" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cyd5-container" aria-controls="select2-cyd5-container"><span class="select2-selection__rendered" id="select2-cyd5-container" role="textbox" aria-readonly="true" title="انتخاب گزینه"><span class="select2-selection__placeholder">انتخاب گزینه</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                        <label class="form-check-label">فعال</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
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
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">ساختن</a>
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
                                        <h2 class="fw-semibold me-3 my-1">یادآوری سفر. ممنون که با ما پرواز کردید</h2>
                                        <!--begin::Heading-->
                                        <!--begin::Badges-->
                                        <span class="badge badge-light-primary my-1 me-2">اینباکس</span>
                                        <span class="badge badge-light-danger my-1">مهم</span>
                                        <!--end::Badges-->
                                    </div>
                                    <div class="d-flex">
                                        <!--begin::Sort-->
                                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sort" data-bs-original-title="Sort" data-kt-initialized="1">
                                            <i class="ki-duotone ki-arrow-up-down fs-2 m-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <!--end::Sort-->
                                        <!--begin::پرینت-->
                                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="پرینت" data-bs-original-title="پرینت" data-kt-initialized="1">
                                            <i class="ki-duotone ki-printer fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                        <!--end::پرینت-->
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::پیام accordion-->
                                <div data-kt-inbox-message="message_wrapper">
                                    <!--begin::پیام header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                        <!--begin::نویسنده-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50 me-4">
                                                <span class="symbol-label" style="background-image:url(assets/media/avatars/300-6.jpg);"></span>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="pe-5">
                                                <!--begin::نویسنده details-->
                                                <div class="d-flex align-items-center flex-wrap gap-1">
                                                    <a href="#" class="fw-bold text-dark text-hover-primary">مرادی نیا</a>
                                                    <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <span class="text-muted fw-bold">یک روز پیش</span>
                                                </div>
                                                <!--end::نویسنده details-->
                                                <!--begin::پیام details-->
                                                <div data-kt-inbox-message="details">
                                                    <span class="text-muted fw-semibold">to me</span>
                                                    <!--begin::Menu toggle-->
                                                    <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-down fs-5 m-0"></i>
                                                    </a>
                                                    <!--end::Menu toggle-->
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                                        <!--begin::Table-->
                                                        <table class="table mb-0">
                                                            <tbody>
                                                            <tr>
                                                                <td class="w-75px text-muted">از</td>
                                                                <td>الهام بارانی</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">تاریخ</td>
                                                                <td>25 تیر 2023, 10:10 pm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">موضوع</td>
                                                                <td>یادآوری سفر. ممنون که با ما پرواز کردید</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">پاسخ-to</td>
                                                                <td>emma@intenso.com</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::پیام details-->
                                                <!--begin::نمایش message-->
                                                <div class="text-muted fw-semibold mw-450px d-none" data-kt-inbox-message="نمایش">With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part....</div>
                                                <!--end::نمایش message-->
                                            </div>
                                        </div>
                                        <!--end::نویسنده-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <!--begin::تاریخ-->
                                            <span class="fw-semibold text-muted text-end me-3">10 آبان 2023, 6:43 am</span>
                                            <!--end::تاریخ-->
                                            <div class="d-flex">
                                                <!--begin::ستاره-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="ستاره" data-bs-original-title="ستاره" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-ستاره fs-2 m-0"></i>
                                                </a>
                                                <!--end::ستاره-->
                                                <!--begin::اسفندk as important-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="اسفندk as important" data-bs-original-title="اسفندk as important" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-save-2 fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::اسفندk as important-->
                                                <!--begin::پاسخ-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="پاسخ" data-bs-original-title="پاسخ" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-message-edit fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::پاسخ-->
                                                <!--begin::تنظیمات-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="تنظیمات" data-bs-original-title="تنظیمات" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </a>
                                                <!--end::تنظیمات-->
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::پیام header-->
                                    <!--begin::پیام content-->
                                    <div class="collapse fade show" data-kt-inbox-message="message">
                                        <div class="py-5">
                                            <p>سلام</p>
                                            <p>با احترام، من باید با آقای زینسر مخالفم. همه ما می دانیم که بیشترین بخش مهم هر مقاله عنوان عنوان است.بدون عنوان قانع کننده ای است، خواننده شما حتی به اولین جمله نمی رسد. با این حال، پس از عنوان، چند جمله اول مقاله شما مطمئناً بیشترین است. بخش مهم.</p>
                                            <p>روزنامه نگاران این بخش مهم و مقدماتی را "Lede" می نامند، و وقتی پل به درستی اجرا شود، این همان چیزی است که خواننده شما را از یک تلاش سرفصل در جلب توجه به بدنه پست وبلاگ خود می برد، اگر می خواهید آن را به درستی از این موارد دریافت کنید. 10 روش هوشمندانه برای نوید دادن به وبلاگ بعدی شما</p>
                                            <p>ریچارد</p>
                                            <p class="mb-0">شرکت ساتراس</p>
                                        </div>
                                    </div>
                                    <!--end::پیام content-->
                                </div>
                                <!--end::پیام accordion-->
                                <div class="separator my-6"></div>
                                <!--begin::پیام accordion-->
                                <div data-kt-inbox-message="message_wrapper">
                                    <!--begin::پیام header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                        <!--begin::نویسنده-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50 me-4">
                                                <span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg);"></span>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="pe-5">
                                                <!--begin::نویسنده details-->
                                                <div class="d-flex align-items-center flex-wrap gap-1">
                                                    <a href="#" class="fw-bold text-dark text-hover-primary">جلالی</a>
                                                    <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <span class="text-muted fw-bold">2 روز قبل</span>
                                                </div>
                                                <!--end::نویسنده details-->
                                                <!--begin::پیام details-->
                                                <div class="d-none" data-kt-inbox-message="details">
                                                    <span class="text-muted fw-semibold">to me</span>
                                                    <!--begin::Menu toggle-->
                                                    <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-down fs-5 m-0"></i>
                                                    </a>
                                                    <!--end::Menu toggle-->
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                                        <!--begin::Table-->
                                                        <table class="table mb-0">
                                                            <tbody>
                                                            <tr>
                                                                <td class="w-75px text-muted">از</td>
                                                                <td>الهام بارانی</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">تاریخ</td>
                                                                <td>22 شهریور 2023, 5:30 pm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">موضوع</td>
                                                                <td>یادآوری سفر. ممنون که با ما پرواز کردید</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">پاسخ-to</td>
                                                                <td>emma@intenso.com</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::پیام details-->
                                                <!--begin::نمایش message-->
                                                <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="نمایش">روزنامه‌نگاران این بخش مهم و مقدماتی را «لِد» می‌نامند و زمانی که پل به درستی اجرا شود...</div>
                                                <!--end::نمایش message-->
                                            </div>
                                        </div>
                                        <!--end::نویسنده-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <!--begin::تاریخ-->
                                            <span class="fw-semibold text-muted text-end me-3">25 تیر 2023, 6:05 pm</span>
                                            <!--end::تاریخ-->
                                            <div class="d-flex">
                                                <!--begin::ستاره-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="ستاره" data-bs-original-title="ستاره" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-ستاره fs-2 text-warning m-0"></i>
                                                </a>
                                                <!--end::ستاره-->
                                                <!--begin::اسفندk as important-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="اسفندk as important" data-bs-original-title="اسفندk as important" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-save-2 fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::اسفندk as important-->
                                                <!--begin::پاسخ-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="پاسخ" data-bs-original-title="پاسخ" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-message-edit fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::پاسخ-->
                                                <!--begin::تنظیمات-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="تنظیمات" data-bs-original-title="تنظیمات" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </a>
                                                <!--end::تنظیمات-->
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::پیام header-->
                                    <!--begin::پیام content-->
                                    <div class="collapse fade" data-kt-inbox-message="message">
                                        <div class="py-5">
                                            <p>سلام</p>
                                            <p>با احترام، من باید با آقای زینسر مخالفم. همه ما می دانیم که بیشترین بخش مهم هر مقاله عنوان عنوان است.بدون عنوان قانع کننده ای است، خواننده شما حتی به اولین جمله نمی رسد. با این حال، پس از عنوان، چند جمله اول مقاله شما مطمئناً بیشترین است. بخش مهم.</p>
                                            <p>روزنامه نگاران این بخش مهم و مقدماتی را "Lede" می نامند، و وقتی پل به درستی اجرا شود، این همان چیزی است که خواننده شما را از یک تلاش سرفصل در جلب توجه به بدنه پست وبلاگ خود می برد، اگر می خواهید آن را به درستی از این موارد دریافت کنید. 10 روش هوشمندانه برای نوید دادن به وبلاگ بعدی شما</p>
                                            <p>ریچارد</p>
                                            <p class="mb-0">شرکت ساتراس</p>
                                        </div>
                                    </div>
                                    <!--end::پیام content-->
                                </div>
                                <!--end::پیام accordion-->
                                <div class="separator my-6"></div>
                                <!--begin::پیام accordion-->
                                <div data-kt-inbox-message="message_wrapper">
                                    <!--begin::پیام header-->
                                    <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                                        <!--begin::نویسنده-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50 me-4">
                                                <span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg);"></span>
                                            </div>
                                            <!--end::Avatar-->
                                            <div class="pe-5">
                                                <!--begin::نویسنده details-->
                                                <div class="d-flex align-items-center flex-wrap gap-1">
                                                    <a href="#" class="fw-bold text-dark text-hover-primary">محسن برومند</a>
                                                    <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <span class="text-muted fw-bold">سه روز پیش </span>
                                                </div>
                                                <!--end::نویسنده details-->
                                                <!--begin::پیام details-->
                                                <div class="d-none" data-kt-inbox-message="details">
                                                    <span class="text-muted fw-semibold">to me</span>
                                                    <!--begin::Menu toggle-->
                                                    <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-down fs-5 m-0"></i>
                                                    </a>
                                                    <!--end::Menu toggle-->
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                                        <!--begin::Table-->
                                                        <table class="table mb-0">
                                                            <tbody>
                                                            <tr>
                                                                <td class="w-75px text-muted">از</td>
                                                                <td>الهام بارانی</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">تاریخ</td>
                                                                <td>24 خرداد 2023, 9:23 pm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">موضوع</td>
                                                                <td>یادآوری سفر. ممنون که با ما پرواز کردید</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">پاسخ-to</td>
                                                                <td>emma@intenso.com</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::پیام details-->
                                                <!--begin::نمایش message-->
                                                <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="نمایش">روزنامه‌نگاران این بخش مهم و مقدماتی را «لِد» می‌نامند و زمانی که پل به درستی اجرا شود...</div>
                                                <!--end::نمایش message-->
                                            </div>
                                        </div>
                                        <!--end::نویسنده-->
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <!--begin::تاریخ-->
                                            <span class="fw-semibold text-muted text-end me-3">25 مهر 2023, 10:10 pm</span>
                                            <!--end::تاریخ-->
                                            <div class="d-flex">
                                                <!--begin::ستاره-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="ستاره" data-bs-original-title="ستاره" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-ستاره fs-2 m-0"></i>
                                                </a>
                                                <!--end::ستاره-->
                                                <!--begin::اسفندk as important-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="اسفندk as important" data-bs-original-title="اسفندk as important" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-save-2 fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::اسفندk as important-->
                                                <!--begin::پاسخ-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="پاسخ" data-bs-original-title="پاسخ" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-message-edit fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <!--end::پاسخ-->
                                                <!--begin::تنظیمات-->
                                                <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="تنظیمات" data-bs-original-title="تنظیمات" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </a>
                                                <!--end::تنظیمات-->
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::پیام header-->
                                    <!--begin::پیام content-->
                                    <div class="collapse fade" data-kt-inbox-message="message">
                                        <div class="py-5">
                                            <p>سلام</p>
                                            <p>با احترام، من باید با آقای زینسر مخالفم. همه ما می دانیم که بیشترین بخش مهم هر مقاله عنوان عنوان است.بدون عنوان قانع کننده ای است، خواننده شما حتی به اولین جمله نمی رسد. با این حال، پس از عنوان، چند جمله اول مقاله شما مطمئناً بیشترین است. بخش مهم.</p>
                                            <p>روزنامه نگاران این بخش مهم و مقدماتی را "Lede" می نامند، و وقتی پل به درستی اجرا شود، این همان چیزی است که خواننده شما را از یک تلاش سرفصل در جلب توجه به بدنه پست وبلاگ خود می برد، اگر می خواهید آن را به درستی از این موارد دریافت کنید. 10 روش هوشمندانه برای نوید دادن به وبلاگ بعدی شما</p>
                                            <p>ریچارد</p>
                                            <p class="mb-0">شرکت ساتراس</p>
                                        </div>
                                    </div>
                                    <!--end::پیام content-->
                                </div>
                                <!--end::پیام accordion-->
                                <!--begin::Form-->
                                <form id="kt_inbox_reply_form" class="rounded border mt-10">
                                    <!--begin::Body-->
                                    <div class="d-block">

                                        <div class="border-bottom">
                                            <input class="form-control border-0 px-8 min-h-45px" name="compose_subject" placeholder="موضوع">
                                        </div>
                                        <!--end::موضوع-->
                                        <!--begin::Message-->
                                        <div class="ql-toolbar ql-snow px-5 border-top-0 border-start-0 border-end-0"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div><div id="kt_inbox_form_editor" class="border-0 h-250px px-3 ql-container ql-snow"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                        <!--end::Message-->
                                        <!--begin::Attachments-->
                                        <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
                                            <div class="dropzone-items">

                                            </div>
                                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
                                        <!--end::Attachments-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::ارسال-->
                                            <div class="btn-group me-4">
                                                <!--begin::ثبت-->
                                                <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
																		<span class="indicator-label">ارسال</span>
																		<span class="indicator-progress">لطفا صبر کنید...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</span>
                                                <!--end::ثبت-->
                                                <!--begin::ارسال options-->
                                                <span class="btn btn-primary btn-icon fs-bold" role="button">
																		<span class="btn btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<i class="ki-duotone ki-down fs-2 m-0"></i>
																		</span>
                                                    <!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Schedule send</a>
																			</div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">ذخیره &amp; archive</a>
																			</div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">انصراف</a>
																			</div>
                                                                            <!--end::Menu item-->
																		</div>
                                                    <!--end::Menu-->
																	</span>
                                                <!--end::ارسال options-->
                                            </div>
                                            <!--end::ارسال-->
                                            <!--begin::Upload attachement-->
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2 dz-clickable" id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
																	<i class="ki-duotone ki-paper-clip fs-2 m-0"></i>
																</span>
                                            <!--end::Upload attachement-->
                                            <!--begin::Pin-->
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary">
																	<i class="ki-duotone ki-geolocation fs-2 m-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                            <!--end::Pin-->
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Toolbar-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::More actions-->
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" data-toggle="tooltip" title="More actions">
																	<i class="ki-duotone ki-setting-2 fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                            <!--end::More actions-->
                                            <!--begin::Dismiss reply-->
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
																	<i class="ki-duotone ki-حذف شده fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
                                            <!--end::Dismiss reply-->
                                        </div>
                                        <!--end::Toolbar-->
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

