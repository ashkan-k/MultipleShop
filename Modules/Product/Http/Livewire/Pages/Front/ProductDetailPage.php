<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Modules\Comment\Entities\Comment;
use Modules\Comment\Http\Requests\CommentRequest;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;

class ProductDetailPage extends Component
{
    use WithPagination;

    public $website_title = '';
    public $lang;
    public $current_tab = 'review';

    public $object;
    public $cart_count = 1;
    public $cart_color;
    public $cart_size;

    public $title;
    public $body;
    public $negative_points;
    public $positive_points;
    public $suggest_score;
    public $selected_features = [];

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

    protected function rules()
    {
        return (new CommentRequest())->rules();
    }

    public function SubmitNewComment($parent_id = null)
    {
        $data = $this->validate();

        $data['parent_id'] = $parent_id;
        $data['commentable_id'] = $this->object->id;
        $data['commentable_type'] = get_class($this->object);
        $data['suggest_score'] = $data['suggest_score'] ?: 'no_idea';

        auth()->user()->comments()->create($data);

        $this->title = $this->body = $this->negative_points = $this->positive_points = $this->suggest_score = null;

        $this->dispatchBrowserEvent('newCommentSubmited');
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

    public function SubmitCommentPoint(Comment $comment, $type)
    {
        auth()->user()->comment_points()->where('comment_id', $comment->id)->delete();
        auth()->user()->comment_points()->create([
            'comment_id' => $comment->id,
            'type' => $type,
        ]);
    }

    public function AddNewFeatureItem($feature_id, $feature_type, $filter)
    {
        if ($feature_type == 'checkbox') {
            if (!isset($this->selected_features["$feature_id"])) {
                $this->selected_features["$feature_id"] = [];
            }
            $this->selected_features["$feature_id"][] = $filter;
        } else {
            $this->selected_features["$feature_id"] = [];
            $this->selected_features["$feature_id"] = $filter;
        }
    }

    public function AddRemoveCart($type)
    {
        if ($type == 'add') {

            if ($this->cart_count < 1) {
                $this->dispatchBrowserEvent('addToCartError', ['message' => __('The number of orders must be at least one!')]);
                return;
            }
            if ($this->cart_count > $this->object->quantity) {
                $this->dispatchBrowserEvent('addToCartError', ['message' => __('The order quantity is more than the available quantity!')]);
                return;
            }

            $cart = auth()->user()->carts()->create([
                'product_id' => $this->object->id,
                'color_id' => $this->cart_color,
                'size_id' => $this->cart_size,
                'count' => $this->cart_count,
            ]);



            $this->object->decrement('quantity', $this->cart_count);
            $this->cart_count = 1;
            $this->cart_color = $this->cart_size = null;

        } else {

            if ($this->user_cart) {
                $this->object->increment('quantity', $this->user_cart->count);
                $this->user_cart->delete();
            }

        }

        $this->dispatchBrowserEvent('cartStatusUpdated', ['cart_count' => auth()->user()->carts()->count()]);
    }

    //

    public function render()
    {
        $data = [
//            'colors' => Color::whereIn('id', $this->object->colors_pluck_id())->get(),
//            'sizes' => Size::whereIn('id', $this->object->sizes_pluck_id())->get(),

            'option_features' => $this->object->category ? $this->object->category->features()
                ->where('is_use_cart', 1)->get() : [],

            'comments' => $this->object->comments()->where('status', 'approved')->withCount(array('comment_points as positive_comments_point' => function ($query) {
                $query->where('type', 'positive');
            }))->withCount(array('comment_points as negative_comments_point' => function ($query) {
                $query->where('type', 'negative');
            }))->with(['user']),

            'suggested_count' => $this->object->comments()->where('status', 'approved')->withCount(array('comment_points as positive_comments_point' => function ($query) {
                $query->where('type', 'positive');
            }))->withCount(array('comment_points as negative_comments_point' => function ($query) {
                $query->where('type', 'negative');
            }))->with(['user'])->where('suggest_score', 'suggest')->count(),

            'wish_lists' => $this->object->wish_lists()->get(),
            'top_features' => $this->object->product_features()->whereIn('place', ['up', 'both'])->with('feature')->get(),
            'bottom_features' => $this->object->product_features()->whereIn('place', ['down', 'both'])->with('feature')->get(),
            'may_like_products' => Product::ActiveProducts()->where('brand_id', $this->object->brand_id)->get(),
            'related_products' => Product::ActiveProducts()->where('category_id', $this->object->category_id)->get(),
        ];

        if (auth()->check()) {
            $this->user_cart = auth()->user()->carts()->where('product_id', $this->object->id)->first();
        }

        return view('product::livewire.pages.front.product-detail-page', $data);
    }
}
