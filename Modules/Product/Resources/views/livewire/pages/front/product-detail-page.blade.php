<main class="single-product default">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="style-breadcrumb">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="/"> <span>{{ __('Online Shop') }} {{ $website_title }}</span></a>
                            </li>

                            <li>
                                <a href="{{ route('products_list', ['locale' => $lang]) }}"><span>{{ __('Products') }}</span></a>
                            </li>

                            @if(isset($object->category->parent->parent->parent))
                                <li>
                                    <a href="{{ route('category.products', [
                                                         'locale' => $lang,
                                                         'slug' => $object->category->parent->parent->parent->get_slug($lang)
                                            ]) }}">
                                        <span>{{ $object->category->parent->parent->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($object->category->parent->parent))
                                <li>
                                    <a href="{{ route('category.products', [
                                                    'locale' => $lang,
                                                    'slug' => $object->category->parent->parent->get_slug($lang)
                                        ]) }}">
                                        <span>{{ $object->category->parent->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($object->category->parent))
                                <li>
                                    <a href="{{ route('category.products', [
                                                            'locale' => $lang,
                                                            'slug' => $object->category->parent->get_slug($lang)
                                            ]) }}">
                                        <span>{{ $object->category->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('category.products', [
                                                    'locale' => $lang,
                                                    'slug' => $object->category->get_slug($lang)
                                    ]) }}">
                                    <span>{{ $object->category->get_title($lang) }}</span>
                                </a>
                            </li>

                            <li>
                                <span>{{ $object->get_title($lang) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <article class="product">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-gallery default" wire:ignore>
                                <img class="zoom-img" id="img-product-zoom" src="{{ $object->get_image() }}"
                                     alt="{{ $object->get_title($lang) }}"
                                     data-zoom-image="{{ $object->get_image() }}" width="411"/>

                                <div id="gallery_01f" style="width:500px;float:left;">
                                    <ul class="gallery-items owl-carousel owl-theme" id="gallery-slider">

                                        <li class="item">
                                            <a href="#"
                                               class="elevatezoom-gallery active"
                                               data-update=""
                                               data-image="{{ $object->get_image() }}"
                                               data-zoom-image="{{ $object->get_image() }}">
                                                <img src="{{ $object->get_image() }}" width="100"/></a>
                                        </li>

                                        @foreach($object->galleries()->get() as $gallery)
                                            <li class="item">
                                                <a href="#"
                                                   class="elevatezoom-gallery"
                                                   data-update=""
                                                   data-image="{{ $gallery->get_image() }}"
                                                   data-zoom-image="{{ $gallery->get_image() }}">
                                                    <img src="{{ $gallery->get_image() }}" width="100"/></a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <ul class="gallery-options">

                                @auth
                                    @if($wish_lists->where('user_id' , auth()->user()->id)->isEmpty())
                                        <li>
                                            <button wire:click="AddRemoveWishList('add')" class="add-favorites"><i
                                                    class="fa fa-heart"></i></button>
                                            <span class="tooltip-option">{{ __('Add to favorites') }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <button wire:click="AddRemoveWishList('remove')" class="add-favorites"><i
                                                    style="color: #f44336 !important;" class="fa fa-heart"></i></button>
                                            <span class="tooltip-option">{{ __('Remove from favorites') }}</span>
                                        </li>
                                    @endif
                                @endauth

                                {{--                                <li>--}}
                                {{--                                    <button data-toggle="modal" data-target="#myModal"><i--}}
                                {{--                                            class="fa fa-share-alt"></i></button>--}}
                                {{--                                    <span class="tooltip-option">{{ __('Share') }}</span>--}}
                                {{--                                </li>--}}
                            </ul>
                            <!-- Modal Core -->
                            <div class="modal-share modal fade" id="myModal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">اشتراک گذاری</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-share">
                                                <div class="form-share-title">اشتراک گذاری در شبکه های اجتماعی
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="btn-group-share">
                                                            <li><a href="#" class="btn-share btn-share-twitter"
                                                                   target="_blank"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" class="btn-share btn-share-facebook"
                                                                   target="_blank"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"
                                                                   class="btn-share btn-share-google-plus"
                                                                   target="_blank"><i
                                                                        class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-share-title">ارسال به ایمیل</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="ui-input ui-input-send-to-email">
                                                            <input class="ui-input-field" type="email"
                                                                   placeholder="آدرس ایمیل را وارد نمایید.">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn-primary">ارسال</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="form-share-url default">
                                                <div class="form-share-url-title">آدرس صفحه</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="ui-url">
                                                            <input class="ui-url-field"
                                                                   value="https://www.digikala.com">
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Core -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-title default">
                                <h1>
                                    {{ $object->get_title($lang) }}
                                    @if($object->en_title)
                                        <span>{{ $object->en_title ?: '---' }}</span>
                                    @endif
                                </h1>
                            </div>
                            @if($suggested_count)
                                <div class="product-guaranteed default">
                                    @if($lang == 'fa')
                                        بیش از {{ $suggested_count }}
                                        نفر ({{ $object->CalculateSuggestedCommentsPercent() }}%) از خریداران
                                        این
                                        محصول را پیشنهاد داده‌اند
                                    @else
                                        More than {{ $suggested_count }}
                                        buyers (({{ $object->CalculateSuggestedCommentsPercent() }}%)) have
                                        recommended this product
                                    @endif
                                </div>
                            @endif
                            <div class="product-params default">
                                <ul data-title="{{ __('Product features') }}">

                                    @foreach($top_features as $top_f)
                                        <li>
                                            <span>{{ $top_f->feature->title ?: '---' }}: </span>
                                            <span> {{ $top_f->value ?: '---' }} </span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">

                            <div class="product-directory default">
                                <ul>
                                    <li>
                                        <span>{{ __('Brand') }}</span> :
                                        <span
                                            class="product-brand-title">{{ $object->brand ? $object->brand->title : '---' }}</span>
                                    </li>
                                    <li>
                                        <span>{{ __('Category') }}</span> :
                                        <a href="{{ route('category.products', [
                    'locale' => $lang,
                    'slug' => $object->category->get_slug($lang)
]) }}"
                                           class="btn-link-border">
                                            {{ $object->category ? $object->category->get_title($lang) : '---' }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-variants default">
                                <span>{{ __('Color Selection') }}: </span>

                                @foreach($colors as $color)
                                    <div class="radio">
                                        <input type="radio" name="color_id" id="id_color_{{ $color->id }}"
                                               wire:model.defer="cart_color"
                                               value="{{ $color->id }}">
                                        <label for="id_color_{{ $color->id }}">
                                            {{ $color->title ?: '---' }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>

                            @if(count($sizes) > 0)
                                <div class="product-variants default">
                                    <span>{{ __('Size Selection') }}: </span>

                                    @foreach($sizes as $size)
                                        <div class="radio">
                                            <input type="radio" name="size_id" id="id_size_{{ $size->id }}"
                                                   wire:model.defer="cart_size"
                                                   value="{{ $size->id }}">
                                            <label for="id_size_{{ $size->id }}">
                                                {{ $size->title ?: '---' }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            @endif

                            <div class="product-guarantee default">
                                <i class="fa fa-check-circle"></i>
                                <p class="product-guarantee-text">{{ __('Guarantee of authenticity and physical health of goods') }}</p>
                            </div>
                            <div class="product-delivery-seller default">
                                <p>
                                    <i class="now-ui-icons shopping_shop"></i>
                                    <span>{{ __('Seller') }}:‌</span>
                                    <a href="#"
                                       class="btn-link-border">{{ $object->user ? $object->user->full_name() : '---' }}</a>
                                </p>
                            </div>

                            @if($object->calculate_discount_percent())
                                <del><h5> {{ number_format($object->price) }} {{ __('Toman') }} </h5></del>
                            @endif

                            <div class="price-product defualt">
                                <div class="price-value">
                                    @if($object->calculate_discount_percent())
                                        <span> {{ number_format($object->discount_price) }} </span>
                                    @else
                                        <span> {{ number_format($object->price) }} </span>
                                    @endif
                                </div>
                                <span class="price-currency">{{ __('Toman') }}</span>

                                @if($object->calculate_discount_percent())
                                    <div class="price-discount" data-title="{{ __('Discount') }}">
                                            <span>
                                                {{ $object->calculate_discount_percent() ?: '0' }}
                                            </span>
                                        <span>%</span>
                                    </div>
                                @endif
                            </div>

                            @if($object->quantity > 0 && !isset($user_cart))
                                <div class="product-variants default mt-5 mb-0">

                                    <div class="radio">
                                        <span>{{ __('Count') }}: </span>
                                        <input type="number" style="width: 100px" name="color_id"
                                               wire:model.defer="cart_count"
                                               min="1" max="{{ $object->quantity }}"
                                               class="input-field text-center mr-2"
                                               value="1">
                                    </div>

                                </div>
                            @endif

                            <div class="product-add default">

                                @auth
                                    @if(isset($user_cart))

                                        <div class="parent-btn">
                                            <a wire:click="AddRemoveCart('remove')" class="dk-btn dk-btn-info">
                                                {{ __('Remove from cart') }}
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        </div>

                                    @else

                                        @if($object->quantity > 0)

                                            <div class="parent-btn">
                                                <a wire:click="AddRemoveCart('add')" class="dk-btn dk-btn-info">
                                                    {{ __('Add to cart') }}
                                                    <i class="now-ui-icons shopping_cart-simple"></i>
                                                </a>
                                            </div>

                                        @else

                                            <div class="parent-btn">
                                                <a class="dk-btn dk-btn-grey" style="cursor: not-allowed" disabled>
                                                    {{ __('Unavailable') }}
                                                    <i class="now-ui-icons shopping_cart-simple"></i>
                                                </a>
                                            </div>

                                        @endif

                                    @endif
                                @else

                                    @if($object->quantity > 0)

                                        <div class="parent-btn">
                                            <a href="{{ route('login') }}?next=/{{ request()->path() }}"
                                               class="dk-btn dk-btn-info">
                                                {{ __('Add to cart') }}
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        </div>

                                    @else

                                        <div class="parent-btn">
                                            <a class="dk-btn dk-btn-grey" style="cursor: not-allowed" disabled>
                                                {{ __('Unavailable') }}
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        </div>

                                    @endif

                                @endauth

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12 default no-padding">
                    <div class="product-tabs default">
                        <div class="box-tabs default">
                            <ul class="nav" role="tablist">
                                <li class="box-tabs-tab">
                                    <a class="active" data-toggle="tab"
                                       href="#desc" role="tab" id="tab_review"
                                       onclick="ChangeTab('review')"
                                       aria-expanded="true">
                                        <i class="now-ui-icons education_glasses"></i>{{ __('Review') }}
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a class="" data-toggle="tab"
                                       href="#params" id="tab_specifications"
                                       onclick="ChangeTab('specifications')"
                                       role="tab" aria-expanded="false">
                                        <i class="now-ui-icons design_bullet-list-67"></i>{{ __('Specifications') }}
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a class="" data-toggle="tab" id="tab_comments"
                                       href="#comments"
                                       onclick="ChangeTab('comments')"
                                       role="tab" aria-expanded="false">
                                        <i class="now-ui-icons ui-2_chat-round"></i>{{ __('User Comments') }}
                                    </a>
                                </li>
                                {{--                                <li class="box-tabs-tab">--}}
                                {{--                                    <a data-toggle="tab" href="#questions" role="tab" aria-expanded="false">--}}
                                {{--                                        <i class="now-ui-icons travel_info"></i> پرسش و پاسخ--}}
                                {{--                                    </a>--}}
                                {{--                                </li>--}}
                            </ul>


                            <div class="card-body default radius-bottom">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="desc" role="tabpanel"
                                         aria-expanded="true">
                                        <article>
                                            <h2 class="param-title">
                                                {{ __('Expert review') }}
                                                <span>{{ $object->get_title($lang) }}</span>
                                            </h2>
                                            <div class="parent-expert default">
                                                <div class="content-expert active">
                                                    <p>{!! $object->description !!}</p>
                                                </div>
                                                <div class="sum-more">
                                                        <span class="show-more btn-link-border"
                                                              style="display: none !important;">
                                                                {{ __('Show more') }}
                                                            </span>
                                                    @if(\Illuminate\Support\Str::length($object->description) > 300)
                                                        <span class="show-less btn-link-border"
                                                              style="display: block !important;">
                                                                {{ __('Show less') }}
                                                            </span>
                                                    @endif
                                                </div>
                                                <div class="shadow-box" style="display: none !important;"></div>
                                            </div>

                                        </article>
                                    </div>


                                    <div class="tab-pane fade params" id="params" role="tabpanel"
                                         aria-expanded="false">
                                        <article>
                                            <h2 class="param-title">
                                                {{ __('Technical Specifications') }}
                                                <span>{{ $object->get_title($lang) }}</span>
                                            </h2>
                                            <section>
                                                <h3 class="params-title">{{ __('General Specifications') }}</h3>
                                                <ul class="params-list">

                                                    @foreach($bottom_features as $bottom_f)
                                                        <li>
                                                            <div class="params-list-key">
                                                                <span
                                                                    class="block">{{ $bottom_f->feature->title ?: '---' }}</span>
                                                            </div>
                                                            <div class="params-list-value">
                                                                    <span class="block">
                                                                        {{ $bottom_f->value ?: '---' }}
                                                                    </span>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </section>
                                        </article>
                                    </div>


                                    <div class="tab-pane fade" id="comments" role="tabpanel"
                                         aria-expanded="false">
                                        <article>

                                            <div class="row comments-add-col--content">
                                                <div class="col-md-6 col-sm-12">

                                                    @auth
                                                        <form class="px-5" wire:submit.prevent="SubmitNewComment()">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div
                                                                        class="form-account-title">{{ __('The title of your comment') }}
                                                                        ({{ __('Required') }})
                                                                    </div>
                                                                    <div class="form-account-row">
                                                                        <input class="input-field text-right"
                                                                               wire:model.defer="title"
                                                                               type="text" name="title" required
                                                                               placeholder="{{ __('Write the title of your comment') }}">

                                                                        @error('title')
                                                                        <span
                                                                            class="text-danger text-wrap">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 tag-input-st">
                                                                    <div
                                                                        class="form-account-title">{{ __('Positive Points') }}
                                                                        <span class="cl-circle-title cl-primary"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="positive_points"
                                                                               placeholder="{{ __('Separate with commas (,).') }}"
                                                                               wire:model.defer="positive_points"
                                                                               type="text" id="strengths-points-input"
                                                                               data-addui='tags'
                                                                               data-enter='true'>

                                                                        @error('positive_points')
                                                                        <span
                                                                            class="text-danger text-wrap">{{ $message }}</span>
                                                                        @enderror

                                                                        <button id="add-strengths-point"
                                                                                class="add-points">
                                                                            +
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 col-sm-12 tag-input-st tag-input-weak">
                                                                    <div
                                                                        class="form-account-title">{{ __('Negative Points') }}
                                                                        <span class="cl-circle-title cl-red"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="negative_points" type="text"
                                                                               placeholder="{{ __('Separate with commas (,).') }}"
                                                                               wire:model.defer="negative_points"
                                                                               id="weak-points-input" data-addui='tags'
                                                                               data-enter='true'>

                                                                        @error('negative_points')
                                                                        <span
                                                                            class="text-danger text-wrap">{{ $message }}</span>
                                                                        @enderror

                                                                        <button id="add-weak-point" class="add-points">+
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-5">
                                                                    <div
                                                                        class="form-account-title">{{ __('The text of your comment') }}
                                                                        ({{ __('Required') }})
                                                                    </div>
                                                                    <div class="form-account-row">
                                                                         <textarea class="input-field text-right"
                                                                                   rows="5"
                                                                                   wire:model.defer="body"
                                                                                   required name="body"
                                                                                   placeholder="{{ __('Write your text') }}"></textarea>
                                                                        @error('body')
                                                                        <span
                                                                            class="text-danger text-wrap">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-2 mb-2 px-0">
                                                                    <div class="product-offer-question shopping-page">
                                                                        <div class="headline">
                                                                            <span>{{ __('Do you recommend buying this product to your friends?') }}</span>
                                                                        </div>
                                                                        <div class="checkout-shipment">
                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio1" value="suggest">
                                                                                <label for="radio1">
                                                                                    {{ __('I recommend') }}
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio2" value="not_suggest">
                                                                                <label for="radio2">
                                                                                    {{ __('No, I do not recommend it') }}
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio3" value="no_idea">
                                                                                <label for="radio3">
                                                                                    {{ __('No idea') }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 px-0">
                                                                    <button type="submit"
                                                                            class="btn btn-primary btn-no-icon">
                                                                        {{ __('Submit Comment') }}
                                                                    </button>
                                                                    @if($lang == 'fa')
                                                                        <p>با “ثبت نظر” موافقت خود را با <a
                                                                                href="{{ route('terms', ['locale' => $lang]) }}"
                                                                                class="btn-link-spoiler"
                                                                                target="_blank">قوانین
                                                                                انتشار محتوا</a> در {{ $website_title }}
                                                                            اعلام
                                                                            می‌کنم.
                                                                        </p>
                                                                    @else
                                                                        <p>
                                                                            By "registering a comment" I declare my
                                                                            agreement with <a
                                                                                href="{{ route('terms', ['locale' => $lang]) }}"
                                                                                class="btn-link-spoiler"
                                                                                target="_blank">the content publishing
                                                                                rules</a> in {{ $website_title }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @else
                                                        <div class="pl-5 text-center">
                                                            @if($lang == 'fa')
                                                                <h3>برای ثبت
                                                                    نظر ابتدا
                                                                    <a class="text-info"
                                                                       href="{{ route('login', ['locale' => $lang]) }}?next=/{{ request()->path() }}">
                                                                        وارد </a> شوید</h3>
                                                            @else
                                                                <h3><a class="text-info"
                                                                       href="{{ route('login', ['locale' => $lang]) }}?next=/{{ request()->path() }}">Log
                                                                        in</a> first to post a comment</h3>
                                                            @endif
                                                        </div>
                                                    @endauth

                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="pl-5">
                                                        @if($lang == 'fa')
                                                            <h3>{{ $settings['comment_terms_title'] }}</h3>
                                                        @else
                                                            <h3>{{ $settings['comment_terms_en_title'] }}</h3>
                                                        @endif

                                                        @if($lang == 'fa')
                                                            <div>
                                                                {!! $settings['comment_terms_text'] !!}
                                                            </div>
                                                        @else
                                                            <div>
                                                                {!! $settings['comment_terms_en_text'] !!}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <h2 class="param-title mt-5">
                                                @if($comments->count())
                                                    {{ __('User Comments') }}
                                                    <span>{{ $comments->count() }} {{ __('Comments') }}</span>
                                                @else
                                                    {{ __('There is no comment.') }}
                                                @endif
                                            </h2>
                                            <div class="comments-area default">
                                                <ol class="comment-list" style="width: 100% !important;">

                                                    @foreach($comments->get() as $comment)
                                                        <?php $ordered_color = \Modules\Order\Entities\OrderProduct::where('product_id', $comment->commentable_id)->whereHas('order', function ($query) use ($comment) {
                                                            return $query->where('user_id', $comment->user_id);
                                                        })->first() ?>

                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            {{ __('The buyer of this product') }}
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div
                                                                                    class="cell">{{ __('Color purchased:') }}
                                                                                </div>
                                                                                <div class="cell color-cell">
                                                                                    <span class="shopping-color-value"
                                                                                          style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>{{ $ordered_color && $ordered_color->color ? $ordered_color->color->title : '---' }}
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">
                                                                                    {{ __('Purchased from:') }}
                                                                                </div>
                                                                                <div class="cell seller-cell">
                                                                                    <span
                                                                                        class="o-text-blue">{{ $object->user->full_name ?: '---' }}</span>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        @if($comment->suggest_score == 'suggest')
                                                                            <div
                                                                                class="message-light message-light--opinion-positive">
                                                                                {{ __('I recommend buying this product') }}
                                                                            </div>
                                                                        @elseif($comment->suggest_score == 'not_suggest')
                                                                            <div
                                                                                class="message-light">
                                                                                {{ __('I do not recommend buying this product') }}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            {{ $object->get_title($lang) ?: '---' }}
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            @if($lang == 'fa')
                                                                                توسط {{ $comment->user->full_name() ?: '---' }}
                                                                                در
                                                                                تاریخ {{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->format('%B %d، %Y') }}
                                                                            @else
                                                                                by {{ $comment->user->full_name() ?: '---' }}
                                                                                on {{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">

                                                                            @if($comment->positive_points)
                                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                                    <div
                                                                                        class="content-expert-evaluation-positive">
                                                                                        <span>{{ __('Positive Points') }}</span>
                                                                                        <ul>

                                                                                            @foreach(explode('،', $comment->positive_points) as $pos_p)
                                                                                                <li>{{ $pos_p }}</li>
                                                                                            @endforeach

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                            @if($comment->negative_points)
                                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                                    <div
                                                                                        class="content-expert-evaluation-negative">
                                                                                        <span>{{ __('Negative Points') }}</span>
                                                                                        <ul>

                                                                                            @foreach(explode('،', $comment->negative_points) as $neg_p)
                                                                                                <li>{{ $neg_p }}</li>
                                                                                            @endforeach

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            @endif

                                                                        </div>
                                                                        <p>{{ $comment->body ?: '---' }}</p>

                                                                        {{--                                                                        <div class="footer" id="id_comments_section">--}}
                                                                        {{--                                                                            @auth--}}
                                                                        {{--                                                                                <div class="comments-likes">--}}
                                                                        {{--                                                                                    آیا این نظر برایتان مفید بود؟--}}
                                                                        {{--                                                                                    <button class="btn-like"--}}
                                                                        {{--                                                                                            type="button"--}}
                                                                        {{--                                                                                            wire:click.prevent="SubmitCommentPoint({{ $comment->id }}, 'positive')"--}}
                                                                        {{--                                                                                            data-counter="{{ $comment->comment_points()->where('type', 'positive')->count() }}">--}}
                                                                        {{--                                                                                        بله--}}
                                                                        {{--                                                                                    </button>--}}
                                                                        {{--                                                                                    <button class="btn-like"--}}
                                                                        {{--                                                                                            type="button"--}}
                                                                        {{--                                                                                            wire:click.prevent="SubmitCommentPoint({{ $comment->id }}, 'negative')"--}}
                                                                        {{--                                                                                            data-counter="{{ $comment->comment_points()->where('type', 'negative')->count() }}">--}}
                                                                        {{--                                                                                        خیر--}}
                                                                        {{--                                                                                    </button>--}}
                                                                        {{--                                                                                </div>--}}
                                                                        {{--                                                                            @endauth--}}
                                                                        {{--                                                                        </div>--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    @endforeach

                                                </ol>


                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-3">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>{{ __('You may also like...') }}</span>
                            </h3>
                            <a href="{{ route('products_list', ['locale' => $lang]) }}"
                               class="view-all">{{ __('View All') }}</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">

                            @foreach($may_like_products as $may_like_pro)

                                <div class="item">
                                    <a href="{{ route('product_detail', [
                        'locale' => $lang,
                        'slug' => $may_like_pro->get_slug($lang)
]) }}">
                                        <img src="{{ $may_like_pro->get_image() }}"
                                             class="img-fluid" alt="{{ $may_like_pro->get_title($lang) }}">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('product_detail', [
                'locale' => $lang,
                'slug' => $may_like_pro->get_slug($lang)
]) }}">{{ \Illuminate\Support\Str::limit($may_like_pro->get_title($lang), 32) }}</a>
                                    </h2>
                                    <div class="price">

                                        @if($may_like_pro->quantity)

                                            @if($may_like_pro->calculate_discount_percent() > 0)
                                                <div class="text-center">
                                                    <del>
                                                        <span>{{ number_format($may_like_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </del>
                                                </div>
                                                <div class="text-center">
                                                    <ins>
                                                        <span>{{ number_format($may_like_pro->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                </div>
                                            @else
                                                <div class="text-center">
                                                    <ins>
                                                        <span>{{ number_format($may_like_pro->price) }} <span>{{ __('Toman') }}</span></span>
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-3">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>{{ __('Related products') }}</span>
                            </h3>
                            <a href="{{ route('category.products', [
                'locale' => $lang,
                'slug' => $object->category->get_slug($lang)
]) }}"
                               class="view-all">{{ __('View All') }}</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">

                            @foreach($related_products as $related_pro)
                                <div class="item">
                                    <a href="{{ route('product_detail', [
                        'locale' => $lang,
                        'slug' => $related_pro->get_slug($lang)
]) }}">
                                        <img src="{{ $related_pro->get_image() }}"
                                             class="img-fluid" alt="{{ $related_pro->get_title($lang) }}">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('product_detail', [
        'locale' => $lang,
        'slug' => $related_pro->get_slug($lang)
]) }}">{{ \Illuminate\Support\Str::limit($related_pro->get_title($lang), 32) }}</a>
                                    </h2>
                                    <div class="price">
                                        @if($related_pro->quantity)

                                            @if($related_pro->calculate_discount_percent() > 0)
                                                <div class="text-center">
                                                    <del>
                                                        <span>{{ number_format($related_pro->price) }} <span>{{ __('Toman') }}</span></span>
                                                    </del>
                                                </div>
                                                <div class="text-center">
                                                    <ins>
                                                        <span>{{ number_format($related_pro->discount_price) }} <span>{{ __('Toman') }}</span></span>
                                                    </ins>
                                                </div>
                                            @else
                                                <div class="text-center">
                                                    <ins>
                                                        <span>{{ number_format($related_pro->price) }} <span>{{ __('Toman') }}</span></span>
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
        </div>
    </div>

    <a id="aaaaaaaa" href="#id_comments_section"></a>

