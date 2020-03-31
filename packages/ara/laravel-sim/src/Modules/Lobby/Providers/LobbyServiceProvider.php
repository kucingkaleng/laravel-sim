<?php

namespace ARA\LaravelSim\Modules\Lobby\Providers;

use Illuminate\Support\ServiceProvider;

class LobbyServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->loadRoutesFrom(__DIR__.'/../web.php');
		// $this->loadMigrationsFrom(__DIR__.'/migrations');
		// $this->loadViewsFrom(__DIR__.'/views', 'todolist');
		// $this->publishes([
		// 		__DIR__.'/views' => base_path('resources/views/wisdmlabs/todolist'),
		// ]);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
	}
}
