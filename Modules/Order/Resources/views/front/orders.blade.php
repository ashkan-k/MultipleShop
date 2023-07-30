@extends('layouts.front-master')

@section('title') {{ __('My orders') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('order::pages.front.orders-page' , [

    'titlePage' => __('My orders'),
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection
