@extends('layouts.front-master')

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
    <main class="main default ">
        <!-- banner -->
        <div class="row banner-ads">
            <div class="col-12">
                <section id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators d-none d-md-flex">
                        @foreach($sliders as $slider)
                            <li data-target="#main-slider" data-slide-to="{{ $loop->index }}"
                                @if($loop->index == 0) class="active" @endif></li>
                        @endforeach
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
            @if($settings['show_special_categories']->value)
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
                                                {{ $special_cat->get_title($lang) ?: '---' }}
                                            </a>
                                            @if($settings['show_special_categories_products_count']->value)
                                                <p class="color-kala">{{ number_format($special_cat->products_count) }}
                                                    {{ __('items') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($settings['show_special_products']->value)
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
                                                    <a href="{{ route('product_detail', $special_pr->get_slug($lang)) }}">
                                                        <img src="{{ $special_pr->get_image() }}"
                                                             class="img-fluid"
                                                             alt="{{ $special_pr->get_title($lang) ?: '---' }}">
                                                    </a>
                                                    <h2 class="post-title">
                                                        <a href="{{ route('product_detail', $special_pr->get_slug($lang)) }}">{{ $special_pr->get_title($lang) ?: '---' }}</a>
                                                    </h2>
                                                    <div class="price">
                                                        @if($special_pr->quantity)
                                                            @if($special_pr->calculate_discount_percent() > 0)
                                                                <del>
                                                                    <span>{{ number_format($special_pr->price) }} <span>{{ __('Toman') }}</span></span>
                                                                </del>
                                                                <ins>
                                                                    <span>{{ number_format($special_pr->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                                </ins>
                                                            @else
                                                                <ins>
                                                                    <span>{{ number_format($special_pr->price) }} <span>{{ __('Toman') }}</span></span>
                                                                </ins>
                                                            @endif
                                                        @else
                                                            <span
                                                                style="color: #979898; font-size: 17px; display: block; width: 100%;">{{ __('Unavailable') }}</span>
                                                        @endif
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

            @if($settings['show_latest_products']->value)
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('Latest Products') }}</span>
                                </h3>
                                <a href="{{ route('products_list') }}" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($latest_products as $latest_pro)
                                    <div class="item">
                                        <a href="{{ route('product_detail', $latest_pro->get_slug($lang)) }}">
                                            <img src="{{ $latest_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="{{ $latest_pro->get_title($lang) ?: '---' }}">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="{{ route('product_detail', $latest_pro->get_slug($lang)) }}">{{ $latest_pro->get_title($lang) ?: '---' }}</a>
                                        </h2>
                                        <div class="price">
                                            @if($latest_pro->quantity)
                                                @if($latest_pro->calculate_discount_percent() > 0)
                                                    <div class="text-center">
                                                        <del>
                                                            <span>{{ number_format($latest_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                        </del>
                                                    </div>
                                                    <div class="text-center">
                                                        <ins>
                                                            <span>{{ number_format($latest_pro->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                        </ins>
                                                    </div>
                                                @else
                                                    <div class="text-center">
                                                        <ins>
                                                            <span>{{ number_format($latest_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                        </ins>
                                                    </div>
                                                @endif
                                            @else
                                                <span
                                                    style="color: #979898; font-size: 17px; display: block; width: 100%;">{{ __('Unavailable') }}</span>
                                            @endif
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

            @if($settings['show_most_favorite_products']->value)
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('The most favorite products') }}</span>
                                </h3>
                                <a href="{{ route('products_list') }}" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($most_favorite_products as $most_favorite_pro)
                                    <div class="item">
                                        <a href="{{ route('product_detail', $most_favorite_pro->get_slug($lang)) }}">
                                            <img src="{{ $most_favorite_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="{{ $most_favorite_pro->get_title($lang) ?: '---' }}">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="{{ route('product_detail', $most_favorite_pro->get_slug($lang)) }}">{{ $most_favorite_pro->get_title($lang) ?: '---' }}</a>
                                        </h2>
                                        <div class="price">

                                            @if($most_favorite_pro->quantity)
                                                @if($most_favorite_pro->calculate_discount_percent() > 0)
                                                    <del>
                                                        <span>{{ number_format($most_favorite_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </del>
                                                    <ins>
                                                        <span>{{ number_format($most_favorite_pro->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                @else
                                                    <ins>
                                                        <span>{{ number_format($most_favorite_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                @endif
                                            @else
                                                <span
                                                    style="color: #979898; font-size: 17px; display: block; width: 100%;">{{ __('Unavailable') }}</span>
                                            @endif

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

            @if($settings['show_cheapest_products']->value)
                <div class="row">
                    <div class="col-12">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('The cheapest products') }}</span>
                                </h3>
                                <a href="{{ route('products_list') }}" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme">

                                @foreach($cheapest_products as $cheapest_pro)
                                    <div class="item">
                                        <a href="{{ route('product_detail', $cheapest_pro->get_slug($lang)) }}">
                                            <img src="{{ $cheapest_pro->get_image() }}"
                                                 class="img-fluid"
                                                 alt="{{ $cheapest_pro->get_title($lang) ?: '---' }}">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="{{ route('product_detail', $cheapest_pro->get_slug($lang)) }}">{{ $cheapest_pro->get_title($lang) ?: '---' }}</a>
                                        </h2>
                                        <div class="price">

                                            @if($cheapest_pro->quantity)
                                                @if($cheapest_pro->calculate_discount_percent() > 0)
                                                    <del>
                                                        <span>{{ number_format($cheapest_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </del>
                                                    <ins>
                                                        <span>{{ number_format($cheapest_pro->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                @else
                                                    <ins>
                                                        <span>{{ number_format($cheapest_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                @endif
                                            @else
                                                <span
                                                    style="color: #979898; font-size: 17px; display: block; width: 100%;">{{ __('Unavailable') }}</span>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if($settings['show_blogs']->value)
                <div class="row">
                    <div class="col-12">
                        <div class="brand-slider card">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('Readings') }}</span>
                                </h3>

                                <a href="{{ route('blogs_list') }}" class="view-all">{{ __('View All') }}</a>
                            </header>
                            <div class="row">

                                @foreach($blogs as $blog)
                                    <div class="col-md-3 col-6">
                                        <div class="p-3 style-hover style-border-box">
                                            <a href="{{ route('blog_detail', $blog->get_slug($lang)) }}">
                                                <div class="text-center style-icon">
                                                    <div>
                                                        <img src="{{ $blog->get_image() }}"
                                                             alt="{{ $blog->get_title($lang) }}"
                                                             class="img-fluid">
                                                    </div>
                                                    <p class="mt-3 ">
                                                        {{ $blog->get_title($lang) }}
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
                                <span>{{ $best_category->get_title($lang) ?: '---' }}</span>
                            </h5>
                        </header>
                        <div class="row">

                            @foreach($best_category->products as $prod)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="style-border-box-best mt-3">
                                        <div class="p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <a href="{{ route('product_detail', $prod->get_slug($lang)) }}">
                                                        <img src="{{ $prod->get_image() }}"
                                                             alt="{{ $prod->get_title($lang) ?: '---' }}"
                                                             class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-8">
                                                    <div class="mt-4 pl-0">
                                                        <a href="{{ route('product_detail', $prod->get_slug($lang)) }}"
                                                           class="color-title ">
                                                            {{ $prod->get_title($lang) ?: '---' }}
                                                        </a>
                                                        <p class="mt-3">
                                                            @if($prod->quantity)
                                                                @if($prod->calculate_discount_percent() > 0)
                                                                    {{--                                                                    <del style="display: block !important;">--}}
                                                                    {{--                                                                        <span>{{ number_format($prod->price) }} <span>{{ __('Toman') }}</span></span>--}}
                                                                    {{--                                                                    </del>--}}
                                                                    {{--                                                                    <span--}}
                                                                    {{--                                                                        class="float-right font_12">{{ number_format($prod->price) }} {{ __('Toman') }}</span>--}}

                                                                    <span
                                                                        class="float-right font_12">{{ number_format($prod->discount_price) }} {{ __('Toman') }}</span>
                                                                @else
                                                                    <span
                                                                        class="float-right font_12">{{ number_format($prod->price) }} {{ __('Toman') }}</span>
                                                                @endif
                                                            @else
                                                                <span class="float-right font_12"
                                                                      style="color: #979898; font-size: 12px;">{{ __('Unavailable') }}</span>
                                                            @endif

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
