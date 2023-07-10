<?php

namespace Modules\Cart\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class Cart extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'count',
        'user_id',
        'product_id',
        'color_id',
    ];

    protected $search_fields  = [
        'count',
        'user.first_name',
        'user.last_name',
        'user.username',
        'product.title',
        'color.title',
    ];

    protected $filter_fields = [
        'user_id',
        'product_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\CartFactory::new();
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

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
