@extends('layouts.front-master')

@section('title') {{ __('Create Ticket') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content">
                                    نمایش تیکت #{{ $ticket->ticket_number ?: '---' }}
                                </h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-baseline">
                                            <h5>{{ $ticket->title ?: '---' }}</h5>
                                            <time datetime="2008-02-14 20:00"
                                                  class="mr-auto">{{ \Carbon\Carbon::parse( $ticket->created_at )->diffForHumans() }}</time>
                                        </div>
                                        <hr/>
                                        <ul style="gap: 1rem" class="chats d-flex flex-column">
                                            <li class="chats__chat border p-3">
                                                <div
                                                    style="gap: 0.8rem"
                                                    class="user d-flex align-items-center"
                                                >
                                                    <div style="width: 50px; height: 50px">
                                                        <img
                                                            class="user__profile rounded"
                                                            src="{{ $ticket->user ? $ticket->user->get_avatar() : '---' }}"
                                                            alt="{{ $ticket->user ? $ticket->user->full_name() : '---' }}"
                                                            style="
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                  "
                                                        />
                                                    </div>
                                                    <h6 class="user__username">{{ $ticket->user ? $ticket->user->full_name() : '---' }}</h6>
                                                    <time
                                                        datetime="2008-02-14 20:00"
                                                        class="mr-auto align-self-center">{{ \Carbon\Carbon::parse( $ticket->created_at )->diffForHumans() }}</time>
                                                </div>
                                                <p
                                                    style="font-size: 0.8rem"
                                                    class="chats__chat-content"
                                                >
                                                    {!! $ticket->text ?: '---' !!}
                                                </p>

                                                @if($ticket->file)
                                                    <div class="chats__attached-file">
                                                        <a
                                                            href="{{ $ticket->file ?: '---' }}"
                                                            target="_blank"
                                                            class="text-white btn btn-primary">
                                                    <span>
                                                      <i class="fa fa-download"></i>
                                                    </span>
                                                            <span>دانلود فایل ضمیمه</span>
                                                        </a>
                                                    </div>
                                                @endif

                                            </li>

                                            @foreach($answers as $answer)
                                                <li class="chats__chat border p-3">
                                                    <div
                                                        style="gap: 0.8rem"
                                                        class="user d-flex align-items-center"
                                                    >
                                                        <div style="width: 50px; height: 50px">
                                                            <img
                                                                class="user__profile rounded"
                                                                src="{{ $answer->user ? $answer->user->get_avatar() : '---' }}"
                                                                alt="{{ $answer->user ? $answer->user->full_name() : '---' }}"
                                                                style="
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                  "
                                                            />
                                                        </div>
                                                        <h6 class="user__username">{{ $answer->user ? $answer->user->full_name() : '---' }}</h6>
                                                        <time
                                                            datetime="2008-02-14 20:00"
                                                            class="mr-auto align-self-center"
                                                        >{{ \Carbon\Carbon::parse( $answer->created_at )->diffForHumans() }}</time>
                                                    </div>
                                                    <p
                                                        style="font-size: 0.8rem"
                                                        class="chats__chat-content"
                                                    >
                                                        {!! $answer->text !!}
                                                    </p>

                                                    @if($answer->file)
                                                        <div class="chats__attached-file">
                                                            <a
                                                                href="{{ $answer->file ?: '---' }}"
                                                                target="_blank"
                                                                class="text-white btn btn-primary">
                                                        <span>
                                                          <i class="fa fa-download"></i>
                                                        </span>
                                                                <span>دانلود فایل ضمیمه</span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                        <form class="mt-5" enctype="multipart/form-data"
                                              method="post" id="frm_ticket"
                                              action="{{ route('front.ticket-answers.store', $ticket->ticket_number ?: '---') }}">

                                            @csrf
                                            @if(isset($object))
                                                @method('PATCH')
                                            @endif

                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="id_text"> متن پاسخ </label>
                                                    <textarea name="text" id="id_text"
                                                              rows="8" required
                                                              style="resize: none"
                                                              class="input-field text-right">@if(old('text')){{ old('text') }}@elseif(isset($object->text)){{ $object->text }}@endif</textarea>
                                                    @error('text')
                                                    <span
                                                        class="text-danger text-wrap">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                                            @error('recaptcha_token')
                                                <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror

                                            <div class="mt-3 row">
                                                <div class="col-12">
                                                    <div class="form-account-row text-right">
                                                        <button class="btns btn-info py-2">
                                                            ارسال تیکت
                                                        </button>
                                                        <input type="file" name="file" id="id_file" value="">
                                                        @error('file')
                                                        <span
                                                            class="text-danger text-wrap">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('front.components.dashboard_sidebar')
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
@endsection

@push('StackScript')
    @include('front.components.google_captcha_js', ['form_id' => 'frm_ticket', 'field_id' => 'recaptcha_token'])
@endpush
