@extends('layouts.front-master')

@section('title') علاقه مندی های من @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('wishlist::pages.front.wishlist-page' , [

    'titlePage' => 'علاقه مندی های من',
    'website_title' => $website_title,
    'lang' => $lang,
    ])
@endsection
