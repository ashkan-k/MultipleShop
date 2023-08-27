<?php

namespace Modules\Delivery\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryMethod extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'amount',
    ];

    protected $search_fields = [
        'title',
        'amount',
    ];

    protected static function newFactory()
    {
        return \Modules\Delivery\Database\factories\DeliveryMethodFactory::new();
    }
}
