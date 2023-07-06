<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Modules\Setting\Entities\Setting;

class InitSettingsCommand extends Command
{
    const SETTINGS = [
        'about_us_page' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'about_us' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'contact_us' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'website_terms_text' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'app_terms_text' => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.",
        'copyright' => "کپی رایت بامیز",
        'logo' => "/static/front/img/logo.png",
        'address' => "تهران - بزرگراه امام رضا(ع) - پاکدشت - مامازند - دفتر مرکزی خرید و فروش کالا",
        'phone' => "۰۹۹۲۰۴۴۳۵۰۷",
        'contact_us_phone' => "+982100000000",
        'postal_code' => "۴۸۳۱۱-۱۹۹۷۷",
        'footer_working_time' => "هفت روز هفته (حتی روزهای تعطیل) ، ساعت ۹-۲۴ پاسخگوی شما هستیم.",

        # Website Sections handler
        'show_special_categories_products_count' => 1,
        'show_special_products' => 1,
        'show_latest_products' => 1,
        'show_most_favorite_products' => 1,
        'show_cheapest_products' => 1,
        'show_blogs' => 1,
        'show_guides' => 1,
        'show_footer_help_links' => 1,

        # Footer section
        'footer_social_section' => '<a href="#" target="_blank"><i class="fa fa-instagram"></i>اینستاگرام جی تی کالا</a>',
        'footer_right_links_title' => "راهنمای خرید جی تی کالا",
        'footer_center_links_title' => "خدمات مشتریان",
        'footer_left_links_title' => "با جی تی کالا",
        'footer_chant' => "هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.",
        'footer_phone' => "021-123456789",
        'footer_email' => "info@Gitikala.com",

        'footer_app_links' => '<a href="#" target="_blank"><img src="/front/assets/img/bazzar.png" width="159" height="48"
                                                             alt=""></a>
                            <a href="#" target="_blank"><img src="/front/assets/img/sibapp.png" width="159" height="48"
                                                             alt=""></a>',

        'footer_right_links' => '<li>
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

        # Social
        'email' => "multi_shop-ir@gmail.com",
        'telegram' => "multi_shop",
        'whatsapp' => "https=>//wa.me/qr/multi_shop_watsapp",
        'twitter' => "multi_shop",
        'youtube' => "multi_shop",
        'instagram' => "multi_shop",
        'aparat' => "multi_shop",
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
