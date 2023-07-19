@auth

    <div>
        <div class="overlay-search-box"></div>

        <main class="cart-page default">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="style-breadcrumb">
                            <div class="breadcrumb-section default">
                                <ul class="breadcrumb-list">
                                    <li>
                                        <a href="/">
                                            <span>{{ __('Online Shop') }} {{ $website_title }}</span>
                                        </a>
                                    </li>
                                    <li><span>{{ __('Cart') }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">

                        <div class="row">
                            <div class="col-12">
                                <div class="basket-contact">
                                    <div class="row">
                                        <div class="col-3 text-center">{{ __('Product image') }}</div>
                                        <div class="col-5 text-center">{{ __('Product Name') }}</div>
                                        <div class="col-2 text-center">{{ __('Count') }}</div>
                                        <div class="col-2 text-center">{{ __('Price') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive checkout-content default style-border">
                            <table class="table">
                                <tbody>

                                @if(count($objects))
                                    @foreach($objects as $item)
                                        <tr class="checkout-item">
                                            <td>
                                                <img src="{{ $item->product ? $item->product->get_image() : '---' }}"
                                                     style="width: 100px !important; height: 100px !important;"
                                                     alt="{{ $item->product ? $item->product->get_title($lang) : '---' }}">
                                                <button wire:click="RemoveFromCart({{ $item->id }})" class="checkout-btn-remove"></button>
                                            </td>
                                            <td>
                                                <h3 class="checkout-title">
                                                    {{ $item->product ? $item->product->get_title($lang) : '---' }}
                                                </h3>
                                            </td>
                                            <td>{{ $item->count ?: '---' }} {{ __('Count') }}</td>

                                            @if($item->product && $item->product->calculate_discount_percent() > 0)
                                                <td>{{ number_format($item->product->discount_price * $item->count) }} {{ __('Toman') }}</td>
                                            @else
                                                <td>{{ number_format($item->product->price * $item->count) }} {{ __('Toman') }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="col-12 mt-3 text-center">
                                        <h5 class="text-empty">{{ __('There are no items to display!') }}</h5>
                                    </div>
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <aside class="cart-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-2">
                        <div class="checkout-aside">
                            <div class="checkout-summary">
                                <div class="checkout-summary-main">
                                    <ul class="checkout-summary-summary">
                                        <li><span>{{ __('Total Amount') }} ({{ count($objects) }} {{ __('items') }})</span><span>{{ number_format($total_amount) }} {{ __('Toman') }}</span></li>
                                        {{--                                    <li>--}}
                                        {{--                                        <span>هزینه ارسال</span>--}}
                                        {{--                                        <span>وابسته به آدرس<span class="wiki wiki-holder"><span--}}
                                        {{--                                                    class="wiki-sign"></span>--}}
                                        {{--                                                    <div class="wiki-container js-dk-wiki is-right">--}}
                                        {{--                                                        <div class="wiki-arrow"></div>--}}
                                        {{--                                                        <p class="wiki-text">--}}
                                        {{--                                                            هزینه ارسال مرسولات می‌تواند وابسته به شهر و آدرس گیرنده--}}
                                        {{--                                                            متفاوت باشد. در--}}
                                        {{--                                                            صورتی که هر--}}
                                        {{--                                                            یک از مرسولات حداقل ارزشی برابر با ۱۰۰هزار {{ __() 'Toman}} داشته باشد،--}}
                                        {{--                                                            آن مرسوله--}}
                                        {{--                                                            بصورت رایگان--}}
                                        {{--                                                            ارسال می‌شود.<br>--}}
                                        {{--                                                            "حداقل ارزش هر مرسوله برای ارسال رایگان، می تواند متغیر--}}
                                        {{--                                                            باشد."--}}
                                        {{--                                                        </p>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </span></span>--}}
                                        {{--                                    </li>--}}
                                    </ul>
                                    <div class="checkout-summary-devider">
                                        <div></div>
                                    </div>
                                    <div class="checkout-summary-content">
                                        <div class="checkout-summary-price-title">{{ __('Payable Amount') }}:</div>
                                        <div class="checkout-summary-price-value">
                                            <span class="checkout-summary-price-value-amount">{{ number_format($total_amount) }}</span>{{ __('Toman') }}
                                        </div>
                                        <a @if(!$total_amount) onclick="showToast('ملبغ قابل پرداخت نمیتواند صفر باشد!', 'error')" @else href="{{ route('order_submit', ['locale' => $lang]) }}" @endif class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    {{ __('Continue Order') }}
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>
                                        <div>
                                            <span>
                                                {{ __('The products in your basket are not registered and reserved, complete the next steps to place an order.') }}
                                            </span>
                                            <span class="wiki wiki-holder"><span class="wiki-sign"></span>
                                                <div class="wiki-container is-right">
                                                    <div class="wiki-arrow"></div>
                                                    <p class="wiki-text">
                                                        {{ __('The products in your shopping cart will be reserved for you only if you register and pay for the order. If the order is not registered, GT Kala has no responsibility for the price or inventory of these goods.') }}
                                                    </p>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-feature-aside">
                                <ul>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-guarantee">
                                        {{ __('Seven days replacement guarantee') }}
                                    </li>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-cash">
                                        {{ __('Payment on the spot by bank card') }}
                                    </li>
                                    <li class="checkout-feature-aside-item checkout-feature-aside-item-express">
                                        {{ __('Express delivery') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
    </div>

@else

    <main class="cart default">
        <div class="container text-center">
            <div class="cart-empty">
                <div class="cart-empty-icon">
                    <i class="fa fa-shopping-basket shopping_basket"></i>
                </div>
                <div class="cart-empty-title">{{ __('Your shopping cart is empty!') }}</div>
                <div class="parent-btn">
                    <a href="{{ route('login') }}?next=/{{ request()->path() }}" class="dk-btn dk-btn-success">
                        {{ __('Log in to your account') }}
                        <i class="fa fa-sign-in"></i>
                    </a>
                </div>
                {{--                <div class="cart-empty-url">--}}
                {{--                    <span>کاربر جدید هستید؟</span>--}}
                {{--                    <a href="#">ثبت‌نام در جی تی کالا</a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </main>

@endauth
