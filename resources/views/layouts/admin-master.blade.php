<!DOCTYPE html>
<!--
نویسنده: ساتراس وب
محصولات نام: مترونیک
محصولات Version: 8.1.8
خرید: https://1.envato.market/EA4JP
وب سایت: http://www.keenthemes.com
تماس با ما: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
لاینسس شده: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>پنل | @yield('title', 'داشبورد')</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now و get life-time updates for free."/>
    <meta name="keywords"
          content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="مترونیک - پنل ادمین بوت استراپ Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, روبی روی ریل, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin داشبورد Theme & Template"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="ساتراس وب | مترونیک"/>
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="/admin/src/assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mوatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="/admin/src/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    <link href="/admin/src/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/src/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <link href="/select2/select2.min.css" rel="stylesheet"/>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

    <script src="/sweetalert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="/sweetalert/sweetalert2.min.css"
          id="theme-styles">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="/persian_datetimepicker/css/persianDatepicker-dark.css"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .select2-selection--single{
            height: 100% !important;
        }

        .active_modal_buttons:hover{
            cursor: pointer !important;
        }

        input[type="number"]:-moz-placeholder {
            text-align: right;
        }
        input[type="number"]:-ms-input-placeholder {
            text-align: right;
        }
        input[type="number"]::-webkit-input-placeholder {
            text-align: right;
        }
    </style>

    @yield('Styles')

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
      ng-app="myApp" ng-controller="myCtrl">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::اپلیکیشن-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->

        <div id="kt_app_header" class="app-header">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="مشاهده sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="/" class="d-lg-none">
                        <img alt="Logo" src="/admin/src/assets/media/logos/default-small.svg" class="h-30px">
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::چت-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu wrapper-->
                            <div onclick="window.location.href = '{{ route('tickets.index') }}?status=waiting'" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative">
                                <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>

                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                                <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu" style="">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" id="id_light" class="menu-link px-3 py-2 active" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                                        <span class="menu-title">روشن</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" id="id_dark" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                        <span class="menu-title">تیره</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" id="id_system" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                                        <span class="menu-title">سیستم</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>

                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="{{ auth()->user()->get_avatar() }}" alt="user">
                            </div>
                            <!--begin::کاربر account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true" style="">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="{{ auth()->user()->get_avatar() }}">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربرname-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">{{ auth()->user()->full_name() }}
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">مدیر</span></div>
                                            <a href="mailto:{{ auth()->user()->email ?: '---' }}" class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->email ?: '---' }}</a>
                                        </div>
                                        <!--end::کاربرname-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{ route('profile') }}" class="menu-link px-5">پروفایل من</a>
                                </div>

                                <div class="separator my-2"></div>

                                <div class="menu-item px-5 my-1">
                                    <a href="{{ route('settings.index') }}" class="menu-link px-5">تنظیمات</a>
                                </div>

                                <form id="frm_logout" style="display: none" action="{{ route('logout', ['locale' => app()->getLocale()]) }}" method="post">
                                    @csrf
                                </form>

                                <div class="menu-item px-5">
                                    <a onclick="$('#frm_logout').submit()" class="menu-link px-5">خروج</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::کاربر account menu-->
                            <!--end::Menu wrapper-->
                        </div>

                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="مشاهده header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>

        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                 data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="/">
                        <img alt="Logo" src="/admin/src/assets/media/logos/default-dark.svg"
                             class="h-25px app-sidebar-logo-default"/>
                        <img alt="Logo" src="/admin/src/assets/media/logos/default-small.svg"
                             class="h-20px app-sidebar-logo-minimize"/>
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Sidebar toggle-->
                    <!--begin::به حداقل رساندن sidebar setup:
            if (isset($_COموفقIE["sidebar_minimize_state"]) && $_COموفقIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
                    <div id="kt_app_sidebar_toggle"
                         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                         data-kt-toggle-name="app-sidebar-minimize">
                        <i class="ki-duotone ki-double-left fs-2 rotate-180">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Sidebar toggle-->
                </div>

                @include('dashboard.section.sidebar')

                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="/"
                       class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
                        <span class="btn-label">نمایش وبسایت</span>
                        <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->

            @yield('content')

            <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div
                        class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">ساتراس
                                وب</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">درباره ی ما</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://rtl-theme.com" target="_blank" class="menu-link px-2">پشتیبانی</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://www.rtl-theme.com/metronic-admin-html-template/" target="_blank"
                                   class="menu-link px-2">خرید</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::اپلیکیشن-->
<!--begin::کشوs-->
<!--begin::فعالیتها drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bold text-dark">گزارش ها</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                 data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                 data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::timeline items-->
                <div class="timeline">
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">در پروژه اپلیکیشن موبایل کار جدید برای شما وجود
                                    دارد:
                                </div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="/admin/src/assets/media/avatars/300-14.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="../../demo1/dist/apps/projects/project.html"
                                       class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">ملاقات
                                        با مشتری</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">طراح نرم افزار</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/admin/src/assets/media/avatars/300-2.jpg" alt="img"/>
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/admin/src/assets/media/avatars/300-14.jpg" alt="img"/>
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                A
                                            </div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">درحال پردازش</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="../../demo1/dist/apps/projects/project.html"
                                       class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="../../demo1/dist/apps/projects/project.html"
                                       class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">آماده
                                        سازی تحویل پروژه</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">توسعه دهنده سیستم</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="/admin/src/assets/media/avatars/300-20.jpg" alt="img"/>
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                B
                                            </div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">کامل شد</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="../../demo1/dist/apps/projects/project.html"
                                       class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی
                                    رابیانمی کنند
                                </div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 4:23</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="/admin/src/assets/media/avatars/300-1.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 پروژه ورودی
                                    جدید پرونده ها:</a>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="دی Hummer">
                                        <img src="/admin/src/assets/media/avatars/300-23.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="/admin/src/assets/media/svg/files/pdf.svg"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="../../demo1/dist/apps/projects/project.html"
                                               class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری </a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">1.9mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3"
                                             src="/admin/src/assets/media/svg/files/doc.svg"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">مشتری نتایج تست</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">18kb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3"
                                             src="/admin/src/assets/media/svg/files/css.svg"/>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold"> گزارشات دارایی، مالیه،
                                                سرمایه گذاری</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">20mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::آیتم-->
                                </div>
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">وظیفه
                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>ادغام با
                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>داشبورد پروژه ها:
                                </div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="/admin/src/assets/media/avatars/300-14.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="اسفندcus Dotson">
                                        <img src="/admin/src/assets/media/avatars/300-2.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::آیتم-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="/admin/src/assets/media/stock/600x400/img-29.jpg"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="/admin/src/assets/media/stock/600x400/img-31.jpg"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="/admin/src/assets/media/stock/600x400/img-40.jpg"/>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                </div>
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">کیس جدید
                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>در پروژه طراحی دیتابیس چند
                                    سکویی به شما اختصاص داده شده است
                                </div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <a href="#" class="text-primary fw-bold me-1">رضا علی ابادی</a>
                                        <!--end::user-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">رسید به دست شما سفارش جدید</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="/admin/src/assets/media/avatars/300-4.jpg" alt="img"/>
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">پردازش دیتابی کامل شد</h4>
                                            <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن شوید
                                                که یکپارچگی داده ها موفق است
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Actions-->
                                        <a href="#"
                                           class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">سفارش جدید
                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>برای برنامه ریزی کارگاه و
                                    برآورد بودجه قرار داده شده است
                                </div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <a href="#" class="text-primary fw-bold me-1">محسن علی ابادی</a>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                </div>
                <!--end::timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">نمایش تمام
                فعالیت ها
                <i class="ki-duotone ki-arrow-right fs-3 text-primary">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::فعالیتها drawer-->
<!--begin::چت drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true"
     data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}"
     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle"
     data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::کارت header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::user-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">رضا علی ابادی</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">فعال</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::user-->
            </div>
            <!--end::Title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--begin::Menu 3-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                        data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_invite_friends">دعوت مخاطبین
                                <span class="ms-2" data-bs-toggle="tooltip"
                                      title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">گروه ها</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">ساختن
                                        گروه</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">دعوت
                                        کاربران</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="بزودی">تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::پیام ها-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود
                            پیشنهاد دهید؟?
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که در
                            مخزن گیت هاب مشترک شده اید.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">یکساعت پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">بله فهمیدم
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 ساعت</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را
                            بکشید!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">3 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">شما می توانید با فشردن اینجا بلافاصله این مخزن را باز کنید:
                            <a href="https://keenthemes.com">satrasweb.ir</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 ساعت</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">5 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">کمپانی BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر. غذا
                            و نوشیدنی ارائه می شود
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">فقط</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for out)-->
                <!--begin::پیام(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">فقط</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">Right before vacation season we have the next Bigمعامله for
                            you.
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for in)-->
            </div>
            <!--end::پیام ها-->
        </div>
        <!--end::کارت body-->
        <!--begin::کارت footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="نوشتن پیام"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                        <i class="ki-duotone ki-cloud-add fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::کارت footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::چت drawer-->
