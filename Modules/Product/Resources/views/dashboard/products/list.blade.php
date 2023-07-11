@extends('layouts.admin-master')
@section('title','محصولات')
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
                        لیست محصولات</h1>
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
                            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">محصول</a>
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


        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::کارت-->
                <div class="card">
                    <!--begin::کارت header-->
                    <div class="card-header border-0 pt-6">

                        @include('dashboard.section.components.search_box')

                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin:: فیلتر ها header-->
                                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>فیلتر
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">فیلتر محصولات</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                                        <form id="frm_filter">
                                            @include('dashboard.section.components.filters.select_box', ['items' => $filter_categories, 'name' => 'category_id', 'label' => 'دسته بندی'])
                                            @include('dashboard.section.components.filters.select_box', ['items' => $filter_users, 'name' => 'user_id', 'label' => 'مالک'])
                                            @include('dashboard.section.components.filters.select_box', ['items' => $status_filters, 'name' => 'is_active', 'label' => 'وضعیت'])

                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                        class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                                        data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">
                                                    بستن
                                                </button>
                                                <button type="submit" onclick="$('#frm_filter').submit()"
                                                        class="btn btn-primary fw-semibold px-6">
                                                    فیلتر
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end:: پایان فیلتر ها -->

                                <button onclick="window.location.href='{{ route('products.create') }}'" type="button"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن محصول
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::کارت toolbar-->
                    </div>
                    <!--end::کارت header-->
                    <!--begin::کارت body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_items">
                            <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                               id="checkAll" ng-model="select_all"
                                               ng-checked="items.length == selected_items.length"
                                               ng-change="AddItemsToBulkAction(<?php echo json_encode($objects->pluck('id')->toArray()); ?>, select_all)"
                                               data-kt-check-target="#kt_table_items .form-check-input"/>
                                    </div>
                                </th>
                                <th>کد محصول</th>
                                <th>عنوان</th>
                                <th>عنوان انگلیسی</th>
                                <th>قیمت</th>
                                <th>موجودی</th>
                                <th>عکس</th>
                                <th>مالک</th>
                                <th>دسته بندی</th>
                                <th>قیمت تخفیفی</th>
                                <th>تاریخ شروع تخفیف</th>
                                <th>تاریخ پایان تخفیف</th>
{{--                                <th>شگفت انگیز</th>--}}
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                            @foreach ($objects as $item)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input type="checkbox" ng-model="bulk_checkbox_{{ $item->id }}"
                                                   ng-checked="selected_items.includes({{ $item->id }})"
                                                   ng-change="AddItemsToBulkAction('{{ $item->id }}', bulk_checkbox_{{ $item->id }})"
                                                   class="form-check-input">
                                        </div>
                                    </td>

                                    <td>{{ $item->barcode ?: '---'  }}</td>

                                    <td>{{ $item->title ?: '---'  }}</td>

                                    <td>{{ $item->en_title ?: '---'  }}</td>

                                    <td>{{ $item->price ? number_format($item->price) : '---'  }} تومان</td>

                                    <td>{{ $item->quantity ?: '0'  }} عدد</td>

                                    <td>
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="{{ $item->get_image() }}" target="_blank">
                                                <div class="symbol-label">
                                                    <img src="{{ $item->get_image() }}" alt="{{ $item->title }}"
                                                         class="w-100">
                                                </div>
                                            </a>
                                        </div>
                                    </td>

                                    <td>{{ $item->user ? $item->user->full_name() : '---'  }}</td>

                                    <td>{{ $item->category ? $item->category->title : '---'  }}</td>

                                    <td>{{ $item->discount_price ?: '---'  }}</td>

                                    <td>{{ $item->discount_start_date ?: '---'  }}</td>

                                    <td>{{ $item->discount_end_date ?: '---'  }}</td>

{{--                                    <td>--}}
{{--                                        <div title="برای تبدیل محصول به شگفت انگیز وارد ویرایش محصول شوید و علاوه بر تیک شگفت انگیزی، قیمت و تاریخ دوره تخفیف را هم وارد کنید."--}}
{{--                                             class="badge badge-light-{{ $item->get_special_class() }}">{{ $item->get_special() }}</div>--}}
{{--                                    </td>--}}

                                    <td>
                                        <div
                                            class="badge badge-light-{{ $item->get_status_class() }} active_modal_buttons">{{ $item->get_status() }}</div>
                                    </td>

                                    <td class="">
                                        <a href="{{ route('galleries.index', $item->id) }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">کالری تصاویر</a>
                                        <a href="{{ route('product-features.index') }}?product={{ $item->id }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">ویژگی ها</a>

                                        <a href="#"
                                           class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{ route('products.edit', $item->id) }}" class="menu-link px-3"
                                                   data-kt-features-table-filter="delete_row">ویرایش</a>
                                            </div>
                                            <div class="menu-item px-3">

                                                <form action="{{ route('products.destroy' , $item->id) }}"
                                                      id="delete_form_{{ $loop->index }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a onclick="return Delete('{{ $loop->index }}')"
                                                       class="menu-link px-3"
                                                       data-kt-features-table-filter="delete_row">حذف</a>

                                                </form>


                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!--end::Table-->

                        <div class="row">
                            @include('dashboard.section.components.bulk_actions.bulk_actions', ['actions' => [['delete', 'حذف کردن'], ['is_active', 'فعال کردن'], ['is_not_active', 'غیر فعال کردن']], 'items' => $objects])
                            @include('dashboard.section.components.filters.limit_select_box')


                            {{ $objects->onEachSide(3)->links('dashboard.section.components.pagination') }}

                        </div>

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

@section('Scripts')
    @include('dashboard.section.components.delete')
    @include('dashboard.section.components.search_box_js')

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            @include('dashboard.section.components.bulk_actions.bulk_actions_js', ['items' => $objects, 'model' => \Modules\Product\Entities\Product::class])
        });
    </script>
@endsection

