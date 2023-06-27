<?php

namespace Modules\Blog\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'blog_categories';

    protected $fillable = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'image',
    ];

    protected $search_fields  = [
        'title',
        'slug',
        'en_title',
        'en_slug',
    ];

    public function save(array $options = [])
    {
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

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogCategoryFactory::new();
    }

    //

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
