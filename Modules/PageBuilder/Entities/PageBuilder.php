<?php

namespace Modules\PageBuilder\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PageBuilder extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'body',
        'image',
        'is_active',
    ];

    protected $search_fields = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'body',
    ];

    public function save(array $options = [])
    {
        if (!$this->slug) {
            $this->slug = $this->title;
        }
        $this->slug = Slugify($this->slug);

        if (!$this->en_slug) {
            $this->en_slug = $this->en_title;
        }
        $this->en_slug = Slugify($this->en_slug);

        try {
            $saved = parent::save($options);
        } catch (\Exception $exception) {
            $this->slug = Str::random(20);
            $saved = parent::save($options);
        }
        return $saved;
    }

    public function get_title($lang)
    {
        return $lang == 'fa' ? $this->title : $this->en_title;
    }

    public function get_slug($lang)
    {
        $slug = $this->slug;

        if ($lang != 'fa') {
            $slug = $this->en_slug;
        }

        return $slug ?: '---';
    }

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function scopeFindBySlug($query, $lang, $slug)
    {
        if ($lang == 'fa') {
            return $query->where('slug', $slug)->where('is_active', 1)->firstOrFail();
        }
        return $query->where('en_slug', $slug)->where('is_active', 1)->firstOrFail();
    }

    protected static function newFactory()
    {
        return \Modules\PageBuilder\Database\factories\PageBuilderFactory::new();
    }
}
