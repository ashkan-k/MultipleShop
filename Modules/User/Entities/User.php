<?php
namespace Modules\User\Entities;


use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

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
    ];

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

    public function fullname()
    {
        if ($this->frist_name && $this->last_name) {
            return $this->frist_name . ' ' . $this->last_name;
        }
        if ($this->username){
            return $this->username;
        }

        return $this->email;
    }

    public function set_password($new_password)
    {
        $this->update(['password' => Hash::make($new_password)]);
    }

    public function get_avatar()
    {
        return $this->avatar ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function get_level()
    {
        if ($this->level == 'user') {
            return 'کاربر';
        } elseif ($this->level == 'staff') {
            return 'کارمند';
        } elseif ($this->level == 'admin') {
            return 'مدیر';
        }
        return 'مدیر رستوران';
    }

    public function get_level_class()
    {
        if ($this->level == 'user') {
            return 'info';
        } elseif ($this->level == 'staff') {
            return 'warning';
        } elseif ($this->level == 'admin') {
            return 'success';
        }
        return 'danger';
    }
}
