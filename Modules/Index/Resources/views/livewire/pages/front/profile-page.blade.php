<div>
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
                                                <span>{{ $object->first_name . ' ' . $object->last_name }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">پست الکترونیک :</span>
                                                <span>{{ $object->email ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">شماره تلفن همراه:</span>
                                                <span>{{ $object->phone ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">نام کاربری :</span>
                                                <span>{{ $object->username ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">کد پستی :</span>
                                                <span>{{ $object->postal_code ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">آدرس :</span>
                                                <span>{{ $object->address ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
                                               class="btn-link-border form-account-link">
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

                                            @foreach($wishlists as $wish)
                                                <div class="profile-recent-fav-row">
                                                    <a href="#"
                                                       class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                        <img
                                                            src="{{ $wish->product ? $wish->product->get_image() : '---' }}"></a>
                                                    <div class="profile-recent-fav-col profile-recent-fav-col-title">
                                                        <a href="#">
                                                            <h4 class="profile-recent-fav-name">
                                                                {{ $wish->product ? $wish->product->get_title($lang) : '---' }}
                                                            </h4>
                                                        </a>
                                                        @if(($wish->product && $wish->product->quantity > 0) || in_array($wish->product_id, $object->carts_product_pluck_id()))
                                                            <div class="profile-recent-fav-price text-success">موجود
                                                            </div>
                                                        @else
                                                            <div class="profile-recent-fav-price">ناموجود</div>
                                                        @endif
                                                    </div>
                                                    <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                        <button wire:click="RemoveFromWishlist({{ $wish->id }})" class="btn-action btn-action-remove">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach

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
</div>
