<?php


namespace App\Enums;


class EnumHelpers
{
    static $ProductStatusEnum = ['deactive', 'active'];
    static $FeatureFilterTypeEnum = ['checkbox', 'radio', 'text'];
    static $ProductFeatureTypeTypeEnum = ['up', 'down', 'both'];
    static $BlogStatusEnum = ['draft', 'publish', 'done'];
    static $TicketStatusEnum = ['waiting', 'answered', 'close'];
    static $CommentStatusEnum = ['pending', 'approved', 'reject'];
    static $CommentSeggestToFriendEnum = ['suggest', 'not_suggest', 'no_idea'];
    static $CommentUserPointEnum = ['positive', 'negative'];
    static $PaymentTypeEnum = ['online', 'cash'];
    static $OrderStatusEnum = ['sending', 'posted', 'delivered'];
    static $PosterLocationEnum = ['top', 'center', 'bottom'];
    static $BlogGoogleShcemaEnum = [
        'default',
        'generic_article', 'news_article',
        'blog_posting', 'scholarly_article',
        'tech_article', 'report',
        'social_media', 'live_blog',
        'satirical_article', 'medical_scholarly'
    ];

    static $PageGoogleShcemaEnum = [
        'default',
        'article', 'news_article',
        'blog_posting', 'web_page',
        'about_page', 'contact_page',
        'FAQ_page', 'product_page',
        'event', 'video_object',
        'recipe', 'review',
        'search_results_page', 'profile_page',
        'collection_page', 'job_posting',
        'course',
    ];
}
