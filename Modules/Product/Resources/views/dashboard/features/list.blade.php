@extends('layouts.admin-master')
@section('title','فیلتر ها')
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

                        <div class="card-title">
                            <!--begin::جستجو-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5" ng-click="GetFeatures()">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" data-kt-user-table-filter="search" value="{{ request('search') }}"
                                       name="search" id="search_input" ng-model="search"
                                       class="form-control form-control-solid w-250px ps-13" placeholder="جستجو ..."/>
                            </div>
                            <!--end::جستجو-->
                        </div>

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
                                <th>دسته بندی</th>
                                <th>عنوان فیلتر</th>
                                <th>نوع فیلتر</th>
                                <th>گزینه های فیلتر</th>
                                <th>ترتیب نمایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold" id="sortable_items">

                                <tr style="cursor: pointer" ng-repeat="(key, item) in items" id="[[item.id]]">
                                    <td>[[ item.category.title ? item.category.title : '---' ]]</td>

                                    <td>[[ item.title ? item.title : '---' ]]</td>

                                    <td>[[ item.filter_type_name ? item.filter_type_name : '---' ]]</td>

                                    <td>[[ item.filter_item_names ? item.filter_item_names : '---' ]]</td>

                                    <td>[[ item.index ? item.index : '---' ]]</td>

                                    <td class="">
                                        <a ng-click="AddEditFeatureModal(item)"
                                           class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">
                                            ویرایش
                                        </a>

                                        <a ng-click="RemoveFeature(item.id)"
                                           class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">
                                            حذف
                                        </a>
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

                            <input ng-model="instance.title" id="id_title" type="text"
                                   class="form-control form-control-solid" name="title">
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label for="id_filter_type" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">نوع فیلتر</span>
                            </label>

                            <select ng-model="instance.filter_type" id="id_filter_type"
                                    class="form-control form-control-solid">
                                <option value="" disabled>نوع فیلتر را انتخاب کنید</option>
                                <option value="checkbox">چک باکس</option>
                                <option value="radio">دکمه رادیویی</option>
                                <option value="text">متنی</option>
                            </select>
                            <p ng-if="instance.filter_type == 'text'" class="text-danger">تکست باکس امکان فیلتر کردن ندارد. فقط جنبه ی نمایشی خواهد داشت.</p>
                        </div>

                        <div ng-show="(instance.filter_type == 'checkbox' || instance.filter_type == 'radio')" class="d-flex flex-column mb-8 fv-row">
                            <label for="id_is_use_cart" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">آیا به عنوان ویژگی خرید استفاده شود؟</span>
                            </label>

                            <input name="is_use_cart" ng-model="instance.is_use_cart"
                                   class="form-check-input w-45px h-30px" type="checkbox"
                                   id="id_is_use_cart">
                        </div>

                        <div ng-show="instance.is_use_cart" class="d-flex flex-column mb-8 fv-row">
                            <label for="id_is_use_cart_required" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">آیا الزامی است؟</span>
                            </label>

                            <input name="is_use_cart_required" ng-model="instance.is_use_cart_required"
                                   class="form-check-input w-45px h-30px" type="checkbox"
                                   id="id_is_use_cart_required">
                        </div>

                        <div ng-if="instance.filter_type != 'text'" class="d-flex flex-column mb-8 fv-row">
                            <label for="id_is_filter" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">آیا به عنوان فیلتر استفاده شود؟</span>
                            </label>

                            <input name="is_filter" ng-model="instance.is_filter"
                                   class="form-check-input w-45px h-30px" type="checkbox"
                                   id="id_is_filter">
                        </div>

                        <div
                            ng-if="(instance.filter_type == 'checkbox' || instance.filter_type == 'radio')"
                            class="modal-body" style="margin-top: 0px !important;">
                            <div class="col-12 text-justify mt-3">
                                <label class="form-label">
                                    گزینه های فیتلر
                                </label>
                            </div>

                            <div class="col-12 text-justify mt-5">
                                <h5 ng-click="temp_filter_items.unshift({ text: '', index: id+1 })" style="cursor: pointer">

                                    افزودن مورد جدید به اول لیست &nbsp;<a class="text-center" type="button" style="cursor: pointer"
                                       ng-click="temp_filter_items.push({ text: '', index: id+1 })"><i
                                            class="text-center  fa fa-plus trash-custom text-success"></i></a>
                                </h5>
                            </div>

                            <div class="col-12 text-justify mt-3" ng-repeat="(id, j) in temp_filter_items">

                                <div class="row">
                                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1 pl-0 ">
                                        <div class="arrow-v mt-1 modal-body">
                                            [[id + 1]]
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 modal-body">
                                        <div class="form-row">
                                            <input type="text" class="form-control"
                                                   ng-model="j.text"
                                                   placeholder="متن گزینه" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1" style="margin-top: 25px">
                                        <a class="text-center" type="button" style="cursor: pointer"
                                           ng-click="temp_filter_items.push({ text: '', index: id+1 })"><i
                                                class="text-center  fa fa-plus trash-custom text-success"></i></a>
                                        &nbsp;
                                        <a type="button" style="cursor: pointer"
                                           ng-click="temp_filter_items.length > 1 ? RemoveChoice(id, j) : null">
                                            <i class="text-center  fa fa-trash text-red"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
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
    <script>
        $('#id_feature_id').select2();
    </script>

    <script>
        $("#sortable_items").sortable({
            start: function (event, ui) {
                ui.item.startPos = ui.item.index();
            },
            update: function (event, ui) {
                angular.element(this).scope().ChangeFeaturePosition(ui.item.startPos, ui.item.index());
            }
        });
    </script>

    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.items = [];
            $scope.instance = {};
            $scope.question = {};
            $scope.temp_filter_items = [];
            $scope.search = '';

            $scope.init = function () {
                $scope.GetFeatures();

                $scope.temp_filter_items = [{
                    text: "",
                },];
            }

            $scope.$watch('instance.filter_type', function (newValue, oldValue) {
                if (newValue == 'checkbox' || newValue == 'radio') {
                    $scope.instance.filter_items = [{
                        text: "",
                    },];
                }
            });

            $scope.$watch('search', function (newValue, oldValue) {
                $scope.GetFeatures();
            });

            $scope.RemoveChoice = function (id, j) {
                $scope.temp_filter_items.splice(id, 1);
            }

            $scope.ChangeFeaturePosition = function () {
                var data = Object.assign({}, ...$("#sortable_items").sortable('toArray', {attribute: 'id'}).map((i, n) => ({[i]: n + 1})))

                $http.post(`/api/products/features/index/change/`, {'data': data}).then(res => {
                    $scope.GetFeatures();
                    showToast('تغییر چیدمان با موفقیت انجام شد.', 'success');
                }).catch(err => {
                    parseError(err, 'خطایی رخ داد');
                });
            }

            $scope.AddEditFeatureModal = function (obj) {
                if (obj) {
                    $scope.instance = obj;
                    if (obj.is_filter) {
                        $('#id_is_filter').prop('checked', true);
                    }else {
                        $('#id_is_filter').prop('checked', false);
                    }
                    if (obj.is_use_cart) {
                        $('#id_is_use_cart').prop('checked', true);
                    }else {
                        $('#id_is_use_cart').prop('checked', false);
                    }
                    if (obj.is_use_cart_required) {
                        $('#id_is_use_cart_required').prop('checked', true);
                    }else {
                        $('#id_is_use_cart_required').prop('checked', false);
                    }

                    $scope.FormatFilterItems();
                }
                $('#addEditFeatureModal').modal('show');
            }

            $scope.FormatFilterItems = function (){
                if ($scope.instance['filter_items']) {
                    $scope.instance['filter_items'] = $scope.instance['filter_items'].split('،');
                    if ($scope.instance['filter_items']) {

                        $scope.temp_filter_items = [];
                        for (const item in $scope.instance['filter_items']) {
                            if (item == '_indexOf') {
                                break;
                            }
                            $scope.temp_filter_items.push({
                                text: $scope.instance['filter_items'][item],
                            })
                        }

                    }
                }
            }

            $scope.GetFeatures = function () {
                $scope.is_submited = true;

                var url = `/api/products/features/{{ $category->id }}?search=${$scope.search}`

                $http.get(url).then(res => {
                    $scope.is_submited = false;
                    $scope.items = res['data']['data'];
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.RemoveFeature = function (itemId) {
                let title = 'حذف آیتم';
                let description = 'آیا از حذف این آیتم مطمئن هستید؟ این عملیات غیرقابل بازگشت است.';
                let url = '/api/products/features/';
                createSwal("warning", description, title).then((result) => {
                    if (result.value) {
                        $http.delete(`${url}${itemId}/`).then(function () {
                            $scope.GetFeatures();
                            showToast('آیتم مورد نظر با موفقیت حذف شد.', 'success');
                        }).catch(function (err) {
                            parseError(err);
                        })
                    }
                });
            };

            $scope.SubmitAddEditFeature = function () {
                if (!$scope.instance['title']) {
                    showToast('فیلد عنوان اجباری است!', 'error');
                    return;
                }

                if (!$scope.instance['filter_type']) {
                    showToast('فیلد نوع فیلتر اجباری است!', 'error');
                    return;
                }

                if ($scope.instance['filter_type'] == 'checkbox' || $scope.instance['filter_type'] == 'radio') {
                    $scope.instance.filter_items = $scope.temp_filter_items;

                    for (const item in $scope.instance.filter_items) {
                        if (item == '_indexOf') {
                            break;
                        }
                        if (!$scope.instance.filter_items[item]['text']) {
                            showToast(`متن گزینه ${parseInt(item) + 1} خالی است!`, 'error');
                            return;
                        }

                        const texts = [];

                        for (const i in $scope.instance.filter_items) {
                            if ($scope.instance.filter_items[i]['text']) {
                                texts.push($scope.instance.filter_items[i]['text']);
                            }
                        }

                        const error_indexes = texts.filter(x => x == $scope.instance.filter_items[item]['text']);

                        if (error_indexes.length > 1) {
                            showToast(`عنوان گزینه ${error_indexes[0]} تکرار شده است!`, 'error');
                            return false;
                        }
                    }
                }

                var temp_filter_items = '';

                if ($scope.instance['filter_items'] && $scope.instance['filter_items'].length > 0) {

                    for (const item in $scope.instance['filter_items']) {
                        if (item == '_indexOf') {
                            break;
                        }
                        if (temp_filter_items === '') {
                            temp_filter_items += $scope.instance['filter_items'][item]['text'];
                        } else {
                            temp_filter_items = temp_filter_items + '،' + $scope.instance['filter_items'][item]['text'];
                        }
                    }
                }

                $scope.is_submited = true;
                var data = $scope.instance;

                data['category_id'] = {{ $category->id }};
                data['filter_items'] = temp_filter_items;

                $scope.instance['is_filter'] = $("#id_is_filter").is(':checked');
                $scope.instance['is_use_cart'] = $("#id_is_use_cart").is(':checked');
                $scope.instance['is_use_cart_required'] = $("#id_is_use_cart_required").is(':checked');

                if (data['id']) {
                    var url = `/api/products/features/${data['id']}`
                } else {
                    var url = `/api/products/features`
                }

                $http.post(url, data).then(res => {
                    showToast(res['data']['data'], 'success');
                    $scope.is_submited = false;
                    $('#addEditFeatureModal').modal('hide');
                    $scope.GetFeatures();
                    // setTimeout(() => {
                    //     location.reload()
                    // }, 500)
                }).catch(err => {
                    $scope.is_submited = false;
                    if (err['data']['errors'] && err['data']['errors']['category_id']) {
                        showToast(err['data']['errors']['category_id'][0], 'error');
                        return;
                    }
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection

