@extends('layouts.front-master')

@section('content')
    <main class="main default ">
        <!-- banner -->
        <div class="row banner-ads">
            <div class="col-12">
                <section id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators d-none d-md-flex">
                        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main-slider" data-slide-to="1"></li>
                        <li data-target="#main-slider" data-slide-to="2"></li>
                        <li data-target="#main-slider" data-slide-to="3"></li>
                        <li data-target="#main-slider" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner1">

                        @foreach($sliders as $slider)
                            <div class="carousel-item @if($loop->index == 0) active @endif">
                                <a class="d-block" href="{{ $slider->url }}">
                                    <img src="{{ $slider->get_image() }}"
                                         class="d-block w-100" alt="{{ __($slider->title) }}">
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                    <a class="carousel-control-next" href="#main-slider" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                </section>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="brand-slider card">
                        <div class="row">

                            @foreach($special_categories as $special_cat)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="text-center style-icon">
                                        <div>
                                            <i class="fa fa-{{ $special_cat->icon_name }} "></i>

                                        </div>
                                        <a>
                                            @if($lang == 'fa')
                                                {{ $special_cat->title ?: '---' }}
                                            @else
                                                {{ $special_cat->en_title ?: '---' }}
                                            @endif
                                        </a>
                                        @if($settings['show_special_categories_products_count'])
                                            <p class="color-kala">{{ number_format($special_cat->products_count) }}
                                                کالا</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            @if($settings['show_special_products'])
                <div class="mt-2 mb-3 ">
                    <div class="row">
                        <div class="col-12">
                            <section id="amazing-slider" class="carousel slide carousel-fade card vip_car_box "
                                     data-ride="carousel">
                                <img class="amazing-title" src="/front/assets/img/amazing-slider/amazing-title-01.png"
                                     alt="">
                                <div class="row m-0 pb-5">
                                    <div class="widget-product p-4">
                                        <div class="product-carousel owl-carousel owl-theme">

                                            @foreach($special_products as $special_pr)
                                                <div class="item vip_car_box_product">
                                                    <a href="single-product.html">
                                                        <img src="{{ $special_pr->get_image() }}"
                                                             class="img-fluid"
                                                             alt="@if($lang == 'fa'){{ $special_pr->title }}@else{{ $special_pr->en_title }}@endif">
                                                    </a>
                                                    <h2 class="post-title">
                                                        <a href="single-product.html">@if($lang == 'fa'){{ $special_pr->title }}@else{{ $special_pr->en_title }}@endif</a>
                                                    </h2>
                                                    <div class="price">
                                                        <del>
                                                            <span>{{ number_format($special_pr->discount_price) }}<span>تومان</span></span>
                                                        </del>
                                                        <ins>
                                                            <span>{{ number_format($special_pr->price) }}<span>تومان</span></span>
                                                        </ins>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">

                        @foreach($top_posters as $top_pos)
                            <div class="col-6">
                                <div class="widget-banner card">
                                    <a href="{{ $top_pos->link }}" target="_blank">
                                        <img class="img-fluid" src="{{ $top_pos->get_image() }}"
                                             alt="{{ $top_pos->link }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            @if($settings['show_latest_products'])
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('Latest Products') }}</span>
                                </h3>
                                <a href="#" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($latest_products as $latest_pro)
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ $latest_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="@if($lang == 'fa'){{ $latest_pro->title }}@else{{ $latest_pro->en_title }}@endif">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="single-product.html">@if($lang == 'fa'){{ $latest_pro->title }}@else{{ $latest_pro->en_title }}@endif</a>
                                        </h2>
                                        <div class="price">
                                            <div class="text-center">
                                                <del>
                                                    <span>{{ number_format($latest_pro->price) }}<span>تومان</span></span>
                                                </del>
                                            </div>
                                            <div class="text-center">
                                                <ins>
                                                    <span>{{ number_format($latest_pro->discount_price) }}<span>تومان</span></span>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">

                        @foreach($center_posters as $center_pos)
                            <div class="col-6">
                                <div class="widget-banner card">
                                    <a href="{{ $center_pos->link }}" target="_blank">
                                        <img class="img-fluid" src="{{ $center_pos->get_image() }}"
                                             alt="{{ $center_pos->link }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            @if($settings['show_most_favorite_products'])
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('The most favorite products') }}</span>
                                </h3>
                                <a href="#" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($most_favorite_products as $most_favorite_pro)
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ $most_favorite_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="@if($lang == 'fa'){{ $most_favorite_pro->title }}@else{{ $most_favorite_pro->en_title }}@endif">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="single-product.html">@if($lang == 'fa'){{ $most_favorite_pro->title }}@else{{ $most_favorite_pro->en_title }}@endif</a>
                                        </h2>
                                        <div class="price">
                                            <del><span>{{ number_format($most_favorite_pro->price) }}<span>تومان</span></span>
                                            </del>
                                            <ins><span>{{ number_format($most_favorite_pro->discount_price) }}<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">

                        @foreach($bottom_posters as $bottom_pos)
                            <div class="col-6 col-md-3">
                                <div class="widget-banner card">
                                    <a href="{{ $bottom_pos->link }}" target="_blank">
                                        <img class="img-fluid" src="{{ $bottom_pos->get_image() }}"
                                             alt="{{ $bottom_pos->link }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            @if($settings['show_cheapest_products'])
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('The cheapest products') }}</span>
                                </h3>
                                <a href="#" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($cheapest_products as $cheapest_pro)
                                    <div class="item">
                                        <a href="single-product.html">
                                            <img src="{{ $cheapest_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="@if($lang == 'fa'){{ $cheapest_pro->title }}@else{{ $cheapest_pro->en_title }}@endif">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="single-product.html">@if($lang == 'fa'){{ $cheapest_pro->title }}@else{{ $cheapest_pro->en_title }}@endif</a>
                                        </h2>
                                        <div class="price">
                                            <del>
                                                <span>{{ number_format($cheapest_pro->price) }}<span>تومان</span></span>
                                            </del>
                                            <ins>
                                                <span>{{ number_format($cheapest_pro->discount_price) }}<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($settings['show_blogs'])
                <div class="row">
                    <div class="col-12">
                        <div class="brand-slider card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('Readings') }}</span>
                                </h3>
                            </header>
                            <div class="row">

                                @foreach($blogs as $blog)
                                    <div class="col-md-3 col-6">
                                        <div class="p-3 style-hover style-border-box">
                                            <a href="single-product.html">
                                                <div class="text-center style-icon">
                                                    <div>
                                                        <img src="{{ $blog->get_image() }}"
                                                             alt="@if($lang == 'fa'){{ $blog->title }}@else{{ $blog->en_title }}@endif"
                                                             class="img-fluid">
                                                    </div>
                                                    <p class="mt-3 ">
                                                        @if($lang == 'fa'){{ $blog->title }}@else{{ $blog->en_title }}@endif
                                                    </p>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($best_category)
                <div class="row">
                    <div class="col-12">
                        <header class="mt-3">
                            <h5>
                                @if($lang == 'fa')
                                    <span>{{ __('The best') }} {{ $best_category->title }}</span>
                                @else
                                    <span>{{ __('The best') }} {{ $best_category->en_title }}</span>
                                @endif
                            </h5>
                        </header>
                        <div class="row">

                            @foreach($best_category->products as $prod)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="style-border-box-best mt-3">
                                        <div class="p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="{{ $prod->get_image() }}"
                                                         alt="@if($lang == 'fa'){{ $prod->title }}@else{{ $prod->en_title }}@endif"
                                                         class="img-fluid">
                                                </div>
                                                <div class="col-8">
                                                    <div class="mt-4 pl-0">
                                                        <a href="single-product.html" class="color-title ">
                                                            @if($lang == 'fa'){{ $prod->title }}@else{{ $prod->en_title }}@endif
                                                        </a>
                                                        <p class="mt-3">
                                                            <span class="float-right font_12">{{ number_format($prod->price) }} تومان</span>
                                                            <span class="float-left font_12">
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
{{--                                                            <i class="fa fa-star-o" style="color: #faba00"></i>--}}
                                                                {{--                                                            <i class="fa fa-star-o" style="color: #faba00"></i>--}}
                                                        </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
        @endif
        <!-- banner -->
        </div>
    </main>
@endsection
