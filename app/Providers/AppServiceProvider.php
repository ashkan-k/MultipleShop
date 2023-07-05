<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
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
            $settings = [];
            foreach (Setting::all() as $item){
                $settings[$item->key] = $item->value;
            }
            View::share('settings', $settings);
        }

        View::share('lang', app()->getLocale());
    }
}
