<?php

namespace Modules\Blog\Http\Livewire\Pages\Front;

use Livewire\Component;
use Modules\Blog\Entities\Blog;
use Modules\Comment\Http\Requests\CommentRequest;

class BlogDetailPage extends Component
{
    public $website_title = '';
    public $lang;

    public $object;

    public $title;
    public $body;
    public $negative_points;
    public $positive_points;
    public $suggest_score;

    protected function rules()
    {
        return (new CommentRequest())->rules();
    }

    public function SubmitNewComment()
    {
        $data = $this->validate();

        $data['commentable_id'] = $this->object->id;
        $data['commentable_type'] = get_class($this->object);
        $data['suggest_score'] = $data['suggest_score'] ?: 'no_idea';

        auth()->user()->comments()->create($data);

        $this->title = $this->body = null;

        $this->dispatchBrowserEvent('newCommentSubmited');
    }

    public function render()
    {
        $data = [
            'latest_blogs' => Blog::latest()->limit(5)->get(),
            'related_blogs' => Blog::where('category_id', $this->object->category_id)->get(),
            'comments' => $this->object->comments()->where('status', 'approved')->with(['user'])
        ];
        return view('blog::livewire.pages.front.blog-detail-page', $data);
    }
}
