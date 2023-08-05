<?php

namespace Modules\Schema\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schema extends Model
{
    use HasFactory;

    protected $fillable = [
        'schema_id',
        'schema_type',
        'type',
    ];

    protected static function newFactory()
    {
        return \Modules\Schema\Database\factories\SchemaFactory::new();
    }

    //

    //Polymorphic
    public function schemable()
    {
        return $this->morphTo();
    }
}
