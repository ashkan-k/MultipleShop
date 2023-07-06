@extends('layouts.front-master')

@section('title')لیست محصولات@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    <main class="search-page default" ng-init="GetProducts()">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="style-breadcrumb">
                        <div class="breadcrumb-section default">
                            <ul class="breadcrumb-list" >
                                <li>
                                    <a href="#">
                                        <span>{{ __('Online Shop') }} {{ $website_title }}</span>
                                    </a>
                                </li>
                                <li>
                                    <span>
                                        @if(request('q'))
                                            {{ __('Search') }} {{ request('q') }}
                                        @else
                                            @if($lang == 'fa')
                                                {{ $category->title ?: '---' }}
                                            @else
                                                {{ $category->en_title ?: '---' }}
                                            @endif
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-md-1 order-2">
                    <div class="box">
                        <div class="box-header">جستجو در نتایج:</div>
                        <div class="box-content">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       placeholder="نام محصول یا برند مورد نظر را بنویسید…">
                                <span class="ui-input-cleaner"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <div class="box-toggle" data-toggle="collapse" href="#collapseExample1" role="button"
                                 aria-expanded="true" aria-controls="collapseExample1">
                                دسته بندی نتایج
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="collapse show" id="collapseExample1">
                                <div class="ui-input ui-input--quick-search">
                                    <input type="text" class="ui-input-field ui-input-field--cleanable"
                                           placeholder="نام دسته بندی مورد نظر را بنویسید…">
                                    <span class="ui-input-cleaner"></span>
                                </div>
                                <div class="filter-option">
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            نایک
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            رولکس
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            اپل
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">
                                            پوما
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">
                                            ال استار
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">
                                            نیو بالانس
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">
                                            فراری
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <div class="box-toggle" data-toggle="collapse" href="#collapseExample2" role="button"
                                 aria-expanded="true" aria-controls="collapseExample2">
                                برند
                                <i class="now-ui-icons arrows-1_minimal-down"></i>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="collapse show" id="collapseExample2">
                                <div class="ui-input ui-input--quick-search">
                                    <input type="text" class="ui-input-field ui-input-field--cleanable"
                                           placeholder="نام برند مورد نظر را بنویسید…">
                                    <span class="ui-input-cleaner"></span>
                                </div>
                                <div class="filter-option">
                                    <div class="checkbox">
                                        <input id="checkbox8" type="checkbox">
                                        <label for="checkbox8">
                                            نایک
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox9" type="checkbox">
                                        <label for="checkbox9">
                                            رولکس
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox10" type="checkbox">
                                        <label for="checkbox10">
                                            اپل
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox11" type="checkbox">
                                        <label for="checkbox11">
                                            پوما
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox12" type="checkbox">
                                        <label for="checkbox12">
                                            ال استار
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox13" type="checkbox">
                                        <label for="checkbox13">
                                            نیو بالانس
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox14" type="checkbox">
                                        <label for="checkbox14">
                                            فراری
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <input type="checkbox" name="checkbox" class="bootstrap-switch" checked />
                            <label>فقط کالاهای موجود</label>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <input type="checkbox" name="checkbox" class="bootstrap-switch" checked />
                            <label >فقط کالاهای آماده ارسال</label>
                        </div>
                    </div>
                </aside>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-md-2 order-1">


                    <div class="listing-counter">[[ GetNumberHumanize(page_info['total']) ]] {{ __('items') }}</div>
                    <div class="style-tatrib listing style-listing">
                        <div class="row">
                            <div class="col-12">
                                <div class="listing-header default">
                                    <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                        data-label="مرتب‌سازی بر اساس :">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#related" role="tab"
                                               aria-expanded="false">مرتبط‌ترین</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#most-view" role="tab"
                                               aria-expanded="false">پربازدیدترین</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#new" role="tab" aria-expanded="true">جدیدترین</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#most-seller" role="tab"
                                               aria-expanded="false">پرفروش‌ترین‌</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#down-price" role="tab"
                                               aria-expanded="false">ارزان‌ترین</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#top-price" role="tab"
                                               aria-expanded="false">گران‌ترین</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="listing default mt-3">
                        <div class="tab-content default text-center">

                            <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                                <div class="container no-padding-right">
                                    <ul class="row listing-items">

                                        <li ng-repeat="item in products" class=" col-lg-4 col-md-6 col-12 no-padding mt-3">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">{{ __('Seller') }}:
                                                            </span>[[ item['user']['full_name'] ]]</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="[[ item['get_image'] ]]" alt="@if($lang == 'fa') [[ item['title'] ]] @else [[ item['en_title'] ]] @endif">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                @if($lang == 'fa') [[ item['title'] ]] @else [[ item['en_title'] ]] @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    [[ GetNumberHumanize(item['price']) ]] <span
                                                                        class="price-currency">تومان</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="pager default text-center">
                            <ul class="pager-items">
                                <li>
                                    <a class="pager-item is-active" href="#">۱</a>
                                </li>
                                <li>
                                    <a class="pager-item" href="#">۲</a>
                                </li>
                                <li>
                                    <a class="pager-item" href="#">۳</a>
                                </li>
                                <li>
                                    <a class="pager-item" href="#">۴</a>
                                </li>
                                <li>
                                    <a class="pager-item" href="#">۵</a>
                                </li>
                                <line class="pager-items--partition"></line>
                                <li>
                                    <a class="pager-next"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        app.controller('myCtrl', function ($scope, $http) {
            $scope.is_submited = false;
            $scope.products = [];
            $scope.page_info = {
                'total': 0
            };

            $scope.GetNumberHumanize = function (number) {
                return numberWithCommas(number);
            }

            $scope.GetProducts = function () {
                $scope.is_submited = true;

                $http.get(`{{ route('products.api.list') }}?search={{ request('q') }}`).then(res => {
                    $scope.is_submited = false;

                    $scope.products = res['data']['data']['data'];
                    $scope.page_info = res['data']['data'];
                    console.log($scope.products)
                    console.log($scope.page_info)
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }

            $scope.ChangeStatus = function () {
                $scope.is_submited = true;

                var data = {
                    "status": $scope.status
                };

                $http.post(`/api/tickets/status/change/${$scope.id}`, data).then(res => {
                    showToast('وضعیت آیتم مورد نظر با موفقیت تغییر کرد.', 'success');
                    $scope.is_submited = false;
                    setTimeout(() => {
                        location.reload()
                    }, 500)
                }).catch(err => {
                    $scope.is_submited = false;
                    showToast('خطایی رخ داد.', 'error');
                });
            }
        });
    </script>
@endsection
