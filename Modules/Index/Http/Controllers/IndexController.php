<?php

namespace Modules\Index\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Slider\Entities\Slider;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('index::index', compact('sliders'));
    }
}
