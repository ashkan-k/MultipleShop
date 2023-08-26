@extends('layouts.front-master')

@section('title'){{ __('Product') }} {{ $product->get_title($lang) ?: '---' }}@endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('schema_org')
    @if($product_schema)
        {!! $product_schema->toScript() !!}
    @endif
@endsection

@section('seo_meta_tags')
    {!! SEOMeta::generate() !!}
@endsection

@section('content')
{{--    @dd($product)--}}
    @livewire('product::pages.front.product-detail-page' , [

        'titlePage' => 'دسته بندی ها',
        'website_title' => $website_title,
        'object' => $product,
        'lang' => $lang,

    ])
@endsection

