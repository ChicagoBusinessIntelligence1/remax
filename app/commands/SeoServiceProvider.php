<?php 
namespace Commands;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app['command.seo'] = $this->app->share(function($app)
		{
			$writer = new Writer();
			return new SeoCommand($writer);
		});
		$this->commands('command.seo');


		$this->app['command.seomany'] = $this->app->share(function($app)
		{
			$writer = new Writer();
			return new SeoManyCommand($writer);
		});
		$this->commands('command.seomany');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}