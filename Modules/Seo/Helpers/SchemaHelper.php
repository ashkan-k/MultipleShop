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
            case 'article':
                // Article
                return Schema::article()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->url(route('page', $page->get_slug($lang)))
                    ->datePublished($page->created_at)
                    ->image($image);

            case 'blog_posting':
                // Blog Posting
                return Schema::blogPosting()
                    ->headline($page->get_title($page))
                    ->articleBody(strip_tags($page->get_body($lang)))
                    ->datePublished($page->created_at)
                    ->url(route('page', $page->get_slug($lang)))
                    ->image($image);

            case 'news_article':
                // News Article
                return Schema::newsArticle()
                    ->headline($page->get_title($page))
                    ->articleBody(strip_tags($page->get_body($lang)))
                    ->datePublished($page->created_at)
                    ->url(route('page', $page->get_slug($lang)));

            case 'web_page':
                // Web Page
                return Schema::webPage()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->url(route('page', $page->get_slug($lang)));

            case 'about_page':
                // About Page
                return Schema::aboutPage()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->url(route('page', $page->get_slug($lang)));

            case 'contact_page':
                // Contact Page
                return Schema::aboutPage()
                    ->name($page->get_title($page))
                    ->url(route('page', $page->get_slug($lang)));

            case 'FAQ_page':
                // FAQ Page
                return Schema::faqPage()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->mainEntity([
                        Schema::question()
                            ->name('Question 1')
                            ->acceptedAnswer(Schema::answer()->text('Answer 1')),
                        Schema::question()
                            ->name('Question 2')
                            ->acceptedAnswer(Schema::answer()->text('Answer 2')),
                    ])
                    ->url(route('page', $page->get_slug($lang)));

            case 'product_page':
                // Product Page
                return Schema::product()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->image($image)
                    ->url(route('page', $page->get_slug($lang)));

            case 'event':
                // Event
                return Schema::event()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->startDate($page->created_at)
                    ->endDate($page->updated_at)
                    ->location(Schema::place()->name($page->get_title($page)))
                    ->url(route('page', $page->get_slug($lang)));

            case 'video_object':
                // Page Object
                return Schema::videoObject()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->thumbnailUrl($image)
                    ->contentUrl(strip_tags($page->get_body($lang)))
                    ->uploadDate($page->created_at)
                    ->url(route('page', $page->get_slug($lang)));

            case 'recipe':
                // Recipe
                return Schema::recipe()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->recipeInstructions(strip_tags($page->get_body($lang)))
                    ->url(route('page', $page->get_slug($lang)));

            case 'review':
                // Review
                return Schema::review()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->reviewRating(Schema::rating()->ratingValue(5))
                    ->url(route('page', $page->get_slug($lang)));

            case 'search_results_page':
                // SearchResultsPage
                return Schema::searchResultsPage()
                    ->mainEntity([strip_tags($page->get_body($lang))])
                    ->url(route('page', $page->get_slug($lang)));

            case 'profile_page':
                // ProfilePage
                return Schema::profilePage()
                    ->name($page->get_title($page))
                    ->url(route('page', $page->get_slug($lang)));

            case 'collection_page':
                // CollectionPage
                return Schema::collectionPage()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->url(route('page', $page->get_slug($lang)));

            case 'job_posting':
                // JobPosting
                return Schema::jobPosting()
                    ->title($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->hiringOrganization(Schema::organization()->name($page->get_title($page)))
                    ->jobLocation(Schema::place()->name($page->get_body($lang)))
                    ->validThrough($page->created_at)
                    ->employmentType('Full-time')
                    ->url(route('page', $page->get_slug($lang)));

            case 'course':
                // Course
                return Schema::course()
                    ->name($page->get_title($page))
                    ->description(strip_tags($page->get_body($lang)))
                    ->provider(Schema::organization()->name($page->get_title($page)))
                    ->url(route('page', $page->get_slug($lang)));

            default:
                return null;

        }
    }
}
