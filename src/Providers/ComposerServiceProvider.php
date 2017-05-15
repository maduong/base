<?php namespace Edutalk\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Edutalk\Base\Http\ViewComposers\AdminBreadcrumbsViewComposer;
use Edutalk\Base\Http\ViewComposers\BasePartialsViewComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'edutalk-core::admin._partials.breadcrumbs',
        ], AdminBreadcrumbsViewComposer::class);
        view()->composer([
            'edutalk-core::front._admin-bar',
            'edutalk-core::admin._partials.header',
            'edutalk-core::admin._partials.sidebar',
        ], BasePartialsViewComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
