<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductFeature extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'value',
        'product_id',
        'feature_id',
        'place',
    ];

    protected $search_fields  = [
        'value',
        'product.title',
        'feature.title',
    ];

    protected $appends = [
        'get_place'
    ];

    public function getGetPlaceAttribute()
    {
       return $this->get_place();
    }

    public function get_place()
    {
        if ($this->place == 'up'){
            return 'بالا';
        }elseif ($this->place == 'down'){
            return 'پایین';
        }
        return 'هر دو';
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFeatureFactory::new();
    }

    //

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
