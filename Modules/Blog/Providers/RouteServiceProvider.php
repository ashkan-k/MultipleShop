<?php

namespace Modules\Blog\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Observers\BlogObserver;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\Blog\Http\Controllers';

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
        Blog::observe(BlogObserver::class);
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
            ->group(module_path('Blog', '/Routes/web.php'));

        Route::middleware(['web', 'setlocale'])
            ->namespace($this->moduleNamespace)
            ->prefix('{locale}')
            ->where(['locale' => '[a-zA-Z]{2}'])
            ->group(module_path('Blog', '/Routes/front.php'));
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
        Route::prefix('api/blogs')
            ->middleware(['web', 'check_admin'])
            ->namespace($this->moduleNamespace)
            ->group(module_path('Blog', '/Routes/api.php'));
    }
}
