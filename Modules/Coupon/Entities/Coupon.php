<?php

namespace Modules\Coupon\Entities;

use App\Http\Traits\Searchable;
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

    protected $search_fields  = [
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

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
