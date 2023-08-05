@extends('layouts.front-master')

@section('title') {{ __('Create Ticket') }} @endsection

<?php $website_title = $lang == 'fa' ? $settings['website_title']->value : $settings['website_en_title']->value;  ?>

@section('content')
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content mt-3">
                                    ارسال تیکت جدید
                                </h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <form class="form-account" enctype="multipart/form-data"
                                                  method="post"
                                                  action="@if(isset($object)){{ route('tickets.update' , $object->id) }}@else{{ route('tickets.store') }}@endif">

                                                @csrf
                                                @if(isset($object))
                                                    @method('PATCH')
                                                @endif

                                                <div class="row">
                                                    <div class="col-12">
                                                        <h1 class="checkout-title text-right">
                                                            ارسال تیکت
                                                        </h1>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-account-title">عنوان</div>
                                                        <div class="form-account-row">
                                                            <input name="title"
                                                                   class="input-field text-right"
                                                                   type="text"
                                                                   required
                                                                   value="@if(old('title')){{ old('title') }}@endif"
                                                                   placeholder="عنوان تیکت را وارد نمایید"
                                                            />
                                                            @error('title')
                                                            <span
                                                                class="text-danger text-wrap">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-account-title">دسته بندی</div>
                                                        <div class="form-account-row">
                                                            <select
                                                                required name="ticket_category_id"
                                                                class="input-field text-right">
                                                                <option value="" disabled>دسته بندی را انتخاب کنید
                                                                </option>
                                                                @foreach($categories as $category)

                                                                    <option
                                                                        @if(old('ticket_category_id') && $category->id == old('ticket_category_id')) selected
                                                                        @endif value="{{ $category->id }}">{{ $category->title }}
                                                                    </option>

                                                                @endforeach
                                                            </select>
                                                            @error('ticket_category_id')
                                                            <span
                                                                class="text-danger text-wrap">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-account-title">متن</div>
                                                        <div class="form-account-row">
                                                              <textarea
                                                                  rows="8"
                                                                  required name="text"
                                                                  style="resize: none"
                                                                  class="input-field text-right">@if(old('title')){{ old('text') }}@endif</textarea>
                                                            @error('text')
                                                            <span
                                                                class="text-danger text-wrap">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-account-title">فایل ضمیمه</div>
                                                        <div class="form-account-row">
                                                            <input
                                                                type="file" id="id_file" name="file"
                                                                class="input-field text-right" {{ old('file') }}>

                                                            @error('file')
                                                            <span
                                                                class="text-danger text-wrap">{{ $message }}</span>
                                                            @enderror

                                                            @if(isset($object) && $object->file)
                                                                <div class="input-field col s12 mt-3">
                                                                    <p>فایل قبلی:</p>

                                                                    <a href="{{ $object->file }}" target="_blank"
                                                                       class="btn btn-sm btn-warning">
                                                                        فایل ضمیمه
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    {{--                                                    <!-- GOOGLE RECAPTCHA -->--}}
                                                    {{--                                                    <div class="col-12">--}}
                                                    {{--                                                        <div class="g-recaptcha"--}}
                                                    {{--                                                             data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"--}}
                                                    {{--                                                             data-callback="onRecaptchaSuccess"--}}
                                                    {{--                                                             data-expired-callback="onRecaptchaResponseExpiry"--}}
                                                    {{--                                                             data-error-callback="onRecaptchaError">--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    <!-- END GOOGLE RECAPTCHA -->--}}
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-account-row text-left">
                                                            <button
                                                                onclick="window.location.href='{{ route('front.tickets.index') }}'"
                                                                class="btns btn-secondary">انصراف
                                                            </button>
                                                            <button type="submit" class="btns btn-info">ارسال تیکت
                                                            </button>
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
                </div>

                @include('front.components.dashboard_sidebar')
            </div>
        </div>
    </main>
@endsection
