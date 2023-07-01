<?php

namespace Modules\Poster\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poster extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'image',
        'link',
        'location',
    ];

    protected $search_fields  = [
        'image',
        'link',
    ];

    protected $filter_fields = [
        'location',
    ];

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    public function get_location()
    {
        if ($this->location == 'top') {
            return 'بالا';
        } elseif ($this->location == 'center'){
            return 'وسط';
        }
        return 'پایین';
    }

    public function get_location_class()
    {
        if ($this->location == 'top') {
            return 'success';
        } elseif ($this->location == 'center'){
            return 'warning';
        }
        return 'danger';
    }

    protected static function newFactory()
    {
        return \Modules\Poster\Database\factories\PosterFactory::new();
    }
}
