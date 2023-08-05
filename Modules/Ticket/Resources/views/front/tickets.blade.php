@extends('layouts.front-master')

@section('title') {{ __('My Tickets') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    @livewire('ticket::pages.front.tickets-page' , [

    'titlePage' => __('My Tickets'),
    'website_title' => $website_title,
    'lang' => $lang,

    ])
@endsection
