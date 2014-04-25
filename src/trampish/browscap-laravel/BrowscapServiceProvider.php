<?php namespace trampish\Browscap-laravel;

use phpbrowscap\Browscap;
use Illuminate\Support\ServiceProvider;

class BrowscapServiceProvider extends ServiceProvider
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
		$this->package('trampish/browscap-laravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		/**
		 * Register the browscap instance
		 */


        $this->app['browscap'] = $this->app->share(function($app)
        {

					$bc = new Browscap(storage_path() . '/cache');

					return $bc->getBrowser();
					
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['keenio'];
	}
}
