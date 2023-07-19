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
                                    <h1 class="title-tab-content">{{ __('List of favorites') }}</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="row">

                                        @if(count($objects))
                                            @foreach($objects as $object)
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="profile-recent-fav-row">
                                                        <a href="#"
                                                           class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                            <img
                                                                src="{{ $object->product ? $object->product->get_image() : '---' }}"
                                                                alt="{{ $object->product ? $object->product->get_title($lang) : '---' }}"></a>
                                                        <div
                                                            class="profile-recent-fav-col profile-recent-fav-col-title">
                                                            <a href="{{ route('product_detail', ['slug' => $object->product ? $object->product->get_slug($lang) : '---', 'locale' => $lang]) }}">
                                                                <h4 class="profile-recent-fav-name">
                                                                    {{ $object->product ? $object->product->get_title($lang) : '---' }}
                                                                </h4>
                                                            </a>
                                                            <div class="profile-recent-fav-price">
                                                                @if($object->product && $object->product->calculate_discount_percent() > 0)
                                                                    {{ $object->product ? $object->product->discount_price : '---' }} {{ __('Toman') }}
                                                                @else
                                                                    {{ $object->product ? $object->product->price : '---' }} {{ __('Toman') }}
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                            <button wire:click="RemoveFromWishlist({{ $object->id }})"
                                                                    class="btn-action btn-action-remove">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-12 text-left mb-3">
                                                            <a href="{{ route('product_detail', ['slug' => $object->product ? $object->product->get_slug($lang) : '---', 'locale' => $lang]) }}"
                                                               class="view-product">مشاهده محصول</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-12 mt-3 text-center">
                                                <h1 class="text-empty">{{ __('There are no items to display!') }}</h1>
                                            </div>
                                        @endif

                                    </div>
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
