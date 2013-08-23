<?php 
namespace CBI\SEO;

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
			return new \SeoCommand();
		});
		$this->commands('command.seo');
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