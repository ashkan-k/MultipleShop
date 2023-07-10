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
                                    <h1 class="title-tab-content">{{ __('Personal Information') }}</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Full Name') }} :</span>
                                                <span>{{ $object->first_name . ' ' . $object->last_name }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Email') }} :</span>
                                                <span>{{ $object->email ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Phone') }}:</span>
                                                <span>{{ $object->phone ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Username') }} :</span>
                                                <span>{{ $object->username ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Postal Code') }} :</span>
                                                <span>{{ $object->postal_code ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p>
                                                <span class="title">{{ __('Address') }} :</span>
                                                <span>{{ $object->address ?: '---' }}</span>
                                            </p>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="{{ route('user_profile_edit', ['locale' => $lang]) }}"
                                               class="btn-link-border form-account-link">
                                                {{ __('Edit personal information') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <h1 class="title-tab-content">{{ __('List of recent favorites') }}</h1>
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
                                                            <div
                                                                class="profile-recent-fav-price text-success">{{ __('Available') }}
                                                            </div>
                                                        @else
                                                            <div
                                                                class="profile-recent-fav-price">{{ __('Unavailable') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                        <button wire:click="RemoveFromWishlist({{ $wish->id }})"
                                                                class="btn-action btn-action-remove">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                        @if(count($latest_orders))
                                            <div class="col-lg-12">
                                                <div class="content-section default">
                                                    <div class="table-responsive">
                                                        <table class="table table-order">
                                                            <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">محصول</th>
                                                                <th scope="col">تعداد</th>
                                                                <th scope="col">شماره سفارش</th>
                                                                <th scope="col">تاریخ ثبت سفارش</th>
                                                                <th scope="col">مبلغ کل</th>
                                                                <th scope="col">عملیات پرداخت</th>
                                                                <th scope="col">وضعیت</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($latest_orders as $order)
                                                                <tr>
                                                                    <td>{{ $order->id }}</td>
                                                                    <td>{{ $order->product ? $order->product->title : '---' }}</td>
                                                                    <td>{{ $order->count }}</td>
                                                                    <td class="order-code">DKC-59888888</td>
                                                                    <td>{{ \Hekmatinasser\Verta\Verta:: instance($order->created_at)->format('%B %d، %Y') }}</td>
                                                                    <td>{{ $order->payment ? $order->payment->amount : '---' }} {{ __('Toman') }}</td>
                                                                    <td class="text-{{ $order->payment->status ? 'success' : 'danger' }}">{{ $order->payment->status ? 'موفق' : 'ناموفق' }}</td>
                                                                    <td class="text-{{ $order->get_status_class() }}">{{ $order->get_status() }}</td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 text-center">
                                                <a href="#" class="btn-link-border form-account-link">
                                                    {{ __('View and edit the list of favorites') }}
                                                </a>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="title-tab-content">{{ __('Latest orders') }}</h1>
                            </div>
                            <div class="col-12 text-center">
                                <div class="content-section pt-5 pb-5">
                                    <div class="icon-empty">
                                        <i class="now-ui-icons travel_info"></i>
                                    </div>
                                    <h1 class="text-empty">{{ __('There are no items to display!') }}</h1>
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
