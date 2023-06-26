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
    ];

    protected $search_fields  = [
        'title',
        'category.title',
    ];

    public function save(array $options = [])
    {
        return parent::save($options);
    }

    public function get_filter_type()
    {
       if ($this->filter_type == 'checkbox'){
           return 'چک باکس';
       }elseif ($this->filter_type == 'radio'){
           return 'رادیو باتن';
       }elseif ($this->filter_type == 'text'){
           return 'متنی';
       }
        return 'ندارد';
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