<!--begin::چت drawer-->
<div id="kt_خرید_سبد" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="سبد" data-kt-drawer-activate="true"
     data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}"
     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_خرید_سبد_toggle"
     data-kt-drawer-close="#kt_drawer_خرید_سبد_close">
    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::کارت header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">سبد خرید</h3>
            <!--end::Title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_خرید_سبد_close">
                    <i class="ki-duotone ki-cross fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">ایبلندر</a>
                        <span class="text-gray-400 fw-semibold d-block">بهترین گجت آشپزخانه در سال 2022</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-1.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">پاک کننده هوشمند</a>
                        <span class="text-gray-400 fw-semibold d-block">ابزار هوشمند برای پخت و پز</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-3.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">دوربین</a>
                        <span class="text-gray-400 fw-semibold d-block">دوربین حرفه ای حرفه ای برای لبه</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-8.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                        <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-26.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                        <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-21.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                        <span class="text-gray-400 fw-semibold d-block">پروفایل info,timeline etc</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-34.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::بخش-->
                    <div class="mb-3">
                        <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                        <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::بخش-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                        <span class="text-muted mx-2">برای</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i>
                        </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="/admin/src/assets/media/stock/600x400/img-27.jpg" alt=""/>
                </div>
                <!--end::Pic-->
            </div>
            <!--end::آیتم-->
        </div>
        <!--end::کارت body-->
        <!--begin::کارت footer-->
        <div class="card-footer">
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">کل</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::آیتم-->
            <!--begin::آیتم-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">زیر مجموع</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::آیتم-->
            <!--end::Actions-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">ثبت سفارش</a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::کارت footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::چت drawer-->
