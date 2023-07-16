<?php

namespace Modules\Blog\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Blog\Entities\Blog;

class BlogDetailPage extends Component
{
    public $website_title = '';
    public $lang;

    public $object;

    public function render()
    {
        $data = [
            'latest_blogs' => Blog::latest()->limit(5)->get(),
            'related_blogs' => Blog::where('category_id', $this->object->category_id)->get()
        ];
        return view('blog::livewire.pages.front.blog-detail-page', $data);
    }
}
