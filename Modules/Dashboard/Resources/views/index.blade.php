@extends('layouts.admin-master')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">چند
                        منظوره</h1>
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
                        <li class="breadcrumb-item text-muted">داشبورد ها</li>
                        <!--end::آیتم-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Secondary button-->
                    <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
                       data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">رولور</a>
                    <!--end::Secondary button-->
                    <!--begin::اصلی button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_target">افزودن</a>
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
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::کارت widget 20-->
                        <div
                            class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                            style="background-color: #F1416C;background-image:url('admin/src/assets/media/patterns/vector-1.png')">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::مقدار-->
                                    <span
                                        class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $all_products_count }}</span>
                                    <!--end::مقدار-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">تعداد محصولات</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::کارت body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::پردازش-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div
                                        class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>{{ $active_products_count }} فعال ها</span>
                                        <span>{{ $active_products_percent }}%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar"
                                             style="width: {{ $active_products_percent }}%;" aria-valuenow="50"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::پردازش-->
                            </div>
                            <!--end::کارت body-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5">
                        <div class="card card-flush h-md-50" style="height: 270px !important;">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::واحد پول-->
                                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">تومان</span>
                                        <!--end::واحد پول-->
                                        <!--begin::مقدار-->
                                        <span
                                            class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ number_format($all_incomes) }}</span>
                                        <!--end::مقدار-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>{{ round($degree_difference) }}%</span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">درآمد کل تا امروز</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::کارت body-->
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                         data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::برچسبs-->
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <!--begin::Tags-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Tags-->
                                        <div class="text-gray-500 flex-grow-1 me-4">امروز</div>
                                        <!--end::Tags-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $today_incomes }}تومان
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::Tags-->
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Tags-->
                                        <div class="text-gray-500 flex-grow-1 me-4">هفته اخیر</div>
                                        <!--end::Tags-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $last_week }} تومان</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::Tags-->
                                    <div class="d-flex fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-3px rounded-2 me-3"
                                             style="background-color: #E4E6EF"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Tags-->
                                        <div class="text-gray-500 flex-grow-1 me-4">ماه اخیر</div>
                                        <!--end::Tags-->
                                        <!--begin::Stats-->
                                        <div class="fw-bolder text-gray-700 text-xxl-end">{{ $last_month }} تومان</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Tags-->
                                </div>
                                <!--end::برچسبs-->
                            </div>
                            <!--end::کارت body-->
                        </div>
                    </div>
                </div>
                <!--end::Row-->

                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <div class="col-xl-12">
                        <!--begin::Table widget 14-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">سفارش های امروز</span>
                                    <?php $latest_order = \Modules\Order\Entities\Order::latest()->first(); ?>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6"> {{ $latest_order ? \Carbon\Carbon::parse($latest_order->created_at)->diffForHumans() : '---' }} اخرین بروزرسانی</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="{{ route('orders.index') }}" class="btn btn-sm btn-light">همه سفارش ها</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                            <th>کاربر</th>
                                            <th>محصول</th>
                                            <th>تعداد</th>
                                            <th>نوع پرداخت</th>
                                            <th>وضعیت</th>
                                            <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>

                                        @foreach ($orders as $item)
                                            <tr>
                                                <td>{{ $item->user ? $item->user->full_name() : '---'}}</td>

                                                <td>{{ $item->product ? $item->product->title : '---'}}</td>

                                                <td>{{ $item->count ?: '---'  }}</td>

                                                <td>
                                                    <div
                                                        class="badge badge-light-{{ $item->get_payment_type_class() }} active_modal_buttons">{{ $item->get_payment_type() }}</div>
                                                </td>

                                                <td>
                                                    <div
                                                        class="badge badge-light-{{ $item->get_status_class() }} active_modal_buttons">{{ $item->get_status() }}</div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('orders.show', $item->id) }}"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end: کارت Body-->
                        </div>
                        <!--end::Table widget 14-->
                    </div>

