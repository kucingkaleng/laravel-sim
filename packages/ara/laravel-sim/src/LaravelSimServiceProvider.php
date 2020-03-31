<?php

namespace ARA\LaravelSim;

use Illuminate\Support\ServiceProvider;

class LaravelSimServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    /**
     * Config
     */
    $this->mergeConfigFrom(__DIR__.'/config/laravel-sim.php', 'laravel-sim');

    // $this->loadRoutesFrom(__DIR__.'/routes.php');
    // $this->loadMigrationsFrom(__DIR__.'/migrations');

    /**
     * Modules
     */
    $this->app->register('ARA\LaravelSim\ModuleServiceProvider');

    /**
     * Register views
     */
    $this->loadViewsFrom(__DIR__.'/views', 'LaravelSim');
    
    /**
     * Publish views
     */
    $this->publishes([
      __DIR__.'/views' => resource_path('views/ara/laravel-sim'),
    ]);
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    /**
     * Register artisan commands
     */
    if ($this->app->runningInConsole()) {
      $this->commands([
        Commands\LaravelSimInstall::class,
      ]);
    }
  }
}
