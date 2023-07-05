<?php

namespace Modules\Wishlist\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class Wishlist extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    protected $search_fields  = [
        'user.first_name',
        'user.last_name',
        'user.username',
        'product.title',
    ];

    protected $filter_fields = [
        'user_id',
        'product_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Wishlist\Database\factories\WishlistFactory::new();
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
