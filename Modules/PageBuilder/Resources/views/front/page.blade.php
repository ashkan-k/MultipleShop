@extends('layouts.front-master')

@section('title') {{ $object->get_title($lang) }} @endsection

@section('schema_org')
    @if($page_schema)
        {!! $page_schema->toScript() !!}
    @endif
@endsection

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content" style="margin-top: 44px;">{{ $object->get_title($lang) }}</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="title-tab-content">{!! $object->get_body($lang) !!}</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1"
                     style="margin-top: 46px;">

                    <div class="responsive-profile-menu show-md">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-navicon"></i>
                                {{ __('Other pages') }}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right text-right">

                                @foreach($other_pages as $page)
                                    <a href="{{ route('page', $page->get_slug($lang)) }}"
                                       class="dropdown-item active-menu">
                                        <i class="fa fa-{{ $page->get_icon() }}"></i>
                                        {{ $page->get_title($lang) }}
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="profile-menu hidden-md">
                        <div class="profile-menu-header">{{ __('Other pages') }}</div>
                        <ul class="profile-menu-items">

                            @foreach($other_pages as $page)
                                <li>
                                    <a href="{{ route('page', $page->get_slug($lang)) }}">
                                        <i class="fa fa-{{ $page->get_icon() }}"></i>{{ $page->get_title($lang) }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
