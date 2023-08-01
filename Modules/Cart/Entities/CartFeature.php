<?php

namespace Modules\Cart\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartFeature extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'cart_id',
        'feature_id',
        'feature_value'
    ];

    protected $search_fields  = [
        'feature_value',
    ];

    protected $filter_fields = [
        'cart_id',
        'feature_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\CartFactory::new();
    }

    //

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
