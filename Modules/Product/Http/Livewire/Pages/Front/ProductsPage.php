<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;

class ProductsPage extends Component
{
    use WithPagination;

    public $pagination;
    public $website_title = '';
    public $lang;

    public $categories_filter = [];
    public $brands_filter = [];
    public $search = '';
    public $show_only_has_quantity_filter = false;

    protected $products;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->search = request('q');
        $this->lang = app()->getLocale();
        $this->pagination = env('PAGINATION', 10);
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['search', 'pagination']))
        {
            $this->resetPage();
        }
    }

    public function filter_quantity($show_only_has_quantity_filter)
    {
        $this->show_only_has_quantity_filter = $show_only_has_quantity_filter;
    }

    private function Filter()
    {
        if ($this->categories_filter){
            $this->products->whereIn('category_id', $this->categories_filter);
        }

        if ($this->brands_filter){
            $this->products->whereIn('brand_id', $this->brands_filter);
        }

        if ($this->show_only_has_quantity_filter){
            $this->products = $this->products->where('quantity', '>', 0);
        }
    }

    //

    public function render()
    {
        $this->products = Product::ActiveProducts()->Search($this->search)->latest();
        $this->Filter();

        $data = [
            'products' => $this->products->paginate($this->pagination),
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ];

        return view('product::livewire.pages.front.products-page', $data);
    }
}
