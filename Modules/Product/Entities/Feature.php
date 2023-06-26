<?php

namespace Modules\Product\Entities;

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
    ];

    protected $search_fields  = [
        'title',
        'category.title',
    ];

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
