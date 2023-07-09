<?php

namespace Modules\Product\Http\Controllers\Front;

use App\Http\Traits\Responses;
use App\Http\Traits\Uploader;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

    public function products($lang, Category $category)
    {
        return view('product::front.products', compact('category'));
    }

    public function product_detail($lang, $slug)
    {
        $product = Product::FindBySlug($lang, $slug);
        return view('product::front.product-detail', compact('product'));
    }

    public function search()
    {
        return view('product::front.products-search');
    }
}
