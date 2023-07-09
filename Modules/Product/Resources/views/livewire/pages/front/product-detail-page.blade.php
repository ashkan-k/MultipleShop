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
                                    <a href="{{ route('category.products', $object->category->parent->parent->parent->get_slug($lang)) }}">
                                        <span>{{ $object->category->parent->parent->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($object->category->parent->parent))
                                <li>
                                    <a href="{{ route('category.products', $object->category->parent->parent->get_slug($lang)) }}">
                                        <span>{{ $object->category->parent->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            @if(isset($object->category->parent))
                                <li>
                                    <a href="{{ route('category.products', $object->category->parent->get_slug($lang)) }}">
                                        <span>{{ $object->category->parent->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('category.products', $object->category->get_slug($lang)) }}">
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
                                <li>
                                    <button class="add-favorites"><i class="fa fa-heart"></i></button>
                                    <span class="tooltip-option">افزودن به علاقمندی</span>
                                </li>
                                <li>
                                    <button data-toggle="modal" data-target="#myModal"><i
                                            class="fa fa-share-alt"></i></button>
                                    <span class="tooltip-option">اشتراک گذاری</span>
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
                                بیش از {{ $comments->where('suggest_score', 'suggest')->count() }} نفر از خریداران این
                                محصول را پیشنهاد داده‌اند
                            </div>
                            <div class="product-params default">
                                <ul data-title="ویژگی‌های محصول">

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
                                        <span>برند</span> :
                                        <span
                                            class="product-brand-title">{{ $object->brand ? $object->brand->title : '---' }}</span>
                                    </li>
                                    <li>
                                        <span>دسته‌بندی</span> :
                                        <a href="{{ route('category.products', $object->category->get_slug($lang)) }}"
                                           class="btn-link-border">
                                            {{ $object->category ? $object->category->get_title($lang) : '---' }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-variants default">
                                <span>انتخاب رنگ: </span>

                                @foreach($colors as $color)
                                    <div class="radio">
                                        <input type="radio" name="color" id="id_color_{{ $color->id }}"
                                               value="{{ $color->id }}">
                                        <label for="id_color_{{ $color->id }}">
                                            {{ $color->title ?: '---' }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                            <div class="product-guarantee default">
                                <i class="fa fa-check-circle"></i>
                                <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                            </div>
                            <div class="product-delivery-seller default">
                                <p>
                                    <i class="now-ui-icons shopping_shop"></i>
                                    <span>فروشنده:‌</span>
                                    <a href="#"
                                       class="btn-link-border">{{ $object->user ? $object->user->full_name() : '---' }}</a>
                                </p>
                            </div>
                            <div class="price-product defualt">
                                <div class="price-value">
                                    <span> {{ number_format($object->price) }} </span>
                                </div>
                                <span class="price-currency">تومان</span>

                                <div class="price-discount" data-title="تخفیف">
                                            <span>
                                                {{ $object->calculate_discount_percent() ?: '0' }}
                                            </span>
                                    <span>%</span>
                                </div>
                            </div>
                            <div class="product-add default">

                                @if($object->quantity > 0)
                                    <div class="parent-btn">
                                        <a href="#" class="dk-btn dk-btn-info">
                                            افزودن به سبد خرید
                                            <i class="now-ui-icons shopping_cart-simple"></i>
                                        </a>
                                    </div>
                                @else
                                    <div class="parent-btn">
                                        <a class="dk-btn dk-btn-info" style="cursor: not-allowed" disabled>
                                            ناموجود
                                            <i class="now-ui-icons shopping_cart-simple"></i>
                                        </a>
                                    </div>
                                @endif

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
                                    <a class="active" data-toggle="tab" href="#desc" role="tab"
                                       aria-expanded="true">
                                        <i class="now-ui-icons education_glasses"></i> نقد و بررسی
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                        <i class="now-ui-icons design_bullet-list-67"></i> مشخصات
                                    </a>
                                </li>
                                <li class="box-tabs-tab">
                                    <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                        <i class="now-ui-icons ui-2_chat-round"></i> نظرات کاربران
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
                                                نقد و بررسی تخصصی
                                                <span>{{ $object->get_title($lang) }}</span>
                                            </h2>
                                            <div class="parent-expert default">
                                                <div class="content-expert">
                                                    <p>{!! $object->description !!}</p>
                                                </div>
                                                <div class="sum-more">
                                                            <span class="show-more btn-link-border">
                                                                نمایش بیشتر
                                                            </span>
                                                    <span class="show-less btn-link-border">
                                                                بستن
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
                                                مشخصات فنی
                                                <span>{{ $object->get_title($lang) }}</span>
                                            </h2>
                                            <section>
                                                <h3 class="params-title">مشخصات کلی</h3>
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
                                                        <form class="px-5" onsubmit="return false">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-account-title">عنوان نظر شما
                                                                        (اجباری)
                                                                    </div>
                                                                    <div class="form-account-row">
                                                                        <input class="input-field text-right"
                                                                               type="text"
                                                                               placeholder="عنوان نظر خود را بنویسید">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 tag-input-st">
                                                                    <div class="form-account-title">نقاط قوت
                                                                        <span class="cl-circle-title cl-primary"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="strengths-points"
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
                                                                    <div class="form-account-title">نقاط ضعف
                                                                        <span class="cl-circle-title cl-red"></span>
                                                                    </div>
                                                                    <div class="form-account-row ps-relative">
                                                                        <input name="weak-points" type="text"
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
                                                    <textarea class="input-field text-right" rows="5"
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
                                                                                <input type="radio" name="radio1"
                                                                                       id="radio1" value="option1">
                                                                                <label for="radio1">
                                                                                    پیشنهاد می کنم
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="radio1"
                                                                                       id="radio2" value="option2">
                                                                                <label for="radio2">
                                                                                    خیر،پیشنهاد نمی کنم
                                                                                </label>
                                                                            </div>

                                                                            <div class="radio">
                                                                                <input type="radio" name="radio1"
                                                                                       id="radio3" value="option3">
                                                                                <label for="radio3">
                                                                                    نظری ندارم
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 px-0">
                                                                    <button class="btn btn-primary btn-no-icon">
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
                                                                <a class="text-info" href="{{ route('login') }}">
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
                                                <ol class="comment-list">

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
                                                                                        <span
                                                                                            class="shopping-color-value"
                                                                                            style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="cell">خریداری شده
                                                                                از:
                                                                            </div>
                                                                            <div class="cell seller-cell">
                                                                                        <span
                                                                                            class="o-text-blue">دیجی‌کالا</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div
                                                                        class="message-light message-light--opinion-positive">
                                                                        خرید این محصول را توصیه می‌کنم
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9 col-sm-12 comment-content">
                                                                    <div class="comment-title">
                                                                        لباسشویی سامسونگ
                                                                    </div>
                                                                    <div class="comment-author">
                                                                        توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <div
                                                                                class="content-expert-evaluation-positive">
                                                                                <span>نقاط قوت</span>
                                                                                <ul>
                                                                                    <li>دوربین‌های 4گانه پرقدرت
                                                                                    </li>
                                                                                    <li>باتری باظرفیت بالا</li>
                                                                                    <li>حسگر اثرانگشت زیر قاب
                                                                                        جلویی
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <div
                                                                                class="content-expert-evaluation-negative">
                                                                                <span>نقاط ضعف</span>
                                                                                <ul>
                                                                                    <li>نرم‌افزار دوربین</li>
                                                                                    <li>نبودن Nano SD در بازار
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        بعد از چندین هفته بررسی تصمیم به خرید
                                                                        این مدل از ماشین لباسشویی گرفتم ولی
                                                                        متاسفانه نتونست انتظارات منو برآورده کنه
                                                                        .
                                                                        دو تا ایراد داره یکی اینکه حدودا تا 20
                                                                        دقیقه اول شستشو یه صدایی شبیه به صدای
                                                                        پمپ تخلیه همش به گوش میاد که رو مخه یکی
                                                                        هم با اینکه خشک کنش تا 1400 دور در دقیقه
                                                                        میچرخه، ولی اون طوری که دوستان تعریف
                                                                        میکردن لباسها رو خشک نمیکنه .ضمنا برای
                                                                        این صدایی که گفتم زنگ زدم نمایندگی اومدن
                                                                        دیدن، وتعمیرکار گفتش که این صدا طبیعیه و
                                                                        تا چند دقیقه اول شستشو عادیه.بدجوری خورد
                                                                        تو ذوقم. اگه بیشتر پول میذاشتم میتونستم
                                                                        یه مدل میان رده از مارکهای بوش یا آ ا گ
                                                                        میخریدم که خیلی بهتر از جنس مونتاژی کره
                                                                        ای هستش.
                                                                    </p>

                                                                    <div class="footer">
                                                                        <div class="comments-likes">
                                                                            آیا این نظر برایتان مفید بود؟
                                                                            <button class="btn-like"
                                                                                    data-counter="۱۱">بله
                                                                            </button>
                                                                            <button class="btn-like"
                                                                                    data-counter="۶">خیر
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ol>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="tab-pane fade form-comment" id="questions" role="tabpanel"
                                         aria-expanded="false">
                                        <article>
                                            <h2 class="param-title">
                                                افزودن نظر
                                                <span>نظر خود را در مورد محصول مطرح نمایید</span>
                                            </h2>
                                            <form action="" class="comment">
                                                        <textarea class="form-control" placeholder="نظر"
                                                                  rows="5"></textarea>
                                                <button class="btn btn-default">ارسال نظر</button>
                                            </form>
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
                            <a href="{{ route('products_list') }}" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">

                            @foreach($may_like_products as $may_like_pro)
                                <div class="item">
                                    <a href="{{ route('product_detail', $may_like_pro->get_slug($lang)) }}">
                                        <img src="{{ $may_like_pro->get_image() }}"
                                             class="img-fluid" alt="{{ $may_like_pro->get_title($lang) }}">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('product_detail', $may_like_pro->get_slug($lang)) }}">{{ \Illuminate\Support\Str::limit($may_like_pro->get_title($lang), 32) }}</a>
                                    </h2>
                                    <div class="price">
                                        @if($may_like_pro->discount_price)
                                            <div class="text-center">
                                                <del>
                                                    <span>{{ number_format($may_like_pro->discount_price) }}<span>تومان</span></span>
                                                </del>
                                            </div>
                                        @endif
                                        <div class="text-center">
                                            <ins>
                                                <span>{{ number_format($may_like_pro->price) }}<span>تومان</span></span>
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
                            <a href="{{ route('category.products', $object->category->get_slug($lang)) }}"
                               class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">

                            @foreach($related_products as $related_pro)
                                <div class="item">
                                    <a href="{{ route('product_detail', $related_pro->get_slug($lang)) }}">
                                        <img src="{{ $related_pro->get_image() }}"
                                             class="img-fluid" alt="{{ $related_pro->get_title($lang) }}">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('product_detail', $related_pro->get_slug($lang)) }}">{{ \Illuminate\Support\Str::limit($related_pro->get_title($lang), 32) }}</a>
                                    </h2>
                                    <div class="price">
                                        @if($related_pro->discount_price)
                                            <del>
                                                <span>{{ number_format($related_pro->discount_price) }}<span>تومان</span></span>
                                            </del>
                                        @endif

                                        <ins><span>{{ number_format($related_pro->price) }}<span>تومان</span></span>
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

</main>
