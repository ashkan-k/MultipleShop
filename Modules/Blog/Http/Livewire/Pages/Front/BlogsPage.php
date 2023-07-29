<?php

namespace Modules\Blog\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;

class BlogsPage extends Component
{
    public $pagination;
    public $website_title = '';
    public $lang;

    public $search = '';
    public $category_slug;
    public $category_object;

    protected $objects;

    public function mount()
    {
        $this->search = request('q');
        if ($this->category_slug){
            $this->category_object = BlogCategory::FindBySlug($this->lang, $this->category_slug);
        }
        $this->lang = app()->getLocale();
        $this->pagination = env('PAGINATION', 10);
    }

    private function filterByCategory()
    {
        $this->objects = $this->category_object ? $this->objects->where('category_id', $this->category_object->id) :  $this->objects;
    }

    public function render()
    {
        $this->objects = Blog::ActiveBlogs()->Search($this->search);
        $this->filterByCategory();
        return view('blog::livewire.pages.front.blogs-page', ['objects' => $this->objects->latest()->paginate($this->pagination)]);
    }
}
