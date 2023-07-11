<?php

namespace Modules\Order\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;

class OrdersPage extends Component
{
    use WithPagination;

    public $pagination;
    public $search = '';
    public $website_title = '';
    public $lang;

    private $order_relations = ['product', 'payment'];

    protected $objects;


    public function mount()
    {
        $this->pagination = env('PAGINATION', 10);
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['search', 'pagination']))
        {
            $this->resetPage();
        }
    }

    public function render()
    {
        $this->objects = auth()->user()->orders()->Search($this->search)
            ->with($this->order_relations)
            ->latest()
            ->paginate($this->pagination);

        return view('order::livewire.pages.front.orders-page', ['objects' => $this->objects]);
    }
}
