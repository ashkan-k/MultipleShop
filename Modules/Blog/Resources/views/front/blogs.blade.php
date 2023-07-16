@extends('layouts.front-master')

@section('title') مقالات @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title'] : $settings['website_en_title'];  ?>

@section('content')
    @livewire('blog::pages.front.blogs-page' , [

        'titlePage' => 'مقالات',
        'website_title' => $website_title,

    ])
@endsection

