<?php

namespace Modules\Order\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Blog\Entities\Blog;
use Modules\Product\Entities\Category;

class OrderSubmitPage extends Component
{
    public function render()
    {
        $data = [
            'blogs' => Blog::latest()->get(),
            'categories' => Category::latest()->get()
        ];
        return view('order::livewire.pages.front.order-submit-page', $data);
    }
}
