<?php

namespace Modules\Cart\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Cart\Entities\Cart;
use Modules\Product\Entities\Product;

class CartPage extends Component
{
    public $website_title = '';
    public $lang;

    protected $objects;

    public function RemoveFromCart(Cart $cart)
    {
        $cart->product()->increment('quantity', $cart->count);
        $cart->delete();
    }

    public function render()
    {
        if (auth()->check()){
            $this->objects = auth()->user()->carts()->get();
        }

        $data = [
            'total_amount' => $this->objects->sum('total_price'),
            'objects' => $this->objects
        ];
        return view('cart::livewire.pages.front.cart-page', $data);
    }
}