<!--end::کشوs-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - ارتقا دهید plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">یک برنامه را ارتقا کنید</h1>
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                        <a href="#" class="link-primary fw-bold">دستورالعمل قیمت گذاری</a>.
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::برنامه ریزی ها-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">ماهانه
                        </button>
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">سالانه
                        </button>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked"
                                                   value="startup"/>
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">استارت آپ
                                            </div>
                                            <div class="fw-semibold opacity-75">برای استارت آپ ها</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                              data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced"/>
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">پیشرفته</div>
                                            <div class="fw-semibold opacity-75">برتر برای 100+ تیم اندازه</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                              data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan"
                                                   value="enterprise"/>
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">شرکت، پروژه
                                                <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">محبوب</span>
                                            </div>
                                            <div class="fw-semibold opacity-75">مقدار برتر برای 1000+ تیم</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                              data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <label
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom"/>
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">سفارشی</div>
                                            <div class="fw-semibold opacity-75">دوباره مجوز سفارشی را دوباره تهیه کنید
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-success">تماس با ما</a>
                                    </div>
                                    <!--end::قیمت-->
                                </label>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-semibold">بهینه برای اندازه 10+ تیم استارت آپ</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-semibold">بهینه برای اندازه 100+ تیم کمپانی</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-cross-circle fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-semibold">بهینه برای 1000+ تیم سازمانی</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-semibold">Optimal for corporations</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود کاربران</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود پروژه Integrations</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر شبکه</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود ابر</span>
                                            <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::برنامه ریزی ها-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">ارتقا طرح</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ارتقا دهید plan-->
