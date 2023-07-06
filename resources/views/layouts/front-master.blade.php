<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          main_content
          name='viewport'/>

    <title>@yield('title', 'فروشگاه')</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="/front/assets/fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link href="/front/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/front/assets/css/now-ui-kit.css" rel="stylesheet"/>
    <link href="/front/assets/css/plugins/owl.carousel.css" rel="stylesheet"/>
    <link href="/front/assets/css/plugins/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="/front/assets/css/main.css" rel="stylesheet"/>
    <link href="/front/assets/css/hircana.css" type="text/css" rel="stylesheet">

    <link href="/select2/select2.min.css" rel="stylesheet"/>

    <script src="/sweetalert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="/sweetalert/sweetalert2.min.css"
          id="theme-styles">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
          crossorigin="anonymous"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('styles')

</head>

<body class="index-page sidebar-collapse" ng-app="myApp" ng-controller="myCtrl" ng-init="init()">

<!-- responsive-header -->
<nav class="navbar direction-rtl fixed-top header-responsive">
    <div class="container">
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#pablo">
                <img src="/front/assets/img/14.png" height="24px" alt="">
            </a>

            <div class="search-nav default">
                <form action="">
                    <input type="text" name="search" value="{{ request('search') }}"
                           placeholder="{{ __('Search ...') }}">
                    <button type="submit">
                        <i class="fa fa-search style-icon-search"></i>
                    </button>
                </form>
                <ul>
                    <li><a href="#"><i class="now-ui-icons users_single-02"></i></a></li>
                    <li><a href="#"><i class="now-ui-icons shopping_basket"></i></a></li>
                </ul>
            </div>
        </div>

        <?php  $main_categories = \Modules\Product\Entities\Category::whereNull('parent_id')->with(['children'])->get() ?>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="logo-nav-res default text-center">
                <a href="/">
                    <img src="/front/assets/img/14.png" height="36px" alt="">
                </a>
            </div>
            <ul class="navbar-nav default">

                @foreach($main_categories as $main_cat)

                    @if(count($main_cat->children))

                        <li class="sub-menu">
                            <a href="#">@if($lang == 'fa'){{ $main_cat->title ?: '---' }}@else{{ $main_cat->en_title ?: '---' }}@endif</a>
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>

                                @foreach($main_cat->children()->with(['children'])->get() as $child_1)

                                    @if(count($child_1->children))

                                        <li class="sub-menu">
                                            <a href="#">@if($lang == 'fa'){{ $child_1->title ?: '---' }}@else{{ $child_1->en_title ?: '---' }}@endif</a>
                                            <ul>
                                                <li>
                                                    <a href="#"></a>
                                                </li>

                                                @foreach($child_1->children()->with(['children'])->get() as $child_2)

                                                    @if(count($child_2->children))

                                                        <li class="sub-menu">
                                                            <a href="#">@if($lang == 'fa'){{ $child_2->title ?: '---' }}@else{{ $child_2->en_title ?: '---' }}@endif</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#"></a>
                                                                </li>

                                                                @foreach($child_2->children as $child_3)

                                                                    <li>
                                                                        <a href="#">@if($lang == 'fa'){{ $child_3->title ?: '---' }}@else{{ $child_3->en_title ?: '---' }}@endif</a>
                                                                    </li>

                                                                @endforeach

                                                            </ul>
                                                        </li>

                                                    @else

                                                        <li>
                                                            <a href="#">@if($lang == 'fa'){{ $child_2->title ?: '---' }}@else{{ $child_2->en_title ?: '---' }}@endif</a>
                                                        </li>

                                                    @endif

                                                @endforeach

                                            </ul>
                                        </li>

                                    @else

                                        <li>
                                            <a href="#">@if($lang == 'fa'){{ $child_1->title ?: '---' }}@else{{ $child_1->en_title ?: '---' }}@endif</a>
                                        </li>

                                    @endif

                                @endforeach

                            </ul>
                        </li>

                    @else

                        <li>
                            <a href="#">@if($lang == 'fa'){{ $main_cat->title ?: '---' }}@else{{ $main_cat->en_title ?: '---' }}@endif</a>
                        </li>

                    @endif

                @endforeach

            </ul>
        </div>
    </div>
