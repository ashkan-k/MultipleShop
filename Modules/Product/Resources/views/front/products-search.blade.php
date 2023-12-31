@extends('layouts.front-master')

@section('title'){{ __('Products List') }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
    @livewire('product::pages.front.products-search-page' , [

        'titlePage' => 'دسته بندی ها',
        'website_title' => $website_title,

    ])
@endsection