<!--begin::Modal - ساختن اپ-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>ساختن اپ</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                     id="kt_modal_create_app_stepper">
                    <!--begin::کناری-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">جزییات</h3>
                                        <div class="stepper-desc">نام اپلیکیشن شما</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">فریمورک ها</h3>
                                        <div class="stepper-desc">انتخاب فریمورک اپلیکیشن</div>
                                    </div>
                                    <!--begin::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">دیتابیس</h3>
                                        <div class="stepper-desc">انتخاب نوع دیتابیس</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">صورتحساب</h3>
                                        <div class="stepper-desc">جزییات پرداخت</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Tags-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">کامل شد</h3>
                                        <div class="stepper-desc">ثبت بازخورد</div>
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::کناری-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                            <span class="required">اپلیکیشن نام</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="نام برنامه منحصر به فرد خود را مشخص کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               name="name" placeholder="" value=""/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">دسته بندی</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="دسته برنامه خود را انتخاب کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:تنظیمات-->
                                        <div class="fv-row">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">دوره های آنلاین سریع</span>
																<span class="fs-7 text-muted">ایجاد یک ساختار متن واضح فقط یک  سئو است</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category"
                                                                   value="1"/>
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-element-11 fs-1 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">بحث های چهره به چهره</span>
																<span class="fs-7 text-muted">ایجاد یک ساختار متن روشن فقط یک جنبه است</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category"
                                                                   value="2"/>
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-timer fs-1 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">آموزش مقدماتی کامل</span>
																<span class="fs-7 text-muted">ایجاد یک متن متن روشن برای نوشتن متن</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category"
                                                                   value="3"/>
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end:تنظیمات-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">انتخاب فریمورک</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="Specify your apps framework">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-html fs-2x text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">پروژه وب پایه</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked"
                                                               name="framework" value="1"/>
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-react fs-2x text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">چارچوب برنامه قوی و انعطاف پذیر</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework"
                                                               value="2"/>
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-angular fs-2x text-danger">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">مدیریت قوی دیتاها</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework"
                                                               value="3"/>
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="ki-duotone ki-vue fs-2x text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">چارچوب سبک و پاسخگو</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework"
                                                               value="4"/>
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="required fs-5 fw-semibold mb-2">نام دیتابیس</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               name="dbname" placeholder="" value="master_db"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                            <span class="required">انتخاب موتور دیتابیس</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="انتخاب your app database engine">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-note text-success fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MYSQL</span>
															<span class="fs-7 text-muted">دیتابیس پایه</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine"
                                                               checked="checked" value="1"/>
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-google text-danger fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">فایربیس</span>
															<span class="fs-7 text-muted">گوگل بیس</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine"
                                                               value="2"/>
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-microsoft text-warning fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span
                                                                class="fs-7 text-muted">Microsoft Fast NoSQL دیتابیس</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine"
                                                               value="3"/>
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">نام بر روی کارت</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="نام دارنده کارت را مشخص کنید">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
                                        </label>
                                        <!--end::Tags-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                               name="card_name" value="مکس اندره"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">شماره کارت</label>
                                        <!--end::Tags-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                   placeholder="شماره کارت را وارد کنید" name="card_number"
                                                   value="4111 1111 1111 1111"/>
                                            <!--end::Input-->
                                            <!--begin::کارت logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="/admin/src/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px"/>
                                                <img src="/admin/src/assets/media/svg/card-logos/mastercard.svg" alt=""
                                                     class="h-25px"/>
                                                <img src="/admin/src/assets/media/svg/card-logos/american-express.svg" alt=""
                                                     class="h-25px"/>
                                            </div>
                                            <!--end::کارت logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">تاریخ انقضا</label>
                                            <!--end::Tags-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="ماه">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="سال">
                                                        <option></option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                      title="Enter a card CVV code">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3"
                                                       maxlength="4" placeholder="CVV" name="card_cvv"/>
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <i class="ki-duotone ki-credit-سبد fs-2hx">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Tags-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold form-label">کارت را برای صورتحساب بیشتر ذخیره
                                                کنید؟?</label>
                                            <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز دارید ،
                                                لطفا برنامه ریزی بودجه را بررسی کنید
                                            </div>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                   checked="checked"/>
                                            <span class="form-check-label fw-semibold text-muted">ذخیره کارت</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bold text-dark mb-3">ریلیز !</h1>
                                    <!--end::Heading-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fw-semibold fs-3">برنامه خود را برای شروع پروژه خود ثبت
                                        کنید.
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="/admin/src/assets/media/illustrations/sketchy-1/9.png" alt=""
                                             class="mw-100 mh-300px"/>
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>برگشت
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
												<span class="indicator-label">ثبت
												<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></span>
                                        <span class="indicator-progress">لطفا صبر کنید...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        ادامه
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ساختن اپ-->
<!--begin::Modal - هدف جدید-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
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
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">تنظیم اولین هدف</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                            <a href="#" class="fw-bold link-primary">دستورالعمل های پروژه</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">عنوان هدف</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                  title="یک نام هدف برای استفاده و مرجع امکانات مشخص کنید">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                        </label>
                        <!--end::Tags-->
                        <input type="text" class="form-control form-control-solid" placeholder="عنوان"
                               name="target_title"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">اختصاص دادن</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="انتخاب عضو" name="target_assign">
                                <option value="">انتخاب user...</option>
                                <option value="1">کارینا کالرک</option>
                                <option value="2">رابرت دو</option>
                                <option value="3">قلی رضایی</option>
                                <option value="4">امید وحیدی</option>
                                <option value="5">محسن برومند</option>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">سررسید</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::تاریخpicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ"
                                       name="due_date"/>
                                <!--end::تاریخpicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">جزییات</label>
                        <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                  placeholder="نوع جزییات"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">برچسب ها</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                        </label>
                        <!--end::Tags-->
                        <input class="form-control form-control-solid" value="مهم" name="tags"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Tags-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">افزودن کاربران</label>
                            <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی
                                بودجه را بررسی کنید
                            </div>
                        </div>
                        <!--end::Tags-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                            <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Tags-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">اعلان ها</label>
                                <div class="fs-7 text-muted">همه اعلان ها توسط تلفن یا ایمیل</div>
                            </div>
                            <!--end::Tags-->
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]"
                                           value="email" checked="checked"/>
                                    <span class="form-check-label fw-semibold">ایمیل</span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]"
                                           value="phone"/>
                                    <span class="form-check-label fw-semibold">تلفن</span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">انصراف</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">ثبت</span>
                            <span class="indicator-progress">لطفا صبر کنید...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal - هدف جدید-->
