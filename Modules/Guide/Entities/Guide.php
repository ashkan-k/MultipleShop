<?php

namespace Modules\Guide\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guide extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'en_title',
        'link',
        'image',
    ];

    protected $search_fields  = [
        'title',
        'en_title',
        'link',
        'image',
    ];

    public function get_image()
    {
        return $this->image ?? 'https://www.hardiagedcare.com.au/wp-content/uploads/2019/02/default-avatar-profile-icon-vector-18942381.jpg';
    }

    protected static function newFactory()
    {
        return \Modules\Guide\Database\factories\GuideFactory::new();
    }
}
