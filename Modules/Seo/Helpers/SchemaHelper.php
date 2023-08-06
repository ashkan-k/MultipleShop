<?php

namespace Modules\Seo\Helpers;

use Spatie\SchemaOrg\Schema;

class SchemaHelper
{
    public static function GetArticleSchema($blog)
    {
        $lang = app()->getLocale();

        $schema_type = $blog->schema_type;

        // Create author
        $author = Schema::person()
            ->name($blog->user ? $blog->user->full_name() : '---');

        // Create image
        $image = Schema::imageObject()
            ->url($blog->get_image())
            ->width(800)
            ->height(600);

        switch ($schema_type){
            case 'default':
                // Generic Article
                return Schema::article()
                        ->name($blog->get_title($lang))
                        ->description(strip_tags($blog->get_text($lang)))
                        ->url(route('blog_detail', $blog->get_slug($lang)))
                        ->author($author)
                        ->image($image);

            default:
                return null;

        }
    }
}