<!--begin::Modal - نمایش users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">مرور کاربران</h1>
                    <!--end::Title-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی
                        کنید
                        <a href="#" class="link-primary fw-bold">لیست کاربران</a>.
                    </div>
                    <!--end::توضیحات-->
                </div>
                <!--end::Heading-->
                <!--begin::users-->
                <div class="mb-15">
                    <!--begin::لیست-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-6.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">مرادی
                                        نیا
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">کارگردان هنری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$23,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میلاد
                                        مرادی
                                        <span
                                            class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی تحلیلی</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$50,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">جلالی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مهندس نرم افزار</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$75,900</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-5.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن
                                        برومند
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">توسعه دهنده وب</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$10,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">رضا
                                        علی ابادی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">طراح یو ای و یوایکس</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$20,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میکائیل
                                        کرمانی
                                        <span
                                            class="badge badge-light fs-8 fw-semibold ms-2">سرپرست بازاریابی</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$9,300</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-9.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محمد
                                        رصایی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">معمار نرم افزار</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$15,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">امید
                                        وحیدی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مدیر سیستم</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$23,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن
                                        برومند
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">مدیریت اکانت</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$45,800</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-23.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">علی
                                        کاربر
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">طراح سایت</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$90,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">الهام
                                        بارانی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">شرکت دارایی، مالیه، سرمایه گذاری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$5,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-12.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">آنا
                                        کوهی
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">ارتباط مشتری</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$70,000</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-5">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::نام-->
                                    <a href="#"
                                       class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">رابرت
                                        دو
                                        <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی Executive</span></a>
                                    <!--end::نام-->
                                    <!--begin::ایمیل-->
                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                    <!--end::ایمیل-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::فروش-->
                                <div class="text-end">
                                    <div class="fs-5 fw-bold text-dark">$45,500</div>
                                    <div class="fs-7 text-muted">فروش</div>
                                </div>
                                <!--end::فروش-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::user-->
                    </div>
                    <!--end::لیست-->
                </div>
                <!--end::users-->
                <!--begin::Notice-->
                <div class="d-flex justify-content-between">
                    <!--begin::Tags-->
                    <div class="fw-semibold">
                        <label class="fs-6">افزودن کاربران</label>
                        <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی
                            کنید
                        </div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked"/>
                        <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - نمایش users-->
