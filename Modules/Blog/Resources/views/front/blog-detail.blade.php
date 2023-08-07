@extends('layouts.front-master')

@section('title'){{ __('Blog') }} {{ $blog->get_title($lang) ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>


@section('schema_org')
    @if($blog_schema)
        {!! $blog_schema->toScript() !!}
    @endif
@endsection

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
    @livewire('blog::pages.front.blog-detail-page' , [

        'titlePage' => __('Blog'),
        'website_title' => $website_title,
        'object' => $blog,
        'lang' => $lang,

    ])
@endsection

