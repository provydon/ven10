<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleSheetsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
			'GoogleSheets',
			function ( $app ) {
					return new \App\Services\Google\GoogleSheets();
			}
		);

		$this->app->booting(
			function() {
				$loader = \Illuminate\Foundation\AliasLoader::getInstance();
				$loader->alias( 'GoogleSheets', 'App\Services\Google\GoogleSheets' );
			}
		);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
