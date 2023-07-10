@extends('layouts.front-master')

@section('title') پروفایل کاربری @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('index::pages.front.profile-page' , [

    'titlePage' => 'پروفایل کاربری',
    'website_title' => $website_title,
    'lang' => $lang,
    'object' => $user,

    ])
@endsection
