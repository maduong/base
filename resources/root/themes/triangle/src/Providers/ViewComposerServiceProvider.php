<?php namespace Edutalk\Themes\Triangle\Providers;

use Illuminate\Support\ServiceProvider;
use Edutalk\Themes\Triangle\Http\ViewComposers\BlogSidebar;
use Edutalk\Themes\Triangle\Http\ViewComposers\FooterViewComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'edutalk-theme::front._partials.footer',
        ], FooterViewComposer::class);
        view()->composer([
            'edutalk-theme::front._partials.sidebar',
        ], BlogSidebar::class);
    }
}
