@extends('layouts.front-master')

@section('title') {{ __('My favorites') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('wishlist::pages.front.wishlist-page' , [

    'titlePage' => __('My favorites'),
    'website_title' => $website_title,
    'lang' => $lang,
    ])
@endsection
