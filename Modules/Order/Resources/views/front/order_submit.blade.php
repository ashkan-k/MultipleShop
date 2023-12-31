@extends('layouts.front-master')

<?php $title = __('Order'); ?>

@section('title') {{ $title }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    @livewire('order::pages.front.order-submit-page' , [

    'titlePage' => $title,
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection
