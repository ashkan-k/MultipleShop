@extends('layouts.front-master')

@section('title') {{ __('Blog') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
    @livewire('blog::pages.front.blogs-page' , [

        'titlePage' => __('Blog'),
        'lang' => $lang,
        'website_title' => $website_title,
        'category_slug' => $category_slug,

    ])
@endsection