</nav>
<!-- responsive-header -->

<div class="wrapper default">

    <!-- header -->
    <header class="main-header default">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                    <div class="logo-area default">
                        <a href="/">
                            <img src="/front/assets/img/14.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search">
                            <input type="text" id="gsearchsimple" name="search" value="{{ request('search') }}"
                                   placeholder="{{ __('Search for the name of the product, brand or category you want...') }}">
                            <ul class="list-group search-box-list">
                                <li ng-repeat="item in search_history track by $index" ng-if="item"
                                    class="list-group-item contsearch">
                                    <a href="?search=[[ item ]]" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        [[ item ]]
                                    </a>
                                </li>
                            </ul>
                            <div class="localSearchSimple"></div>
                            <button type="submit">
                                <i class="fa fa-search style-icon-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-left">
                    @auth
                        <button class="style-user-button">
                            <div class="bg-color user-style">
                                <i class="fa fa-user style-icon-head"></i>
                            </div>
                        </button>
                        <button class="style-user-button">
                            <div class="bg-color user-style">
                                <i class="fa fa-heart-o style-icon-head"></i>
                            </div>
                        </button>
                        <button class="style-user-button">
                            <div class="bg-color user-style">
                                <i class="fa fa-shopping-basket style-icon-head"></i>
                            </div>
                        </button>
                    @else
                        <button onclick="window.location.href='{{ route('login') }}'" class="style-user-button">
                            <div class="bg-color user-style">
                                <i class="fa fa-user style-icon-head"></i>
                            </div>
                        </button>
                    @endauth
                </div>
            </div>
        </div>


        <nav class="main-menu">
            <div class="container">
                <ul class="list float-right">
                    @foreach($main_categories as $main_cat)

                        @if(count($main_cat->children))
                            <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                                <a class="nav-link"
                                   href="#">@if($lang == 'fa'){{ $main_cat->title ?: '---' }}@else{{ $main_cat->en_title ?: '---' }}@endif</a>
                                <ul class="sub-menu nav">

                                    @foreach($main_cat->children as $child_1)

                                        @if(count($child_1->children))

                                            {{--                                            <li class="list-item list-item-has-children">--}}
                                            {{--                                                <i class="now-ui-icons arrows-1_minimal-left"></i><a--}}
                                            {{--                                                    class="main-list-item nav-link"--}}
                                            {{--                                                    href="#">{{ $child_2->title ?: '---' }}</a>--}}
                                            {{--                                                <ul class="sub-menu nav">--}}

                                            {{--                                                    @foreach($child_1->children as $child_3)--}}

                                            {{--                                                        <li class="list-item">--}}
                                            {{--                                                            <a class="nav-link"--}}
                                            {{--                                                               href="#">{{ $child_3->title ?: '---' }}</a>--}}
                                            {{--                                                        </li>--}}

                                            {{--                                                    @endforeach--}}

                                            {{--                                                </ul>--}}
                                            {{--                                            </li>--}}

                                            <li class="list-item list-item-has-children">
                                                <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                                    class="main-list-item nav-link"
                                                    href="#">@if($lang == 'fa'){{ $child_1->title ?: '---' }}@else{{ $child_1->en_title ?: '---' }}@endif</a>

                                                <ul class="sub-menu nav">

                                                    @foreach($child_1->children as $child_2)

                                                        @if(count($child_2->children))

                                                            <li class="list-item list-item-has-children">
                                                                <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                                                    class="main-list-item nav-link"
                                                                    href="#">@if($lang == 'fa'){{ $child_2->title ?: '---' }}@else{{ $child_2->en_title ?: '---' }}@endif</a>
                                                                <ul class="sub-menu nav">

                                                                    @foreach($child_2->children as $child_3)

                                                                        <li class="list-item">
                                                                            <a class="nav-link"
                                                                               href="#">@if($lang == 'fa'){{ $child_3->title ?: '---' }}@else{{ $child_3->en_title ?: '---' }}@endif</a>
                                                                        </li>

                                                                    @endforeach

                                                                </ul>
                                                            </li>

                                                        @else

                                                            <li class="list-item">
                                                                <a class="nav-link"
                                                                   href="#">@if($lang == 'fa'){{ $child_2->title ?: '---' }}@else{{ $child_2->en_title ?: '---' }}@endif</a>
                                                            </li>

                                                        @endif

                                                    @endforeach

                                                </ul>
                                            </li>

                                        @else

                                            <li class="list-item list-item-has-children">
                                                <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                                    class="main-list-item nav-link"
                                                    href="#">@if($lang == 'fa'){{ $child_1->title ?: '---' }}@else{{ $child_1->en_title ?: '---' }}@endif</a>
                                            </li>

                                        @endif

                                    @endforeach


                                    <img src="{{ $main_cat->get_image() }}"
                                         alt="@if($lang == 'fa'){{ $main_cat->title ?: '---' }}@else{{ $main_cat->en_title ?: '---' }}@endif">
                                </ul>
                            </li>
                        @else
                            <li class="list-item">
                                <a class="nav-link"
                                   href="#">@if($lang == 'fa'){{ $main_cat->title ?: '---' }}@else{{ $main_cat->en_title ?: '---' }}@endif</a>
                            </li>
                        @endif

                    @endforeach


                    <li class="list-item amazing-item">
                        <a class="nav-link" href="#" target="_blank">{{ __('The Amazing') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="overlay-search-box"></div>


    <!-- header -->


    @yield('content')


    <footer class="main-footer default">
        <div class="back-to-top">
            <a href="#">
                    <span class="icon">
                        <i class="now-ui-icons arrows-1_minimal-up"></i>
                    </span>
                <span>{{ __('Back to top') }}</span>
            </a>
        </div>

        @if($settings['show_guides'])
            <div class="container">
                <div class="footer-services">
                    <div class="row">
                        @foreach($guides as $guide)
                            <div class="service-item col">
                                <a href="#" target="_blank">
                                    <img src="{{ $guide->get_image() }}"
                                         alt="@if($lang == 'fa'){{ $guide->title }}@else{{ $guide->en_title }}@endif">
                                </a>
                                <p>@if($lang == 'fa'){{ $guide->title }}@else{{ $guide->en_title }}@endif</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            {{--                            <div class="newsletter">--}}
                            {{--                                <p>از تخفیف‌ها و جدیدترین‌های فروشگاه باخبر شوید:</p>--}}
                            {{--                                <form action="">--}}
                            {{--                                    <input type="email" class="form-control"--}}
                            {{--                                           placeholder="آدرس ایمیل خود را وارد کنید...">--}}
                            {{--                                    <input type="submit" class="btn btn-primary" value="ارسال">--}}
                            {{--                                </form>--}}
                            {{--                            </div>--}}
                            <div class="socials">
                                <p>{{ __('Follow us on social networks.') }}</p>
                                <div class="footer-social">
                                    @if($lang == 'fa')
                                        {!! $settings['footer_social_section'] !!}
                                    @else
                                        {!! $settings['footer_en_social_section'] !!}
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header ">
                                    <h3 class="card-title style-border-bottom pb-3">
                                        @if($lang == 'fa')
                                            {!! $settings['footer_right_links_title'] !!}
                                        @else
                                            {!! $settings['footer_right_links_en_title'] !!}
                                        @endif
                                    </h3>
                                </header>
                                <ul class="footer-menu">
                                    @if($lang == 'fa')
                                        {!! $settings['footer_right_links'] !!}
                                    @else
                                        {!! $settings['footer_en_right_links'] !!}
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header">
                                    <h3 class="card-title style-border-bottom pb-3">
                                        @if($lang == 'fa')
                                            {!! $settings['footer_center_links_title'] !!}
                                        @else
                                            {!! $settings['footer_center_links_en_title'] !!}
                                        @endif
                                    </h3>
                                </header>
                                <ul class="footer-menu">
                                    @if($lang == 'fa')
                                        {!! $settings['footer_center_links'] !!}
                                    @else
                                        {!! $settings['footer_en_center_links'] !!}
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="widget-menu widget card">
                                <header class="card-header">
                                    <h3 class="card-title style-border-bottom pb-3">
                                        @if($lang == 'fa')
                                            {!! $settings['footer_left_links_title'] !!}
                                        @else
                                            {!! $settings['footer_left_links_en_title'] !!}
                                        @endif
                                    </h3>
                                </header>
                                <ul class="footer-menu">
                                    @if($lang == 'fa')
                                        {!! $settings['footer_left_links'] !!}
                                    @else
                                        {!! $settings['footer_en_left_links'] !!}
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <span>
                                @if($lang == 'fa')
                                    {!! $settings['footer_chant'] !!}
                                @else
                                    {!! $settings['footer_en_chant'] !!}
                                @endif
                            </span>
                        </div>
                        <div class="col-12 col-lg-2">{{ __('Phone Number') }}: {!! $settings['footer_phone'] !!}</div>
                        <div class="col-12 col-lg-2">{{ __('Email') }}:<a href="#">{!! $settings['footer_email'] !!}</a>
                        </div>
                        <div class="col-12 col-lg-4 text-center">
                            {!! $settings['footer_app_links'] !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="description">
            <div class="container">
                <div class="row">
                    <div class="site-description col-12 col-lg-7">
                        <h1 class="site-title">
                            @if($lang == 'fa')
                                {!! $settings['footer_about_us_title'] !!}
                            @else
                                {!! $settings['footer_about_us_en_title'] !!}
                            @endif
                        </h1>
                        <p style="text-align: justify;line-height: 30px;">
                            @if($lang == 'fa')
                                {!! $settings['footer_about_us_text'] !!}
                            @else
                                {!! $settings['footer_about_us_en_text'] !!}
                            @endif
                        </p>
                    </div>
                    <div class="symbol col-12 col-lg-5">
                        <a href="#" target="_blank"><img src="/front/assets/img/symbol-01.png" alt=""></a>
                        <a href="#" target="_blank"><img src="/front/assets/img/symbol-02.png" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>
                    @if($lang == 'fa')
                        {!! $settings['footer_copyright'] !!}
                    @else
                        {!! $settings['footer_en_copyright'] !!}
                    @endif
                </p>
                <div class="row">
                    <div class="col-12 ">
                        <img src="/front/assets/img/footer/footer-bg.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </footer>

</div>
</body>
<script src="/front/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/front/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/front/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/bootstrap-switch.js"></script>
<script src="/front/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<script src="/front/assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/countdown.min.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/owl.carousel.min.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="/front/assets/js/plugins/JsLocalSearch.js" type="text/javascript"></script>
<script src="/front/assets/js/main.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>
<script src="/helpers/js/angular.min.js"></script>
<script src="/helpers/js/helpers.js"></script>
<script src="/helpers/js/kamadatepicker.min.js"></script>

<script src="/select2/select2.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>

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

<script>
    app.controller('myCtrl', function ($scope, $http) {
        $scope.search_history = [];

        $scope.init = function () {
            @if(request('search'))
            var searchHistory = (localStorage.searchHistory) ? JSON.parse(localStorage.searchHistory) : [];
            searchHistory.push('{{ request('search') }}');
            searchHistory = [...new Set(searchHistory)];
            localStorage.searchHistory = JSON.stringify(searchHistory);

            console.log(searchHistory)
            $scope.search_history = searchHistory;
            @endif
        }
    });
</script>

@include('dashboard.section.components.sweet_alert')
@yield('scripts')

</html>