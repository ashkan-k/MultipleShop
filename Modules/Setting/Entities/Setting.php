<?php

namespace Modules\Setting\Entities;

use App\Http\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PageBuilder\Entities\PageBuilder;

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
            'title' => 'زبان اصلی سیستم',
            'key' => 'default_system_lang',
            'has_active_status' => true,
            'field' => [
                'type' => 'select',
                'options' => [
                    'fa' => 'فارسی',
                    'en' => 'انگلیسی',
                ],
            ],
        ],

        'comment_terms_page' => [
            'title' => 'صفحه مقررات ثبت نظر',
            'key' => 'comment_terms_page',
            'has_active_status' => false,
            'field' => [
                'type' => 'select',
                'options' => [],
            ],
        ],
    ];

    public static function GetDynamicItem($key, $filed_options = [])
    {
        $item = self::$DynamicItems[$key];
        if ($filed_options){
            $item['field']['options'] = $filed_options;
        }
        return $item;
    }

    //

    private function ChangeDefaultSystemLocale()
    {
        app()->setLocale($this->value);
        session()->put('current_lang', $this->value);
    }

    public function save(array $options = [])
    {
        if ($this->key == 'default_system_lang' and $this->is_active){
            $this->ChangeDefaultSystemLocale();
        }
        return parent::save($options);
    }

    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SettingFactory::new();
    }

    public function scopeActiveProducts($query)
    {
        return $query->where('is_active', 1);
    }
}
