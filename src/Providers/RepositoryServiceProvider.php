<?php namespace Edutalk\Base\Providers;

use Illuminate\Support\ServiceProvider;
use Edutalk\Base\Models\ViewTracker;
use Edutalk\Base\Repositories\Contracts\ViewTrackerRepositoryContract;
use Edutalk\Base\Repositories\ViewTrackerRepository;
use Edutalk\Base\Repositories\ViewTrackerRepositoryCacheDecorator;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ViewTrackerRepositoryContract::class, function () {
            $repository = new ViewTrackerRepository(new ViewTracker());

            if (config('edutalk-caching.repository.enabled')) {
                return new ViewTrackerRepositoryCacheDecorator($repository);
            }

            return $repository;
        });
    }
}