<!--begin::Modal - Users جستجو-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">جستجو کاربران</h1>
                    <div class="text-muted fw-semibold fs-5">همکاران را به پروژه خود دعوت کنید</div>
                </div>
                <!--end::Content-->
                <!--begin::جستجو-->
                <div id="kt_modal_users_search_hوler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                     data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search"
                               value="" placeholder="با نام کاربری ، نام کامل یا ایمیل جستجو کنید ..."
                               data-kt-search-element="input"/>
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                              data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
                        <!--end::Spinner-->
                        <!--begin::ریست-->
                        <span
                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                            data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
                        <!--end::ریست-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::پیشنهادات-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">اخیراً جستجو شده:</h3>
                            <!--end::Heading-->
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="/admin/src/assets/media/avatars/300-6.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">مرادی نیا</span>
                                        <span class="badge badge-light">کارگردان هنری</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">میلاد مرادی</span>
                                        <span class="badge badge-light">بازاریابی تحلیلی</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">جلالی</span>
                                        <span class="badge badge-light">مهندس نرم افزار</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="/admin/src/assets/media/avatars/300-5.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">محسن برومند</span>
                                        <span class="badge badge-light">توسعه دهنده وب</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">رضا علی ابادی</span>
                                        <span class="badge badge-light">طراح یو ای و یوایکس</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                        </div>
                        <!--end::پیشنهادات-->
                        <!--begin::Results(add d-none to below element to hide the کاربران list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                   value="0"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-6.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی
                                                نیا</a>
                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                   value="1"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد
                                                مرادی</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                   value="2"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                   value="3"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-5.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                                برومند</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                   value="4"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا
                                                علی ابادی</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                   value="5"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل
                                                کرمانی</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                   value="6"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-9.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                                رصایی</a>
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                   value="7"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید
                                                وحیدی</a>
                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                   value="8"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                                برومند</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                   value="9"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-23.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی
                                                کاربر</a>
                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                   value="10"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام
                                                بارانی</a>
                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                   value="11"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-12.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا
                                                کوهی</a>
                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                   value="12"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت
                                                دو</a>
                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                   value="13"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-13.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد
                                                مولای</a>
                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                   value="14"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان
                                                کامرانی</a>
                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                   value="15"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-21.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان
                                                ورزقانی</a>
                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                   value="16"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا
                                                علی ابادی</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">انصراف
                                </button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">کاربران
                                    انتخاب شده را اضافه کنید
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">هیچ کاربری پیدا نشد</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="/admin/src/assets/media/illustrations/sketchy-1/1.png" alt=""
                                     class="w-100 h-200px h-sm-325px"/>
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::جستجو-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users جستجو-->
<!--begin::Modal - دعوت دوستs-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">دعوت از دوستان</h1>
                    <!--end::Title-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی
                        کنید
                        <a href="#" class="link-primary fw-bold">صفحه سوالات متداول</a>.
                    </div>
                    <!--end::توضیحات-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts دعوت-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="/admin/src/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>دعوت از
                    مخاطبین جمیل
                </div>
                <!--end::Google Contacts دعوت-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">یا</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3"
                          placeholder="ایمیل ها را اینجا تایپ کنید یا"></textarea>
                <!--end::Textarea-->
                <!--begin::users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">دعوت از کاربران</div>
                    <!--end::Heading-->
                    <!--begin::لیست-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-6.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد
                                        مرادی</a>
                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-5.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                        برومند</a>
                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-25.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی
                                        ابادی</a>
                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل
                                        کرمانی</a>
                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-9.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                        رصایی</a>
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید
                                        وحیدی</a>
                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                        برومند</a>
                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-23.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام
                                        بارانی</a>
                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-12.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت دو</a>
                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-13.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد
                                        مولای</a>
                                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان
                                        کامرانی</a>
                                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-21.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان
                                        ورزقانی</a>
                                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="/admin/src/assets/media/avatars/300-9.jpg"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                        رصایی</a>
                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                    </div>
                    <!--end::لیست-->
                </div>
                <!--end::users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Tags-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">افزودن کاربران</label>
                        <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی
                            کنید
                        </div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                        <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - دعوت دوست-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mوatory for all pages)-->
<script src="/admin/src/assets/plugins/global/plugins.bundle.js"></script>
<script src="/admin/src/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="/admin/src/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="/admin/src/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="/admin/src/assets/js/widgets.bundle.js"></script>
<script src="/admin/src/assets/js/custom/widgets.js"></script>
<script src="/admin/src/assets/js/custom/apps/chat/chat.js"></script>
<script src="/admin/src/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="/admin/src/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="/admin/src/assets/js/custom/utilities/modals/new-target.js"></script>
<script src="/admin/src/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::سفارشی Javascript-->
<!--end::Javascript-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
<script src="/helpers/js/angular.min.js"></script>
<script src="/helpers/js/helpers.js"></script>
<script src="/helpers/js/kamadatepicker.min.js"></script>

<script src="/select2/select2.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
{{--<script src="/chart/highcharts.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}

{{--<script src="/persian_datetimepicker/persian-date.min.js"></script>--}}
<script src="/persian_datetimepicker/js/persianDatepicker.min.js"></script>

<script>
    var app = angular.module("myApp", []);
    app.config(function ($interpolateProvider, $httpProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');

        // $httpProvider.defaults.xsrfCookieName = 'csrftoken';
        // $httpProvider.defaults.xsrfHeaderName = 'X-CSRF-TOKEN';
        $httpProvider.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
    });
</script>

@include('dashboard.section.components.sweet_alert')

@yield('Scripts')

</body>
<!--end::Body-->
</html>
