<?php

namespace Modules\Product\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureItem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'feature_id',
    ];

    protected $search_fields  = [
        'title',
        'feature.title',
    ];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\FeatureItemFactory::new();
    }

    //

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
