<?php

namespace Modules\Product\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Modules\Product\Entities\Category;
use Modules\Product\Observers\CategoryObserver;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Product\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Category::observe(CategoryObserver::class);
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware(['web', 'check_admin'])
            ->namespace($this->moduleNamespace)
            ->prefix('dashboard')
            ->group(module_path('Product', '/Routes/web.php'));

        Route::middleware(['web', 'setlocale'])
            ->namespace($this->moduleNamespace)
            ->prefix('{locale}')
            ->where(['locale' => '[a-zA-Z]{2}'])
            ->group(module_path('Product', '/Routes/front.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api/products')
            ->middleware(['web'])
            ->namespace($this->moduleNamespace)
            ->group(module_path('Product', '/Routes/api.php'));
    }
}
