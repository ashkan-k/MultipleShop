<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Modules\User\Entities\User;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
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
    ];

    protected $search_fields  = [
        'title',
        'description',
        'price',
        'user.first_name',
        'user.last_name',
        'user.username',
        'user.phone',
        'category.title',
    ];

    public function save(array $options = [])
    {
        if (!$this->slug){
            $this->slug = Str::slug($this->title);
        }
        $this->slug = Str::slug($this->slug);
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

    public function scopeFilter($query, $request)
    {
        $category_id = $request->category_id;
        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $is_active = $request->is_active;
        if ($is_active) {
            $query->where('is_active', $is_active);
        }

        return $query;
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
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

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'product_features');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
