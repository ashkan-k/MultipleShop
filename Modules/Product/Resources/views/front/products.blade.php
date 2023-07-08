@extends('layouts.front-master')

@section('title')محصولات {{ $category->title ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('product::pages.front.products-page' , [

        'titlePage' => 'دسته بندی ها',
        'website_title' => $website_title,
        'object' => $category,

    ])
@endsection

