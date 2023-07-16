<?php

namespace Modules\Blog\Http\Controllers\Front;

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

class FrontBlogController extends Controller
{
    use Responses, Uploader;

    public function blogs($lang)
    {
        return view('blog::front.blogs');
    }

    public function product_detail($lang, $slug)
    {
        $product = Product::FindBySlug($lang, $slug);
        return view('product::front.product-detail', compact('product'));
    }
}
