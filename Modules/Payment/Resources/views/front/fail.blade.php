@extends('layouts.front-master')

@section('title') پرداخت ناموفق @endsection

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
                                <h1>سفارش <a href="{{ route('orders') }}">{{ $payment->order->order_number }}</a>در
                                    پرداخت ناموفق بود.</h1>
                                <p class="text-warning">برای جلوگیری از لغو سیستمی سفارش،تا 24 ساعت آینده پرداخت را
                                    انجام دهید.</p>
                                <p>چنانچه طی این فرایند مبلغی از حساب شما کسر شده است،طی 72 ساعت آینده به حساب شما باز
                                    خواهد گشت.</p>
                            @else
                                <p class="text-warning">تراکنش با خطا مواجه شد. کد خطا: {{ $error_code }}</p>
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
