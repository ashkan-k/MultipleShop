<?php

namespace Modules\User\Entities;


use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Modules\Blog\Entities\Blog;
use Modules\Cart\Entities\Cart;
use Modules\Comment\Entities\Comment;
use Modules\Coupon\Entities\Coupon;
use Modules\Order\Entities\Order;
use Modules\Payment\Entities\Payment;
use Modules\Product\Entities\Product;
use Modules\Ticket\Entities\Ticket;
use Modules\Ticket\Entities\TicketAnswer;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'username',
        'phone',
        'address',
        'postal_code',
        'avatar',
        'is_admin',
        'is_staff',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $search_fields = [
        'first_name',
        'last_name',
        'username',
        'email',
        'phone',
        'address',
        'postal_code',
    ];

    protected $appends = [
        'full_name'
    ];

    public function getFullNameAttribute()
    {
        return $this->full_name();
    }

    public function scopeFilter($query, $request)
    {
        $is_active = $request->is_active;
        $role = $request->role;

        if ($is_active == '1') {
            $query->WhereNotNull('email_verified_at');
        } elseif ($is_active == '0') {
            $query->WhereNull('email_verified_at');
        }

        if ($role == 'admin'){
            $query->Where('is_admin', true);
        } elseif ($role == 'staff') {
            $query->Where('is_staff', true)->where('is_admin', false);
        } elseif ($role == 'user') {
            $query->Where('is_staff', false)->where('is_admin', false);
        }

        return $query;
    }

    public function scopeChangeActiveStatus($query, $new_status)
    {
        if ($new_status == true){
            $query->update(['email_verified_at' => now()]);
        }else{
            $query->update(['email_verified_at' => null]);
        }
    }

    public function scopeChangeRole($query, $new_role)
    {
        if ($new_role == 'admin'){
            $query->update(['is_admin' => true]);
        }elseif ($new_role == 'staff'){
            $query->update(['is_staff' => true]);
        }
        else{
            $query->update(['is_staff' => false, 'is_admin' => false]);
        }
    }

    public function save(array $options = [])
    {
        if ($this->is_admin)
            $this->is_staff = true;
        return parent::save($options);
    }

    protected static function newFactory()
    {
        return \Modules\User\Database\factories\UserFactory::new();
    }

    public function is_active()
    {
        return $this->email_verified_at ? 1 : 0;
    }

    public function is_staff()
    {
        return $this->is_admin || $this->is_staff;
    }

    public function full_name()
    {
        if ($this->frist_name && $this->last_name) {
            return $this->frist_name . ' ' . $this->last_name;
        }
        if ($this->username) {
            return $this->username;
        }

        return $this->email;
    }

    public function set_password($new_password)
    {
        $this->password = Hash::make($new_password);
        $this->save();
    }

    public function get_avatar()
    {
        return $this->avatar ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function get_level()
    {
        if ($this->is_admin) {
            return 'مدیر';
        } elseif ($this->is_staff) {
            return 'کارمند';
        }
        return 'کاربر عادی';
    }

    public function get_level_class()
    {
        if ($this->is_admin) {
            return 'danger';
        } elseif ($this->is_staff) {
            return 'warning';
        }
        return 'success';
    }

    //

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticket_answeres()
    {
        return $this->hasMany(TicketAnswer::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
