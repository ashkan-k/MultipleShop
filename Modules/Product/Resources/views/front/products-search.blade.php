@extends('layouts.front-master')

@section('title'){{ __('Products List') }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('product::pages.front.products-search-page' , [

        'titlePage' => 'دسته بندی ها',
        'website_title' => $website_title,

    ])
@endsection

