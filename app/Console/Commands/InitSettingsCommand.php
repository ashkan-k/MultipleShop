<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Modules\Setting\Entities\Setting;

class InitSettingsCommand extends Command
{
    const SETTINGS = [
        'website_title' => "جی تی کالا",
        'website_en_title' => "Gitikala",

        'default_system_lang' => "fa",

        'about_us_page' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'about_us' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'contact_us' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'website_terms_text' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'app_terms_text' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'copyright' => "کپی رایت بامیز",
        'logo' => "/admin/src/assets/media/logos/default-small.svg",
        'favicon' => "/admin/src/assets/media/logos/favicon.ico",
        'address' => "تهران - بزرگراه امام رضا(ع) - پاکدشت - مامازند - دفتر مرکزی خرید و فروش کالا",
        'phone' => "09396988720",
        'contact_us_phone' => "+982100000000",
        'postal_code' => "۴۸۳۱۱-۱۹۹۷۷",
        'footer_working_time' => "هفت روز هفته (حتی روزهای تعطیل) ، ساعت ۹-۲۴ پاسخگوی شما هستیم.",

        # Website Sections handler
        'show_special_categories' => 1,
        'show_special_categories_products_count' => 1,
        'show_special_products' => 1,
        'show_latest_products' => 1,
        'show_most_favorite_products' => 1,
        'show_cheapest_products' => 1,
        'show_blogs' => 1,
        'show_guides' => 1,
        'show_footer_help_links' => 1,

        'postal_cost' => 10000,

        # Seo
        'default_blog_schema_type' => 'generic_article',
        'default_pages_schema_type' => 'article',

        # Payment Description
        'gateway_description' => "خرید محصول از وبسایت جی تی کالا",
        'en_gateway_description' => "Buy the product from the GT Kala website",

        # Comment Terms
        'comment_terms_en_title' => 'Guide others to choose this product by writing your comments.',
        'comment_terms_en_text' => '<p>Please read the summary of rules below before posting a comment
                                                                 Do:</p>
                                                             <p>Write Persian and use Persian keyboard. better than
                                                                 empty space
                                                                 Do not use emoticons or emojis more than usual
                                                                 Draw letters or words with
                                                                 Avoid the keyboard.</p>
                                                             <p>Your comments based on experience and practical use and carefully
                                                                 Submit technical tips;
                                                                 Without
                                                                 Recite product bias, pros and cons, and better
                                                                 is from posting comments
                                                                 Avoid multiple words.</p>
                                                             <p>It is better to focus on variable elements such as price in your comments.
                                                                 Avoid.</p>
                                                             <p>Respect users and other people. Messages that include
                                                                 Offensive content and
                                                                 If the words are inappropriate, they will be deleted.</p>
                                                             <p> From sending links to other sites and providing personal information
                                                                 yourself like a contact number,
                                                                 Avoid email and social network IDs.</p>
                                                             <p>According to the structure of the comments section, from asking questions or requests
                                                                 Guidance in this section
                                                                 Refrain and ask your questions in the "Question and Answer" section
                                                                 Do it.</p>
                                                             <p>Any criticism and opinion regarding the Digikala site, services and requests
                                                                 the goods by email
                                                                 <a href="mailto:info@digikala.com">
                                                                     info@digikala.com
                                                                 </a>
                                                                 or with the number

                                                                 <a href="tel: +982161930000">
                                                                     021-61930000
                                                                 </a>
                                                                 Share and refrain from writing them in the comments section
                                                                 do.</p>',
        'comment_terms_title' => 'دیگران را با نوشتن نظرات خود، برای انتخاب این محصول راهنمایی کنید.',
        'comment_terms_text' => '<p>لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه
                                                                کنید:</p>
                                                            <p>فارسی بنویسید و از کیبورد فارسی استفاده کنید. بهتر است از
                                                                فضای خالی (Space)
                                                                بیش‌از‌حدِ معمول، شکلک یا ایموجی استفاده نکنید و از
                                                                کشیدن حروف یا کلمات با
                                                                صفحه‌کلید بپرهیزید.</p>
                                                            <p>نظرات خود را براساس تجربه و استفاده‌ی عملی و با دقت به
                                                                نکات فنی ارسال کنید؛
                                                                بدون
                                                                تعصب به محصول خاص، مزایا و معایب را بازگو کنید و بهتر
                                                                است از ارسال نظرات
                                                                چندکلمه‌‌ای خودداری کنید.</p>
                                                            <p>بهتر است در نظرات خود از تمرکز روی عناصر متغیر مثل قیمت،
                                                                پرهیز کنید.</p>
                                                            <p>به کاربران و سایر اشخاص احترام بگذارید. پیام‌هایی که شامل
                                                                محتوای توهین‌آمیز و
                                                                کلمات نامناسب باشند، حذف می‌شوند.</p>
                                                            <p>از ارسال لینک‌های سایت‌های دیگر و ارایه‌ی اطلاعات شخصی
                                                                خودتان مثل شماره تماس،
                                                                ایمیل و آی‌دی شبکه‌های اجتماعی پرهیز کنید.</p>
                                                            <p>با توجه به ساختار بخش نظرات، از پرسیدن سوال یا درخواست
                                                                راهنمایی در این بخش
                                                                خودداری کرده و سوالات خود را در بخش «پرسش و پاسخ» مطرح
                                                                کنید.</p>
                                                            <p>هرگونه نقد و نظر در خصوص سایت دیجی‌کالا، خدمات و درخواست
                                                                کالا را با ایمیل
                                                                <a href="mailto:info@digikala.com">
                                                                    info@digikala.com
                                                                </a>
                                                                یا با شماره‌ی

                                                                <a href="tel: +982161930000">
                                                                    ۶۱۹۳۰۰۰۰ - ۰۲۱
                                                                </a>
                                                                در میان بگذارید و از نوشتن آن‌ها در بخش نظرات خودداری
                                                                کنید.</p>',

        # Footer section
        'footer_social_section' => '<div class="socials">
                                    <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                                    <div class="footer-social">
                                        <a href="#" target="_blank"><i class="fa fa-instagram"></i>اینستاگرام جی تی کالا</a>
                                    </div>
                                </div>',
        'footer_en_social_section' => '<a href="#" target="_blank"><i class="fa fa-instagram"></i>Instagram GT Kala</a>',
        'footer_right_links_title' => "راهنمای خرید جی تی کالا",
        'footer_right_links_en_title' => "GT Kala buying guide",
        'footer_center_links_title' => "خدمات مشتریان",
        'footer_center_links_en_title' => "Customer Services",
        'footer_left_links_title' => "با جی تی کالا",
        'footer_left_links_en_title' => "With GT Kala",
        'footer_chant' => "هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.",
        'footer_en_chant' => "We are at your service 24 hours a day, seven days a week.",
        'footer_phone' => "021-123456789",
        'footer_email' => "info@Gitikala.com",
        'footer_copyright' => "استفاده از مطالب فروشگاه اینترنتی جی تی کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.
                    کلیه حقوق این سایت متعلق
                    به فروشگاه آنلاین جی تی کالا می‌باشد.",
        'footer_en_copyright' => "The use of the contents of the GT Kala online store is permitted only for non-commercial purposes and with reference to the source.
                    All rights of this site belong
                    It is to the online store of GT Kala.",
        'footer_about_us_title' => "فروشگاه اینترنتی جی تی کالا، بررسی، انتخاب و خرید آنلاین",
        'footer_about_us_en_title' => "GT Kala online store, review, choose and buy online",
        'footer_about_us_text' => "جی تی کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با
                            پایبندی به سه اصل کلیدی، پرداخت در
                            محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های
                            معتبر جهان، به بزرگ‌ترین فروشگاه
                            اینترنتی ایران تبدیل شود. به محض ورود به جی تی کالا با یک سایت پر از کالا رو به رو
                            می‌شوید! هر آنچه که نیاز دارید و به
                            ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.",
        'footer_about_us_en_text' => "GT Kala as one of the oldest online stores with more than a decade of experience, with
                            Adhering to three key principles, pay in
                            The place, 7 days guarantee of product return and guarantee of the originality of the product, has managed to keep up with the stores
                            Authentic in the world, to the biggest store
                            become Iran's internet. As soon as you enter GT Kala, you are faced with a site full of goods
                            You will! Everything you need and to
                            You'll find what you're thinking here.",

        'footer_app_links' => '<a href="#" target="_blank"><img src="/front/assets/img/bazzar.png" width="159" height="48"
                                                             alt=""></a>
                            <a href="#" target="_blank"><img src="/front/assets/img/sibapp.png" width="159" height="48"
                                                             alt=""></a>',
        'footer_electronic_flags' => '<a href="#" target="_blank"><img src="/front/assets/img/symbol-01.png" alt=""></a>
                        <a href="#" target="_blank"><img src="/front/assets/img/symbol-02.png" alt=""></a>',

        'footer_right_links' => '<li>
                                        <a href="#">نحوه ثبت سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه ارسال سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">شیوه‌های پرداخت</a>
                                    </li>',

        'footer_en_right_links' => '<li>
                                        <a href="#">نحوه ثبت سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه ارسال سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">شیوه‌های پرداخت</a>
                                    </li>',

        'footer_center_links' => '<li>
                                        <a href="#">پاسخ به پرسش‌های متداول</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه‌های بازگرداندن کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">شرایط استفاده</a>
                                    </li>
                                    <li>
                                        <a href="#">حریم خصوصی</a>
                                    </li>',
        'footer_en_center_links' => '<li>
                                        <a href="#">پاسخ به پرسش‌های متداول</a>
                                    </li>
                                    <li>
                                        <a href="#">رویه‌های بازگرداندن کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">شرایط استفاده</a>
                                    </li>
                                    <li>
                                        <a href="#">حریم خصوصی</a>
                                    </li>',

        'footer_left_links' => '<li>
                                        <a href="#">فروش در جی تی کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">همکاری با سازمان‌ها</a>
                                    </li>
                                    <li>
                                        <a href="#">فرصت‌های شغلی</a>
                                    </li>
                                    <li>
                                        <a href="#">تماس با جی تی کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">درباره جی تی کالا</a>
                                    </li>',
        'footer_en_left_links' => '<li>
                                        <a href="#">فروش در جی تی کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">همکاری با سازمان‌ها</a>
                                    </li>
                                    <li>
                                        <a href="#">فرصت‌های شغلی</a>
                                    </li>
                                    <li>
                                        <a href="#">تماس با جی تی کالا</a>
                                    </li>
                                    <li>
                                        <a href="#">درباره جی تی کالا</a>
                                    </li>',

        # Social
        'email' => "multi_shop-ir@gmail.com",
        'telegram' => "multi_shop",
        'whatsapp' => "https=>//wa.me/qr/multi_shop_watsapp",
        'twitter' => "multi_shop",
        'youtube' => "multi_shop",
        'instagram' => "multi_shop",
        'aparat' => "multi_shop",

        # Terms
        'comment_terms_page' => "http://127.0.0.1:8000/terms",
        'terms_title' => "قوانین و مقررات فروشگاه ما",
        'terms_en_title' => "Our store rules and regulations",
        'terms_text' => "خدمات و محتوای این وب سایت به جز در مواردی خاص به صورت کامل رایگان بوده و در دسترس همه عموم قرار دارد. بنابراین درصورت عدم دسترسی به این وب سایت به هر دلیلی یا قطع خدمات و مسدود شدن محتوای وب سایت، ما هیچ گونه مسئولیتی را قبول نخواهیم کرد. اگرچه محتوای این وب سایت بسیار قابل اعتماد است، ما ضمانت نمی‌کنیم که این وب سایت و محتوای آن، بدون اشکال و خطا باشد. بنابراین در استفاده از محتوای آن هیچ گونه مسئولیتی در هیچ موردی را قبول نخواهیم کرد. تمامی لینک‌های خارجی داده شده تنها برای اطلاع رسانی بوده و این وب سایت هیچ گونه مسئولیتی را درقبال محتوای آن‌ها ندارد.",
        'terms_en_text' => "The services and content of this website are completely free and available to the public, except in special cases. Therefore, we will not accept any responsibility if this website is not accessible for any reason or if the service is interrupted and the content of the website is blocked. Although the content of this website is highly reliable, we do not guarantee that this website and its content are error-free. Therefore, in using its content, we will not accept any responsibility in any case. All external links given are for information only and this website is not responsible for their content.",
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init_settings {--clear}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init default settings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('clear')) {
            DB::table('settings')->delete();
        }

        foreach (self::SETTINGS as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }

        $this->info("done, all settings synced...");
        return Command::SUCCESS;
    }
}
