@extends('layouts.front-master')

@section('title') ثبت سفارش @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('order::pages.front.order-submit-page' , [

    'titlePage' => 'ثبت سفارش',
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection
