<?php

namespace Modules\Order\Entities;

use App\Http\Traits\Helpers;
use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;

class OrderProduct extends Model
{
    use HasFactory;
    use Searchable;
    use Helpers;

    protected $fillable = [
        'order_id', 'product_id',
        'size_id', 'color_id', 'count',
    ];

    protected $search_fields = [
        'order.order_number',
        'product.title',
        'size.title',
        'color.title',
        'count',
    ];

    protected $filter_fields = [
        'order_id',
        'product_id',
        'size_id',
        'color_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
    }

    //

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
