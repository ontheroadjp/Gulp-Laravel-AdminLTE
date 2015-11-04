<?php

namespace Xinax\LaravelGettext;

use Illuminate\Support\ServiceProvider;

/**
 * Laravel gettext main service provider
 */
class LaravelGettextServiceProvider extends ServiceProvider
{
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
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('laravel-gettext.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return mixed
     */
    public function register()
    {
        $this->app->bind('Adapters/AdapterInterface', 'Adapters/LaravelAdapter');

        // Main class register
        $this->app['laravel-gettext'] = $this->app->share(function ($app) {

            $configuration = Config\ConfigManager::create();

            $fileSystem = new FileSystem($configuration->get(), app_path(), storage_path());

            $gettext = new Gettext(
                $configuration->get(),
                new Session\SessionHandler($configuration->get()->getSessionIdentifier()),
                new Adapters\LaravelAdapter,
                $fileSystem
            );

            return new LaravelGettext($gettext);
        });

        // Auto alias
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('LaravelGettext',
                'Xinax\LaravelGettext\Facades\LaravelGettext');
        });

        $this->registerCommands();
    }

    /**
     * Register the package commands
     * @return void 
     */
    protected function registerCommands()
    {
        // Package commands
        $this->app->bind('xinax::gettext.create', function ($app) {
            return new Commands\GettextCreate();
        });
        $this->app->bind('xinax::gettext.update', function ($app) {
            return new Commands\GettextUpdate();
        });
        $this->commands(array(
            'xinax::gettext.create',
            'xinax::gettext.update',
        ));
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('laravel-gettext');
    }
}

