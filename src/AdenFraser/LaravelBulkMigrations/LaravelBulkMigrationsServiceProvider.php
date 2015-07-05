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
            return new Commands\BulkMigrationsCommand($app);
        });

        $this->commands('bulkmigrations');
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

