<?php

namespace Modules\Product\Http\Controllers\Front;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\SchemaOrg\Schema;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\User\Entities\User;

class FrontProductController extends Controller
{
    use Responses, Uploader;

    private $relations = ['user', 'category'];

    public function products($lang, $slug)
    {
        $category = Category::FindBySlug($lang, $slug);

        SEOMeta::setTitle($category->get_title($lang));
        SEOMeta::setDescription(__('Products related to category :cat', ['cat' => $category->get_title($lang)]));

        return view('product::front.products', compact('category'));
    }

    public function product_detail($lang, $slug)
    {
        $product = Product::FindBySlug($lang, $slug);
        abort_unless((auth()->check() && auth()->user()->is_staff()) || $product->is_active, 404);

        // Seo
        // Create image
        $image = Schema::imageObject()
            ->url($product->get_image())
            ->width(800)
            ->height(600);

        $product_schema = Schema::product()
            ->name($product->get_title($lang))
            ->description(strip_tags($product->get_description($lang)))
            ->sku($product->barcode)
            ->image($image)
            ->offers(Schema::offer()
                ->price($product->get_price() * 10)
                ->priceCurrency('IRR')
                ->availability($product->quantity ? 'InStock' : 'OutOfStock')
            );

        SEOMeta::setTitle($product->get_title($lang));
        SEOMeta::setDescription(strip_tags($product->get_description($lang)));

        return view('product::front.product-detail', compact('product', 'product_schema'));
    }

    public function search()
    {
        SEOMeta::setTitle(__('Search :search', ['search' => request('q')]));
        SEOMeta::setDescription(__('Products related to keyword search :search', ['search' => request('q')]));

        return view('product::front.products-search');
    }
}
