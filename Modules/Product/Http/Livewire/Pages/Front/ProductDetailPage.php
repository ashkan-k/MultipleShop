<?php

namespace Modules\Product\Http\Livewire\Pages\Front;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Comment\Entities\Comment;
use Modules\Comment\Http\Requests\CommentRequest;
use Modules\Email\Emails\SendEmailMail;
use Modules\Email\Helpers\email_helpers;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Feature;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\Setting\Entities\Setting;

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
    public $required_feature_options = [];

    public $title;
    public $body;
    public $negative_points;
    public $positive_points;
    public $suggest_score;
    public $selected_features = [];

    public $is_loading = false;

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

        $message = [
            'ثبت نظر جدید',
            sprintf(email_helpers::$EMAIL_PATTERNS['admin_comment_submit'], 'محصول', $this->object->title, auth()->user()->full_name()),
            route('comments.index') . '?status=pending',
        ];
        $title = __('Comment Submited');
        $template = 'email::emails/comment/comment_notification';

        $admin_email = Setting::where('key', 'email')->first()->value;

        try {
            Mail::to(strip_tags($admin_email))->send(new SendEmailMail($admin_email, $title, $message, $template));
        } catch (\Exception $exception) {
        }

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

            $key = array_search($filter, $this->selected_features["$feature_id"]);
            if ($key !== false) {
                unset($this->selected_features["$feature_id"][$key]);
            } else {
                $this->selected_features["$feature_id"][] = $filter;
            }

        } else {
            $this->selected_features["$feature_id"] = [];
            $this->selected_features["$feature_id"] = $filter;
        }
    }

    public function AddRemoveCart($type)
    {
        $this->is_loading = true;

        if ($type == 'add') {

            if ($this->cart_count < 1) {
                $this->dispatchBrowserEvent('addToCartError', ['message' => __('The number of orders must be at least one!')]);
                  $this->is_loading = false;
                return;
            }
            if ($this->cart_count > $this->object->quantity) {
                $this->dispatchBrowserEvent('addToCartError', ['message' => __('The order quantity is more than the available quantity!')]);
                  $this->is_loading = false;
                return;
            }

            foreach ($this->required_feature_options as $option_id => $option_title) {
                if (!isset($this->selected_features[$option_id]) || !$this->selected_features[$option_id]) {
                    $this->dispatchBrowserEvent('addToCartError', ['message' => __('validation.required', ['attribute' => $option_title])]);
                      $this->is_loading = false;
                    return;
                }
            }

            $temp_features = [];
            foreach ($this->selected_features as $key => $value) {
                if ($value) {
                    $temp_features[] = ['feature_id' => $key, 'feature_value' => is_array($value) ? implode('،', $value) : $value];
                }
            }

            $cart = auth()->user()->carts()->create([
                'product_id' => $this->object->id,
                'color_id' => $this->cart_color,
                'size_id' => $this->cart_size,
                'count' => $this->cart_count,
            ]);

            $cart->features()->createMany($temp_features);


            $this->object->decrement('quantity', $this->cart_count);
            $this->cart_count = 1;
            $this->cart_color = $this->cart_size = null;
            $this->selected_features = [];

        } else {

            if ($this->user_cart) {
                $this->object->increment('quantity', $this->user_cart->count);
                $this->user_cart->delete();
            }

        }

        $this->is_loading = false;
        $this->dispatchBrowserEvent('cartStatusUpdated', ['cart_count' => auth()->user()->carts()->count()]);
    }

    //

    public function render()
    {
        $data = [
//            'colors' => Color::whereIn('id', $this->object->colors_pluck_id())->get(),
//            'sizes' => Size::whereIn('id', $this->object->sizes_pluck_id())->get(),

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

        $data['option_features'] = $this->object->category ? $this->object->category->features()
            ->where('is_use_cart', 1)->get() : [];

        $this->required_feature_options = $data['option_features']->where('is_use_cart_required', 1)->pluck('title', 'id')->toArray();

        if (auth()->check()) {
            $this->user_cart = auth()->user()->carts()->where('product_id', $this->object->id)->first();
        }

        return view('product::livewire.pages.front.product-detail-page', $data);
    }
}
