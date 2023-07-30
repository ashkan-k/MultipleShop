@extends('layouts.front-master')

@section('title'){{ __('Products') }} {{ $category->get_title($lang) ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('product::pages.front.products-page' , [

        'titlePage' => $website_title,
        'website_title' => $website_title,
        'object' => $category,

    ])
@endsection

