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
                            <div class="product-gallery default">
                                <img class="zoom-img" id="img-product-zoom" src="{{ $object->get_image() }}"
                                     alt="{{ $object->get_title($lang) }}"
                                     data-zoom-image="{{ $object->get_image() }}" width="411"/>

                                <div id="gallery_01f" style="width:500px;float:left;">
                                    <ul class="gallery-items owl-carousel owl-theme" id="gallery-slider">

                                        @foreach($object->galleries()->get() as $gallery)
                                            <li class="item">
                                                <a href="#"
                                                   class="elevatezoom-gallery {{ $loop->index == 0 ? 'active' : ''  }}"
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

                                <li>
                                    <button data-toggle="modal" data-target="#myModal"><i
                                            class="fa fa-share-alt"></i></button>
                                    <span class="tooltip-option">{{ __('Share') }}</span>
                                </li>
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
                                    <span>{{ $object->en_title ?: '---' }}</span>
                                </h1>
                            </div>
                            <div class="product-guaranteed default">
                                @if($lang == 'fa')
                                    بیش از {{ $comments->where('suggest_score', 'suggest')->count() }} نفر از خریداران این
                                    محصول را پیشنهاد داده‌اند
                                @else
                                    More than {{ $comments->where('suggest_score', 'suggest')->count() }} buyers have recommended this product
                                @endif
                            </div>
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
                                        <span>دسته‌بندی</span> :
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
                            <div class="price-product defualt">
                                <div class="price-value">
                                    <span> {{ number_format($object->price) }} </span>
                                </div>
                                <span class="price-currency">{{ __('Toman') }}</span>

                                <div class="price-discount" data-title="{{ __('Discount') }}">
                                            <span>
                                                {{ $object->calculate_discount_percent() ?: '0' }}
                                            </span>
                                    <span>%</span>
                                </div>
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
                                                <a class="dk-btn dk-btn-info" style="cursor: not-allowed" disabled>
                                                    {{ __('Unavailable') }}
                                                    <i class="now-ui-icons shopping_cart-simple"></i>
                                                </a>
                                            </div>

                                        @endif

                                    @endif
                                @else

                                    @if($object->quantity > 0)

                                        <div class="parent-btn">
                                            <a href="{{ route('login') }}" class="dk-btn dk-btn-info">
                                                {{ __('Add to cart') }}
                                                <i class="now-ui-icons shopping_cart-simple"></i>
                                            </a>
                                        </div>

                                    @else

                                        <div class="parent-btn">
                                            <a class="dk-btn dk-btn-info" style="cursor: not-allowed" disabled>
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
                                                <div class="content-expert">
                                                    <p>{!! $object->description !!}</p>
                                                </div>
                                                <div class="sum-more">
                                                            <span class="show-more btn-link-border">
                                                                {{ __('Show more') }}
                                                            </span>
                                                    <span class="show-less btn-link-border">
                                                                {{ __('Show less') }}
                                                            </span>
                                                </div>
                                                <div class="shadow-box"></div>
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
                                                                    <div class="form-account-title">{{ __('The title of your comment') }}
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
                                                                    <div class="form-account-title">{{ __('Positive Points') }}
                                                                        <span class="cl-circle-title cl-primary"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="positive_points"
                                                                               placeholder="{{ __('Separate with commas (,).') }}"
                                                                               wire:model.defer="positive_points"
                                                                               type="text" id="strengths-points-input"
                                                                               data-addui='tags'
                                                                               data-enter='true'>
                                                                        <button id="add-strengths-point"
                                                                                class="add-points">
                                                                            +
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 col-sm-12 tag-input-st tag-input-weak">
                                                                    <div class="form-account-title">{{ __('Negative Points') }}
                                                                        <span class="cl-circle-title cl-red"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="negative_points" type="text"
                                                                               placeholder="{{ __('Separate with commas (,).') }}"
                                                                               wire:model.defer="negative_points"
                                                                               id="weak-points-input" data-addui='tags'
                                                                               data-enter='true'>
                                                                        <button id="add-weak-point" class="add-points">+
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-5">
                                                                    <div class="form-account-title">متن نظر شما (اجباری)
                                                                    </div>
                                                                    <div class="form-account-row">
                                                                         <textarea class="input-field text-right"
                                                                                   rows="5"
                                                                                   wire:model.defer="body"
                                                                                   required name="body"
                                                                                   placeholder="متن خود را بنویسید"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-2 mb-2 px-0">
                                                                    <div class="product-offer-question shopping-page">
                                                                        <div class="headline">
                                                                            <span>آیا خرید این محصول را به دوستانتان پیشنهاد می کنید؟</span>
                                                                        </div>
                                                                        <div class="checkout-shipment">
                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio1" value="suggest">
                                                                                <label for="radio1">
                                                                                    پیشنهاد می کنم
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio2" value="not_suggest">
                                                                                <label for="radio2">
                                                                                    خیر،پیشنهاد نمی کنم
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="suggest_score"
                                                                                       wire:model.defer="suggest_score"
                                                                                       id="radio3" value="no_idea">
                                                                                <label for="radio3">
                                                                                    نظری ندارم
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 px-0">
                                                                    <button type="submit"
                                                                            class="btn btn-primary btn-no-icon">
                                                                        ثبت نظر
                                                                    </button>
                                                                    <p>با “ثبت نظر” موافقت خود را با <a
                                                                            href="/page/comments-rules/"
                                                                            class="btn-link-spoiler" target="_blank">قوانین
                                                                            انتشار محتوا</a> در دیجی‌کالا اعلام می‌کنم.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    @else
                                                        <div class="pl-5 text-center">
                                                            <h3>برای ثبت
                                                                نظر ابتدا
                                                                <a class="text-info"
                                                                   href="{{ route('login', ['locale' => $lang]) }}">
                                                                    وارد </a> شوید</h3>
                                                        </div>
                                                    @endauth

                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="pl-5">
                                                        <h3>{{ $settings['comment_terms_title'] }}</h3>
                                                        <div>
                                                            {!! $settings['comment_terms_text'] !!}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <h2 class="param-title mt-5">
                                                نظرات کاربران
                                                <span>{{ $comments->count() }} نظر</span>
                                            </h2>
                                            <div class="comments-area default">
                                                <ol class="comment-list" style="width: 100% !important;">

                                                    @foreach($object->comments()->where('status', 'approved')->get() as $comment)
                                                        <?php $ordered_color = $comment->user->orders()->where('product_id', $comment->product_id)->first() ?>

                                                        <li>
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-12">
                                                                        <div
                                                                            class="message-light message-light--purchased">
                                                                            خریدار این محصول
                                                                        </div>
                                                                        <ul class="comments-user-shopping">
                                                                            <li>
                                                                                <div class="cell">رنگ خریداری
                                                                                    شده:
                                                                                </div>
                                                                                <div class="cell color-cell">
                                                                                    <span class="shopping-color-value"
                                                                                          style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>{{ $ordered_color ? $ordered_color->color->title : '---' }}
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="cell">خریداری شده
                                                                                    از:
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
                                                                                خرید این محصول را توصیه می‌کنم
                                                                            </div>
                                                                        @elseif($comment->suggest_score == 'not_suggest')
                                                                            <div
                                                                                class="message-light">
                                                                                خرید این محصول را توصیه نمی‌کنم
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                                        <div class="comment-title">
                                                                            {{ $object->get_title($lang) ?: '---' }}
                                                                        </div>
                                                                        <div class="comment-author">
                                                                            توسط {{ $comment->user->full_name() ?: '---' }}
                                                                            در
                                                                            تاریخ {{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->format('%B %d، %Y') }}
                                                                        </div>
                                                                        <div class="row">

                                                                            @if($comment->positive_points)
                                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                                    <div
                                                                                        class="content-expert-evaluation-positive">
                                                                                        <span>نقاط قوت</span>
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
                                                                                        <span>نقاط ضعف</span>
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
                                <span>همچنین ممکن است دوست داشته باشید ...</span>
                            </h3>
                            <a href="{{ route('products_list', ['locale' => $lang]) }}" class="view-all">مشاهده همه</a>
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
                                        @if($may_like_pro->discount_price)
                                            <div class="text-center">
                                                <del>
                                                    <span>{{ number_format($may_like_pro->discount_price) }}<span>{{ __('Toman') }}</span></span>
                                                </del>
                                            </div>
                                        @endif
                                        <div class="text-center">
                                            <ins>
                                                <span>{{ number_format($may_like_pro->price) }}<span>{{ __('Toman') }}</span></span>
                                            </ins>
                                        </div>
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
                                <span>محصولات مرتبط</span>
                            </h3>
                            <a href="{{ route('category.products', [
                'locale' => $lang,
                'slug' => $object->category->get_slug($lang)
]) }}"
                               class="view-all">مشاهده همه</a>
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
                                        @if($related_pro->discount_price)
                                            <del>
                                                <span>{{ number_format($related_pro->discount_price) }}<span>{{ __('Toman') }}</span></span>
                                            </del>
                                        @endif

                                        <ins><span>{{ number_format($related_pro->price) }}<span>{{ __('Toman') }}</span></span>
                                        </ins>
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
            showToast('کاربر عزیز نظر شما با موفقیت ثبت شد و پس تایید مدیر در سایت قرار میگیرد.', 'success');
        });

        window.addEventListener('addToCartError', event => {
            showToast(event['detail']['message'], 'error');
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

