<?php

namespace Modules\Ticket\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;

class TicketsPage extends Component
{
    use WithPagination;

    public $pagination;
    public $search = '';
    public $website_title = '';
    public $lang;

    private $relations = ['user', 'category'];

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
        $this->objects = auth()->user()->tickets()->Search($this->search)
            ->with($this->relations)
            ->latest()
            ->paginate($this->pagination);

        return view('ticket::livewire.pages.front.tickets-page', ['objects' => $this->objects]);
    }
}
