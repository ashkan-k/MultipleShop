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

    protected static function newFactory()
    {
        return \Modules\Poster\Database\factories\PosterFactory::new();
    }
}
