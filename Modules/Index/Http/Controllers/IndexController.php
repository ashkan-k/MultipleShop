<?php

namespace Modules\Index\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Slider\Entities\Slider;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $special_categories = Category::withCount('products')
            ->where('is_special', 1)
            ->limit(6)->get();

        return view('index::index', compact('sliders', 'special_categories'));
    }
}
