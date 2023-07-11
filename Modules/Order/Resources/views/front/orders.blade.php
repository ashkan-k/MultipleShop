@extends('layouts.front-master')

@section('title') سفارش های من @endsection

@section('content')
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <h1 class="title-tab-content">{{ __('All orders') }}</h1>
                                </div>
                                <div class="content-section default">
                                    <div class="table-responsive">
                                        <table class="table table-order">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">{{ __('Product') }}</th>
                                                <th scope="col">{{ __('Count') }}</th>
                                                <th scope="col">{{ __('Order number') }}</th>
                                                <th scope="col">{{ __('Order date') }}</th>
                                                <th scope="col">{{ __('Total Amount') }}</th>
                                                <th scope="col">{{ __('Payment Operation') }}</th>
                                                <th scope="col">{{ __('Status') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($objects as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->product ? $order->product->title : '---' }}</td>
                                                    <td>{{ $order->count }}</td>
                                                    <td class="order-code">DKC-59888888</td>
                                                    <td>
                                                        @if($lang == 'fa')
                                                            {{ \Hekmatinasser\Verta\Verta:: instance($order->created_at)->format('%B %d، %Y') }}
                                                        @else
                                                            {{ \Hekmatinasser\Verta\Verta:: instance($order->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $order->payment ? $order->payment->amount : '---' }} {{ __('Toman') }}</td>
                                                    <td class="text-{{ $order->payment->status ? 'success' : 'danger' }}">{{ $order->payment->status ? 'موفق' : 'ناموفق' }}</td>
                                                    <td class="text-{{ $order->get_status_class() }}">{{ $order->get_status() }}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
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
