@extends('layouts.front-master')

@section('title') پروفایل کاربری @endsection

@section('content')
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <h1 class="title-tab-content">اطلاعات شخصی</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">نام و نام خانوادگی :</span>
                                                <span>نام کاربر</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">پست الکترونیک :</span>
                                                <span>info@gmail.com</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">شماره تلفن همراه:</span>
                                                <span>-</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">کد ملی :</span>
                                                <span>-</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">دریافت خبرنامه :</span>
                                                <span>بله</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">شماره کارت :</span>
                                                <span>-</span>
                                            </p>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="profile-additional-info.html" class="btn-link-border form-account-link">
                                                ویرایش اطلاعات شخصی
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <h1 class="title-tab-content">لیست آخرین علاقمندی ها</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="profile-recent-fav-row">
                                                <a href="#" class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                    <img src="/front/assets/img/cart/4560621.jpg"></a>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-title">
                                                    <a href="#">
                                                        <h4 class="profile-recent-fav-name">
                                                            گوشی موبایل اپل مدل iPhone XR دو سیم کارت ظرفیت 256 گیگابایت
                                                        </h4>
                                                    </a>
                                                    <div class="profile-recent-fav-price">ناموجود</div>
                                                </div>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                    <button class="btn-action btn-action-remove">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="profile-recent-fav-row">
                                                <a href="#" class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                    <img src="/front/assets/img/cart/3794614.jpg"></a>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-title">
                                                    <a href="#">
                                                        <h4 class="profile-recent-fav-name">
                                                            گوشی موبایل اپل مدل iPhone XR دو سیم کارت ظرفیت 256 گیگابایت
                                                        </h4>
                                                    </a>
                                                    <div class="profile-recent-fav-price">ناموجود</div>
                                                </div>
                                                <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                    <button class="btn-action btn-action-remove">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="#" class="btn-link-border form-account-link">
                                                مشاهده و ویرایش لیست مورد علاقه
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="title-tab-content">آخرین سفارش ها</h1>
                            </div>
                            <div class="col-12 text-center">
                                <div class="content-section pt-5 pb-5">
                                    <div class="icon-empty">
                                        <i class="now-ui-icons travel_info"></i>
                                    </div>
                                    <h1 class="text-empty">موردی برای نمایش وجود ندارد!</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @include('front.components.dashboard_sidebar')

            </div>
        </div>
    </main>
@endsection
