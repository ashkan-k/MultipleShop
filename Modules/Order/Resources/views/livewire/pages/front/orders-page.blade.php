<div>
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

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-account-row">
                                            <input name="first_name"
                                                   wire:model.debounce.300ms="search"
                                                   class="input-field text-right" type="text"
                                                   placeholder="{{ __('Search ...') }}">
                                            @error('title')
                                            <span
                                                class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-order">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">{{ __('Products') }}</th>
                                                <th scope="col">{{ __('Order number') }}</th>
                                                <th scope="col">{{ __('Order date') }}</th>
                                                <th scope="col">{{ __('Total Amount') }}</th>
                                                <th scope="col">{{ __('Status') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($objects as $order)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->get_order_products() }}</td>
                                                    <td class="order-code">{{ $order->order_number ?: '---'  }}</td>
                                                    <td>
                                                        @if($lang == 'fa')
                                                            {{ \Hekmatinasser\Verta\Verta:: instance($order->created_at)->format('%B %d، %Y') }}
                                                        @else
                                                            {{ \Hekmatinasser\Verta\Verta:: instance($order->created_at)->toCarbon()->isoFormat('MMMM Do YYYY') }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $order->payment ? $order->payment->amount : '---' }} {{ __('Toman') }}</td>
                                                    <td class="text-{{ $order->payment && $order->payment->status ? $order->get_status_class() : 'danger' }}">
                                                        @if($order->payment && $order->payment->status)
                                                            {{ $order->get_status() }}
                                                        @else
                                                            {{ __('Payment error') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    {{ $objects->onEachSide(3)->links('front.components.front_pagination') }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('front.components.dashboard_sidebar')

            </div>
        </div>
    </main>
</div>
