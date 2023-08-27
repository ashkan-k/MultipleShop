@extends('layouts.front-master')

@section('title') {{ __('Successful Payment') }} @endsection

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
                            @if($lang == 'fa')
                                <h1>سفارش <a href="#">{{ $payment->order->order_number }}</a>با موفقیت در سیستم ثبت شد.
                                </h1>
                            @else
                                <h1>
                                    the Order <a onclick="copyToClipboard('{{ $payment->order->order_number }}')">{{ $payment->order->order_number }}</a> was successfully
                                    registered in the system.
                                </h1>
                            @endif
                            <p>{{ __('The order will be ready to be sent in one day.') }}</p>
                        </div>
                        <div class="order-info default">
                            <h3>{{ __('Order code') }}: <span>{{ $payment->order->order_number }}</span></h3>
                            @if($lang == 'fa')
                                <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span
                                        class="badge badge-success">تکمیل شده</span> است.جزئیات این سفارش را می توانید
                                    با کلیک بر روی دکمه <a href="{{ route('orders') }}" class="btn-link-border">پیگیری
                                        سفارش</a>مشاهده نمایید.
                                </p>
                            @else
                                <p>
                                    Your order has been successfully registered in the system and has been <span
                                        class="badge badge-success">completed</span>
                                    now. You can see the details of this order by clicking on the <a
                                        href="{{ route('orders') }}" class="btn-link-border">order tracking</a> button.
                                </p>
                            @endif
                            <button onclick="window.location.href='{{ route('orders') }}'" type="button"
                                    class="btn-primary">
                                {{ __('Order tracking') }}
                            </button>
                            <div class="table-responsive default mt-3 mb-3">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{ __('Name of the recipient') }}
                                            : {{ $payment->order->first_name . ' ' . $payment->order->last_name }}</th>
                                        <th scope="col">{{ __('Phone Number') }} : {{ $payment->order->phone }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{ __('Shipment number') }}
                                            : {{ $payment->order->order_products()->count() }}</th>
                                        <td>{{ __('Total Amount') }}
                                            : {{ number_format($payment->amount) }} {{ __('Toman') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Payment status: online payment (successful)') }}</th>
                                        <td>{{ __('Order status: Awaiting shipment') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Postal Cost') }} : {{ number_format($settings['postal_cost']->value) }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Address') }} : {{ $payment->order->address }}</th>
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

@section('scripts')
    <script>
        function copyToClipboard(text) {
            // Create a temporary textarea element to hold the text to copy
            const textarea = document.createElement('textarea');
            textarea.value = text;

            // Make the textarea non-editable and add it to the DOM
            textarea.setAttribute('readonly', '');
            document.body.appendChild(textarea);

            // Select the text and copy it to the clipboard
            textarea.select();
            document.execCommand('copy');

            // Remove the textarea from the DOM
            document.body.removeChild(textarea);

            showToast('{{ __('The order code was copied.') }}', 'success');
        }
    </script>
@endsection
