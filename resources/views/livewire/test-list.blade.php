<main class="search-page default">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="style-breadcrumb">
                    <div class="breadcrumb-section default">
                        <ul class="breadcrumb-list">
                            <li>
                                <a href="#">
                                    <span>فروشگاه اینترنتی جی تی کالا</span>
                                </a>
                            </li>
                            <li><span>جستجوی موبایل</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <aside class="sidebar-page col-12 col-sm-12 col-md-4 col-lg-3 order-md-1 order-2">

                <div class="box">
                    <div class="box-header">جستجو در نتایج:</div>
                    <div class="box-content">
                        <div class="ui-input ui-input--quick-search">
                            <input type="text" class="ui-input-field ui-input-field--cleanable"
                                   wire:model.debounce.300ms="search"
                                   placeholder="نام محصول یا برند مورد نظر را بنویسید…">
                            <span class="ui-input-cleaner"></span>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <div class="box-toggle" data-toggle="collapse" href="#collapseExample1" role="button"
                             aria-expanded="true" aria-controls="collapseExample1">
                            دسته بندی نتایج
                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="collapse show" id="collapseExample1">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       placeholder="نام دسته بندی مورد نظر را بنویسید…">
                                <span class="ui-input-cleaner"></span>
                            </div>
                            <div class="filter-option">

                                @foreach($categories as $cat)
                                    <div class="checkbox">
                                        <input id="checkbox_{{ $cat->id }}" value="{{ $cat->id }}" wire:model.debounce.1000ms="categories_filter.{{ $cat->id }}" type="checkbox">
                                        <label for="checkbox_{{ $cat->id }}">
                                            {{ $cat->title }}
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
                            برند
                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="collapse show" id="collapseExample2">
                            <div class="ui-input ui-input--quick-search">
                                <input type="text" class="ui-input-field ui-input-field--cleanable"
                                       placeholder="نام برند مورد نظر را بنویسید…">
                                <span class="ui-input-cleaner"></span>
                            </div>
                            <div class="filter-option">

                                @foreach($brands as $brand)
                                    <div class="checkbox">
                                        <input id="checkbox_brands_{{ $brand->id }}" value="{{ $brand->id }}" wire:model.debounce.1000ms="brands_filter.{{ $brand->id }}" type="checkbox">
                                        <label for="checkbox_brands_{{ $brand->id }}">
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
                        <input id="only_available_items_checkbox" onchange="FilterByQuantity()" type="checkbox" name="checkbox" class="bootstrap-switch"/>
                        <label>فقط کالاهای موجود</label>
                    </div>
                </div>
            </aside>
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 order-md-2 order-1">


                <div class="listing-counter">۶,۱۸۸ کالا</div>
                <div class="style-tatrib listing style-listing">
                    <div class="row">
                        <div class="col-12">
                            <div class="listing-header default">
                                <ul class="listing-sort nav nav-tabs justify-content-center" role="tablist"
                                    data-label="مرتب‌سازی بر اساس :">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#related" role="tab"
                                           aria-expanded="false">مرتبط‌ترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#most-view" role="tab"
                                           aria-expanded="false">پربازدیدترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#new" role="tab" aria-expanded="true">جدیدترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#most-seller" role="tab"
                                           aria-expanded="false">پرفروش‌ترین‌</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#down-price" role="tab"
                                           aria-expanded="false">ارزان‌ترین</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#top-price" role="tab"
                                           aria-expanded="false">گران‌ترین</a>
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
                                                                class="product-seller-details-label">فروشنده:
                                                            </span>{{ $pro->user->full_name }}</span>
                                                    <span class="product-seller-details-badge-container"></span>
                                                </div>
                                                <a class="product-box-img" href="#">
                                                    <img src="{{ $pro->get_image() }}" alt="">
                                                </a>
                                                <div class="product-box-content">
                                                    <div class="product-box-content-row">
                                                        <div class="product-box-title">
                                                            <a href="#">
                                                                {{ $pro->title }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-row product-box-row-price">
                                                        <div class="price">
                                                            <div class="price-value">
                                                                <div class="price-value-wrapper">
                                                                    59,۰۰۰ <span
                                                                        class="price-currency">تومان</span>
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

                        {{ $products->links() }}

                    </div>


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
            @this.call('filter_quantity', show_only_has_quantity_filter);
        }
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

        @this.on('triggerCheckQuantity', () => {
            console.log('ssssssssss')
            console.log($('#only_available_items_checkbox').prop('checked'))
            // @this.call('filter_quantity')
                // success response

        });
        })
    </script>
@endpush

