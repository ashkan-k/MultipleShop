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
        'en_slug',
        'uses_number',
        'expiration',
        'user.first_name',
        'user.last_name',
        'user.username',
        'user.phone',
    ];

    public function scopeFilter($query, $request)
    {
        $user_id = $request->user_id;
        if ($user_id) {
            $query->where('user_id', $user_id);
        }

        return $query;
    }

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
