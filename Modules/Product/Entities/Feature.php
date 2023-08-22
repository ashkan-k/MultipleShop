<?php

namespace Modules\Product\Entities;

use App\Enums\EnumHelpers;
use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'category_id',
        'is_filter',
        'filter_type',
        'filter_items',
        'is_use_cart',
        'is_use_cart_required',
        'index',
    ];

    protected $search_fields  = [
        'title',
        'category.title',
    ];

    protected $appends = [
        'filter_item_names',
        'filter_type_name',
    ];

    public function getFilterItemNamesAttribute()
    {
        return $this->get_filter_item_names();
    }

    public function getFilterTypeNameAttribute()
    {
        return $this->get_filter_type();
    }

    public function save(array $options = [])
    {
        if (!$this->is_use_cart){
            $this->is_use_cart_required = 0;
        }
        if (!$this->index) {
            $index = 1;
            if ($last_obj = Feature::latest()->first()) {
                $index = $last_obj->index + 1;
            }
            $this->index = $index;
        }
        return parent::save($options);
    }

    public function get_filter_type()
    {
       if ($this->filter_type == 'checkbox'){
           return 'چک باکس';
       }elseif ($this->filter_type == 'radio'){
           return 'دکمه رادیویی';
       }elseif ($this->filter_type == 'text'){
           return 'متنی';
       }
        return 'ندارد';
    }

    public function get_filter_item_names()
    {
        return $this->filter_items ? str_replace('،', ' ,', $this->filter_items) : '---';
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\FeatureFactory::new();
    }

    //

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_features');
    }
}
