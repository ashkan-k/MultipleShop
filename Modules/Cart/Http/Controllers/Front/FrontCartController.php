<?php

namespace Modules\Cart\Http\Controllers\Front;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cart\Entities\Cart;
use Modules\Cart\Http\Requests\CartRequest;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class FrontCartController extends Controller
{
    use Responses;

    public function cart()
    {
        return view('cart::front.cart');
    }
}
