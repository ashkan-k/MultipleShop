<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'image',
        'parent_id',
        'is_special',
        'is_best',
        'icon_name',
    ];

    protected $search_fields  = [
        'title',
        'slug',
        'en_title',
        'en_slug',
        'parent.title',
    ];

    protected $filter_fields = [
        'is_special',
        'parent_id',
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

        if (!$this->is_special){
            $this->icon_name = null;
        }

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

    public function get_icon()
    {
        return $this->icon_name ?? 'fa fa-list';
    }

    public function get_type()
    {
        return $this->is_special ? 'ویژه' : 'معمولی';
    }

    public function get_type_class()
    {
        return $this->is_special ? 'danger' : 'success';
    }

    public function get_slug($lang)
    {
        return $lang == 'fa' ? $this->slug : $this->en_slug;
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\CategoryFactory::new();
    }

    public static function GetFontAwesomeIcons()
    {
        $icons = File::get(base_path() . '/Modules/Product/Helpers/font-awesome-icons.txt');

        $icons = str_replace("\n", '', $icons);
        $icons = str_replace("'", '', $icons);

        $icons = explode(',', $icons);
        array_pop($icons);

        return $icons;
    }

    //

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
