<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductFeature;

class ProductsPage extends Component
{
    use WithPagination;

    public $pagination;
    public $website_title = '';
    public $lang;

    public $selected_filters = [];
    public $search = '';
    public $order_by = 'view_count';
    public $show_only_has_quantity_filter = false;
    public $is_first_page_visit = true;

    public $items_search = '';

    protected $products;
    public $object;

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

        $this->is_first_page_visit = false;
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

    public function AddNewRadioFilterItem($feature_id, $feature_type, $filter)
    {
        $this->selected_filters["{$feature_id}_{$feature_type}"] = [];
        $this->selected_filters["{$feature_id}_{$feature_type}"][$filter] = $filter;
    }

    private function Filter()
    {
        if ($this->selected_filters) {
            foreach ($this->selected_filters as $key => $filter) {
                $feature_id = explode('_', $key)[0];
                $feature_type = explode('_', $key)[1];

                $filter = array_values($filter);

                if ($feature_type == 'checkbox') {
                    $filter = array_filter($filter, function ($item) {
                        return $item !== false;
                    });

                    if ($filter){
                        $this->products = $this->products->whereHas('product_features', function ($query) use ($filter, $feature_id) {
                            return $query->whereIn('value', $filter)->where('feature_id', $feature_id);
                        });
                    }
                } else {
                    $this->products = $this->products->whereHas('product_features', function ($query) use ($filter, $feature_id) {
                        return $query->where('value', $filter[0])->where('feature_id', $feature_id);
                    });
                }

            }
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

    public function GetFeatureItems($feature)
    {
        $items_array = explode('،', $feature->filter_items);
        if ($this->items_search){
           return array_filter(explode('،', $feature->filter_items), function($v) use ($feature, $items_array){
                try {
                    return str_contains($v, $this->items_search[$feature->id]);
                }catch (\Exception $exception){
                    return $items_array;
                }
            });
        }
        return $items_array;
    }

    public function render()
    {
        $this->products = $this->object->products()->ActiveProducts()
            ->with(['user', 'product_features'])->Search($this->search);

        $this->Filter();
        $this->OrderByItems();

        $data = [
            'products' => $this->products->paginate($this->pagination),
            'filters' => $this->object->features()->whereIn('filter_type', ['checkbox', 'radio'])->get(),
        ];

        return view('product::livewire.pages.front.products-page', $data);
    }
}
