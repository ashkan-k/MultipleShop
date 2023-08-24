<?php

namespace Modules\Ticket\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Ticket extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_id',
        'ticket_category_id',
        'title',
        'text',
        'file',
        'status',
        'ticket_number',
        'is_read',
    ];

    protected $search_fields = [
        'title',
        'text',
        'ticket_number',
        'user.first_name',
        'user.last_name',
        'user.phone',
        'user.email',
        'user.postal_code',
        'user.username',
        'category.title',
    ];

    protected $filter_fields = [
        'user_id',
        'ticket_category_id',
        'status',
    ];

    public function get_status()
    {
        if ($this->status == 'waiting') {
            return 'در انتظار';
        } elseif ($this->status == 'answered') {
            return 'پاسخ داده شده';
        }
        return 'بسته';
    }

    public function get_status_class()
    {
        if ($this->status == 'waiting') {
            return 'warning';
        } elseif ($this->status == 'answered') {
            return 'success';
        }
        return 'danger';
    }

    public function get_file()
    {
        return $this->file ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    protected static function newFactory()
    {
        return \Modules\Ticket\Database\factories\TicketFactory::new();
    }

    public function scopeChangeStatus($query, $new_status)
    {
        $query->update(['status' => $new_status]);
    }

    public function scopeFindByTicketNumber($query, $ticket_number)
    {
        return $query->where('ticket_number', $ticket_number)->firstOrFail();
    }

    public function save(array $options = [])
    {
        if (!$this->ticket_number) {
            $last_ticket = Ticket::latest()->first();
            if ($last_ticket) {
                $this->ticket_number = intval($last_ticket->ticket_number) + 1;
            } else {
                $this->ticket_number = 10000;
            }
        }

        return parent::save($options);
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(TicketCategory::class, 'ticket_category_id');
    }

    public function answers()
    {
        return $this->hasMany(TicketAnswer::class);
    }
}
