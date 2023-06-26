@extends('layouts.admin-master')
@section('title','فیلتر ها')
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
                        لیست فیلتر های دسته بندی {{ $category->title }}</h1>
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
                            <a href="{{ route('products.index') }}" class="text-muted text-hover-primary">محصولات</a>
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

                                <button type="button" ng-click="AddEditFeatureModal()"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن فیلتر جدید به
                                    دسته بندی {{ $category->title }}
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
                                <th>دسته بندی</th>
                                <th>عنوان فیلتر</th>
                                <th>نوع فیلتر</th>
                                <th>گزینه های فیلتر</th>
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

                                    <td>{{$item->category ? $item->category->title : 'ندارد'}}</td>

                                    <td>{{ $item->title ?: '---'  }}</td>

                                    <td>{{ $item->filter_type ?: '---'  }}</td>

                                    <td>{{ $item->filter_items ?: '---'  }}</td>

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
                                                <a ng-click="AddEditFeatureModal({{ $item }})" class="menu-link px-3"
                                                   data-kt-features-table-filter="delete_row">ویرایش</a>
                                            </div>
                                            <div class="menu-item px-3">

                                                <form
                                                    action="{{ route('features.destroy' , $item->id) }}?next_url={{ request()->fullUrl() }}"
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

    <div class="modal fade" id="addEditFeatureModal" tabindex="-1" aria-hidden="true">
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
                    <form id="addEditFeatureModal_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">الحاق فیلتر به دسته بندی ({{ $category->title }})</h1>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label for="id_title" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان</span>
                            </label>

                            <input ng-model="obj.title" id="id_title" type="text"
                                   class="form-control form-control-solid" name="title">
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label for="id_is_filter" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">آیا به عنوان فیلتر استفاده شود؟</span>
                            </label>

                            <input name="is_filter" ng-model="obj.is_filter"
                                   class="form-check-input w-45px h-30px" type="checkbox"
                                   id="id_is_filter">
                        </div>

                        <div ng-if="obj.is_filter" class="d-flex flex-column mb-8 fv-row">
                            <label for="id_filter_type" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">نوع فیلتر</span>
                            </label>

                            <select ng-model="obj.filter_type" id="id_filter_type" class="form-control form-control-solid">
                                <option value="" disabled>نوع فیلتر را انتخاب کنید</option>
                                <option value="checkbox">چک باکس</option>
                                <option value="radio">رادیو باتن</option>
                                <option value="text">متنی</option>
                            </select>
                        </div>

                        <div ng-if="obj.is_filter" class="d-flex flex-column mb-8 fv-row">
                            <label for="id_filter_items" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">گزینه های فیتلر</span>
                            </label>

                            <input ng-model="obj.filter_items" id="id_filter_items" type="text"
                                   class="form-control form-control-solid" name="filter_items">
                            <p style="color: red">* گزین ها را با ویرگول از یکدیگر جداکنید. مثال (آبی،سبز،زرد)</p>
                        </div>

                        <div class="text-center">
                            <button ng-disabled="is_submited" onclick="$('#addEditFeatureModal').modal('hide');"
                                    type="reset" id="addEditFeatureModal_cancel" class="btn btn-light me-3">انصراف
                            </button>
                            <button type="button" ng-click="SubmitAddEditFeature()" ng-disabled="is_submited"
                                    class="btn btn-primary">
                                <span class="indicator-label">ثبت</span>
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
@endsection

@section('Scripts')
    @include('dashboard.section.components.delete')
    @include('dashboard.section.components.search_box_js')

    <script>
        $('#id_feature_id').select2();

        app.controller('myCtrl', function ($scope, $http) {
            @include('dashboard.section.components.bulk_actions.bulk_actions_js', ['items' => $objects, 'model' => \Modules\Product\Entities\Feature::class])

                $scope.obj = {};

                $scope.AddEditFeatureModal = function (obj) {
                $scope.obj = {};
                if (obj) {
                    $scope.obj = obj;
                    if (obj.is_filter){
                        $('#id_is_filter').prop('checked', true);
                    }
                }
                $('#addEditFeatureModal').modal('show');
            }

            $scope.SubmitAddEditFeature = function () {
                if (!$scope.obj['title']) {
                    showToast('فیلد عنوان اجباری است!', 'error');
                    return;
                }

                if ($scope.obj['is_filter']) {
                    if (!$scope.obj['filter_type']) {
                        showToast('فیلد نوع فیلتر اجباری است!', 'error');
                        return;
                    }
                    if (!$scope.obj['filter_items']) {
                        showToast('فیلد گزینه های فیلتر اجباری است!', 'error');
                        return;
                    }
                }

                $scope.is_submited = true;

                $scope.obj['category_id'] = {{ $category->id }};

                if ($scope.obj['id']) {
                    var url = `/api/admin/features/${$scope.obj['id']}/`
                } else {
                    var url = `/api/admin/features/`
                }

                $http.post(url, $scope.obj).then(res => {
                    showToast(res['data']['data'], 'success');
                    $scope.is_submited = false;
                    setTimeout(() => {
                        location.reload()
                    }, 500)
                }).catch(err => {
                    $scope.is_submited = false;
                    if (err['data']['errors']['category_id']) {
                        showToast(err['data']['errors']['category_id'][0], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

