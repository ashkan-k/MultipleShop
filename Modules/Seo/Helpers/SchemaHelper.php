<?php

namespace Modules\Seo\Helpers;

use Illuminate\Support\Str;
use Modules\Setting\Entities\Setting;
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

        if ($schema_type == 'default') {
            $schema_type = Setting::firstOrCreate(['key' => 'default_blog_schema_type'], [
                'key' => 'default_blog_schema_type',
                'value' => 'generic_article'
            ])->value;
        }

        switch ($schema_type) {
            case 'generic_article':
                // Generic Article
                return Schema::article()
                    ->name($blog->get_title($lang))
                    ->description(strip_tags($blog->get_text($lang)))
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'news_article':
                // News Article
                return Schema::newsArticle()
                    ->headline($blog->get_title($lang))
                    ->description(strip_tags(Str::limit($blog->get_text($lang), 200)))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->datePublished($blog->created_at)
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'blog_posting':
                // Blog Posting
                return Schema::blogPosting()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->datePublished($blog->created_at)
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'scholarly_article':
                // Scholarly Article
                return Schema::scholarlyArticle()
                    ->headline($blog->get_title($lang))
                    ->description(strip_tags($blog->get_text($lang)))
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'tech_article':
                // Tech Article
                return Schema::techArticle()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->datePublished($blog->created_at)
                    ->url('https://example.com/tech-article')
                    ->author($author)
                    ->image($image);

            case 'report':
                // Report
                return Schema::report()
                    ->name($blog->get_title($lang))
                    ->description(strip_tags($blog->get_text($lang)))
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'social_media':
                // Social Media Posting
                return Schema::socialMediaPosting()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->datePublished($blog->created_at)
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'live_blog':
                // Live Blog Posting
                return Schema::liveBlogPosting()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->datePublished($blog->created_at)
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'satirical_article':
                // Satirical Article
                return Schema::satiricalArticle()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            case 'medical_scholarly':
                // Medical Scholarly Article
                return Schema::medicalScholarlyArticle()
                    ->headline($blog->get_title($lang))
                    ->articleBody(strip_tags($blog->get_text($lang)))
                    ->url(route('blog_detail', $blog->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            default:
                return null;

        }
    }

    public static function GetPageSchema($page)
    {
        $lang = app()->getLocale();

        $schema_type = $page->schema_type;

        // Create image
        $image = Schema::imageObject()
            ->url($page->get_image())
            ->width(800)
            ->height(600);

        if ($schema_type == 'default') {
            $schema_type = Setting::firstOrCreate(['key' => 'default_pages_schema_type'], [
                'key' => 'default_pages_schema_type',
                'value' => 'article'
            ])->value;
        }

        switch ($schema_type) {
            case 'generic_article':
                // Generic Article
                return Schema::article()
                    ->name($page->get_title($lang))
                    ->description(strip_tags($page->get_text($lang)))
                    ->url(route('blog_detail', $page->get_slug($lang)))
                    ->author($author)
                    ->image($image);

            default:
                return null;

        }
    }
}
