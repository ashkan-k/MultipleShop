<?php

namespace Modules\Setting\Helpers;

class SettingHelpers
{
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

        'footer_copyright' => [
            [
                'title' => 'متن فارسی کپی رایت',
                'key' => 'footer_copyright',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی کپی رایت',
                'key' => 'footer_en_copyright',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
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
}
