<?php

namespace Modules\Comment\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class CommentPoint extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        "type", "comment_id", "user_id",
    ];

    protected $search_fields = [
        'comment.title',
        'comment.body',
        'user.first_name',
        'user.last_name',
        'user.username',
        "type",
    ];

    protected $filter_fields = [
        'comment_id',
        'user_id',
    ];

    public function get_type()
    {
        if ($this->type == 'positive') {
            return 'مثبت';
        }
        return 'منفی';
    }

    public function get_type_class()
    {
        if ($this->type == 'positive') {
            return 'success';
        }
        return 'danger';
    }

    protected static function newFactory()
    {
        return \Modules\Comment\Database\factories\CommentPointFactory::new();
    }

    public function scopeChangeStatus($query, $new_type)
    {
        $query->update(['type' => $new_type]);
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
