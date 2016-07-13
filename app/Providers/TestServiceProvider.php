<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishView();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function publishView()
    {
      // $this->loadViewsFrom(app_path('Http/Controllers/'),  'TestController');

      $this->publishes([
           app_path('Http/Controllers/TestController.php') => resource_path('views/testview/TestController'),
           app_path('Http/Controllers/TestController.php') => config_path('test')
       ]);

    }
}
