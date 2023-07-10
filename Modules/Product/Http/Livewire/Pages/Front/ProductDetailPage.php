<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Comment\Entities\Comment;
use Modules\Comment\Http\Requests\CommentRequest;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;

class ProductDetailPage extends Component
{
    use WithPagination;

    public $website_title = '';
    public $lang;
    public $current_tab = 'review';

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

        auth()->user()->comments()->create($data);

        $this->title = $this->body = $this->negative_points = $this->positive_points = $this->suggest_score = null;

        $this->dispatchBrowserEvent('newCommentSubmited');
    }

    public function ChangeTab($new_tab)
    {
        $this->current_tab = $new_tab;
    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('initSomething');
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['search', 'pagination'])) {
            $this->resetPage();
        }
    }

    public function AddRemoveWishList($operate)
    {
        if ($operate == 'add') {
            auth()->user()->wish_lists()->create([
                'product_id' => $this->object->id,
            ]);
        } else {
            auth()->user()->wish_lists()
                ->where('product_id', $this->object->id)
                ->delete();
        }

        $this->dispatchBrowserEvent('wishlistStatusUpdated', ['type' => $operate]);
    }

    //

    public function render()
    {
        $data = [
            'colors' => Color::limit(3)->get(),
            'comments' => $this->object->comments()->where('status', 'approved')->with(['user']),
            'wish_lists' => $this->object->wish_lists()->get(),
            'top_features' => $this->object->product_features()->whereIn('place', ['up', 'both'])->with('feature')->get(),
            'bottom_features' => $this->object->product_features()->whereIn('place', ['down', 'both'])->with('feature')->get(),
            'may_like_products' => Product::ActiveProducts()->where('brand_id', $this->object->brand_id)->get(),
            'related_products' => Product::ActiveProducts()->where('category_id', $this->object->category_id)->get(),
        ];

        return view('product::livewire.pages.front.product-detail-page', $data);
    }
}
