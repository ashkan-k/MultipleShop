<?php

namespace Modules\Blog\Http\Livewire\Pages\Front;

use Illuminate\Support\Facades\Validator;
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
    public $parent_id;

//    protected function rules()
//    {
//        return (new CommentRequest())->rules();
//    }

    protected $rules = [
        'title' => 'required|string|max:50',
        'body' => 'required|string|max:300',
    ];

    public function SubmitNewComment($parent_id = null)
    {
        $validation = Validator::make([
            'title' => $this->title,
            'body' => $this->body,
        ], $this->rules);

        if ($validation->fails()) {
            $this->dispatchBrowserEvent('focusErrorInput', ['parent_id' => $parent_id]);
            $validation->validate();
        }

        $data = $validation->validated();

        $data['parent_id'] = $parent_id;
        $data['commentable_id'] = $this->object->id;
        $data['commentable_type'] = get_class($this->object);

        auth()->user()->comments()->create($data);

        $this->title = $this->body = null;

        $this->dispatchBrowserEvent('newCommentSubmited');
    }

    public function render()
    {
        $data = [
            'latest_blogs' => Blog::latest()->limit(5)->get(),
            'related_blogs' => Blog::where('category_id', $this->object->category_id)
                ->where('id', '!=', $this->object->id)->get(),
            'comments' => $this->object->comments()->where('status', 'approved')->whereNull('parent_id')->with(['user'])
        ];
        return view('blog::livewire.pages.front.blog-detail-page', $data);
    }
}
