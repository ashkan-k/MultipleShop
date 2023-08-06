<?php

namespace Modules\Product\Http\Controllers\Front;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
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
        return view('product::front.products', compact('category'));
    }

    public function product_detail($lang, $slug)
    {
        $product = Product::FindBySlug($lang, $slug);

        $product_schema = Schema::product()
            ->name($product->get_title($lang))
            ->description(strip_tags($product->get_description($lang)))
            ->sku($product->barcode)
            ->offers(Schema::offer()
                ->price($product->get_price())
                ->priceCurrency('IRT')
                ->availability($product->quantity ? 'InStock' : 'OutOfStock')
            );

        return view('product::front.product-detail', compact('product', 'product_schema'));
    }

    public function search()
    {
        return view('product::front.products-search');
    }
}
