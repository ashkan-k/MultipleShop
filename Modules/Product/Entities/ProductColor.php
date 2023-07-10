<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'product_id',
        'color_id',
    ];

    protected $search_fields  = [
        'product.title',
        'color.title',
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

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
