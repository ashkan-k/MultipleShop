@extends('layouts.front-master')

@section('title') {{ __('Payment failed') }} @endsection

@section('content')

    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-12 order-1">
                    <section class="page-content default">
                        <div class="warning-checkout text-center default">
                            <div class="icon-warning">
                                <i class="fa fa-close"></i>
                            </div>
                            @if(isset($payment))
                                @if($lang == 'fa')
                                    <h1>سفارش <a href="{{ route('orders') }}">{{ $payment->order->order_number }}</a>در
                                        پرداخت ناموفق بود.</h1>
                                @else
                                    <h1>
                                        the Order <a
                                            href="{{ route('orders') }}">{{ $payment->order->order_number }}</a> failed
                                        in payment.
                                    </h1>
                                @endif

                                <p class="text-warning">{{ __('If an amount has been deducted from your account during this process, it will be returned to your account within the next 72 hours.') }}</p>
                            @else
                                <p class="text-warning">{{ __('The transaction encountered an error. Error code') }}
                                    : {{ $error_code }}</p>
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
