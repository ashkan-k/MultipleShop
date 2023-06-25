<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Product extends Model
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
        return \Modules\Product\Database\factories\ProductFactory::new();
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'product_features');
    }
}
