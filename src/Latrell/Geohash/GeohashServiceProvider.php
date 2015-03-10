<?php
namespace Latrell\Geohash;

use Illuminate\Support\ServiceProvider;

class GeohashServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('geohash', function ($app)
		{
			return new Geohash();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'geohash'
		];
	}
}
