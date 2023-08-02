@extends('layouts.front-master')

@section('title') {{ __('User profile') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    @livewire('index::pages.front.profile-page' , [

    'titlePage' => __('User profile'),
    'website_title' => $website_title,
    'lang' => $lang,
    'object' => $user,

    ])
@endsection
