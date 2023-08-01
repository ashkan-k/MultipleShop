<?php

namespace Modules\Order\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Feature;

class OrderFeature extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'order_id',
        'feature_id',
        'feature_value'
    ];

    protected $search_fields  = [
        'feature_value',
    ];

    protected $filter_fields = [
        'order_id',
        'feature_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\CartFactory::new();
    }

    //

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

}
