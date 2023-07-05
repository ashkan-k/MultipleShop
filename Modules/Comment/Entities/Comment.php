<?php

namespace Modules\Comment\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Entities\Blog;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class Comment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        "title", "body", "like_count", "center_id",
        "user_id", "status", "commentable_type",
        "negative_points", "positive_points", "suggest_score",
        "commentable_id"
    ];

    protected $search_fields = [
        'title',
        'body',
        'user.first_name',
        'user.last_name',
        'user.username',
        "negative_points",
        "positive_points",
        "suggest_score",
    ];

    protected $filter_fields = [
        'status',
        'user_id',
    ];

    public function get_status()
    {
        if ($this->status == 'pending') {
            return 'در انتظار';
        } elseif ($this->status == 'approved') {
            return 'تایید شده';
        }
        return 'رد شده';
    }

    public function get_suggest_score()
    {
        if ($this->suggest_score == 'suggest') {
            return 'پیشنهاد میکنم';
        } elseif ($this->suggest_score == 'not_suggest') {
            return 'پیشنهاد نمیکنم';
        }
        return 'نظری ندارم';
    }

    public function get_status_class()
    {
        if ($this->status == 'pending') {
            return 'warning';
        } elseif ($this->status == 'approved') {
            return 'success';
        }
        return 'danger';
    }

    protected static function newFactory()
    {
        return \Modules\Comment\Database\factories\CommentFactory::new();
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

    //Polymorphic
    public function commentable()
    {
        return $this->morphTo();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'commentable_id')
            ->where('commentable_type', Product::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'commentable_id')
            ->where('commentable_type', Blog::class);
    }
}
