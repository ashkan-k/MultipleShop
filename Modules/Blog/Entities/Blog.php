<?php

namespace Modules\Blog\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Modules\User\Entities\User;

class Blog extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        "text", "status",
        "like_count", "view_count", "image", "user_id", "category_id"
    ];

    protected $search_fields = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'user.first_name',
        'user.last_name',
        'user.username',
        'category.title',
    ];

    protected $filter_fields = [
        'status',
    ];

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function get_status()
    {
        if ($this->status == 'draft') {
            return 'پیش نویس';
        } elseif ($this->status == 'publish') {
            return 'انتشار';
        }
        return 'پایان انتشار';
    }

    public function get_status_class()
    {
        if ($this->status == 'draft') {
            return 'warning';
        } elseif ($this->status == 'publish') {
            return 'success';
        }
        return 'danger';
    }

    public function save(array $options = [])
    {
        if (!$this->user_id) {
            $this->user_id = auth()->id();
        }

        if (!$this->slug){
            $this->slug = $this->title;
        }
        $this->slug = Slugify($this->slug);

        if (!$this->en_slug){
            $this->en_slug = $this->en_title;
        }
        $this->en_slug = Slugify($this->en_slug);

        try {
            $saved =  parent::save($options);
        }catch (\Exception $exception){
            $this->slug = Str::random(20);
            $saved =  parent::save($options);
        }
        return $saved;
    }

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogFactory::new();
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
