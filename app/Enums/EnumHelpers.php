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
    static $GoogleShcemaEnum = ['article', 'review', 'product', 'recipe', 'event', 'faq', 'video', 'local_business', 'organization', 'breadcrumb_list'];
}
