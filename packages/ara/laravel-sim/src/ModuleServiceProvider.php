<?php

namespace ARA\LaravelSim;

use Illuminate\Support\ServiceProvider;
use File;

class ModuleServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
		$path = \base_path('Modules');
		$directories = array_map('basename', File::directories($path));
		
		$this->app->register('ARA\LaravelSim\Modules\Lobby\Providers\LobbyServiceProvider');
		
		foreach ($directories as $module) {
			$provider = 'Modules\\'. $module .'\Providers\\'. $module .'ServiceProvider';
			if (class_exists($provider)) {
				$this->app->register($provider);
			}
		}
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
