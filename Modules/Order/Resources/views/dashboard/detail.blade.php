@extends('layouts.admin-master')
@section('title','سفارشات')
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
                        جزییات سفارش</h1>
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
                            <a href="{{ route('orders.index') }}" class="text-muted text-hover-primary">سفارشات</a>
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
                <!--begin::Order details page-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                   href="#kt_ecommerce_sales_order_history" aria-selected="true" role="tab">جزییات
                                    سفارش</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="kt_ecommerce_sales_order_history" role="tab-panel">
                            <!--begin::سفارشات-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::کارت header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>جزییات سفارش</h2>
                                        </div>
                                    </div>
                                    <!--end::کارت header-->
                                    <!--begin::کارت body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td class="text-muted">کاربر</td>
                                                    <td class="fw-bold text-end">{{ $object->user ? $object->user->full_name() : '---'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">محصول</td>
                                                    <td class="fw-bold text-end">{{ $object->product ? $object->product->title : '---'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">سایز</td>
                                                    <td class="fw-bold text-end">{{ $object->size ? $object->size->title : '---'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">رنگ</td>
                                                    <td class="fw-bold text-end">{{ $object->color ? $object->color->title : '---'}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">تعداد</td>
                                                    <td class="fw-bold text-end">{{ $object->count ?: '---'  }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">آدرس</td>
                                                    <td class="fw-bold text-end">{{ $object->address ?: '---'  }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">کد پستی</td>
                                                    <td class="fw-bold text-end">{{ $object->postal_code ?: '---'  }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">نوع پرداخت</td>
                                                    <td class="fw-bold text-end">
                                                        <div
                                                            class="badge badge-light-{{ $object->get_payment_type_class() }} active_modal_buttons">{{ $object->get_payment_type() }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">وضعیت</td>
                                                    <td class="fw-bold text-end">
                                                        <div
                                                            class="badge badge-light-{{ $object->get_status_class() }} active_modal_buttons">{{ $object->get_status() }}</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::کارت body-->
                                </div>
                            </div>
                            <!--end::سفارشات-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Order details page-->
            </div>
            <!--end::Content container-->
        </div>
    </div>
@endsection