{{--                    <div class="col-xl-12">--}}
{{--                        <!--begin::Chart Widget 35-->--}}
{{--                        <div class="card card-flush h-md-100">--}}
{{--                            <!--begin::Header-->--}}
{{--                            <div class="card-header pt-5 mb-6">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <h3 class="card-title align-items-start flex-column">--}}
{{--                                    <!--begin::امار-->--}}
{{--                                    <div class="d-flex align-items-center mb-2">--}}
{{--                                        <!--begin::واحد پول-->--}}
{{--                                        <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>--}}
{{--                                        <!--end::واحد پول-->--}}
{{--                                        <!--begin::Value-->--}}
{{--                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>--}}
{{--                                        <!--end::Value-->--}}
{{--                                        <!--begin::Tags-->--}}
{{--                                        <span class="badge badge-light-success fs-base">--}}
{{--															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">--}}
{{--																<span class="path1"></span>--}}
{{--																<span class="path2"></span>--}}
{{--															</i>9.2%</span>--}}
{{--                                        <!--end::Tags-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::امار-->--}}
{{--                                    <!--begin::توضیحات-->--}}
{{--                                    <span class="fs-6 fw-semibold text-gray-400">میانگین درآمد</span>--}}
{{--                                    <!--end::توضیحات-->--}}
{{--                                </h3>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::Toolbar-->--}}
{{--                                <div class="card-toolbar">--}}
{{--                                    <!--begin::Menu-->--}}
{{--                                    <button--}}
{{--                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"--}}
{{--                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"--}}
{{--                                        data-kt-menu-overflow="true">--}}
{{--                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">--}}
{{--                                            <span class="path1"></span>--}}
{{--                                            <span class="path2"></span>--}}
{{--                                            <span class="path3"></span>--}}
{{--                                            <span class="path4"></span>--}}
{{--                                        </i>--}}
{{--                                    </button>--}}
{{--                                    <!--begin::Menu 2-->--}}
{{--                                    <div--}}
{{--                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"--}}
{{--                                        data-kt-menu="true">--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3">--}}
{{--                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">عملیات سریع</div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                        <!--begin::Menu separator-->--}}
{{--                                        <div class="separator mb-3 opacity-75"></div>--}}
{{--                                        <!--end::Menu separator-->--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3">--}}
{{--                                            <a href="#" class="menu-link px-3">تیکت جدید</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3">--}}
{{--                                            <a href="#" class="menu-link px-3">جدید مشتری</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"--}}
{{--                                             data-kt-menu-placement="left-start">--}}
{{--                                            <!--begin::Menu item-->--}}
{{--                                            <a href="#" class="menu-link px-3">--}}
{{--                                                <span class="menu-title">گروه جدید</span>--}}
{{--                                                <span class="menu-arrow"></span>--}}
{{--                                            </a>--}}
{{--                                            <!--end::Menu item-->--}}
{{--                                            <!--begin::Menu sub-->--}}
{{--                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">گروه مدیر</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">گروه کارکنان</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                                <!--begin::Menu item-->--}}
{{--                                                <div class="menu-item px-3">--}}
{{--                                                    <a href="#" class="menu-link px-3">گروه عضوها</a>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Menu item-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Menu sub-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3">--}}
{{--                                            <a href="#" class="menu-link px-3">مخاطبین جدید</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                        <!--begin::Menu separator-->--}}
{{--                                        <div class="separator mt-3 opacity-75"></div>--}}
{{--                                        <!--end::Menu separator-->--}}
{{--                                        <!--begin::Menu item-->--}}
{{--                                        <div class="menu-item px-3">--}}
{{--                                            <div class="menu-content px-3 py-3">--}}
{{--                                                <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Menu item-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Menu 2-->--}}
{{--                                    <!--end::Menu-->--}}
{{--                                </div>--}}
{{--                                <!--end::Toolbar-->--}}
{{--                            </div>--}}
{{--                            <!--end::Header-->--}}
{{--                            <!--begin::Body-->--}}
{{--                            <div class="card-body py-0 px-0">--}}
{{--                                <!--begin::Nav-->--}}
{{--                                <ul class="nav d-flex justify-content-between mb-3 mx-9">--}}
{{--                                    <!--begin::آیتم-->--}}
{{--                                    <li class="nav-item mb-3">--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"--}}
{{--                                           data-bs-toggle="tab" id="kt_charts_widget_35_tab_1"--}}
{{--                                           href="#kt_charts_widget_35_tab_content_1">1d</a>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </li>--}}
{{--                                    <!--end::آیتم-->--}}
{{--                                    <!--begin::آیتم-->--}}
{{--                                    <li class="nav-item mb-3">--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"--}}
{{--                                           data-bs-toggle="tab" id="kt_charts_widget_35_tab_2"--}}
{{--                                           href="#kt_charts_widget_35_tab_content_2">5d</a>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </li>--}}
{{--                                    <!--end::آیتم-->--}}
{{--                                    <!--begin::آیتم-->--}}
{{--                                    <li class="nav-item mb-3">--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"--}}
{{--                                           data-bs-toggle="tab" id="kt_charts_widget_35_tab_3"--}}
{{--                                           href="#kt_charts_widget_35_tab_content_3">1m</a>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </li>--}}
{{--                                    <!--end::آیتم-->--}}
{{--                                    <!--begin::آیتم-->--}}
{{--                                    <li class="nav-item mb-3">--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"--}}
{{--                                           data-bs-toggle="tab" id="kt_charts_widget_35_tab_4"--}}
{{--                                           href="#kt_charts_widget_35_tab_content_4">6m</a>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </li>--}}
{{--                                    <!--end::آیتم-->--}}
{{--                                    <!--begin::آیتم-->--}}
{{--                                    <li class="nav-item mb-3">--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"--}}
{{--                                           data-bs-toggle="tab" id="kt_charts_widget_35_tab_5"--}}
{{--                                           href="#kt_charts_widget_35_tab_content_5">1y</a>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </li>--}}
{{--                                    <!--end::آیتم-->--}}
{{--                                </ul>--}}
{{--                                <!--end::Nav-->--}}
{{--                                <!--begin::Tab Content-->--}}
{{--                                <div class="tab-content mt-n6">--}}
{{--                                    <!--begin::Tap pane-->--}}
{{--                                    <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary"--}}
{{--                                             class="min-h-auto h-200px ps-3 pe-6"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Table container-->--}}
{{--                                        <div class="table-responsive mx-9 mt-n6">--}}
{{--                                            <!--begin::Table-->--}}
{{--                                            <table class="table align-middle gs-0 gy-4">--}}
{{--                                                <!--begin::Table head-->--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="min-w-100px"></th>--}}
{{--                                                    <th class="min-w-100px text-end pe-0"></th>--}}
{{--                                                    <th class="text-end min-w-50px"></th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <!--end::Table head-->--}}
{{--                                                <!--begin::Table body-->--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-danger">-139.34</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-success">+576.24</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-success">+124.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <!--end::Table body-->--}}
{{--                                            </table>--}}
{{--                                            <!--end::Table-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table container-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tap pane-->--}}
{{--                                    <!--begin::Tap pane-->--}}
{{--                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary"--}}
{{--                                             class="min-h-auto h-200px ps-3 pe-6"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Table container-->--}}
{{--                                        <div class="table-responsive mx-9 mt-n6">--}}
{{--                                            <!--begin::Table-->--}}
{{--                                            <table class="table align-middle gs-0 gy-4">--}}
{{--                                                <!--begin::Table head-->--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="min-w-100px"></th>--}}
{{--                                                    <th class="min-w-100px text-end pe-0"></th>--}}
{{--                                                    <th class="text-end min-w-50px"></th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <!--end::Table head-->--}}
{{--                                                <!--begin::Table body-->--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-success">+134.02</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-primary">-124.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-danger">+144.04</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <!--end::Table body-->--}}
{{--                                            </table>--}}
{{--                                            <!--end::Table-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table container-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tap pane-->--}}
{{--                                    <!--begin::Tap pane-->--}}
{{--                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary"--}}
{{--                                             class="min-h-auto h-200px ps-3 pe-6"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Table container-->--}}
{{--                                        <div class="table-responsive mx-9 mt-n6">--}}
{{--                                            <!--begin::Table-->--}}
{{--                                            <table class="table align-middle gs-0 gy-4">--}}
{{--                                                <!--begin::Table head-->--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="min-w-100px"></th>--}}
{{--                                                    <th class="min-w-100px text-end pe-0"></th>--}}
{{--                                                    <th class="text-end min-w-50px"></th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <!--end::Table head-->--}}
{{--                                                <!--begin::Table body-->--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-primary">+185.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-danger">+124.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-success">-154.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <!--end::Table body-->--}}
{{--                                            </table>--}}
{{--                                            <!--end::Table-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table container-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tap pane-->--}}
{{--                                    <!--begin::Tap pane-->--}}
{{--                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary"--}}
{{--                                             class="min-h-auto h-200px ps-3 pe-6"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Table container-->--}}
{{--                                        <div class="table-responsive mx-9 mt-n6">--}}
{{--                                            <!--begin::Table-->--}}
{{--                                            <table class="table align-middle gs-0 gy-4">--}}
{{--                                                <!--begin::Table head-->--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="min-w-100px"></th>--}}
{{--                                                    <th class="min-w-100px text-end pe-0"></th>--}}
{{--                                                    <th class="text-end min-w-50px"></th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <!--end::Table head-->--}}
{{--                                                <!--begin::Table body-->--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-warning">+124.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-info">+144.65</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-primary">+154.06</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <!--end::Table body-->--}}
{{--                                            </table>--}}
{{--                                            <!--end::Table-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table container-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tap pane-->--}}
{{--                                    <!--begin::Tap pane-->--}}
{{--                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">--}}
{{--                                        <!--begin::Chart-->--}}
{{--                                        <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary"--}}
{{--                                             class="min-h-auto h-200px ps-3 pe-6"></div>--}}
{{--                                        <!--end::Chart-->--}}
{{--                                        <!--begin::Table container-->--}}
{{--                                        <div class="table-responsive mx-9 mt-n6">--}}
{{--                                            <!--begin::Table-->--}}
{{--                                            <table class="table align-middle gs-0 gy-4">--}}
{{--                                                <!--begin::Table head-->--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th class="min-w-100px"></th>--}}
{{--                                                    <th class="min-w-100px text-end pe-0"></th>--}}
{{--                                                    <th class="text-end min-w-50px"></th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <!--end::Table head-->--}}
{{--                                                <!--begin::Table body-->--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-warning">+114.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-primary">-124.03</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td class="pe-0 text-end">--}}
{{--                                                        <span class="fw-bold fs-6 text-info">+165.86</span>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                                <!--end::Table body-->--}}
{{--                                            </table>--}}
{{--                                            <!--end::Table-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Table container-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tap pane-->--}}
{{--                                </div>--}}
{{--                                <!--end::Tab Content-->--}}
{{--                            </div>--}}
{{--                            <!--end::Body-->--}}
{{--                        </div>--}}
{{--                        <!--end::Chart Widget 35-->--}}
{{--                    </div>--}}
                </div>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
