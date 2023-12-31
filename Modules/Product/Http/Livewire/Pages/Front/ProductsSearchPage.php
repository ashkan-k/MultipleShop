<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Product;

class ProductsSearchPage extends Component
{
    use WithPagination;

    public $pagination;
    public $website_title = '';
    public $lang;

    public $categories_filter = [];
    public $brands_filter = [];
    public $search = '';
    public $order_by = 'view_count';
    public $show_only_has_quantity_filter = false;

    public $category_search = '';
    public $brand_search = '';

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
        if (in_array($propertyName, ['search', 'pagination'])) {
            $this->resetPage();
        }
    }

    public function GetCategories()
    {
        return Category::Search($this->category_search)->get();
    }

    public function GetBrands()
    {
        return Brand::Search($this->brand_search)->get();
    }

    //

    public function FilterByQuantity($show_only_has_quantity_filter)
    {
        $this->show_only_has_quantity_filter = $show_only_has_quantity_filter;
    }

    public function ChangeOrderBy($new_order)
    {
        $this->order_by = $new_order;
    }

    private function Filter()
    {
        $this->categories_filter = array_filter($this->categories_filter, function ($item) {
            return $item !== false;
        });
        $this->brands_filter = array_filter($this->brands_filter, function ($item) {
            return $item !== false;
        });

        if ($this->categories_filter) {
            $this->products->whereIn('category_id', $this->categories_filter);
        }

        if ($this->brands_filter) {
            $this->products->whereIn('brand_id', $this->brands_filter);
        }

        if ($this->show_only_has_quantity_filter) {
            $this->products = $this->products->where('quantity', '>', 0);
        }
    }

    public function OrderByItems()
    {
        if ($this->order_by == 'price_ask') {
            $this->products = $this->products->orderBy('price');
        } elseif ($this->order_by == 'order_count') {
            $this->products = $this->products->withCount('orders')->orderByDesc('orders_count');
        } else {
            $this->products = $this->products->orderByDesc($this->order_by);
        }
    }

    public function render()
    {
        $this->products = Product::ActiveProducts()->with(['user'])->Search($this->search);

        $this->Filter();
        $this->OrderByItems();

        $data = [
            'products' => $this->products->paginate($this->pagination),
            'categories' => $this->GetCategories(),
//            'brands' => $this->GetBrands(),
        ];

        return view('product::livewire.pages.front.products-search-page', $data);
    }
}
