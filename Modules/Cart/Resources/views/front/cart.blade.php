@extends('layouts.front-master')

@section('title') {{ __('My shopping cart') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('cart::pages.front.cart-page' , [

    'titlePage' => __('My shopping cart'),
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection

