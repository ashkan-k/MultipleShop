<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
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
        return \Modules\Product\Database\factories\BrandFactory::new();
    }

    //

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
