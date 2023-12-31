<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
    ];

    protected $search_fields  = [
        'title',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\SizeFactory::new();
    }

    //

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_sizes');
    }
}
