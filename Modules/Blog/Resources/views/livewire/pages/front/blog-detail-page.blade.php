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
                            <li><a href="{{ route('blogs_list', ['locale' => $lang]) }}"><span>{{ __('Blogs') }}</span></a>
                            </li>
                            <li>
                                <a href="{{ route('blog_category_list', ['locale' => $lang, 'slug' => $object->category->get_slug($lang)]) }}"><span>{{ $object->category ? $object->category->get_title($lang) : '---' }}</span></a>
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
                                                class="fa fa-clock-o ml-2"></i>{{ \Hekmatinasser\Verta\Verta:: instance($object->created_at)->format('%B %d، %Y') }}
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
                            @if($comments->count())
                                <strong class="bold heading" style="
    font-size: 18px;
    padding-right: 30px;
">{{ $comments->count() }} {{ __('Comments') }}</strong>
                            @else
                                <strong class="bold heading" style="
    font-size: 18px;
    padding-right: 30px;
">{{ __('There is no comment.') }}</strong>
                            @endif
                        </div>

                        @guest
                            <div class="pl-5 text-center">
                                @if($lang == 'fa')
                                    <h5>برای ثبت
                                        نظر ابتدا
                                        <a class="text-info"
                                           href="{{ route('login', ['locale' => $lang]) }}?next=/{{ request()->path() }}">
                                            وارد </a> شوید</h5>
                                @else
                                    <h5><a class="text-info"
                                           href="{{ route('login', ['locale' => $lang]) }}?next=/{{ request()->path() }}">Log
                                            in</a> first to post a comment</h5>
                                @endif
                            </div>
                        @endguest

                        <div class="module-title__sep" style="
    -webkit-flex-grow: 1;
    flex-grow: 1;
    border-top: 1px solid #e4e3e3;
"></div>
                    </div>

                    <div id="commentlist-container">

                        <ol class="post-module__comments commentlist">

                            @foreach($comments->get() as $comment)

                                <li class="comment even thread-even depth-1 single-comment _item _person"
                                    id="li-comment-312186">
                                    <div id="comment-312186" class="comment-body">

                                        <div class="_item__user comment-meta ">
                                            <div class="_item__user--data " style="
    float: right;
">
                                                <img
                                                    src="{{ $comment->user->get_avatar() ?: '---' }}"
                                                    width="35" height="35" alt="Avatar"
                                                    class="avatar avatar-35wp-user-avatar wp-user-avatar-35 alignnone photo avatar-default"
                                                    style="
    border-radius: 50%;
"> <span class="_item__user--name vcard">
                                                    <span
                                                        class="fn">{{ $comment->user->full_name ?: '---' }}</span></span>
                                            </div>

                                            @if($lang == 'fa')
                                                <span class="_item__user--date" style="
    float: left;
