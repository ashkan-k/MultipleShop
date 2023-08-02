<?php

namespace Modules\Sms\Helpers;

class sms_helper
{
    public static $SMS_PATTERNS = [
        'verify_user' => "کاربر گرامی کد تایید شما:\n %s",

        'user_order_message' => "کاربر گرامی %s ثبت سفارش شما با موفقیت ثبت شد و مرسوله در صف ارسال قرار گرفت.\n شماره پیگیری سفارش: %s",
        'admin_order_message' => "مدیریت گرامی یک سفارش با شماره سفارش %s برای کاربر %s با موفقیت ثبت شد.",

        'admin_ticket_submit' => "مدیریت گرامی یک تیکت جدید با شماره %s توسط کاربر %s ثبت شد.",
        'admin_ticket_edit' => "مدیریت گرامی تیکت شماره %s توسط کاربر %s ویرایش شد.",
        'admin_ticket_delete' => "مدیریت گرامی تیکت شماره %s توسط کاربر %s حذف شد.",
        'user_ticket_answer_submit' => "کاربر گرامی تیکت شما با عنوان %s شماره %s توسط مدیریت پاسخ داده شد.",
        'admin_ticket_answer_submit' => "مدیریت گرامی برای تیکت %s با شماره %s پیام جدید ثبت شد.",
    ];
}
