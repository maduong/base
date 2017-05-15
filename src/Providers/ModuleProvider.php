<?php namespace Edutalk\Base\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Edutalk\Base\Exceptions\Handler;
use Edutalk\Base\Facades\AdminBarFacade;
use Edutalk\Base\Facades\BreadcrumbsFacade;
use Edutalk\Base\Facades\FlashMessagesFacade;
use Edutalk\Base\Facades\SeoFacade;
use Edutalk\Base\Facades\ViewCountFacade;
use Edutalk\Base\Http\Middleware\BootstrapModuleMiddleware;
use Edutalk\Base\Support\Helper;

class ModuleProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Load views*/
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'edutalk-core');
        /*Load translations*/
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'edutalk-core');
        /*Load migrations*/
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__ . '/../../resources/views' => config('view.paths')[0] . '/vendor/edutalk-core',
        ], 'views');
        $this->publishes([
            __DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/edutalk-core'),
        ], 'lang');
        $this->publishes([
            __DIR__ . '/../../config' => base_path('config'),
        ], 'config');
        $this->publishes([
            __DIR__ . '/../../resources/assets' => resource_path('assets'),
        ], 'edutalk-assets');
        $this->publishes([
            __DIR__ . '/../../resources/root' => base_path(),
            __DIR__ . '/../../resources/public' => public_path(),
        ], 'Edutalk-public-assets');

        app()->booted(function () {
            $this->app->register(BootstrapModuleServiceProvider::class);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Load helpers
        Helper::loadModuleHelpers(__DIR__);

        $this->app->singleton(ExceptionHandler::class, Handler::class);

        //Register related facades
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Breadcrumbs', BreadcrumbsFacade::class);
        $loader->alias('FlashMessages', FlashMessagesFacade::class);
        $loader->alias('AdminBar', AdminBarFacade::class);
        $loader->alias('ViewCount', ViewCountFacade::class);
        $loader->alias('Form', \Collective\Html\FormFacade::class);
        $loader->alias('Html', \Collective\Html\HtmlFacade::class);
        $loader->alias('Seo', SeoFacade::class);

        //Merge configs
        $configs = split_files_with_basename($this->app['files']->glob(__DIR__ . '/../../config/*.php'));

        foreach ($configs as $key => $row) {
            $this->mergeConfigFrom($row, $key);
        }

        /**
         * Other packages
         */
        $this->app->register(\Yajra\Datatables\DatatablesServiceProvider::class);
        $this->app->register(\Collective\Html\HtmlServiceProvider::class);

        /**
         * Base providers
         */
        $this->app->register(HookServiceProvider::class);
        $this->app->register(ConsoleServiceProvider::class);
        $this->app->register(MiddlewareServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(ValidateServiceProvider::class);
        $this->app->register(ComposerServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(CollectiveServiceProvider::class);

        /**
         * @var Router $router
         */
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', BootstrapModuleMiddleware::class);

        /**
         * Other module providers
         */
        $this->app->register(\Edutalk\Base\Shortcode\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Caching\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\ACL\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\ModulesManagement\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\AssetsManagement\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Elfinder\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Hook\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Menu\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Settings\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\ThemesManagement\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Users\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\Pages\Providers\ModuleProvider::class);

        $this->app->register(\Edutalk\Base\CustomFields\Providers\ModuleProvider::class);
        $this->app->register(\Edutalk\Base\StaticBlocks\Providers\ModuleProvider::class);

        config(['edutalk.version' => get_cms_version()]);
    }
}
