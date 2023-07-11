<?php

namespace Modules\Wishlist\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Wishlist\Entities\Wishlist;

class WishlistPage extends Component
{
    public $website_title = '';
    public $lang;

    protected $objects;

    public function RemoveFromWishlist(Wishlist $wishlist)
    {
        $wishlist->delete();
    }

    public function render()
    {
        $this->objects = auth()->user()->wish_lists()->Search(request('search'))->with('product')->get();
        return view('wishlist::livewire.pages.front.wishlist-page', ['objects' => $this->objects]);
    }
}
