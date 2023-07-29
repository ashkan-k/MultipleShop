<?php

namespace Modules\Setting\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['key', 'value', 'is_active'];

    protected $search_fields  = [
        'key',
        'value',
    ];

    public static $DynamicItems = [
        'lang' => [
            'key' => 'زبان اصلی سیستم',
            'value' => 'ssss',
        ],
    ];

    public static function GetDynamicItem($key)
    {
        return self::$DynamicItems[$key];
    }

    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SettingFactory::new();
    }
}
