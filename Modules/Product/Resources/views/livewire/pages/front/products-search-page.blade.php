<main class="search-page default">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="style-breadcrumb">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="#">
                                    <span>{{ __('Online Shop') }} {{ $website_title }}</span>
                                </a>
                            </li>
                            <li>
                                    <span>
                                        @if(isset($search))
                                            {{ __('Search') }} {{ $search }}
                                        @else
                                            {{ __('Products') }}
                                        @endif
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-md-1 order-2">
                <div class="box">
                    <div class="box-header">{{ __('Search in results') }}:</div>
                    <div class="box-content">
                        <div class="ui-input ui-input--quick-search">
                            <input type="text" wire:model.debounce.300ms="search"
                                   value="{{ $search }}"
                                   class="ui-input-field ui-input-field--cleanable"
                                   placeholder="{{ __('Write the name of the desired product or brand...') }}">
                            <span class="ui-input-cleaner"></span>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <div class="box-toggle" data-toggle="collapse" href="#collapseExample1" role="button"
                             aria-expanded="true" aria-controls="collapseExample1">
                            {{ __('Categorize the results') }}
                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="collapse show" id="collapseExample1">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       ng-model="search_categories" wire:model.debounce.300ms="category_search"
                                       placeholder="{{ __('Write the name of the desired category...') }}">
                                <span class="ui-input-cleaner"></span>
                            </div>

                            <div class="filter-option">

                                @foreach($categories as $cat)
                                    <div class="checkbox">
                                        <input id="checkbox_{{ $cat->id }}" value="{{ $cat->id }}"
                                               wire:model.debounce.1000ms="categories_filter.{{ $cat->id }}"
                                               type="checkbox">
                                        <label for="checkbox_{{ $cat->id }}">
                                            {{ $cat->get_title($lang) }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <div class="box-toggle" data-toggle="collapse" href="#collapseExample2" role="button"
                             aria-expanded="true" aria-controls="collapseExample2">
                            {{ __('Brand') }}
                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="collapse show" id="collapseExample2">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       ng-model="search_brands" wire:model.debounce.300ms="brand_search"
                                       placeholder="{{ __('Write the desired brand name...') }}">
                                <span class="ui-input-cleaner"></span>
                            </div>
                            <div class="filter-option">

                                @foreach($brands as $brand)
                                    <div class="checkbox">
                                        <input id="brands_checkbox_{{ $brand->id }}" value="{{ $brand->id }}"
                                               wire:model.debounce.1000ms="brands_filter.{{ $brand->id }}"
                                               type="checkbox">
                                        <label for="brands_checkbox_{{ $brand->id }}">
                                            {{ $brand->title }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box" wire:ignore>
                    <div class="box-content">
                        <input id="only_available_items_checkbox" onchange="FilterByQuantity()" type="checkbox"
                               name="checkbox" class="bootstrap-switch"/>
                        <label for="only_available_items_checkbox">{{ __('Only available items') }}</label>
                    </div>
                </div>
            </aside>
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-md-2 order-1">


                <div class="listing-counter">{{ count($products) }} {{ __('items') }}</div>
                <div class="style-tatrib listing style-listing">
                    <div class="row">
                        <div class="col-12">
                            <div class="listing-header default">
                                <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                    data-label="{{ __('Order by') }}:">
                                    <li>
                                        <a wire:click="ChangeOrderBy('view_count')"
                                           class="{{ $order_by == 'view_count' ? 'active' : '' }}" data-toggle="tab"
                                           href="#most-view" role="tab"
                                           aria-expanded="false">{{ __('Most Visited') }}</a>
                                    </li>
                                    <li>
                                        <a wire:click="ChangeOrderBy('created_at')"
                                           class="{{ $order_by == 'created_at' ? 'active' : '' }}" data-toggle="tab"
                                           href="#new" role="tab"
                                           aria-expanded="true">{{ __('The Newest') }}</a>
                                    </li>
                                    <li>
                                        <a wire:click="ChangeOrderBy('order_count')"
                                           class="{{ $order_by == 'order_count' ? 'active' : '' }}" data-toggle="tab"
                                           href="#most-seller" role="tab"
                                           aria-expanded="false">{{ __('Bestselling') }}</a>
                                    </li>
                                    <li>
                                        <a wire:click="ChangeOrderBy('price_ask')"
                                           class="{{ $order_by == 'price_ask' ? 'active' : '' }}" data-toggle="tab"
                                           href="#down-price" role="tab"
                                           aria-expanded="false">{{ __('Cheapest') }}</a>
                                    </li>
                                    <li>
                                        <a wire:click="ChangeOrderBy('price')"
                                           class="{{ $order_by == 'price' ? 'active' : '' }}" data-toggle="tab"
                                           href="#top-price" role="tab"
                                           aria-expanded="false">{{ __('The most expensive') }}</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="listing default mt-3">
                    <div class="tab-content default text-center">

                        <div class="tab-pane active" id="related" role="tabpanel" aria-expanded="true">
                            <div class="container no-padding-right">
                                <ul class="row listing-items">

                                    @foreach($products as $pro)
                                        <li class=" col-lg-4 col-md-6 col-12 no-padding mt-3">
                                            <div class="product-box">
                                                <div
                                                    class="product-seller-details product-seller-details-item-grid">
                                                        <span class="product-main-seller"><span
                                                                class="product-seller-details-label">{{ __('Seller') }}:
                                                            </span>{{ $pro->user->full_name ?: '---' }}</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="{{ route('product_detail', [
                                                                                    'locale' => $lang,
                                                                                    'slug' => $pro->get_slug($lang)
                                                            ]) }}">
                                                    <img src="{{ $pro->get_image() }}"
                                                         alt="{{ $pro->get_title($lang) }}">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="{{ route('product_detail', [
                                                                                        'locale' => $lang,
                                                                                        'slug' => $pro->get_slug($lang)
                                                                ]) }}">
                                                                {{ \Illuminate\Support\Str::limit($pro->get_title($lang), 32) }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    {{ number_format($pro->price) ?: '---' }} <span
                                                                        class="price-currency">{{ __('Toman') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>

                    {{ $products->onEachSide(3)->links('front.components.front_pagination') }}

                </div>
            </div>
        </div>
    </div>
</main>

@push('StackScript')
    <script>
        function FilterByQuantity(){
            console.log('ssssssssss')
            console.log($('#only_available_items_checkbox').prop('checked'))
            var show_only_has_quantity_filter = $('#only_available_items_checkbox').prop('checked');
        @this.call('FilterByQuantity', show_only_has_quantity_filter);
        }
    </script>
@endpush
