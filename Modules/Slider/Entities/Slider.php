<?php

namespace Modules\Slider\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'image',
        'url',
        'priority',
    ];

    protected $search_fields  = [
        'title',
        'url',
    ];

    protected static function newFactory()
    {
        return \Modules\Slider\Database\factories\SliderFactory::new();
    }
}
