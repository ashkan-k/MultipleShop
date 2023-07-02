<?php

namespace Modules\Order\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Payment\Entities\Payment;
use Modules\Product\Entities\Color;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Size;
use Modules\User\Entities\User;

class Order extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id', 'product_id', 'payment_id',
        'size_id', 'color_id', 'count',
        'first_name', 'last_name', 'phone',
        'address', 'postal_code', 'payment_type',
        'status',
    ];

    protected $search_fields = [
        'user.first_name',
        'user.last_name',
        'user.username',
        'product.title',
        'size.title',
        'color.title',
        'count',
        'first_name',
        'last_name',
        'phone',
        'address',
        'postal_code',
    ];

    protected $filter_fields = [
        'user_id',
        'product_id',
        'size_id',
        'color_id',
        'status',
        'payment_type',
    ];

    public function get_status()
    {
        if ($this->status == 'sending') {
            return 'درحال ارسال';
        } elseif ($this->status == 'posted') {
            return 'ارسال شده';
        }
        return 'تحویل داده شده';
    }

    public function get_status_class()
    {
        if ($this->status == 'sending') {
            return 'warning';
        } elseif ($this->status == 'posted') {
            return 'danger';
        }
        return 'success';
    }

    public function get_payment_type()
    {
        if ($this->payment_type == 'online') {
            return 'آنلاین';
        }
        return 'نقدی';
    }

    public function get_payment_type_class()
    {
        if ($this->payment_type == 'online') {
            return 'success';
        }
        return 'danger';
    }

    protected static function newFactory()
    {
        return \Modules\Order\Database\factories\OrderFactory::new();
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

    public function payment()
    {
        return $this->belongsTo(Payment::class);
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
