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

        'logo' => [
            [
                'title' => 'لوگو',
                'key' => 'logo',
                'has_active_status' => false,
                'field' => [
                    'type' => 'file',
                ],
            ],

            [
                'title' => 'فاو آیکن (favicon)',
                'key' => 'favicon',
                'has_active_status' => false,
                'field' => [
                    'type' => 'file',
                ],
            ]
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

        'footer_about_us' => [
            [
                'title' => 'متن فارسی عنوان درباره ما',
                'key' => 'footer_about_us_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن انگلیسی عنوان درباره ما',
                'key' => 'footer_about_us_en_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن فارسی درباره ما',
                'key' => 'footer_about_us_text',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی درباره ما',
                'key' => 'footer_about_us_en_text',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],
        ],

        'communication' => [
            [
                'title' => 'متن فارسی شعار ما',
                'key' => 'footer_chant',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی شعار ما',
                'key' => 'footer_en_chant',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'شماره موبایل',
                'key' => 'footer_phone',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'ایمیل',
                'key' => 'footer_email',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],
        ],

        'footer_right_links' => [
            [
                'title' => 'متن فارسی عنوان لینک',
                'key' => 'footer_right_links_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن انگلیسی عنوان لینک',
                'key' => 'footer_right_links_en_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن فارسی لینک ها',
                'key' => 'footer_right_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی لینک ها',
                'key' => 'footer_en_right_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],
        ],

        'footer_center_links' => [
            [
                'title' => 'متن فارسی عنوان لینک',
                'key' => 'footer_center_links_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن انگلیسی عنوان لینک',
                'key' => 'footer_center_links_en_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن فارسی لینک ها',
                'key' => 'footer_center_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی لینک ها',
                'key' => 'footer_en_center_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],
        ],

        'footer_left_links' => [
            [
                'title' => 'متن فارسی عنوان لینک',
                'key' => 'footer_left_links_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن انگلیسی عنوان لینک',
                'key' => 'footer_left_links_en_title',
                'has_active_status' => true,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن فارسی لینک ها',
                'key' => 'footer_left_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],

            [
                'title' => 'متن انگلیسی لینک ها',
                'key' => 'footer_en_left_links',
                'has_active_status' => true,
                'field' => [
                    'type' => 'textarea',
                ],
            ],
        ],

        'footer_social_medias' => [
            'title' => 'شبکه های اجتماعی',
            'key' => 'footer_social_section',
            'has_active_status' => true,
            'field' => [
                'type' => 'textarea',
            ],
        ],

        'footer_app_links' => [
            'title' => 'اپلیکیشن ها',
            'key' => 'footer_app_links',
            'has_active_status' => true,
            'field' => [
                'type' => 'textarea',
            ],
        ],

        'footer_electronic_flags' => [
            'title' => 'نماد های الکترونیکی',
            'key' => 'footer_electronic_flags',
            'has_active_status' => true,
            'field' => [
                'type' => 'textarea',
            ],
        ],

        'website_title' => [
            [
                'title' => 'متن فارسی عنوان سایت',
                'key' => 'website_title',
                'has_active_status' => false,
                'field' => [
                    'type' => 'text',
                ],
            ],

            [
                'title' => 'متن انگلیسی عنوان سایت',
                'key' => 'website_en_title',
                'has_active_status' => false,
                'field' => [
                    'type' => 'text',
                ],
            ],
        ],

        'schema_defaults' => [
            [
                'title' => 'نوع پیشفرض مقالات',
                'key' => 'default_blog_schema_type',
                'has_active_status' => false,
                'field' => [
                    'type' => 'select',
                    'options' => [],
                ],
            ],

            [
                'title' => 'نوع پیشفرض صفحات',
                'key' => 'default_pages_schema_type',
                'has_active_status' => false,
                'field' => [
                    'type' => 'select',
                    'options' => [],
                ],
            ],
        ],

        'sections' => [
            [
                'title' => 'وضعیت نمایش بخش محصولات شگفت انگیز',
                'key' => 'show_special_products',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش جدیدترین محصولات',
                'key' => 'show_latest_products',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش محبوب ترین محصولات',
                'key' => 'show_most_favorite_products',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش دسته بندی های ویژه',
                'key' => 'show_special_categories',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش تعداد محصولات بخش دسته بندی های ویژه',
                'key' => 'show_special_categories_products_count',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش ارزان ترین محصولات',
                'key' => 'show_cheapest_products',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش اخبار و مقالات',
                'key' => 'show_blogs',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],

            [
                'title' => 'وضعیت نمایش بخش تصاویر راهنما',
                'key' => 'show_guides',
                'has_active_status' => false,
                'field' => [
                    'type' => 'checkbox',
                ],
            ],
        ],
    ];

    public static function GetDynamicItem($key, $filed_options = [])
    {
        $item = self::$DynamicItems[$key];
        if ($filed_options) {
            $item['field']['options'] = $filed_options;
        }
        return $item;
    }
}
