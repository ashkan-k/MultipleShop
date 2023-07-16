<?php

namespace Modules\Sms\Helpers;

class sms_helper
{
    public static $SMS_PATTERNS = [
        'verify_user' => "کاربر گرامی کد تایید شما:\n %s",

        'user_order_message' => "کاربر گرامی %s ثبت سفارش شما با موفقیت ثبت شد و مرسوله در صف ارسال قرار گرفت.\n شماره پیگیری سفارش: %s",
        'admin_order_message' => "مدیریت گرامی یک سفارش با شماره سفارش %s برای کاربر %s با موفقیت ثبت شد.",
    ];
}
