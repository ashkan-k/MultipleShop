@extends('layouts.front-master')

@section('title') پرداخت موفق @endsection

@section('content')

    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-12 order-1">
                    <section class="page-content default">
                        <div class="success-checkout text-center default">
                            <div class="icon-success">
                                <i class="fa fa-check"></i>
                            </div>
                            <h1>سفارش <a href="#">{{ $payment->order->order_number }}</a>با موفقیت در سیستم ثبت شد.</h1>
                            <p>سفارش نهایتا تا یک روز آماده ارسال خواهد شد.</p>
                        </div>
                        <div class="order-info default">
                            <h3>کد سفارش: <span>{{ $payment->order->order_number }}</span></h3>
                            <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span
                                    class="badge badge-success">تکمیل شده</span> است.جزئیات این سفارش را می توانید
                                با کلیک بر روی دکمه <a href="{{ route('orders') }}" class="btn-link-border">پیگیری
                                    سفارش</a>مشاهده نمایید.
                            </p>
                            <button onclick="window.location.href='{{ route('orders') }}'" type="button"
                                    class="btn-primary">
                                پیگیری سفارش
                            </button>
                            <div class="table-responsive default mt-3 mb-3">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">نام تحویل گیرنده
                                            : {{ $payment->order->first_name . ' ' . $payment->order->last_name }}</th>
                                        <th scope="col">شماره تماس : {{ $payment->order->phone }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">تعداد مرسوله
                                            : {{ $payment->order->order_products()->count() }}</th>
                                        <td>مبلغ کل : {{ number_format($payment->amount) }} {{ __('Toman') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">وضعیت پرداخت : پرداخت آنلاین(موفق)</th>
                                        <td>وضعیت سفارش: انتظار ارسال</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">آدرس : {{ $payment->order->address }}</th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
