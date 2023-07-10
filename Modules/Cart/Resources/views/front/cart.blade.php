@extends('layouts.front-master')

@section('title')سبد خرید من@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('cart::pages.front.cart-page' , [

    'titlePage' => 'سبد خرید من',
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection

