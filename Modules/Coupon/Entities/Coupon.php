<?php

namespace Modules\Coupon\Entities;

use App\Http\Traits\Searchable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Coupon extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'code',
        'percent',
        'uses_number',
        'expiration',
        'user_id',
    ];

    protected $search_fields = [
        'code',
        'percent',
        'uses_number',
        'expiration',
        'user.first_name',
        'user.last_name',
        'user.username',
        'user.phone',
    ];

    protected $filter_fields = [
        'user_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Coupon\Database\factories\CouponFactory::new();
    }

    public static function CheckCoupon($code, $user_id)
    {
        $coupon = Coupon::where('code', $code)->first();

        if ($coupon) {
            if ($coupon->user_id && $coupon->user_id != $user_id) {
                return ['error' => __('This discount code has been set for another user!')];
            }

            if ($coupon->uses_number == 0) {
                return ['error' => __('The limit of using this discount code has ended!')];
            }

            $today = Verta::parse(\verta())->setTime(0, 0, 0, 0);
            $expire_date = Verta::parse($coupon->expiration);

            if (!$expire_date->gt($today)) {
                return ['error' => __('The entered discount code has expired!')];
            }

            return $coupon;
        }

        return ['error' => __('There is no such discount code!')];
    }

    public function CalculateCouponAmount($price)
    {
        $percent_amount = ($price * $this->percent) / 100;
        $new_price = $price - $percent_amount;
        return round($new_price);
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
