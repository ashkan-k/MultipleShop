<?php

namespace Modules\Index\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Wishlist\Entities\Wishlist;

class ProfilePage extends Component
{
    public $website_title = '';
    public $lang;

    public $object;

    public function RemoveFromWishlist(Wishlist $wishlist)
    {
        $wishlist->delete();
    }

    public function render()
    {
        $data = [
            'wishlists' => $this->object->wish_lists()->get(),
        ];
        return view('index::livewire.pages.front.profile-page', $data);
    }
}
