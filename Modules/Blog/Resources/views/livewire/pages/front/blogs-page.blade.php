<main class="search-page default">
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
                            <li>
                                @if(isset($category_object))
                                    <span>{{ $category_object->get_title($lang) }}</span>
                                @else
                                    <span>{{ __('Blogs') }}</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-12">


                <div class="listing-counter">{{ count($objects)  }} {{ __('Blogs') }}</div>


                <div class="listing default mt-3">
                    <div class="tab-content default text-center">
                        <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                            <div class="container no-padding-right">
                                <ul class="row listing-items">
                                    @foreach($objects as $object)
                                        <li class=" col-lg-4 col-md-6 col-12 no-padding mt-3">
                                            <div class="product-box" style="
    padding: 0;
">

                                                <a href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $object->get_slug($lang)]) }}" style="
    padding: 25px 10px;
    font-size: 18px;
">
                                                    {{ $object->get_title($lang) }}
                                                </a>
                                                <a class="product-box-img" href="{{ route('blog_detail', ['locale' => $lang, 'slug' => $object->get_slug($lang)]) }}">
                                                    <img
                                                        src="{{ $object->get_image() }}"
                                                        alt="{{ $object->get_title($lang) }}">
                                                </a>
                                                <div class="product-box-content" style="
">
                                                    <div class="product-box-content-row" style="
    padding: 0px 10px 15px;
">
                                                        <div class="product-box-title" style="
    text-align: right;
">
                                                            {!! \Illuminate\Support\Str::limit($object->get_text($lang), 250) !!}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>

                    {{ $objects->onEachSide(3)->links('front.components.front_without_ajax_pagination') }}

                </div>
            </div>


        </div>
    </div>
</main>