</main>

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.3/jquery.scrollTo.min.js"></script>
@endsection

@push('StackScript')
    <script>
        current_tab = 'review';

        function ChangeTab(new_tab) {
            current_tab = new_tab;
        }

        window.addEventListener('initSomething', event => {
            $('#tab_' + current_tab).trigger("click");
        })

    </script>

    <script type="text/javascript">
        window.addEventListener('newCommentSubmited', event => {
            showToast('{{ __('Dear user, your comment has been registered successfully, and after the approval of the administrator, it will be placed on the site.') }}', 'success');
        });

        window.addEventListener('addToCartError', event => {
            showToast(event['detail']['message'], 'error');
        });

        window.addEventListener('cartStatusUpdated', event => {
            $('#cart_count_badge').html(event['detail']['cart_count'])
        });
    </script>

    {{--    <script>--}}
    {{--        app.controller('myCtrl', function ($scope, $http) {--}}
    {{--            $scope.positive_points = 0;--}}
    {{--            $scope.negative_points = 0;--}}

    {{--            $scope.GetCommentPoints = function (comment_id, type){--}}
    {{--                $scope.is_submited = true;--}}

    {{--                var url = `/api/comments/points/get/${comment_id}/${type}`;--}}

    {{--                $http.get(url).then(res => {--}}
    {{--                    $scope.is_submited = false;--}}

    {{--                    if (type == 'positive'){--}}
    {{--                        $scope.positive_points = res['data']['data'];--}}
    {{--                    }else {--}}
    {{--                        $scope.negative_points = res['data']['data'];--}}
    {{--                    }--}}
    {{--                }).catch(err => {--}}
    {{--                    $scope.is_submited = false;--}}
    {{--                    showToast('خطایی رخ داد.', 'error');--}}
    {{--                });--}}
    {{--            }--}}

    {{--            $scope.SubmitCommentPoint = function (){--}}

    {{--            }--}}
    {{--        })--}}
    {{--    </script>--}}
@endpush

