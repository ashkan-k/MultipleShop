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
    <title>قالب مدیریتی مترونیک با 50 دمو جذاب</title>
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
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                 id="kt_app_header_container">
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
                    <a href="../../demo1/dist/index.html" class="d-lg-none">
                        <img alt="Logo" src="/admin/src/assets/media/logos/default-small.svg" class="h-30px"/>
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                         data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        <div
                            class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                            id="kt_app_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-end"
                                 class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">داشبورد ها</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                    <!--begin:داشبورد ها menu-->
                                    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                         data-kt-menu-dismiss="true">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/index.html"
                                                               class="menu-link active">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-element-11 text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">پیش فرض</span>
																			<span class="fs-7 fw-semibold text-muted">گزارشات و آمارها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/ecommerce.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-basket text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">تجارت</span>
																			<span class="fs-7 fw-semibold text-muted">گزارش فروش</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/projects.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-44 text-info fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">پروژه ها</span>
																			<span class="fs-7 fw-semibold text-muted">گراف ها و نمودارها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/online-courses.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-color-swatch text-success fs-1">
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
																				<span class="path11"></span>
																				<span class="path12"></span>
																				<span class="path13"></span>
																				<span class="path14"></span>
																				<span class="path15"></span>
																				<span class="path16"></span>
																				<span class="path17"></span>
																				<span class="path18"></span>
																				<span class="path19"></span>
																				<span class="path20"></span>
																				<span class="path21"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">آنلاین دوره ها</span>
																			<span class="fs-7 fw-semibold text-muted">پیشرفت دانش آموز</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/marketing.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-chart-simple text-dark fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">بازاریابی</span>
																			<span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/bidding.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-switch text-warning fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">مناقصه</span>
																			<span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/pos.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">سیستم پوز</span>
																			<span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/dashboards/call-center.html"
                                                               class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-call text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																			</i>
																		</span>
                                                                <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">مرکز تماس</span>
																			<span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
																		</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                                <div class="separator separator-dashed mx-5 my-5"></div>
                                                <!--begin:صفحه فرود-->
                                                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                    <div class="d-flex flex-column me-5">
                                                        <div class="fs-6 fw-bold text-gray-800">صفحه فرود</div>
                                                        <div class="fs-7 fw-semibold text-muted">تک صفحه فرود نمونه با
                                                            قیمت
                                                        </div>
                                                    </div>
                                                    <a href="../../demo1/dist/landing.html"
                                                       class="btn btn-sm btn-primary fw-bold">کاوش کنید</a>
                                                </div>
                                                <!--end:صفحه فرود-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div
                                                class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">داشبورد
                                                    ها</h4>
                                                <!--end:Heading-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/logistics.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">حمل و نقل</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/website-analytics.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">وب سایت آنالیتیکس</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/finance-performance.html"
                                                       class="menu-link py-2">
                                                        <span
                                                            class="menu-title">دارایی، مالیه، سرمایه گذاری کارایی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/store-analytics.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">فروشگاه آنالیتیکس</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/social.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">شبکه اجتماعی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/delivery.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">تحویل</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/crypto.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">کریپتو</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/school.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">مدرسه</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/podcast.html"
                                                       class="menu-link py-2">
                                                        <span class="menu-title">پادکست</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:داشبورد ها menu-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-end"
                                 class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">صفحات</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                    <!--begin:صفحات menu-->
                                    <div class="menu-active-bg px-4 px-lg-0">
                                        <!--begin:Tabs nav-->
                                        <div class="d-flex w-100 overflow-auto">
                                            <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_pages">عمومی</a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_account">اکانت</a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_authentication">احراز
                                                        هویت</a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_utilities">ابزارها</a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_widgets">ابزارک</a>
                                                </li>
                                                <!--end:Nav item-->
                                            </ul>
                                        </div>
                                        <!--end:Tabs nav-->
                                        <!--begin:Tab content-->
                                        <div class="tab-content py-4 py-lg-8 px-lg-7">
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane active w-lg-1000px"
                                                 id="kt_app_header_menu_pages_pages">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">کاربر
                                                                    پروفایل</h4>
                                                                <!--end:Menu heading-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">بررسی اجمالی</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">پروژه ها</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/campaigns.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">کمپین ها</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/documents.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">اسناد</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/followers.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">فالوورها</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/pages/user-profile/activity.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">فعالیت</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">شرکت</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/about.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">درباره ی ما</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/team.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">تیم ما</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/contact.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">تماس با ما</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/licenses.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">مجوزها</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/sitemap.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">نقشه سایت</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        مشاغل</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/careers/list.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">لیست مشاغل</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/careers/apply.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">مشاغل تایید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">سوالات
                                                                        متداول</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/faq/classic.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">سوالات متداول کلاسیک</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/faq/extended.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">سوالات متداول تمدید شده</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        مقالات</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/blog/home.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">مقالات خانه</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/blog/post.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">صفحه تکی مقالات</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">قیمت
                                                                        گذاری</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/pricing/column.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">قیمت گذاری ستونی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/pricing/table.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">جدول قیمت گذاری</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">شبکه
                                                                        اجتماعی</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/social/feeds.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">تغذیه</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/social/activity.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">فعالیت</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/social/followers.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">فالوورها</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/pages/social/settings.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">تنظیمات</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4">
                                                        <img src="/admin/src/assets/media/stock/600x600/img-82.jpg"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-5 mb-6 mb-lg-0">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/overview.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">بررسی اجمالی</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/settings.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">تنظیمات</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/security.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">امنیت</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/activity.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">فعالیت</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/billing.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">صورتحساب</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/statements.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">بیانه ها</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/referrals.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">مراجعات</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/api-keys.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">کلید ای پی ای</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../demo1/dist/account/logs.html"
                                                                       class="menu-link">
                                                                        <span class="menu-title">گزارش</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-7">
                                                        <img src="/admin/src/assets/media/stock/900x600/46.jpg"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane w-lg-1000px"
                                                 id="kt_app_header_menu_pages_authentication">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">شرکت قالب
                                                                بندی</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/corporate/ورود.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ورود</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/corporate/signup.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ثبت نام</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/corporate/دو عاملی.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">دو عاملی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/corporate/reset-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/corporate/new-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">قالب بندی</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/overlay/ورود.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ورود</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/overlay/signup.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ثبت نام</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/overlay/دو عاملی.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">دو عاملی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/overlay/reset-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/overlay/new-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">قالب بندی
                                                                خلاقانه</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/creative/ورود.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ورود</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/creative/signup.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ثبت نام</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/creative/دو عاملی.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">دو عاملی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/creative/new-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">قالب بندی
                                                                فانتزی</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/fancy/ورود.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ورود</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/fancy/signup.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ثبت نام</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/fancy/دو عاملی.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">دو عاملی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/fancy/reset-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/layouts/fancy/new-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">عمومی</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/extended/multi-steps-signup.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ثبت نام چند مرحله ای</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/welcome.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">پیام خوش امد گویی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/verify-email.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">تایید ایمیل</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/coming-soon.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">بزودی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/password-confirmation.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">تایید کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/account-deactivated.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">اکانت غیرفعال</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/error-404.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">خطایی 404</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/general/error-500.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">خطایی 500</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">قالب های
                                                                ایمیل</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/welcome-message.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">پیام خوش امد گویی</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/reset-password.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/subscription-confirmed.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">اشتراک تایید شده</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/card-declined.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">کارت اعتباری رد شده</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/promo-1.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">حرفه ای  1</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/promo-2.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">حرفه ای  2</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../demo1/dist/authentication/email/promo-3.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">حرفه ای  3</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-7">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">عمومی
                                                                        مودال ها</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/general/invite-friends.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">دعوت از دوستان</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/general/view-users.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">نمایش کاربران</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/general/select-users.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">انتخاب کاربران</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/general/upgrade-plan.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ارتقا طرح</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/general/share-earn.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">به اشتراک بگذارید و کسب کنید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/forms/new-target.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">هدف جدید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/forms/new-card.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">کارت جدید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/forms/new-address.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">آدرس های جدید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/forms/create-api-key.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">ساختن ای پی آی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/forms/bidding.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">مناقصه</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">پیشرفته
                                                                        مودال ها</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/create-app.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن اپ</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/create-campaign.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن کمپین</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/create-account.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">ساختن بیزینس </span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/create-project.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن پروژه</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">کیف پول</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">پیشنهاد معامله</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/دو عاملی-authentication.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">احراز هویت دومرحله ای</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        جستجو</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/search/horizontal.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">افقی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/search/vertical.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">عمودی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/search/users.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">کاربران</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/search/select-location.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">مکان را انتخاب کنید</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        ویزارد</h4>
                                                                    <!--end:Menu heading-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/horizontal.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">افقی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/vertical.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">عمودی</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/دو عاملی-authentication.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">احراز هویت دومرحله ای</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/create-app.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن اپ</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/create-campaign.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن کمپین</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/create-account.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن اکانت</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/create-project.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">ساختن پروژه</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                           class="menu-link">
                                                                            <span class="menu-title">کیف پول</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../demo1/dist/utilities/wizards/offer-a-deal.html"
                                                                           class="menu-link">
                                                                            <span
                                                                                class="menu-title">پیشنهاد معامله</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-5 pe-lg-5">
                                                        <img src="/admin/src/assets/media/stock/600x600/img-84.jpg"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/lists.html"
                                                               class="menu-link">
                                                                <span class="menu-title">لیست ها</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/statistics.html"
                                                               class="menu-link">
                                                                <span class="menu-title">امار</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/charts.html"
                                                               class="menu-link">
                                                                <span class="menu-title">نمودار ها</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/mixed.html"
                                                               class="menu-link">
                                                                <span class="menu-title">مخلوط</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/tables.html"
                                                               class="menu-link">
                                                                <span class="menu-title">جداول</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/widgets/feeds.html"
                                                               class="menu-link">
                                                                <span class="menu-title">تغذیه</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-8">
                                                        <img src="/admin/src/assets/media/stock/900x600/44.jpg"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->
                                        </div>
                                        <!--end:Tab content-->
                                    </div>
                                    <!--end:صفحات menu-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-end"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">اپلیکیشن</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">پروژه ها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پروژه ها من</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">مشاهده پروژه</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">اهداف</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">بودجه</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کاربران</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فایل ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/projects/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فعالیت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/projects/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تنظیمات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-hوسبد fs-2"></i>
													</span>
													<span class="menu-title">فروشگاه</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">کاتالوگ</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">محصولات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">دسته بندی ها</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن محصول</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title"> محصولات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن دسته بندی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title"> دسته بندی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">فروش</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">لیست سفارشات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">جزییات سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title"> سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">مشتریان</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">لیست مشتریان</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مشتریان جزییات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">گزارشات</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">محصولات مشاهده شده</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">فروش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">برگشتی ها</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مشتری سفارشات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">حمل دریایی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تنظیمات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-chart fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">مرکز پشتیبانی </span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">بررسی اجمالی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">تیکت ها</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/support-center/tickets/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">تیکت لیست</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/support-center/tickets/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">تیکت نمایش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">آموزشها</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/support-center/tutorials/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">آموزشها لیست</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/support-center/tutorials/post.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">پست های آموزشی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/faq.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">سوالات متداول</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">مجوزها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تماس با ما</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-shield-tick fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">کاربر مدیریت</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">کاربران</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">کاربران لیست</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/user-management/users/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">نمایش کاربر</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">سطح دسترسی</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/user-management/roles/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">سطح دسترسی لیست</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/user-management/roles/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">نمایش سطح دسترسی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/user-management/permissions.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">مجوزها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-phone fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">مخاطبین</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/contacts/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">شروع شدن</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/contacts/add-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افزودن مخاطب</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/contacts/edit-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title"> تماس با ما</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/contacts/view-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش تماس با ما</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-basket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">اشتراک ها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/subscriptions/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">شروع شدن</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/subscriptions/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">لیست اشتراک</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/subscriptions/add.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افزودن اشتراک</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/subscriptions/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش اشتراک ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-briefcase fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">مشتریان</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/customers/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">شروع شدن</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">لیست مشتریان</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">جزییات مشتریان</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-credit-سبد fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">فاکتور مدیریت</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="left-start"
                                                 class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">پروفایل</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/invoices/view/invoice-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">فاکتور1</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/invoices/view/invoice-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">فاکتور2</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/apps/invoices/view/invoice-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">فاکتور 3</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ساختن فاکتور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-file-added fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">مدیر پرونده</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/file-manager/folders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پوشه ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/file-manager/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فایل ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/file-manager/blank.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دایرکتوری خالی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/file-manager/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تنظیمات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-sms fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">صندوق پیام</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پیام ها</span>
                                                    <span class="menu-badge">
																<span class="badge badge-light-success">3</span>
															</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ارسال</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش & پاسخ</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-message-text-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
													<span class="menu-title">چت</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">خصوصی چت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">گروه چت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کشو چت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
													<span class="menu-icon">
														<i class="ki-duotone ki-calendar-8 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
													</span>
                                            <span class="menu-title">تقویم</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-end"
                                 class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">قالب بندی ها</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                    <!--begin:داشبورد ها menu-->
                                    <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6"
                                         data-kt-menu-dismiss="true">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-6">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                            قالب بندی ها</h4>
                                                        <!--end:Heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/layouts/light-sidebar.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">ساید بار روشن</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/layouts/dark-sidebar.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">سایدبار تیره</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/layouts/light-header.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">هدر روشن</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/layouts/dark-header.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">هدر تیره</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                            نوار ابزار</h4>
                                                        <!--end:Heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/toolbars/classic.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">کلاسیک</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/toolbars/saas.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">ساس</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/toolbars/accounting.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">حسابداری</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/toolbars/extended.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">تمدید شده</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../demo1/dist/toolbars/reports.html"
                                                               class="menu-link">
																		<span class="menu-bullet">
																			<span
                                                                                class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
																		</span>
                                                                <span class="menu-title">گزارشات</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                                <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>
                                                <!--begin:قالب بندی سازنده-->
                                                <div
                                                    class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                                                    <div class="d-flex flex-column me-5">
                                                        <div class="fs-6 fw-bold text-gray-800">قالب بندی سازنده</div>
                                                        <div class="fs-7 fw-semibold text-muted">سفارشی کردن، نمایش و
                                                            صادرات
                                                        </div>
                                                    </div>
                                                    <a href="Https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                                       class="btn btn-sm btn-primary fw-bold">سازنده</a>
                                                </div>
                                                <!--end:قالب بندی سازنده-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                                                <img src="/admin/src/assets/media/stock/900x600/45.jpg" class="rounded mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:داشبورد ها menu-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-end"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">کمک</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                           target="_blank"
                                           title="بیش از 200 کامپوننت داخلی، پلاگین و راه حل های آماده برای استفاده را بررسی کنید"
                                           data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                           data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">کامپوننت ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs"
                                           target="_blank" title="اسناد کامل را بررسی کنید" data-bs-toggle="tooltip"
                                           data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-abstract-26 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">اسناد</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                           target="_blank">
													<span class="menu-icon">
														<i class="ki-duotone ki-code fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                            <span class="menu-title">تغییرات v8.1.8</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::جستجو-->
                        <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                            <!--begin::جستجو-->
                            <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                 data-kt-search-keypress="true" data-kt-search-min-length="2"
                                 data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
                                 data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                                 data-kt-menu-placement="bottom-end">
                                <!--begin::جستجو toggle-->
                                <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                     id="kt_header_search_toggle">
                                    <div
                                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                        <i class="ki-duotone ki-magnifier fs-2 fs-lg-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::جستجو toggle-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                     class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Form-->
                                        <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                              autocomplete="off">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Input-->
                                            <input type="text"
                                                   class="search-input form-control form-control-flush ps-10"
                                                   name="search" value="" placeholder="جستجو..."
                                                   data-kt-search-element="input"/>
                                            <!--end::Input-->
                                            <!--begin::Spinner-->
                                            <span
                                                class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                data-kt-search-element="spinner">
														<span
                                                            class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
                                            <!--end::Spinner-->
                                            <!--begin::ریست-->
                                            <span
                                                class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                data-kt-search-element="clear">
														<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <!--end::ریست-->
                                            <!--begin::Toolbar-->
                                            <div class="position-absolute top-50 end-0 translate-middle-y"
                                                 data-kt-search-element="toolbar">
                                                <!--begin::اولویت ها toggle-->
                                                <div data-kt-search-element="preferences-show"
                                                     class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                     data-bs-toggle="tooltip" title="نمایش تنظیمات جستجو">
                                                    <i class="ki-duotone ki-setting-2 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::اولویت ها toggle-->
                                                <!--begin::پیشرفته search toggle-->
                                                <div data-kt-search-element="advanced-options-form-show"
                                                     class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                     data-bs-toggle="tooltip" title="تنظیمات بیشتر">
                                                    <i class="ki-duotone ki-down fs-2"></i>
                                                </div>
                                                <!--end::پیشرفته search toggle-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </form>
                                        <!--end::Form-->
                                        <!--begin::Separator-->
                                        <div class="separator border-gray-200 mb-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::اخیرly viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::آیتمs-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::دسته بندی title-->
                                                <h3 class="fs-5 text-muted m-0 pb-5"
                                                    data-kt-search-element="category-title">کاربران</h3>
                                                <!--end::دسته بندی title-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="/admin/src/assets/media/avatars/300-6.jpg" alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">کارینا کالرک</span>
                                                        <span
                                                            class="fs-7 fw-semibold text-muted">مدیریت بازاریابی</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="/admin/src/assets/media/avatars/300-2.jpg" alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">غلامی</span>
                                                        <span class="fs-7 fw-semibold text-muted">مهندس نرم افزار</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="/admin/src/assets/media/avatars/300-9.jpg" alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">حسینی</span>
                                                        <span
                                                            class="fs-7 fw-semibold text-muted">طراح یو ای و یوایکس</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="/admin/src/assets/media/avatars/300-14.jpg" alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">موسوی</span>
                                                        <span class="fs-7 fw-semibold text-muted">کارگردان هنری</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="/admin/src/assets/media/avatars/300-11.jpg" alt=""/>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">بناری</span>
                                                        <span class="fs-7 fw-semibold text-muted">System مدیریت</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::دسته بندی title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">مشتریان</h3>
                                                <!--end::دسته بندی title-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="/admin/src/assets/media/svg/brand-logos/volicity-9.svg"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">کمپانی ریبرندینگ</span>
                                                        <span class="fs-7 fw-semibold text-muted">طراح</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="/admin/src/assets/media/svg/brand-logos/tvit.svg"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">کمپانی ری برندینگ</span>
                                                        <span class="fs-7 fw-semibold text-muted">توسعه دهنده وب</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="/admin/src/assets/media/svg/misc/infography.svg"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">بیزینس آنالیتیکس اپلیکیشن</span>
                                                        <span class="fs-7 fw-semibold text-muted">مدیریت</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="/admin/src/assets/media/svg/brand-logos/leaf.svg"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">اکولیف اپلیکیشن لانچ</span>
                                                        <span class="fs-7 fw-semibold text-muted">بازاریابی</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
                                                                         src="/admin/src/assets/media/svg/brand-logos/tower.svg"
                                                                         alt=""/>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">قدرت گروه وب سایت</span>
                                                        <span class="fs-7 fw-semibold text-muted">گوگل Adwords</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::دسته بندی title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">پروژه ها</h3>
                                                <!--end::دسته بندی title-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-notepad fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">پروژه توسط ساتراس وب</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-frame fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">اپلیکیشن فونیکس</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span
                                                            class="fs-6 fw-semibold">دارایی، مالیه، سرمایه گذاری</span>
                                                        <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <a href="#"
                                                   class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">داشبورد انالیتیکس</span>
                                                        <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::آیتم-->
                                            </div>
                                            <!--end::آیتمs-->
                                        </div>
                                        <!--end::اخیرly viewed-->
                                        <!--begin::اخیرly viewed-->
                                        <div class="mb-5" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Tags-->
                                                <span class="text-muted fs-6 me-2">نتایج اخیر:</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::آیتمs-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-laptop fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">ساتراس
                                                            وب</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">"ملاقات
                                                            پروژه ها</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">مانیتورینگ
                                                            اپلیکیشن لانچ</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">سوالات
                                                            متداول</a>
                                                        <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-sms fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">"اپلیکیشن
                                                            کیت پرو</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-bank fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">اپلیکیشن
                                                            فونیکس</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                                <!--begin::آیتم-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-semibold">"صفحه
                                                            فرود طراح" لانچ</a>
                                                        <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::آیتم-->
                                            </div>
                                            <!--end::آیتمs-->
                                        </div>
                                        <!--end::اخیرly viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">نتیجه اییافت نشد</h3>
                                                <div class="text-muted fs-7">لطفاً با یک پرسش دیگر دوباره امتحان کنید
                                                </div>
                                            </div>
                                            <!--end::Message-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::اولویت ها-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">پیشرفته جستجو</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-sm form-control-solid"
                                                   placeholder="حاوی کلمه است" name="query"/>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::رادیو group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="has"
                                                           checked="checked"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">همه</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="users"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">کاربران</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="orders"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">سفارشات</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="projects"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">پروژه ها</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::رادیو group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="assignedto"
                                                   class="form-control form-control-sm form-control-solid"
                                                   placeholder="اختصاص دادن" value=""/>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="collaborators"
                                                   class="form-control form-control-sm form-control-solid"
                                                   placeholder="همکاران" value=""/>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::رادیو group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="has"
                                                           checked="checked"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">ضمیمه دار</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment"
                                                           value="any"/>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">هیچ</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::رادیو group-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <select name="timezone" aria-label="انتخاب زمان محلی" data-control="select2"
                                                    data-placeholder="date_period"
                                                    class="form-select form-select-sm form-select-solid">
                                                <option value="next">بعدی</option>
                                                <option value="last">قبلی</option>
                                                <option value="between">بین</option>
                                                <option value="on">روشن</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-8">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <input type="number" name="date_number"
                                                       class="form-control form-control-sm form-control-solid"
                                                       placeholder="طول" value=""/>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="date_typer" aria-label="انتخاب زمان محلی"
                                                        data-control="select2" data-placeholder="Period"
                                                        class="form-select form-select-sm form-select-solid">
                                                    <option value="days">روزها</option>
                                                    <option value="weeks">هفته ها</option>
                                                    <option value="months">ماه ها</option>
                                                    <option value="years">سال ها</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="advanced-options-form-cancel">انصراف
                                            </button>
                                            <a href="../../demo1/dist/pages/search/horizontal.html"
                                               class="btn btn-sm fw-bold btn-primary"
                                               data-kt-search-element="advanced-options-form-search">جستجو</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::اولویت ها-->
                                    <!--begin::اولویت ها-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">جستجو پرفرمنس</h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">پروژه ها</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">اهداف</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">برنامه بازاریابی</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">مراجعات</span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                       checked="checked"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">کاربران</span>
                                                <input class="form-check-input" type="checkbox" value="1"/>
                                            </label>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="preferences-dismiss">انصراف
                                            </button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">ذخیره تغییرات
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::اولویت ها-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::جستجو-->
                        </div>
                        <!--end::جستجو-->
                        <!--begin::فعالیتها-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::کشو toggle-->
                            <div
                                class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_activities_toggle">
                                <i class="ki-duotone ki-chart-simple fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--end::کشو toggle-->
                        </div>
                        <!--end::فعالیتها-->
                        <!--begin::اعلان ها-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu- wrapper-->
                            <div
                                class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                                <i class="ki-duotone ki-abstract-4 fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                 data-kt-menu="true" id="kt_menu_notifications">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                     style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">اعلان ها
                                        <span class="fs-8 opacity-75 ps-3">24 گزارش</span></h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                               data-bs-toggle="tab" href="#kt_topbar_notifications_1">هشدارها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                               data-bs-toggle="tab" href="#kt_topbar_notifications_2">بروزرسانی ها</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                               data-bs-toggle="tab" href="#kt_topbar_notifications_3">گزارش</a>
                                        </li>
                                    </ul>
                                    <!--end::Tabs-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                        <!--begin::آیتمs-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">پروژه
                                                            آلیس</a>
                                                        <div class="text-gray-400 fs-7">توسعه فاز 1</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">1 ساعت</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-information fs-2 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">محرمانه</a>
                                                        <div class="text-gray-400 fs-7">اسناد محرمانه کارکنان</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">2 ساعت</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-duotone ki-briefcase fs-2 text-warning">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">کمپانی
                                                            HR</a>
                                                        <div class="text-gray-400 fs-7">مشخصات کارکنان را شریک کنید
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">5 ساعت</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-abstract-12 fs-2 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">پروژه
                                                            ریداکس</a>
                                                        <div class="text-gray-400 fs-7">تم ادمین جدید</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">2 روز</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-colors-square fs-2 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">پروژه
                                                            بریفینگ</a>
                                                        <div class="text-gray-400 fs-7">به روز رسانی وضعیت راه اندازی
                                                            محصول
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">21 دی</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-info">
																	<i class="ki-duotone ki-picture fs-2 text-info"></i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">دارایی
                                                            های بنر</a>
                                                        <div class="text-gray-400 fs-7">مجموعه ای از تصویر بنرها</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">21 دی</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-warning">
																	<i class="ki-duotone ki-color-swatch fs-2 text-warning">
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
																		<span class="path11"></span>
																		<span class="path12"></span>
																		<span class="path13"></span>
																		<span class="path14"></span>
																		<span class="path15"></span>
																		<span class="path16"></span>
																		<span class="path17"></span>
																		<span class="path18"></span>
																		<span class="path19"></span>
																		<span class="path20"></span>
																		<span class="path21"></span>
																	</i>
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">نماد
                                                            دارایی ها</a>
                                                        <div class="text-gray-400 fs-7">مجموعه ای از ایکون ها</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">20 اسفند</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::آیتمs-->
                                        <!--begin::نمایش more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="../../demo1/dist/pages/user-profile/activity.html"
                                               class="btn btn-color-gray-600 btn-active-color-primary">نمایش همه
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                        </div>
                                        <!--end::نمایش more-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                         role="tabpanel">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column px-9">
                                            <!--begin::بخش-->
                                            <div class="pt-10 pb-0">
                                                <!--begin::Title-->
                                                <h3 class="text-dark text-center fw-bold">دسترسی حرفه ای را دریافت
                                                    کنید</h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="text-center text-gray-600 fw-semibold pt-1">رئوس مطالب شما
                                                    را صادق نگه می دارد. آنها جلوی شگفت انگیز بودن شما درمورد رانندگی را
                                                    می گیرند
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Actions-->
                                                <div class="text-center mt-5 mb-9">
                                                    <a href="#" class="btn btn-sm btn-primary px-6"
                                                       data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">ارتقا
                                                        دهید</a>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::بخش-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image"
                                                     src="/admin/src/assets/media/illustrations/sketchy-1/1.png"/>
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                        <!--begin::آیتمs-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">سفارش
                                                        جدید</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">فقط</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">مشتری
                                                        جدید</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">2 ساعت</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">پردازش
                                                        درگاه</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">5 ساعت</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">جستجوی
                                                        کوئری</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">2 روز</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">ارتباط
                                                        کلید دسترسی</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">1 هفته</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">بازیابی
                                                        دیتابیس</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">اسفند 5</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">بروزرسانی
                                                        سیستم</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">اردیبهشت 15</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">اپدیت
                                                        سیستم عامل سرور</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">فروردین 3</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">برگشت
                                                        کلید دسترسی</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">خرداد 30</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">روند
                                                        بازپرداخت</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">تیر 10</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">روند
                                                        برداشت</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">شهریور 10</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::بخش-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500</span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">وظایف
                                                        نامه</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::بخش-->
                                                <!--begin::Tags-->
                                                <span class="badge badge-light fs-8">آذر 10</span>
                                                <!--end::Tags-->
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::آیتمs-->
                                        <!--begin::نمایش more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="../../demo1/dist/pages/user-profile/activity.html"
                                               class="btn btn-color-gray-600 btn-active-color-primary">نمایش همه
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></a>
                                        </div>
                                        <!--end::نمایش more-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::اعلان ها-->
                        <!--begin::چت-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu wrapper-->
                            <div
                                class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative"
                                id="kt_drawer_chat_toggle">
                                <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <span
                                    class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::چت-->
                        <!--begin::من apps links-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu wrapper-->
                            <div
                                class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-11 fs-2 fs-lg-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--begin::من apps-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px"
                                 data-kt-menu="true">
                                <!--begin::کارت-->
                                <div class="card">
                                    <!--begin::کارت header-->
                                    <div class="card-header">
                                        <!--begin::کارت title-->
                                        <div class="card-title">من اپلیکیشن</div>
                                        <!--end::کارت title-->
                                        <!--begin::کارت toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-active-light-primary me-n3"
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-setting-3 fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div
                                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        درگاه ها
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                                                        <span class="ms-2" data-bs-toggle="tooltip"
                                                              title="یک نام هدف برای استفاده و مرجع امکانات مشخص کنید">
																<i class="ki-duotone ki-information fs-6">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                     data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">اشتراک</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">صورتحساب</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">بیانه ها</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px"
                                                                           type="checkbox" value="1" checked="checked"
                                                                           name="notifications"/>
                                                                    <!--end::Input-->
                                                                    <!--end::Tags-->
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">وضعیت</span>
                                                                    <!--end::Tags-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">تنظیمات</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::کارت toolbar-->
                                    </div>
                                    <!--end::کارت header-->
                                    <!--begin::کارت body-->
                                    <div class="card-body py-5">
                                        <!--begin::Scroll-->
                                        <div class="mh-450px scroll-y me-n5 pe-5">
                                            <!--begin::Row-->
                                            <div class="row g-2">
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/amazon.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">AWS</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/angular-icon-1.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">AngularJS</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/atica.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Atica</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/beats-electronics.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Music</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/codeigniter.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Codeigniter</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/bootstrap-4.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Bootstrap</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/google-tag-manager.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">GTM</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/disqus.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Disqus</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Dribble</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/google-play-store.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Play فروشگاه</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/google-podcasts.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">پادکستs</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/figma-1.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Figma</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/github.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">گیت هاب</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/gitlab.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Gitlab</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/instagram-2-1.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">اینستاگرام</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-4">
                                                    <a href="#"
                                                       class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                        <img src="/admin/src/assets/media/svg/brand-logos/pinterest-p.svg"
                                                             class="w-25px h-25px mb-2" alt=""/>
                                                        <span class="fw-semibold">Pinterest</span>
                                                    </a>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::کارت body-->
                                </div>
                                <!--end::کارت-->
                            </div>
                            <!--end::من apps-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::من apps links-->
                        <!--begin::Theme mode-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu toggle-->
                            <a href="#"
                               class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                               data-kt-menu-placement="bottom-end">
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
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
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
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
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
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
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
                        <!--end::Theme mode-->
                        <!--begin::کاربر menu-->
                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="/admin/src/assets/media/avatars/300-1.jpg" alt="user"/>
                            </div>
                            <!--begin::کاربر account menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="/admin/src/assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::کاربرname-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">جلالی
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">حرفه ای</span>
                                            </div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
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
                                    <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">پروفایل
                                        من</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">پروژه ها من</span>
                                        <span class="menu-badge">
													<span
                                                        class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">اشتراک من</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">مراجعات</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/billing.html" class="menu-link px-5">صورتحساب</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">درگاه
                                                ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/statements.html"
                                               class="menu-link d-flex flex-stack px-5">بیانه ها
                                                <span class="ms-2" data-bs-toggle="tooltip"
                                                      title="اظهارات خود را نمایش دهید">
														<i class="ki-duotone ki-information fs-7">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                           value="1" checked="checked" name="notifications"/>
                                                    <span class="form-check-label text-muted fs-7">اعلان ها</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">من بیانه
                                        ها</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                     data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">زبان
												<span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">انگلیسی
												<img class="w-15px h-15px rounded-1 ms-2"
                                                     src="/admin/src/assets/media/flags/united-states.svg" alt=""/></span></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/settings.html"
                                               class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
                                                             src="/admin/src/assets/media/flags/united-states.svg" alt=""/>
													</span>انگلیسی</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/settings.html"
                                               class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="/admin/src/assets/media/flags/spain.svg"
                                                             alt=""/>
													</span>اسپانیایی</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/settings.html"
                                               class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="/admin/src/assets/media/flags/germany.svg"
                                                             alt=""/>
													</span>آلمانی</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/settings.html"
                                               class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="/admin/src/assets/media/flags/japan.svg"
                                                             alt=""/>
													</span>ژاپنی</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo1/dist/account/settings.html"
                                               class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="/admin/src/assets/media/flags/france.svg"
                                                             alt=""/>
													</span>فرانسه</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">اکانت
                                        تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="../../demo1/dist/authentication/layouts/corporate/ورود.html"
                                       class="menu-link px-5">خروج</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::کاربر account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::کاربر menu-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="مشاهده header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
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
                    <a href="../../demo1/dist/index.html">
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
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                         data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                         data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                         data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                         data-kt-scroll-save-state="true">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                             data-kt-menu="true" data-kt-menu-expو="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-11 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">داشبورد ها</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link active" href="../../demo1/dist/index.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پیش فرض</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/dashboards/ecommerce.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فروشگاه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/dashboards/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پروژه ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/dashboards/online-courses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">آنلاین دوره ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/dashboards/marketing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بازاریابی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <div class="menu-inner flex-column collapse"
                                         id="kt_app_sidebar_menu_dashboards_collapse">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/bidding.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">مناقصه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/pos.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">سیستم پوز</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/call-center.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">مرکز تماس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/logistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">حمل و نقل</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                               href="../../demo1/dist/dashboards/website-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">وب سایت آنالیتیکس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                               href="../../demo1/dist/dashboards/finance-performance.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">دارایی، مالیه، سرمایه گذاری کارایی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                               href="../../demo1/dist/dashboards/store-analytics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">فروشگاه آنالیتیکس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/social.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">شبکه اجتماعی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/delivery.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">تحویل</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/crypto.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">کریپتو</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/school.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">مدرسه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/podcast.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">پادکست</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/landing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">صفحه فرود</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                               data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                               data-kt-toggle-text="بستن">
                                                <span data-kt-toggle-text-target="true">مشاهده بیشتر</span>
                                                <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item pt-5">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">صفحات</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-address-book fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">کاربر پروفایل</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بررسی اجمالی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پروژه ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">کمپین ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">اسناد</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فالوورها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فعالیت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-plus fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</span>
											<span class="menu-title">اکانت</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بررسی اجمالی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تنظیمات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/security.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">امنیت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فعالیت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/billing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">صورتحساب</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/statements.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بیانه ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/referrals.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مراجعات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/api-keys.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">کلید ای پی ای</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/account/logs.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">گزارش</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-user fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">احراز هویت</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">شرکت قالب بندی</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/corporate/ورود.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ورود</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/corporate/signup.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ثبت نام</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/corporate/دو عاملی.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دو عاملی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">قالب بندی</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/overlay/ورود.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ورود</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/overlay/signup.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ثبت نام</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/overlay/دو عاملی.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دو عاملی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/overlay/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/overlay/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">قالب بندی خلاقانه</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/creative/ورود.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ورود</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/creative/signup.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ثبت نام</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/creative/دو عاملی.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دو عاملی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/creative/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/creative/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">قالب بندی فانتزی</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/fancy/ورود.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ورود</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/fancy/signup.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ثبت نام</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/fancy/دو عاملی.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دو عاملی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/fancy/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/layouts/fancy/new-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کلمه عبور جدید</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">قالب های ایمیل</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/welcome-message.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پیام خوش امد گویی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ریست کلمه عبور</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/subscription-confirmed.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">اشتراک تایید شده</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/card-declined.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کارت اعتباری رد شده</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/promo-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">حرفه ای  1</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/promo-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">حرفه ای  2</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/authentication/email/promo-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">حرفه ای  3</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/extended/multi-steps-signup.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">ثبت نام چند مرحله ای</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/welcome.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پیام خوش امد گویی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/verify-email.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تایید ایمیل</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/coming-soon.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بزودی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/password-confirmation.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تایید کلمه عبور</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/account-deactivated.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">اکانت غیرفعال</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/error-404.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">خطایی 404</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/authentication/general/error-500.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">خطایی 500</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="left-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-file fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">شرکت</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/about.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">درباره ی ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/team.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تیم ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تماس با ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مجوزها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/sitemap.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">نقشه سایت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-39 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">شبکه اجتماعی</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/social/feeds.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تغذیه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/social/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فعالیت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/social/followers.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فالوورها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/social/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تنظیمات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bank fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مقالات</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/blog/home.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مقالات خانه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/blog/post.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">صفحه تکی مقالات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-chart-pie-3 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">سوالات متداول</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/faq/classic.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">سوالات متداول کلاسیک</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/faq/extended.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">سوالات متداول تمدید شده</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-bucket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">قیمت گذاری</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/pricing/column.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">قیمت گذاری ستونی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/pricing/table.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">جدول قیمت گذاری</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-call fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
													<span class="path7"></span>
													<span class="path8"></span>
												</i>
											</span>
											<span class="menu-title">مشاغل</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/careers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">لیست مشاغل</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مشاغل تایید</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-color-swatch fs-2">
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
													<span class="path11"></span>
													<span class="path12"></span>
													<span class="path13"></span>
													<span class="path14"></span>
													<span class="path15"></span>
													<span class="path16"></span>
													<span class="path17"></span>
													<span class="path18"></span>
													<span class="path19"></span>
													<span class="path20"></span>
													<span class="path21"></span>
												</i>
											</span>
											<span class="menu-title">ابزارها</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">مودال ها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">عمومی</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/general/invite-friends.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">دعوت از دوستان</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/general/view-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">نمایش کاربران</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/general/select-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">انتخاب کاربران</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ارتقا طرح</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/general/share-earn.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">به اشتراک بگذارید و کسب کنید</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">فرم ها</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/forms/new-target.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">هدف جدید</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/forms/new-card.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">کارت جدید</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/forms/new-address.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">آدرس های جدید</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ساختن ای پی آی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/forms/bidding.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مناقصه</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">ویزارد</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/create-app.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ساختن اپ</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ساختن کمپین</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/create-account.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ساختن بیزینس </span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/create-project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">ساختن پروژه</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">کیف پول</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">پیشنهاد معامله</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/wizards/دو عاملی-authentication.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">احراز هویت دومرحله ای</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">جستجو</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/search/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">کاربران</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link"
                                                           href="../../demo1/dist/utilities/modals/search/select-location.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مکان را انتخاب کنید</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">جستجو</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/search/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افقی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/search/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">عمودی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/search/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کاربران</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/search/select-location.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">مکان</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">ویزارد</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افقی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">عمودی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/دو عاملی-authentication.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">احراز هویت دومرحله ای</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/create-app.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ساختن اپ</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/create-campaign.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ساختن کمپین</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/create-account.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ساختن اکانت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/create-project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">ساختن پروژه</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کیف پول</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پیشنهاد معامله</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-7 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">ابزارک</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/lists.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">لیست ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/statistics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">امار</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/charts.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">نمودار ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/mixed.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مخلوط</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/tables.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">جداول</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/widgets/feeds.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تغذیه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item pt-5">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">اپلیکیشن</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-41 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">پروژه ها</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پروژه ها من</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مشاهده پروژه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">اهداف</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بودجه</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">کاربران</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فایل ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فعالیت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تنظیمات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-basket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">فروشگاه</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">کاتالوگ</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/products.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">محصولات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">دسته بندی ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افزودن محصول</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title"> محصولات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افزودن دسته بندی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title"> دسته بندی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">فروش</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/sales/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">لیست سفارشات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/sales/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">جزییات سفارش</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">افزودن سفارش</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title"> سفارش</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">مشتریان</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/customers/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">لیست مشتریان</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/customers/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">جزییات مشتریان</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">گزارشات</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/reports/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">محصولات مشاهده شده</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/reports/sales.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فروش</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/reports/returns.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">برگشتی ها</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">مشتری سفارشات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">حمل دریایی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تنظیمات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-25 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مخاطبین</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">شروع شدن</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">افزودن مخاطب</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title"> تماس با ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">نمایش تماس با ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-chart fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مرکز پشتیبانی </span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">بررسی اجمالی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">تیکت ها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/tickets/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تیکت ها لیست</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/tickets/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش تیکت</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">آموزشها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/tutorials/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">آموزشها لیست</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/support-center/tutorials/post.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">پست آموزشی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">سوالات متداول</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مجوزها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تماس با ما</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-28 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">کاربر مدیریت</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">کاربران</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/user-management/users/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">کاربران لیست</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/user-management/users/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش کاربر</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">سطح دسترسی</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/user-management/roles/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">سطح دسترسی لیست</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/user-management/roles/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">نمایش سطح دسترسی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/apps/user-management/permissions.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">مجوزها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-38 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مشتریان</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/apps/customers/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">شروع شدن</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">لیست مشتریان</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">جزییات مشتریان</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-map fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">اشتراک</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link"
                                           href="../../demo1/dist/apps/subscriptions/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">شروع شدن</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">لیست اشتراک</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">افزودن اشتراک</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">نمایش اشتراک ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-credit-سبد fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مدیریت فاکتور</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">نمایش فاکتور ها</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/invoices/view/invoice-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فاکتور1</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/invoices/view/invoice-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فاکتور2</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                   href="../../demo1/dist/apps/invoices/view/invoice-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">فاکتور 3</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">ساختن فاکتور</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-switch fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">مدیر پرونده</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پوشه ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">فایل ها</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">دایرکتوری خالی</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تنظیمات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-sms fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">صندوق پیام</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">پیام ها</span>
                                            <span class="menu-badge">
														<span class="badge badge-success">3</span>
													</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">ارسال</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">نمایش & پاسخ</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-message-text-2 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span>
											<span class="menu-title">چت</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">خصوصی چت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">گروه چت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">کشو چت</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
											<span class="menu-icon">
												<i class="ki-duotone ki-calendar-8 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
												</i>
											</span>
                                    <span class="menu-title">تقویم</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item pt-5">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">قالب بندی ها</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-element-7 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
											<span class="menu-title">قالب بندی تنظیمات</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">ساید بار روشن</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">سایدبار تیره</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/layouts/light-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">هدر روشن</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">هدر تیره</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-icon">
												<i class="ki-duotone ki-text-align-center fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
											<span class="menu-title">نوار ابزار</span>
											<span class="menu-arrow"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/toolbars/classic.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">کلاسیک</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/toolbars/saas.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">ساس</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/toolbars/accounting.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">حسابداری</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/toolbars/extended.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">تمدید شده</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="../../demo1/dist/toolbars/reports.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                            <span class="menu-title">گزارشات</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link"
                                   href="Https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-13 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
                                    <span class="menu-title">قالب بندی سازنده</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item pt-5">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-heading fw-bold text-uppercase fs-7">کمک</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link"
                                   href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                   target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-rocket fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
                                    <span class="menu-title">کامپوننت ها</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs"
                                   target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-abstract-26 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
                                    <span class="menu-title">اسناد</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link"
                                   href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                   target="_blank">
											<span class="menu-icon">
												<i class="ki-duotone ki-code fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</span>
                                    <span class="menu-title">تغییرات v8.1.8</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
                <!--begin::Footer-->
                <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                       class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                       title="200+ کامپوننت ها و افزونه های شخص ثالث">
                        <span class="btn-label">اسناد و کامپوننت ها</span>
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
</body>
<!--end::Body-->
</html>