">
                                                     <i class="icon-clock-icon"></i>
                                                     <time
                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->format('%B %d، %Y') }}"
                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->format('%B %d، %Y') }}</time>
                                                 </span>
                                            @else
                                                <span class="_item__user--date" style="
        float: left;
    ">
                                                         <i class="icon-clock-icon"></i>
                                                         <time
                                                             datetime="{{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                             class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($comment->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                </span>

                                            @endif

                                        </div>

                                        <div class="_item__comment"
                                             style="clear: both;padding: 14px; word-wrap: break-word;">
                                            <p>{{ $comment->body ?: '---' }}</p>

                                            @auth
                                                <span class="_btn" style="float: left;">
                                                     <a rel="nofollow"
                                                        class="comment-reply-link"
                                                        data-respondelement="respond"
                                                        data-replyto="پاسخ به Sina"
                                                        aria-label="پاسخ به Sina"
                                                        data-toggle="collapse"
                                                        href="#user_reply_{{ $comment->id }}"
                                                        role="button"
                                                        aria-expanded="false"
                                                        aria-controls="user2-replie"
                                                        id="collapse-toggle">{{ __('Answer') }}</a>
                                                </span>
                                            @endif
                                        </div>

                                    </div>

                                    @auth
                                        <div class="collapse py-1" id="user_reply_{{ $comment->id }}">
                                            <h4>{{ __('In response to') }} {{ $comment->user->full_name ?: '---' }}</h4>

                                            <form class="collapse__content mt-1 px-5" wire:submit.prevent="SubmitNewComment()">
                                                <div class="w-100">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-account-title">{{ __('The title of your comment') }}
                                                                ({{ __('Required') }})
                                                            </div>
                                                            <div class="form-account-row">
                                                                <input class="input-field text-right" wire:model.defer="title"
                                                                       type="text" name="title" required
                                                                       placeholder="{{ __('Write the title of your comment') }}">

                                                                @error('title')
                                                                <span
                                                                    class="text-danger text-wrap">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-account-title">
                                                                ایمیل شما (اجباری)
                                                            </div>
                                                            <div class="form-account-row">
                                                                <input
                                                                    class="input-field text-right"
                                                                    type="text"
                                                                    placeholder="ایمیل خود را بنویسید"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-account-title">
                                                        متن نظر شما (اجباری)
                                                    </div>
                                                    <div class="form-account-row">
                              <textarea
                                  class="input-field text-right"
                                  rows="5"
                                  placeholder="نظر خود را بنویسید"
                              ></textarea>
                                                    </div>
                                                </div>
                                                <button
                                                    class="btn btn-primary btn-no-icon"
                                                    style="float: left; margin-left: 5px"
                                                >
                                                    ثبت نظر
                                                </button>
                                            </form>

                                        </div>
                                    @endauth


                                    <ol class="children _item__comment__reply" style="clear: both;">

                                        @foreach($comment->children()->where('status', 'approved')->with(['user'])->get() as $child_1)
                                            <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                                id="li-comment-264585">
                                                <div id="comment-264585" class="comment-body">

                                                    <div class="_item__user comment-meta post-author">
                                                        <div class="_item__user--data ">
                                                            <img
                                                                src="{{ $child_1->user->get_avatar() ?: '---' }}"
                                                                width="35" height="35"
                                                                alt="{{ $child_1->user->full_name() ?: '---' }}"
                                                                class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                                style="border-radius: 50%;">
                                                            <span class="_item__user--name vcard">
                                                                    <span
                                                                        class="fn">{{ $child_1->user->full_name() ?: '---' }}</span>
                                                                </span>
                                                        </div>

                                                        @if($lang == 'fa')
                                                            <span class="_item__user--date" style="float: left;">
                                                                 <i class="icon-clock-icon"></i>
                                                                 <time
                                                                     datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_1->created_at)->format('%B %d، %Y') }}"
                                                                     class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_1->created_at)->format('%B %d، %Y') }}</time>
                                                             </span>
                                                        @else
                                                            <span class="_item__user--date" style="float: left;">
                                                                     <i class="icon-clock-icon"></i>
                                                                     <time
                                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_1->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_1->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                            </span>
                                                        @endif

                                                    </div>

                                                    <div class="_item__comment" style="clear: both; padding: 14px;">
                                                        <p>{{ $child_1->body ?: '---' }}</p>
                                                        <span class="_btn" style="float: left;">
                                                              <a rel="nofollow"
                                                                 style="cursor: pointer !important;"
                                                                 class="comment-reply-link"
                                                                 data-respondelement="respond"
                                                                 data-replyto="پاسخ به Sina"
                                                                 aria-label="پاسخ به Sina">{{ __('Answer') }}</a>
                                                        </span>
                                                    </div>

                                                </div>

                                                <ol class="children _item__comment__reply" style="clear: both;">

                                                    @foreach($child_1->children()->where('status', 'approved')->with(['user'])->get() as $child_2)
                                                        <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                                            id="li-comment-264585">
                                                            <div id="comment-264585" class="comment-body">

                                                                <div class="_item__user comment-meta post-author">
                                                                    <div class="_item__user--data ">
                                                                        <img
                                                                            src="{{ $child_2->user->get_avatar() ?: '---' }}"
                                                                            width="35" height="35"
                                                                            alt="{{ $child_2->user->full_name() ?: '---' }}"
                                                                            class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                                            style="border-radius: 50%;">
                                                                        <span class="_item__user--name vcard">
                                                                    <span
                                                                        class="fn">{{ $child_2->user->full_name() ?: '---' }}</span>
                                                                </span>
                                                                    </div>

                                                                    @if($lang == 'fa')
                                                                        <span class="_item__user--date"
                                                                              style="float: left;">
                                                                 <i class="icon-clock-icon"></i>
                                                                 <time
                                                                     datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_2->created_at)->format('%B %d، %Y') }}"
                                                                     class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_2->created_at)->format('%B %d، %Y') }}</time>
                                                             </span>
                                                                    @else
                                                                        <span class="_item__user--date"
                                                                              style="float: left;">
                                                                     <i class="icon-clock-icon"></i>
                                                                     <time
                                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_2->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_2->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                            </span>
                                                                    @endif

                                                                </div>

                                                                <div class="_item__comment"
                                                                     style="clear: both; padding: 14px;">
                                                                    <p>{{ $child_2->body ?: '---' }}</p>
                                                                    <span class="_btn" style="float: left;">
                                                              <a rel="nofollow"
                                                                 style="cursor: pointer !important;"
                                                                 class="comment-reply-link"
                                                                 data-respondelement="respond"
                                                                 data-replyto="پاسخ به Sina"
                                                                 aria-label="پاسخ به Sina">{{ __('Answer') }}</a>
                                                        </span>
                                                                </div>

                                                            </div>

                                                            <ol class="children _item__comment__reply"
                                                                style="clear: both;">

                                                                @foreach($child_2->children()->where('status', 'approved')->with(['user'])->get() as $child_3)
                                                                    <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                                                        id="li-comment-264585">
                                                                        <div id="comment-264585" class="comment-body">

                                                                            <div
                                                                                class="_item__user comment-meta post-author">
                                                                                <div class="_item__user--data ">
                                                                                    <img
                                                                                        src="{{ $child_3->user->get_avatar() ?: '---' }}"
                                                                                        width="35" height="35"
                                                                                        alt="{{ $child_3->user->full_name() ?: '---' }}"
                                                                                        class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                                                        style="border-radius: 50%;">
                                                                                    <span
                                                                                        class="_item__user--name vcard">
                                                                    <span
                                                                        class="fn">{{ $child_3->user->full_name() ?: '---' }}</span>
                                                                </span>
                                                                                </div>

                                                                                @if($lang == 'fa')
                                                                                    <span class="_item__user--date"
                                                                                          style="float: left;">
                                                                 <i class="icon-clock-icon"></i>
                                                                 <time
                                                                     datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_3->created_at)->format('%B %d، %Y') }}"
                                                                     class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_3->created_at)->format('%B %d، %Y') }}</time>
                                                             </span>
                                                                                @else
                                                                                    <span class="_item__user--date"
                                                                                          style="float: left;">
                                                                     <i class="icon-clock-icon"></i>
                                                                     <time
                                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_3->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_3->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                            </span>
                                                                                @endif

                                                                            </div>

                                                                            <div class="_item__comment"
                                                                                 style="clear: both; padding: 14px;">
                                                                                <p>{{ $child_3->body ?: '---' }}</p>
                                                                                <span class="_btn" style="float: left;">
                                                              <a rel="nofollow"
                                                                 style="cursor: pointer !important;"
                                                                 class="comment-reply-link"
                                                                 data-respondelement="respond"
                                                                 data-replyto="پاسخ به Sina"
                                                                 aria-label="پاسخ به Sina">{{ __('Answer') }}</a>
                                                        </span>
                                                                            </div>

                                                                        </div>

                                                                        <ol class="children _item__comment__reply"
                                                                            style="clear: both;">

                                                                            @foreach($child_3->children()->where('status', 'approved')->with(['user'])->get() as $child_4)
                                                                                <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                                                                    id="li-comment-264585">
                                                                                    <div id="comment-264585"
                                                                                         class="comment-body">

                                                                                        <div
                                                                                            class="_item__user comment-meta post-author">
                                                                                            <div
                                                                                                class="_item__user--data ">
                                                                                                <img
                                                                                                    src="{{ $child_4->user->get_avatar() ?: '---' }}"
                                                                                                    width="35"
                                                                                                    height="35"
                                                                                                    alt="{{ $child_4->user->full_name() ?: '---' }}"
                                                                                                    class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                                                                    style="border-radius: 50%;">
                                                                                                <span
                                                                                                    class="_item__user--name vcard">
                                                                    <span
                                                                        class="fn">{{ $child_4->user->full_name() ?: '---' }}</span>
                                                                </span>
                                                                                            </div>

                                                                                            @if($lang == 'fa')
                                                                                                <span
                                                                                                    class="_item__user--date"
                                                                                                    style="float: left;">
                                                                 <i class="icon-clock-icon"></i>
                                                                 <time
                                                                     datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_4->created_at)->format('%B %d، %Y') }}"
                                                                     class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_4->created_at)->format('%B %d، %Y') }}</time>
                                                             </span>
                                                                                            @else
                                                                                                <span
                                                                                                    class="_item__user--date"
                                                                                                    style="float: left;">
                                                                     <i class="icon-clock-icon"></i>
                                                                     <time
                                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_4->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_4->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                            </span>
                                                                                            @endif

                                                                                        </div>

                                                                                        <div class="_item__comment"
                                                                                             style="clear: both; padding: 14px;">
                                                                                            <p>{{ $child_4->body ?: '---' }}</p>
                                                                                            <span class="_btn"
                                                                                                  style="float: left;">
                                                              <a rel="nofollow"
                                                                 style="cursor: pointer !important;"
                                                                 class="comment-reply-link"
                                                                 data-respondelement="respond"
                                                                 data-replyto="پاسخ به Sina"
                                                                 aria-label="پاسخ به Sina">{{ __('Answer') }}</a>
                                                        </span>
                                                                                        </div>

                                                                                    </div>


                                                                                    <ol class="children _item__comment__reply"
                                                                                        style="clear: both;">

                                                                                        @foreach($child_4->children()->where('status', 'approved')->with(['user'])->get() as $child_5)
                                                                                            <li class="comment byuser comment-author-h-davarian bypostauthor even depth-2 single-comment _item _person"
                                                                                                id="li-comment-264585">
                                                                                                <div id="comment-264585"
                                                                                                     class="comment-body">

                                                                                                    <div
                                                                                                        class="_item__user comment-meta post-author">
                                                                                                        <div
                                                                                                            class="_item__user--data ">
                                                                                                            <img
                                                                                                                src="{{ $child_5->user->get_avatar() ?: '---' }}"
                                                                                                                width="35"
                                                                                                                height="35"
                                                                                                                alt="{{ $child_5->user->full_name() ?: '---' }}"
                                                                                                                class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 alignnone photo"
                                                                                                                style="border-radius: 50%;">
                                                                                                            <span
                                                                                                                class="_item__user--name vcard">
                                                                    <span
                                                                        class="fn">{{ $child_5->user->full_name() ?: '---' }}</span>
                                                                </span>
                                                                                                        </div>

                                                                                                        @if($lang == 'fa')
                                                                                                            <span
                                                                                                                class="_item__user--date"
                                                                                                                style="float: left;">
                                                                 <i class="icon-clock-icon"></i>
                                                                 <time
                                                                     datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_5->created_at)->format('%B %d، %Y') }}"
                                                                     class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_5->created_at)->format('%B %d، %Y') }}</time>
                                                             </span>
                                                                                                        @else
                                                                                                            <span
                                                                                                                class="_item__user--date"
                                                                                                                style="float: left;">
                                                                     <i class="icon-clock-icon"></i>
                                                                     <time
                                                                         datetime="{{ \Hekmatinasser\Verta\Verta:: instance($child_5->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}"
                                                                         class="_date">{{ \Hekmatinasser\Verta\Verta:: instance($child_5->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}</time>
                                                            </span>
                                                                                                        @endif

                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="_item__comment"
                                                                                                        style="clear: both; padding: 14px;">
                                                                                                        <p>{{ $child_5->body ?: '---' }}</p>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </li>
                                                                                        @endforeach

                                                                                    </ol>

                                                                                </li>
                                                                            @endforeach

                                                                        </ol>

                                                                    </li>
                                                                @endforeach

                                                            </ol>

                                                        </li>
                                                    @endforeach

                                                </ol>

                                            </li>
                                        @endforeach

                                    </ol>

                                </li>

                            @endforeach

                        </ol>

                        <div class="module-title pagination-wrapper"></div>
                    </div>


                </div>

                @auth
                    <form class="px-5" wire:submit.prevent="SubmitNewComment()">
                        <div class="col-12 mt-5">
                            <div class="row">

                                <div class="col-12">
                                    <div class="form-account-title">{{ __('The title of your comment') }}
                                        ({{ __('Required') }})
                                    </div>
                                    <div class="form-account-row">
                                        <input class="input-field text-right" wire:model.defer="title"
                                               type="text" name="title" required
                                               placeholder="{{ __('Write the title of your comment') }}">

                                        @error('title')
                                        <span
                                            class="text-danger text-wrap">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-account-title">{{ __('The text of your comment') }} ({{ __('Required') }})
                            </div>
                            <div class="form-account-row">
                            <textarea class="input-field text-right" rows="5"
                                      wire:model.defer="body"
                                      required name="body"
                                      placeholder="{{ __('Write your text') }}"></textarea>
                                @error('body')
                                <span
                                    class="text-danger text-wrap">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-no-icon" style="
    float: left;
    margin-left: 5px;
">
                            {{ __('Submit Comment') }}
                        </button>
                    </form>
                @endauth

            </div>

            <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-md-1 order-2">
                <div class="box" style="
    padding-bottom: 15px;
">
                    <div class="box-header">{{ __('Latest blog content') }}</div>

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
                    <div class="box-header">{{ __('Search the blog') }}:</div>
                    <div class="box-content">
                        <form action="{{ route('blogs_list', ['locale' => $lang]) }}">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       name="q"
                                       placeholder="{{ __('What are you looking for?') }}">
                                <span class="ui-input-cleaner"></span>
                            </div>
                        </form>
                    </div>
                </div>


            </aside>
        </div>

    </div>

    @if(count($related_blogs))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mt-3">
                        <div class="widget widget-product card" style="
    height: 390px;
">
                            <header class="card-header">
                                <h3 class="card-title">
                                    <span>{{ __('Related Blogs') }}</span>
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
    @endif

</main>


@push('StackScript')
    <script type="text/javascript">
        window.addEventListener('newCommentSubmited', event => {
            showToast('{{ __('Dear user, your comment has been registered successfully, and after the approval of the administrator, it will be placed on the site.') }}', 'success');
        });
    </script>
@endpush
