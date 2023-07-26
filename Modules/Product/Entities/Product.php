<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Helpers;
use App\Http\Traits\Searchable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Modules\Cart\Entities\Cart;
use Modules\Comment\Entities\Comment;
use Modules\Order\Entities\Order;
use Modules\User\Entities\User;
use Modules\Wishlist\Entities\Wishlist;

class Product extends Model
{
    use HasFactory;
    use Searchable;
    use Helpers;

    protected $fillable = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'is_active',
        'description',
        'view_count',
        'image',
        'price',
        'quantity',
        'discount_price',
        'discount_start_date',
        'discount_end_date',
        'is_special',
        'user_id',
        'category_id',
//        'color_id',
//        'size_id',
        'brand_id',
        'barcode',
    ];

    protected $search_fields = [
        'title',
        'en_title',
        'en_slug',
        'description',
        'price',
        'quantity',
        'barcode',
        'user.first_name',
        'user.last_name',
        'user.username',
        'user.phone',
        'category.title',
        'color.title',
        'size.title',
        'brand.title',
    ];

    protected $filter_fields = [
        'is_active',
        'user_id',
        'category_id',
        'brand_id',
    ];

    protected $appends = [
        'get_image'
    ];

    public function getGetImageAttribute()
    {
        return $this->get_image();
    }

    public function save(array $options = [])
    {
        if (!$this->barcode) {
            $this->barcode = $this->RandomNumber(8);
        }

        if (!$this->slug) {
            $this->slug = $this->title;
        }
        $this->slug = Slugify($this->slug);

        if (!$this->en_slug) {
            $this->en_slug = $this->en_title;
        }
        $this->en_slug = Slugify($this->en_slug);

        try {
            $saved = parent::save($options);
        } catch (\Exception $exception) {
            $this->slug = Str::random(20);
            $saved = parent::save($options);
        }
        return $saved;
    }

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function get_status()
    {
        if ($this->is_active) {
            return 'فعال';
        }
        return 'غیرفعال';
    }

    public function get_status_class()
    {
        if ($this->is_active) {
            return 'success';
        }
        return 'danger';
    }

    public function get_special()
    {
        if ($this->is_special) {
            return 'بله';
        }
        return 'خیر';
    }

    public function get_special_class()
    {
        if ($this->is_special) {
            return 'success';
        }
        return 'danger';
    }

    public function calculate_discount_percent()
    {
        if (!$this->discount_price) {
            return 0;
        }

        $today = Verta::parse(\verta())->setTime(0, 0, 0, 0);
        $start_date = Verta::parse($this->discount_start_date);
        $end_date = Verta::parse($this->discount_end_date);

        if (!$today->gte($start_date) || !$today->lte($end_date)) {
            return 0;
        }

        $discount_percent = round(($this->discount_price * 100) / $this->price);
        return $discount_percent;
    }

    public function get_title($lang)
    {
        return $lang == 'fa' ? $this->title : $this->en_title;
    }

    public function get_price()
    {
        return $this->calculate_discount_percent() ? $this->discount_price : $this->price;
    }

    public function get_slug($lang)
    {
        $slug = $this->slug;

        if ($lang != 'fa'){
            $slug = $this->en_slug;
        }

        return $slug ?: '---';
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }

    public function scopeActiveProducts($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeFindBySlug($query, $lang, $slug)
    {
        if ($lang == 'fa') {
            return $query->where('slug', $slug)->firstOrFail();
        }
        return $query->where('en_slug', $slug)->firstOrFail();
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'product_features');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function colors_pluck_id()
    {
        return $this->belongsToMany(Color::class, 'product_colors')->pluck('color_id')->toArray();
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function sizes_pluck_id()
    {
        return $this->belongsToMany(Size::class, 'product_sizes')->pluck('size_id')->toArray();
    }

    public function product_features()
    {
        return $this->hasMany(ProductFeature::class);
    }

    public function feature_values()
    {
        return ProductFeature::where('product_id', $this->id)->pluck('value')->toArray();
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function wish_lists()
    {
        return $this->hasMany(WishList::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
