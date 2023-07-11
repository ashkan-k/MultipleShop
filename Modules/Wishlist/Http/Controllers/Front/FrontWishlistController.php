<?php

namespace Modules\Wishlist\Http\Controllers\Front;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;
use Modules\Wishlist\Entities\Wishlist;
use Modules\Wishlist\Http\Requests\WishlistRequest;

class FrontWishlistController extends Controller
{
    use Responses;

    public function wishlists()
    {
        $objects = auth()->user()->wish_lists()->Search(request('search'))->with('product')->get();
        return view('wishlist::front.wishlists', compact('objects'));
    }
}
