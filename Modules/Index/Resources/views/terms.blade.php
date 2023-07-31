@extends('layouts.front-master')

@section('title') {{ __('Terms') }} @endsection

@section('content')
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-12 col-lg-12 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content" style="margin-top: 44px;">
                                    @if($lang == 'fa')
                                        {!! $settings['terms_title'] !!}
                                    @else
                                        {!! $settings['terms_en_title'] !!}
                                    @endif
                                </h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="title-tab-content">
                                            @if($lang == 'fa')
                                                {!! $settings['terms_text'] !!}
                                            @else
                                                {!! $settings['terms_en_text'] !!}
                                            @endif
                                        </h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
