<?php

namespace Modules\Index\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Poster\Entities\Poster;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;
use Modules\Slider\Entities\Slider;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $special_categories = Category::withCount('products')
            ->where('is_special', 1)
            ->limit(6)->get();
        $special_products = Product::ActiveProducts()->where('is_special', 1)->get();
        $latest_products = Product::ActiveProducts()->latest()->limit(10)->get();

        $top_posters = Poster::where('location', 'top')->get();

        return view('index::index', compact('sliders', 'special_categories', 'special_products', 'top_posters', 'latest_products'));
    }
}
