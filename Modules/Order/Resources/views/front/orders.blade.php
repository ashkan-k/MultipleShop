@extends('layouts.front-master')

@section('title') سفارش های من @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('order::pages.front.orders-page' , [

    'titlePage' => 'سفارش های من',
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection
