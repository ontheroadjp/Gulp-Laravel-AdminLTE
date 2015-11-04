<?php
/*
*
* (c) Sergi Tur Badenas <sergiturbadenas@gmail.com>
*
*
* For the full copyright and license information, please view the LICENSE.txt
* file that was distributed with this source code.
* 
*/
namespace Ontheroadjp\LaravelAuth\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\AppNamespaceDetectorTrait;
use Route;

/**
 * Class AdminLTETemplateServiceProvider
 * @package Acacha\AdminLTETemplateLaravel\Providers
 */
class LaravelAuthServiceProvider extends ServiceProvider
{
    use AppNamespaceDetectorTrait;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->publishControllers();
        $this->publishViews();
        $this->publishLangAssets();
    }

    private function registerRoutes()
    {

        // Route::controllers([
        //     'auth' => $this->getAppNamespace() . 'Http\Controllers\Auth\AuthController',
        //     'password' => $this->getAppNamespace() . 'Http\Controllers\Auth\PasswordController',
        // ]);
        Route::controllers([
            'auth' => 'Ontheroadjp\LaravelAuth\Controllers\Auth\ExAuthController',
            'password' => 'Ontheroadjp\LaravelAuth\Controllers\Auth\ExPasswordController',
        ]);

        Route::get('/home', ['middleware' => 'auth', function () {
            return view('home');
        }]);

    }

    /**
     * Publish Controllers to Laravel project
     *
     * @return void
     */
    private function publishControllers()
    {
        $this->publishes([
            dirname(__FILE__) . '/../Controllers/auth/ExAuthController.php' => app_path('Http/Controllers/auth/ExAuthController.php'),
            dirname(__FILE__) . '/../Controllers/auth/ExPasswordController.php' => app_path('Http/Controllers/auth/ExPasswordController.php'),
        ]);
    }

    /**
     * Publish package views to Laravel project
     *
     * @return void
     */
    private function publishViews()
    {
        $this->loadViewsFrom( dirname(__FILE__) . '/../resources/views/', 'startonlaravel');

        $this->publishes([
            dirname(__FILE__) . '/../views/auth' => base_path('resources/views/auth'),
            dirname(__FILE__) . '/../views/emails' => base_path('resources/views/emails'),
            dirname(__FILE__) . '/../views/errors' => base_path('resources/views/errors'),
            dirname(__FILE__) . '/../views/partials' => base_path('resources/views/partials'),
            dirname(__FILE__) . '/../views/app.blade.php' => base_path('resources/views/app.blade.php'),
            dirname(__FILE__) . '/../views/home.blade.php' => base_path('resources/views/home.blade.php'),
            dirname(__FILE__) . '/../views/welcome.blade.php' => base_path('resources/views/welcome.blade.php'),
        ]);
    }

    /**
     * Publish lang assets to Laravel project
     *
     * @return void
     */
    private function publishLangAssets()
    {
        $this->publishes([
            dirname(__FILE__) . '/../lang' => base_path('resources/assets/lang'),
        ]);
    }

}
