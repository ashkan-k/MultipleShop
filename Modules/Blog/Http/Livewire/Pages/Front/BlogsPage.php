<?php

namespace Modules\Blog\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Blog\Entities\Blog;

class BlogsPage extends Component
{
    public $pagination;
    public $website_title = '';
    public $lang;

    protected $objects;

    public function mount()
    {
        $this->search = request('q');
        $this->lang = app()->getLocale();
        $this->pagination = env('PAGINATION', 10);
    }

    public function render()
    {
        $this->objects = Blog::Search($this->search)->paginate($this->pagination);
        return view('blog::livewire.pages.front.blogs-page', ['objects' => $this->objects]);
    }
}
