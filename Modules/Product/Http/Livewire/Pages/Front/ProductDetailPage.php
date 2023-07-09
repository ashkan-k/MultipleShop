<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;

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
//            'products' => $this->products->paginate($this->pagination),
//            'filters' => $this->object->features()->get(),
        ];

        return view('product::livewire.pages.front.product-detail-page', $data);
    }
}
