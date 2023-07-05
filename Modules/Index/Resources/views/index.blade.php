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
                                             class="img-fluid" alt="@if($lang == 'fa'){{ $latest_pro->title }}@else{{ $latest_pro->en_title }}@endif">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="single-product.html">@if($lang == 'fa'){{ $latest_pro->title }}@else{{ $latest_pro->en_title }}@endif</a>
                                    </h2>
                                    <div class="price">
                                        <div class="text-center">
                                            <del><span>{{ number_format($latest_pro->price) }}<span>تومان</span></span></del>
                                        </div>
                                        <div class="text-center">
                                            <ins><span>{{ number_format($latest_pro->discount_price) }}<span>تومان</span></span></ins>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_blank">
                                    <img class="img-fluid" src="/front/assets/img/banner/banner-9.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_top">
                                    <img class="img-fluid" src="/front/assets/img/banner/banner-10.jpg" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>محبوب ترین محصولات</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/band-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">اسپیکر بلوتوثی لیتو مدل PARTY PLUS 400</a>
                                </h2>
                                <div class="price">
                                    <del><span>2,890,000<span>تومان</span></span></del>
                                    <ins><span>1,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>

                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/ptb.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">اسباب بازی ایپکا مدل دار بافندگی کد GE3010</a>
                                </h2>
                                <div class="price">
                                    <div class="text-center">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                    </div>
                                    <div class="text-center">
                                        <ins><span>175,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/handsfery-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">هندزفری بلوتوثی لیتو مدل LT9</a>
                                </h2>
                                <div class="price">
                                    <span>895,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/knife-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">چاقو تیز کن ریور مدل 002</a>
                                </h2>
                                <div class="price">
                                    <span>82,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/paye-mobile.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">پایه نگهدارنده گوشی موبایل لیتو مدل LR18</a>
                                </h2>
                                <div class="price">
                                    <span>299,000<span>تومان</span></span>
                                </div>
                            </div>

                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/glasses-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">عینک آفتابی مردانه فیلا مدل SF9329-7F7P</a>
                                </h2>
                                <div class="price">
                                    <del><span>2,799,000<span>تومان</span></span></del>
                                    <ins><span>1,722,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/box-details.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">مجموعه 120 عددی آچارباکس ساتاگود مدل 9530</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>2,299,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_blank">
                                    <img class="img-fluid" src="/front/assets/img/banner/ads3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_top">
                                    <img class="img-fluid" src="/front/assets/img/banner/ads1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_blank">
                                    <img class="img-fluid" src="/front/assets/img/banner/ads4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="widget-banner card">
                                <a href="javascript:void(0)" target="_top">
                                    <img class="img-fluid" src="/front/assets/img/banner/ads2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>ارزان ترین محصولات</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/glasses-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">عینک آفتابی مردانه فیلا مدل SF9329-7F7P</a>
                                </h2>
                                <div class="price">
                                    <del><span>2,799,000<span>تومان</span></span></del>
                                    <ins><span>1,722,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/handsfery-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">هندزفری بلوتوثی لیتو مدل LT9</a>
                                </h2>
                                <div class="price">
                                    <span>895,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/box-details.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">مجموعه 120 عددی آچارباکس ساتاگود مدل 9530</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>2,299,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/ptb.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">اسباب بازی ایپکا مدل دار بافندگی کد GE3010</a>
                                </h2>
                                <div class="price">
                                    <div class="text-center">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                    </div>
                                    <div class="text-center">
                                        <ins><span>175,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/band-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">اسپیکر بلوتوثی لیتو مدل PARTY PLUS 400</a>
                                </h2>
                                <div class="price">
                                    <del><span>2,890,000<span>تومان</span></span></del>
                                    <ins><span>1,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>

                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/knife-products.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">چاقو تیز کن ریور مدل 002</a>
                                </h2>
                                <div class="price">
                                    <span>82,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="single-product.html">
                                    <img src="/front/assets/img/product/paye-mobile.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="single-product.html">پایه نگهدارنده گوشی موبایل لیتو مدل LR18</a>
                                </h2>
                                <div class="price">
                                    <span>299,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="brand-slider card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>خواندنی ها</span>
                            </h3>
                        </header>
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="p-3 style-hover style-border-box">
                                    <a href="single-product.html">
                                        <div class="text-center style-icon">
                                            <div>
                                                <img src="/front/assets/img/banner/New-Gmail-1-1-300x191.jpg"
                                                     class="img-fluid">
                                            </div>
                                            <p class="mt-3 ">
                                                جیمیل جدید چه قابلیت هایی دارد
                                            </p>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="p-3 style-hover style-border-box">
                                    <a href="single-product.html">
                                        <div class="text-center style-icon">
                                            <div>
                                                <img src="/front/assets/img/banner/nokia-300x200.jpg" class="img-fluid">
                                            </div>
                                            <p class="mt-3 ">
                                                نوکیا X71، اولین گوشی HMD با نمایشگر دارای حفره رونمایی شد
                                            </p>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="p-3 style-hover style-border-box">
                                    <a href="single-product.html">
                                        <div class="text-center style-icon">
                                            <div>
                                                <img src="/front/assets/img/banner/9638.jpg" class="img-fluid">
                                            </div>
                                            <p class="mt-3 ">
                                                مصرف غذاهای پرفیبر برخی روش‌های درمانی سرطان را بهبود می‌بخشد
                                            </p>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="p-3 style-hover style-border-box">
                                    <a href="single-product.html">
                                        <div class="text-center style-icon">
                                            <div>
                                                <img src="/front/assets/img/banner/fiber-300x220.jpg" class="img-fluid">
                                            </div>
                                            <p class="mt-3 ">
                                                مصرف غذاهای پرفیبر برخی روش‌های درمانی سرطان را بهبود می‌بخشد
                                            </p>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <header class="mt-3">
                        <h5>
                            <span>بهترین تلفن های همراه</span>
                        </h5>
                    </header>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/1335154.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل هوآوی مدل Mate 20 Pro
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_12">10,499,000 تومان</span>
                                                    <span class="float-left font_12">
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/110197298.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_12">10,899,000 تومان</span>
                                                    <span class="float-left font_12">
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/3694075.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل هوآوی مدل Nova 3i INE-LX1M
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_12">10,499,000 تومان</span>
                                                    <span class="float-left font_12">
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                            <i class="fa fa-star-o" style="color: #faba00"></i>
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/4560651.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل اپل مدل iPhone XS Max دو سیم‌ کارت ظرفیت 256 گیگابایت
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_11">10,499,000 تومان</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/5489258.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل هوآوی مدل Mate 20 Pro
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_11">4,500,000 تومان</span>
                                                    <del class="float-left font_11">4,250,000 تومان</del>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="style-border-box-best mt-3">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="/front/assets/img/product/2310961.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-8">
                                            <div class="mt-4 pl-0">
                                                <a href="single-product.html" class="color-title ">
                                                    گوشی موبایل اپل مدل iPhone X ظرفیت 256 گیگابایت
                                                </a>
                                                <p class="mt-3">
                                                    <span class="float-right font_11">10,900,000 تومان</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner -->
        </div>
    </main>
@endsection
