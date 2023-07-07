<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;

class TestList extends Component
{
    use WithPagination;

    public $categories_filter = [];

    protected $products;

    protected $paginationTheme = 'bootstrap';

    public function updated()
    {
        dd($this->categories_filter);
    }

    public function render()
    {
        $this->products = Product::ActiveProducts()->latest()->paginate(1);

        $data = [
            'products' => $this->products,
            'categories' => Category::all(),
        ];

        return view('livewire.test-list', $data);
    }
}
