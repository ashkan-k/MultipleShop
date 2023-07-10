<?php

namespace Modules\Cart\Http\Livewire\Pages\Front;

use Livewire\Component;

class CartPage extends Component
{
    public $website_title = '';
    public $lang;

    protected $objects;

    public function render()
    {
        if (auth()->check()){
            $this->objects = auth()->user()->carts()->get();
        }

        return view('cart::livewire.pages.front.cart-page', ['objects' => $this->objects]);
    }
}
