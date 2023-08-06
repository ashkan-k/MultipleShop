<?php

namespace Modules\Blog\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Modules\Comment\Entities\Comment;
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
        "text", "en_text", "status", "schema_type",
        "like_count", "view_count", "image", "user_id", "category_id"
    ];

    protected $search_fields = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'text',
        'en_text',
        'user.first_name',
        'user.last_name',
        'user.username',
        'category.title',
    ];

    protected $filter_fields = [
        'status',
    ];

    public static $SCHEMA_TYPES = [
        'default' => 'پیشفرض (انتخاب شده در تنظیمات)',
        'generic_article' => 'مقاله', 'news_article' => 'مقاله خبری',
        'blog_posting' => 'پست وبلاگ', 'scholarly_article' => 'مقاله علمی',
        'tech_article' => 'مقاله آموزشی', 'report' => 'گزارش',
        'social_media' => 'نوشته رسانه اجتماعی', 'live_blog' => 'ارسال کننده زنده بلاگ',
        'satirical_article' => 'مقاله طنز', 'medical_scholarly' => 'مقاله علمی پزشکی'
    ];

    public function get_schema_type()
    {
        return $this->schema_type ? self::$SCHEMA_TYPES[$this->schema_type] : '---';
    }

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
        return 'بسته';
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

    public function get_title($lang)
    {
        return $lang == 'fa' ? $this->title : $this->en_title;
    }

    public function get_text($lang)
    {
        return $lang == 'fa' ? $this->text : $this->en_text;
    }

    public function get_slug($lang)
    {
        $slug = $this->slug;

        if ($lang != 'fa'){
            $slug = $this->en_slug;
        }

        return $slug ?: '---';
    }

    public function scopeChangeStatus($query, $new_status)
    {
        $query->update(['status' => $new_status]);
    }

    public function scopeActiveBlogs($query)
    {
        return $query->where('status', 'publish');
    }

    public function scopeFindBySlug($query, $lang, $slug)
    {
        if ($lang == 'fa') {
            return $query->where('slug', $slug)->firstOrFail();
        }
        return $query->where('en_slug', $slug)->firstOrFail();
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

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
