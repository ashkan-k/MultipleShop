@extends('layouts.admin-master')
@section('titlePage','تنظیمات ها')
@section('Styles')

@endsection
@section('Scripts')

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
                        تنظیمات لیست</h1>
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
                        <li class="breadcrumb-item text-muted">کاربر مدیریت</li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <li class="breadcrumb-item text-muted">تنظیمات</li>
                        <!--end::آیتم-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::کارت-->
                <div class="card">
                    <!--begin::کارت header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::کارت title-->
                        <div class="card-title">
                            <!--begin::جستجو-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-user-table-filter="search"
                                       class="form-control form-control-solid w-250px ps-13" placeholder="جستجو ..."/>
                            </div>
                            <!--end::جستجو-->
                        </div>
                        <!--begin::کارت title-->
                        <!--begin::کارت toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::فیلتر-->
                                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>فیلتر
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Separator-->
                                    <!--begin::Content-->
                                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">سطح دسترسی:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                                    data-placeholder="انتخاب گزینه" data-allow-clear="true"
                                                    data-kt-user-table-filter="role" data-hide-search="true">
                                                <option></option>
                                                <option value="مدیریت">مدیریت</option>
                                                <option value="تحلیلگر">تحلیلگر</option>
                                                <option value="توسعه دهنده">توسعه دهنده</option>
                                                <option value="پشتیبانی">پشتیبانی</option>
                                                <option value="آزمایش">آزمایش</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <label class="form-label fs-6 fw-semibold">ورود دو مرحله ای:</label>
                                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                                    data-placeholder="انتخاب گزینه" data-allow-clear="true"
                                                    data-kt-user-table-filter="two-step" data-hide-search="true">
                                                <option></option>
                                                <option value="فعال">فعال</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                    data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">ریست
                                            </button>
                                            <button type="submit" class="btn btn-primary fw-semibold px-6"
                                                    data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">تایید
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::فیلتر-->
                                <!--begin::خروجی-->
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_export_تنظیمات">
                                    <i class="ki-duotone ki-exit-up fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>خروجی
                                </button>
                                <!--end::خروجی-->
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن کاربر
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::گروه actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                 data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>انتخاب شده
                                </div>
                                <button type="button" class="btn btn-danger"
                                        data-kt-user-table-select="delete_selected">حذف انتخاب شده
                                </button>
                            </div>
                            <!--end::گروه actions-->
                            <!--begin::Modal - Adjust تعادل-->
                            <div class="modal fade" id="kt_modal_export_تنظیمات" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">خروجی تنظیمات</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                 data-kt-users-modal-action="close">
                                                <i class="ki-duotone ki-cross fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_export_users_form" class="form" action="#">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="fs-6 fw-semibold form-label mb-2">انتخاب سطح
                                                        دسترسی:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select name="role" data-control="select2"
                                                            data-placeholder="انتخاب نقش" data-hide-search="true"
                                                            class="form-select form-select-solid fw-bold">
                                                        <option></option>
                                                        <option value="مدیریت">مدیریت</option>
                                                        <option value="تحلیلگر">تحلیلگر</option>
                                                        <option value="توسعه دهنده">توسعه دهنده</option>
                                                        <option value="پشتیبانی">پشتیبانی</option>
                                                        <option value="آزمایش">آزمایش</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Tags-->
                                                    <label class="required fs-6 fw-semibold form-label mb-2">انتخاب
                                                        خروجی فرمت:</label>
                                                    <!--end::Tags-->
                                                    <!--begin::Input-->
                                                    <select name="format" data-control="select2"
                                                            data-placeholder="انتخاب فرمت" data-hide-search="true"
                                                            class="form-select form-select-solid fw-bold">
                                                        <option></option>
                                                        <option value="excel">Excel</option>
                                                        <option value="pdf">PDF</option>
                                                        <option value="cvs">CVS</option>
                                                        <option value="zip">ZIP</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center">
                                                    <button type="reset" class="btn btn-light me-3"
                                                            data-kt-users-modal-action="cancel">لغو
                                                    </button>
                                                    <button type="submit" class="btn btn-primary"
                                                            data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">ثبت</span>
                                                        <span class="indicator-progress">لطفا صبر کنید...
																			<span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - کارت جدید-->

                        </div>
                        <!--end::کارت toolbar-->
                    </div>
                    <!--end::کارت header-->
                    <!--begin::کارت body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_تنظیمات">
                            <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                               data-kt-check-target="#kt_table_تنظیمات .form-check-input" value="1"/>
                                    </div>
                                </th>
                                <th class="min-w-125px">کاربر</th>
                                <th class="min-w-125px">سطح دسترسی</th>
                                <th class="min-w-125px">اخرین ورود</th>
                                <th class="min-w-125px">دو مرحله ای</th>
                                <th class="min-w-125px">پیوستنed تاریخ</th>
                                <th class="text-end min-w-100px">عملیات</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-6.jpg" alt="مرادی نیا"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">مرادی نیا</a>
                                        <span>smith@kpmg.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">دیروز</div>
                                </td>
                                <td></td>
                                <td>22 شهریور 2023, 11:05 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">میلاد مرادی</a>
                                        <span>melody@altbox.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>تحلیلگر</td>
                                <td>
                                    <div class="badge badge-light fw-bold">بیست دقیقه پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>25 تیر 2023, 11:30 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-1.jpg" alt="جلالی" class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">جلالی</a>
                                        <span>max@kt.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه روز پیش</div>
                                </td>
                                <td></td>
                                <td>20 آذر 2023, 10:10 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-5.jpg" alt="محسن برومند"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                                        <span>sean@dellito.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>پشتیبانی</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج ساعت پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>20 آذر 2023, 6:05 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-25.jpg" alt="رضا علی ابادی"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">رضا علی ابادی</a>
                                        <span>brian@exchange.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">2 روز قبل</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>19 مرداد 2023, 5:30 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">میکائیل کرمانی</a>
                                        <span>mik@pex.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج روز پیش</div>
                                </td>
                                <td></td>
                                <td>25 مهر 2023, 9:23 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-9.jpg" alt="محمد رصایی"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">محمد رصایی</a>
                                        <span>f.mit@kpmg.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>آزمایش</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه هفته پیش</div>
                                </td>
                                <td></td>
                                <td>21 بهمن 2023, 11:30 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">امید وحیدی</a>
                                        <span>olivia@corpmail.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">دیروز</div>
                                </td>
                                <td></td>
                                <td>24 خرداد 2023, 6:05 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                                        <span>owen.neil@gmail.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>تحلیلگر</td>
                                <td>
                                    <div class="badge badge-light fw-bold">بیست دقیقه پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>25 تیر 2023, 5:30 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-23.jpg" alt="علی کاربر"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">علی کاربر</a>
                                        <span>dam@consilting.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه روز پیش</div>
                                </td>
                                <td></td>
                                <td>05 اردیبهشت 2023, 8:43 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">الهام بارانی</a>
                                        <span>emma@intenso.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>پشتیبانی</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج ساعت پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>19 مرداد 2023, 10:30 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-12.jpg" alt="آنا کوهی"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">آنا کوهی</a>
                                        <span>ana.cf@limtel.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">2 روز قبل</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>25 تیر 2023, 6:43 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">رابرت دو</a>
                                        <span>robert@benko.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج روز پیش</div>
                                </td>
                                <td></td>
                                <td>15 فروردین 2023, 10:10 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-13.jpg" alt="جواد مولای"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">جواد مولای</a>
                                        <span>miller@mapple.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>آزمایش</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه هفته پیش</div>
                                </td>
                                <td></td>
                                <td>10 آبان 2023, 10:30 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">لقمان کامرانی</a>
                                        <span>lucy.m@fentech.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">دیروز</div>
                                </td>
                                <td></td>
                                <td>15 فروردین 2023, 10:10 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">میلاد مرادی</a>
                                        <span>melody@altbox.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>تحلیلگر</td>
                                <td>
                                    <div class="badge badge-light fw-bold">بیست دقیقه پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>10 آبان 2023, 5:20 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-1.jpg" alt="جلالی" class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">جلالی</a>
                                        <span>max@kt.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه روز پیش</div>
                                </td>
                                <td></td>
                                <td>20 آذر 2023, 2:40 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-5.jpg" alt="محسن برومند"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">محسن برومند</a>
                                        <span>sean@dellito.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>پشتیبانی</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج ساعت پیش</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>22 شهریور 2023, 8:43 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-25.jpg" alt="رضا علی ابادی"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">رضا علی ابادی</a>
                                        <span>brian@exchange.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>توسعه دهنده</td>
                                <td>
                                    <div class="badge badge-light fw-bold">2 روز قبل</div>
                                </td>
                                <td>
                                    <div class="badge badge-light-success fw-bold">فعال</div>
                                </td>
                                <td>22 شهریور 2023, 6:43 am</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">میکائیل کرمانی</a>
                                        <span>mik@pex.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>مدیریت</td>
                                <td>
                                    <div class="badge badge-light fw-bold">پنج روز پیش</div>
                                </td>
                                <td></td>
                                <td>19 مرداد 2023, 5:20 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: آواتار -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-9.jpg" alt="محمد رصایی"
                                                     class="w-100"/>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::کاربر details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                           class="text-gray-800 text-hover-primary mb-1">محمد رصایی</a>
                                        <span>f.mit@kpmg.com</span>
                                    </div>
                                    <!--begin::کاربر details-->
                                </td>
                                <td>آزمایش</td>
                                <td>
                                    <div class="badge badge-light fw-bold">سه هفته پیش</div>
                                </td>
                                <td></td>
                                <td>20 آذر 2023, 8:43 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                       class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                               class="menu-link px-3"></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">حذف</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
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
    </div>
@endsection
