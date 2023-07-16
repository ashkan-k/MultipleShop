<main class="cart-page default">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="style-breadcrumb">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="/">
                                    <span>خانه</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cart') }}">
                                    <span>سبد خرید</span>
                                </a>
                            </li>
                            <li><span style="color: #FC7E75 ">ثبت سفارش</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content col-12 col-md-3 order-2 order-md-1 mx-auto">
                <div class="account-box checkout-page mb-2">
                    <div class="px-5 py-4">
                        <p class="style-text-box">بایگانی ها</p>
                        <ul class="style-ul">
                            <li>
                                <div class="circle-inbox"></div>
                                <span style="color: #777">مرداد 2020</span>
                            </li>

                            <li>
                                <div class="circle-inbox"></div>
                                <span style="color: #777">شهریور 2020</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="account-box checkout-page mt-2">
                    <div class="px-5 py-4">
                        <p class="style-text-box">دسته ها</p>
                        <ul class="style-ul">
                            <li>
                                <div class="circle-inbox"></div>
                                <span style="color: #777">اخبار</span>
                            </li>

                            <li>
                                <div class="circle-inbox"></div>
                                <span style="color: #777">ترفند</span>
                            </li>
                            <li>
                                <div class="circle-inbox"></div>
                                <span style="color: #777">تکنولوژی</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content col-12 col-md-9 order-1 order-md-2 mx-auto">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="off-box">
                                کد تخفیف دارید؟
                                <span onclick="insert_coupon()">
                                     برای نوشتن کد اینجا کلیک کنید
                                </span>
                                <div class="show_status d-none">1</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="insert_off_box off-box he_0 he_a">
                                <form method="post" action="">

                                    <div class="row">
                                        <div class="col-7">

                                            <input type="text" name="off-sale" class="form-control"
                                                   placeholder="کد تخفیف را وارد کنید">

                                        </div>
                                        <div class="col-5">
                                            <button type="submit" name="submit" class="send-color"> ارسال</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="account-box checkout-page ">
                        <div class="account-box-content">
                            <form method="post" class="form-account" action="{{ route('pay', ['lang' => $lang]) }}">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">


                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-title text-right">مشخصات شما</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">نام</div>
                                        <div class="form-account-row">
                                            <input class="input-field text-right" type="text"
                                                   name="first_name" required
                                                   placeholder="نام خود را وارد نمایید">

                                            @error('first_name')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">نام خانوادگی</div>
                                        <div class="form-account-row">
                                            <input class="input-field text-right" type="text"
                                                   name="last_name" required
                                                   placeholder="نام خانوادگی خود را وارد نمایید">

                                            @error('last_name')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">شماره موبایل</div>
                                        <div class="form-account-row">
                                            <input class="input-field" type="text"
                                                   name="phone" required
                                                   placeholder=" شماره موبایل خود را وارد نمایید">

                                            @error('phone')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-title text-right">افزودن آدرس جدید</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-account-title">آدرس پستی</div>
                                        <div class="form-account-row">
                                            <textarea class="input-field text-right" rows="5"
                                                      name="address" required
                                                      placeholder=" آدرس پستی خود را وارد نمایید"></textarea>

                                            @error('address')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">کد پستی</div>
                                        <div class="form-account-row">
                                            <input class="input-field" type="text"
                                                   name="postal_code" required
                                                   placeholder=" شماره موبایل خود را وارد نمایید">

                                            @error('postal_code')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-account-row text-left">
                                            <button class="btns btn-info">
                                                ثبت و پرداخت
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
