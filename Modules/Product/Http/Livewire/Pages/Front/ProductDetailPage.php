<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Comment\Entities\Comment;
use Modules\Product\Entities\Color;

class ProductDetailPage extends Component
{
    use WithPagination;

    public $website_title = '';
    public $lang;

    public $object;

    public function mount()
    {
        $this->lang = app()->getLocale();
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['search', 'pagination'])) {
            $this->resetPage();
        }
    }

    //

    public function render()
    {
        $data = [
            'colors' => Color::limit(3)->get(),
            'comments' => $this->object->comments()->where('status', 'approved')->with(['user', 'product']),
            'top_features' => $this->object->product_features()->whereIn('place', ['up', 'both'])->with('feature')->get(),
            'bottom_features' => $this->object->product_features()->whereIn('place', ['down', 'both'])->with('feature')->get(),
        ];

        return view('product::livewire.pages.front.product-detail-page', $data);
    }
}
