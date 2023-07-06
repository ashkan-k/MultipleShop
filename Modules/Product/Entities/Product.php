<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Modules\Cart\Entities\Cart;
use Modules\Order\Entities\Order;
use Modules\User\Entities\User;

class Product extends Model
{
    use HasFactory;
    use Searchable;

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
        'discount_price',
        'discount_start_date',
        'discount_end_date',
        'is_special',
        'user_id',
        'category_id',
        'color_id',
        'size_id',
        'brand_id',
    ];

    protected $search_fields  = [
        'title',
        'en_title',
        'en_slug',
        'description',
        'price',
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
        if (!$this->slug){
            $this->slug = $this->title;
        }
        $this->slug = Slugify($this->slug);

        if (!$this->en_slug){
            $this->en_slug = $this->en_title;
        }
        $this->en_slug = Slugify($this->en_slug);

        try {
            $saved =  parent::save($options);
        }catch (\Exception $exception){
            $this->slug = Str::random(20);
            $saved =  parent::save($options);
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

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }

    public function scopeActiveProducts($query)
    {
        return $query->where('is_active', 1);
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

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
