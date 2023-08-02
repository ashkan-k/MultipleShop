@extends('layouts.front-master')

@section('title'){{ __('Products') }} {{ $category->get_title($lang) ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    @livewire('product::pages.front.products-page' , [

        'titlePage' => $website_title,
        'website_title' => $website_title,
        'object' => $category,

    ])
@endsection

