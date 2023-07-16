<main class="single-product default">
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
                            <li><span>{{ __('Blogs') }}</span></li>
                            <li>
                                <a href="#"><span>{{ $object->category ? $object->category->title : '---' }}</span></a>
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
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-md-1 order-2">
                <div class="row">
                    <div class="col-12">
                        <img class="post-thumbnail" src="{{ $object->get_image() }}" style="
    margin-bottom: 10px;
    border-radius: 10px;
">
                    </div>
                </div>
                <article class="product">
                    <div class="row">

                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <div class="product-title default">
                                        <h1>{{ $object->get_title($lang) }}
                                        </h1>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="jeg_post_meta" style="
">
                                        <div property="datePublished" class="meta-date"><i
                                                class="fa fa-clock-o"></i>{{ \Hekmatinasser\Verta\Verta:: instance($object->created_at)->format('%B %d، %Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-params default">
                                {!! $object->text !!}
                            </div>
                        </div>


                    </div>
                </article>


                <div id="comments" style="
    background: white;
    padding: 15px;
    border-radius: 15px;
    box-shadow: 0 12px 12px 0 hsla(0, 0%, 71%, .11);
    border: 1px solid #e4e4e4;
    width: 98%;
">

                    <div class="module-title" style="
    padding: 30px 0;
">
                        <div class="module-title__txt">
                            <strong class="bold heading" style="
    font-size: 18px;
    padding-right: 30px;
">۶ دیدگاه</strong>
                        </div>
                        <div class="module-title__sep" style="
    -webkit-flex-grow: 1;
    flex-grow: 1;
    border-top: 1px solid #e4e3e3;
"></div>
                    </div>

                    <div id="commentlist-container">

                        <ol class="post-module__comments commentlist">

                            <li class="comment even thread-even depth-1 single-comment _item _person"
                                id="li-comment-312186">
                                <div id="comment-312186" class="comment-body">

                                    <div class="_item__user comment-meta ">
                                        <div class="_item__user--data " style="
    float: right;
">
                                            <img
                                                src="https://www.digikala.com/mag/wp-content/uploads/2015/08/Default_Profile_Picture1.jpg"
                                                width="35" height="35" alt="Avatar"
                                                class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default"
                                                style="
    border-radius: 50%;
"> <span class="_item__user--name vcard">
                        <span class="fn">sina</span>
                    </span>
                                        </div>
                                        <span class="_item__user--date" style="
    float: left;
">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۹/۱۰/۱۹ ۱۰:۲۳:۵۸" class="_date">۱۹ دی ۱۳۹۹  |  ۱۰:۲۳</time>
                </span>


                                    </div>

                                    <div class="_item__comment" style="clear: both;padding: 14px;">
                                        <p>سلام ببخشید من تمام مراحل را انجام دادم ولی در ربات که شروع رو میزنم میگه شما
                                            واجد شرایط نیستید<br>
                                            ممنون راهنمایی کنید</p>

                                        <span class="_btn" style="
    float: left;
">
                        <a rel="nofollow" class="comment-reply-link" data-respondelement="respond"
                           data-replyto="پاسخ به Sina"
                           aria-label="پاسخ به Sina">پاسخ دادن</a>                    </span>
                                    </div>


                                </div>

                            </li><!-- #comment-## -->

                            <li class="comment odd alt thread-odd thread-alt depth-1 single-comment _item _person"
                                id="li-comment-264441" style="
    clear: both;
    padding: 20px 0;
">
                                <div id="comment-264441" class="comment-body">

                                    <div class="_item__user comment-meta " style="
">
                                        <div class="_item__user--data " style="
    float: right;
">
                                            <img
                                                src="https://www.digikala.com/mag/wp-content/uploads/2015/08/Default_Profile_Picture1.jpg"
                                                width="35" height="35" alt="Avatar"
                                                class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default"
                                                style="
    border-radius: 50%;
"> <span class="_item__user--name vcard">
                        <span class="fn">امیر</span>
                    </span>
                                        </div>
                                        <span class="_item__user--date" style="
    float: left;
">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۸/۸/۱۸ ۰:۱۷:۲۰" class="_date">۱۸ آبان ۱۳۹۸  |  ۰۰:۱۷</time>
                </span>

                                    </div>

                                    <div class="_item__comment" style="
    clear: both;
    padding: 14px;
">
                                        <p>باسلام من ۲۰تا گرفتم به چه دردی میخورد،چگونه میشه اضافه کرد؟</p>
                                        <span class="_btn" style="
    float: left;
">
                        <a rel="nofollow" class="comment-reply-link" data-respondelement="respond"
                           data-replyto="پاسخ به Sina"
                           aria-label="پاسخ به Sina">پاسخ دادن</a>                    </span>
                                    </div>

                                </div>

                                <ol class="children _item__comment__reply" style="
    clear: both;
">

                                    <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                        id="li-comment-264585">
                                        <div id="comment-264585" class="comment-body">

                                            <div class="_item__user comment-meta post-author">
                                                <div class="_item__user--data ">
                                                    <img
                                                        src="https://www.digikala.com/mag/wp-content/uploads/2021/10/20201129_214940-60x60.jpg"
                                                        width="35" height="35" alt="حمیدرضا داوریان"
                                                        class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                        style="
    border-radius: 50%;
"> <span class="_item__user--name vcard">
                        <span class="fn">حمیدرضا داوریان</span>
                    </span>
                                                </div>
                                                <span class="_item__user--date" style="
    float: left;
">
                    <i class="icon-clock-icon"></i>
                    <time datetime="۱۳۹۸/۸/۱۹ ۲۲:۰۴:۵۲" class="_date">۱۹ آبان ۱۳۹۸  |  ۲۲:۰۴</time>
                </span>

                                            </div>

                                            <div class="_item__comment" style="
    clear: both;
    padding: 14px;
">
                                                <p>این توکن&zwnj;ها صرفا در حالت تست قرار دارند و فکر نمی&zwnj;کنم وقتی
                                                    برنامه از حالت تست خارج شد، بشه ازش استفاده کرد. با این اوصاف باید
                                                    صبر کرد تا نسخه کامل برنامه منتشر شه و متوجه شد داستان از چه
                                                    قراره.</p>
                                                <span class="_btn" style="
    float: left;
">
                        <a rel="nofollow" class="comment-reply-link" data-respondelement="respond"
                           data-replyto="پاسخ به Sina"
                           aria-label="پاسخ به Sina">پاسخ دادن</a>                    </span>
                                            </div>

                                        </div>

                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li>


                            <!-- #comment-## -->
                        </ol>

                        <div class="module-title pagination-wrapper"></div>
                    </div>


                </div>


                <form class="px-5" onsubmit="return false">
                    <div class="col-12 mt-5">
                        <div class="row">

                            <div class="col-6">
                                <div class="form-account-title">نام شما (اجباری)</div>
                                <div class="form-account-row">
                                    <input class="input-field text-right" type="text" placeholder="نام خود را بنویسید">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-account-title">ایمیل شما (اجباری)</div>
                                <div class="form-account-row">
                                    <input class="input-field text-right" type="text"
                                           placeholder="ایمیل خود را بنویسید">
                                </div>
                            </div>
                        </div>

                        <div class="form-account-title">متن نظر شما (اجباری)</div>
                        <div class="form-account-row">
                            <textarea class="input-field text-right" rows="5"
                                      placeholder="نظر خود را بنویسید"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-no-icon" style="
    float: left;
    margin-left: 5px;
">
                        ثبت نظر
                    </button>
                </form>

            </div>

            <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-md-1 order-2">
                <div class="box" style="
    padding-bottom: 15px;
">
                    <div class="box-header">آخرین مطالب وبلاگ</div>

                    @foreach($latest_blogs as $la_blog)
                        <div class="box-content">

                            <div class="recent-post-widget">
                                <div class="post-thumb" style="
    max-width: 100%;
    z-index: 0;
">
                                    <a href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $la_blog->get_slug($lang)]) }}">
                                        <div class="thumbnail-container "><img
                                                src="{{ $la_blog->get_image() }}">
                                        </div>
                                    </a></div>
                                <div class="widget-postblock-content"><h3 property="headline" class="widget-post-title"
                                                                          style="
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 0px;
"><a property="url"
     href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $la_blog->get_slug($lang)]) }}">{{ $la_blog->get_title($lang) }}</a>
                                    </h3></div>
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="box">
                    <div class="box-header">جستجو در وبلاگ:</div>
                    <div class="box-content">
                        <div class="ui-input ui-input--quick-search">
                            <input type="text" class="ui-input-field ui-input-field--cleanable"
                                   placeholder="دنبال چه مطلبی هستید؟">
                            <span class="ui-input-cleaner"></span>
                        </div>
                    </div>
                </div>


            </aside>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-3">
                    <div class="widget widget-product card" style="
    height: 390px;
">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>مطالب مرتبط</span>
                            </h3>

                        </header>
                        <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(1500px, 0px, 0px); transition: all 0s ease 0s; width: 4250px;">

                                    @foreach($related_blogs as $rel_blog)
                                        <div class="owl-item" style="width: 240px; margin-left: 10px;">
                                            <div class="item">
                                                <a href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $rel_blog->get_slug($lang)]) }}">
                                                    <img src="{{ $rel_blog->get_image() }}"
                                                         class="img-fluid" alt="{{ $rel_blog->get_title($lang) }}">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $rel_blog->get_slug($lang)]) }}">{{ $rel_blog->get_title($lang) }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><i
                                        class="now-ui-icons arrows-1_minimal-right"></i></button>
                                <button type="button" role="presentation" class="owl-next"><i
                                        class="now-ui-icons arrows-1_minimal-left"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</main>
