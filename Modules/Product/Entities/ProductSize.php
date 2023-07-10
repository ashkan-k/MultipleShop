<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSize extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'product_id',
        'size_id',
    ];

    protected $search_fields  = [
        'product.title',
        'size.title',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFeatureFactory::new();
    }

    //

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
