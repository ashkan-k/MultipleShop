@extends('layouts.front-master')

@section('title'){{ __('Blog') }} {{ $blog->get_title($lang) ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('blog::pages.front.blog-detail-page' , [

        'titlePage' => __('Blog'),
        'website_title' => $website_title,
        'object' => $blog,
        'lang' => $lang,

    ])
@endsection

