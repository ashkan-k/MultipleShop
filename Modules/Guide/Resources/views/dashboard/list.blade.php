@extends('layouts.admin-master')
@section('title','راهنما ها')
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
                        لیست راهنما ها</h1>
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
                            <a href="{{ route('guides.index') }}" class="text-muted text-hover-primary">راهنما ها</a>
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
                                <button onclick="window.location.href='{{ route('guides.create') }}'" type="button"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن راهنما
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
                                <th>عنوان</th>
                                <th>عنوان انگلیسی</th>
                                <th>لینک</th>
                                <th>عکس</th>
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

                                    <td>{{ $item->title ?: '---'  }}</td>

                                    <td>{{ $item->en_title ?: '---'  }}</td>

                                    <td>{{ $item->link ?: '---'  }}</td>

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

                                    <td class="">
                                        <a href="#"
                                           class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{ route('guides.edit', $item->id) }}" class="menu-link px-3"
                                                   data-kt-guides-table-filter="delete_row">ویرایش</a>
                                            </div>
                                            <div class="menu-item px-3">

                                                <form action="{{ route('guides.destroy' , $item->id) }}"
                                                      id="delete_form_{{ $loop->index }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a onclick="return Delete('{{ $loop->index }}')"
                                                       class="menu-link px-3"
                                                       data-kt-guides-table-filter="delete_row">حذف</a>

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
                            @include('dashboard.section.components.bulk_actions.bulk_actions', ['actions' => [['delete', 'حذف کردن']], 'items' => $objects])
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
            @include('dashboard.section.components.bulk_actions.bulk_actions_js', ['items' => $objects, 'model' => \Modules\Guide\Entities\Guide::class])
        });
    </script>
@endsection

