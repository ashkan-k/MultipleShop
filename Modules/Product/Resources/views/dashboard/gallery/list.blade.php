@extends('layouts.admin-master')
@section('title','گالری تصاویر')
@section('Styles')

@endsection
@section('content')
    <div class="d-flex flex-column flex-column-fluid" ng-init="init()">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        لیست گالری تصاویر محصول {{ $product->title }}</h1>
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

                                <button type="button" ng-click="AddEditGalleryModal()"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_add_user">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن تصویر جدید به
                                    محصول {{ $product->title }}
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
                                <th>محصول</th>
                                <th>عکس</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">

                            <tr ng-repeat="item in items">
                                <td>[[ item.product.title ]]</td>

                                <td>
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="[[ item.image ]]" target="_blank">
                                            <div class="symbol-label">
                                                <img src="[[ item.image ]]" alt="[[ item.title ]]"
                                                     class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                </td>

                                <td class="">
                                    <a ng-click="removeGallery([[item.id]])"
                                       class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">حذف</a>
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

    <div class="modal fade" id="addEditGalleyModal" tabindex="-1" aria-hidden="true">
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
                    <form id="addEditGalleyModal_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">الحاق تصویر به محصول ({{ $product->title }})</h1>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label for="id_image" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">تصویر</span>
                            </label>

                            <input type="file" id="id_image" accept="image/*" multiple class="form-control">
                            <div class="fv-plugins-message-container invalid-feedback">
                                <div data-field="meta_title" data-validator="notEmpty">
                                    <h5 class="text-danger">امکان آپلود چند تصویر به صورت همزمان وجود دارد.</h5>
                                </div>
                            </div>

                            <div ng-if="obj.image" class="input-field col s12 mt-3">
                                <p>تصویر قبلی:</p>
                                <a href="[[ obj.image]]" target="_blank"><img
                                        src="[[ obj.image]]"
                                        width="70"
                                        alt="[[ obj.title ]]"></a>
                            </div>

                        </div>

                        <div class="text-center">
                            <button ng-disabled="is_submited" onclick="$('#addEditGalleyModal').modal('hide');"
                                    type="reset" id="addEditGalleyModal_cancel" class="btn btn-light me-3">انصراف
                            </button>
                            <button type="button" ng-click="SubmitAddEditGallery()" ng-disabled="is_submited"
                                    class="btn btn-primary">
                                <span class="indicator-label">آپلود</span>
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
        app.controller('myCtrl', function ($scope, $http) {
            $scope.items = [];

            $scope.init = function () {
                $scope.GetGallery();
            }

            $scope.AddEditGalleryModal = function (obj) {
                $scope.obj = {};
                if (obj) {
                    $scope.obj = obj;
                }
                $('#addEditGalleyModal').modal('show');
            }

            $scope.GetGallery = function () {
                var url = `{{ route('galleries.api.index', $product->id) }}`

                $http.get(url).then(res => {
                    $scope.is_submited = false;
                    $scope.items = res['data']['data'];
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.removeGallery = function (itemId) {
                let title = 'حذف آیتم';
                let description = 'آیا از حذف این آیتم مطمئن هستید؟ این عملیات غیرقابل بازگشت است.';
                let url = '/api/products/galleries/';
                createSwal("warning", description, title).then((result) => {
                    if (result.value) {
                        $http.delete(`${url}${itemId}/`).then(function () {
                            showToast('آیتم مورد نظر با موفقیت حذف شد.', 'success');
                            $scope.GetGallery();
                        }).catch(function (err) {
                            parseError(err);
                        })
                    }
                });
            };

            $scope.SubmitAddEditGallery = function (type = 'create') {
                if (!$("#id_image")[0].files[0]) {
                    showToast('فیلد تصویر اجباری است!', 'error');
                    return;
                }

                fd = new FormData();
                for (item = 0; item < $("#id_image")[0].files.length; item++){
                    fd.append('image[]', $("#id_image")[0].files[item]);
                }

                $scope.is_submited = true;

                var url = `{{ route('galleries.api.store', $product->id) }}`

                $http.post(url, fd, {
                    headers: {
                        'Content-Type': undefined
                    },
                }).then(res => {
                    showToast(res['data']['data'], 'success');
                    $scope.is_submited = false;
                    $scope.obj = {};

                    $('#id_image').val('');
                    $('#addEditGalleyModal').modal('hide');
                    $scope.GetGallery();

                }).catch(err => {
                    $scope.is_submited = false;
                    if (err['data']['errors']['image']) {
                        showToast(err['data']['errors']['image'][0], 'error');
                        showToast(err['data']['errors']['image'][1], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

