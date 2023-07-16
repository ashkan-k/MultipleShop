<?php

namespace Modules\Order\Entities;

use App\Http\Traits\Helpers;
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
    use Helpers;

    protected $fillable = [
        'user_id', 'payment_id',
        'first_name', 'last_name', 'phone',
        'address', 'postal_code', 'payment_type',
        'status',
        'order_number',
        'amount',
    ];

    protected $search_fields = [
        'user.first_name',
        'user.last_name',
        'user.username',
        'first_name',
        'last_name',
        'phone',
        'address',
        'postal_code',
        'order_number',
        'amount',
    ];

    protected $filter_fields = [
        'user_id',
        'status',
        'payment_type',
    ];

    public function save(array $options = [])
    {
        if (!$this->order_number) {
            $this->order_number = $this->RandomNumber(8);
        }
        return parent::save($options);
    }

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

    public function scopeChangePaymentType($query, $new_payment_type)
    {
        $query->update(['payment_type' => $new_payment_type]);
    }

    public function scopeChangeStatus($query, $new_status)
    {
        $query->update(['status' => $new_status]);
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
