<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Guide\Entities\Guide;
use Modules\Setting\Entities\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings') && !str_contains('dashboard', request()->url())){
            if (!$settings = GetCache('all_settings')) {
                foreach (Setting::all() as $item){
                    $settings[$item->key] = $item;
                }
                AddCache('all_settings', $settings);
            }
            View::share('settings', $settings);
        }

        if (Schema::hasTable('guides') && !str_contains('dashboard', request()->url())){
            if (!$guides = GetCache('index_guides')) {
                $guides = AddCache('index_guides', Guide::all());
            }
            View::share('guides', $guides);
        }
    }
}
