<main class="cart-page default">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="style-breadcrumb">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="/">
                                    <span>{{ __('Home') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cart', ['locale' => $lang]) }}">
                                    <span>{{ __('Cart') }}</span>
                                </a>
                            </li>
                            <li><span style="color: #FC7E75 ">{{ __('Order') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content col-12 col-md-3 order-2 order-md-1 mx-auto">
                <div class="account-box checkout-page mb-2">
                    <div class="px-5 py-4">
                        <p class="style-text-box">{{ __('Readings') }}</p>
                        <ul class="style-ul">

                            @foreach($blogs as $blog)
                                <li>
                                    <div class="circle-inbox"></div>
                                    <a href="#">
                                        <span style="color: #777">{{ $blog->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="account-box checkout-page mt-2">
                    <div class="px-5 py-4">
                        <p class="style-text-box">{{ __('Category') }}</p>
                        <ul class="style-ul">

                            @foreach($categories as $category)
                                <li>
                                    <div class="circle-inbox"></div>
                                    <a href="{{ route('category.products', ['locale' => $lang, 'slug' => $category->get_slug($lang)]) }}">
                                        <span style="color: #777">{{ $category->get_title($lang) }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content col-12 col-md-9 order-1 order-md-2 mx-auto" wire:ignore>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="off-box">
                                {{ __('Do you have a discount code?') }}
                                <span onclick="insert_coupon()">
                                     {{ __('Click here to write the code') }}
                                </span>
                                <div class="show_status d-none">1</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="insert_off_box off-box he_0 he_a">
                                <form method="post" wire:submit="CheckCouponCode()">

                                    <div class="row">
                                        <div class="col-7">

                                            <input type="text" name="off-sale" class="form-control"
                                                   wire:model.defer="coupon_code"
                                                   placeholder="{{ __('Enter the discount code') }}">

                                        </div>
                                        <div class="col-5">
                                            <button type="submit" name="submit"
                                                    class="send-color"> {{ __('Check') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="account-box checkout-page ">
                        <div class="account-box-content">
                            <form method="post" class="form-account" action="{{ route('pay', ['locale' => $lang]) }}">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="coupon_id" id="id_coupon_id" value="">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-title text-right">{{ __('Your profile') }}</div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">{{ __('Name') }}</div>
                                        <div class="form-account-row">
                                            <input class="input-field text-right" type="text"
                                                   name="first_name" required
                                                   value="{{ old('first_name') }}"
                                                   placeholder="{{ __('Enter your name') }}">

                                            @error('first_name')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">{{ __('Last Name') }}</div>
                                        <div class="form-account-row">
                                            <input class="input-field text-right" type="text"
                                                   name="last_name" required
                                                   value="{{ old('last_name') }}"
                                                   placeholder="{{ __('Enter your last name') }}">

                                            @error('last_name')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">{{ __('Phone') }}</div>
                                        <div class="form-account-row">
                                            <input class="input-field" type="text"
                                                   name="phone" required
                                                   value="{{ old('phone') }}"
                                                   placeholder="{{ __('Enter your phone') }}">

                                            @error('phone')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkout-title text-right">{{ __('Add new address') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-account-title">{{ __('Address') }}</div>
                                        <div class="form-account-row">
                                            <textarea class="input-field text-right" rows="5"
                                                      name="address" required
                                                      placeholder="{{ __('Enter your address') }}">{{ old('address') }}</textarea>

                                            @error('address')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-account-title">{{ __('Postal Code') }}</div>
                                        <div class="form-account-row">
                                            <input class="input-field" type="text"
                                                   name="postal_code" required
                                                   value="{{ old('postal_code') }}"
                                                   placeholder="{{ __('Enter your zip code') }}">

                                            @error('postal_code')
                                            <span class="text-danger text-wrap">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-account-row text-left">
                                            <button class="btns btn-info">
                                                {{ __('Register and Payment') }}
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
</main>

@push('StackScript')
    <script type="text/javascript">
        window.addEventListener('couponCodeChecked', event => {
            if (event['detail']['result']['error']) {
                showToast(event['detail']['result']['error'], 'error');
            }else {
                console.log(event['detail']['result']);
                $('#id_coupon_id').val(event['detail']['result']['id']);
                showToast('{{ __('The discount code has been successfully registered.') }}', 'success');
            }
        });
    </script>
@endpush
