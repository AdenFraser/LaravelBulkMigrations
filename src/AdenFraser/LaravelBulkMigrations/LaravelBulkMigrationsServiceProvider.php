<?php namespace AdenFraser\LaravelBulkMigrations;

use Illuminate\Support\ServiceProvider;

class LaravelBulkMigrationsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('adenfraser/laravelbulkmigrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['bulkmigrations'] = $this->app->share(function($app)
        {
            return new Commands\BulkMigrationsCommand(new BulkMigrations());
        });

        $this->commands('bulkmigrations');

        $this->app['refreshbulkmigrations'] = $this->app->share(function($app)
        {
            return new Commands\RefreshBulkMigrationsCommand(new BulkMigrations());
        });

        $this->commands('refreshbulkmigrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}

