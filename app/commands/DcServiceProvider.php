<?php 
namespace Commands;

use Illuminate\Support\ServiceProvider;

class DcServiceProvider extends ServiceProvider {

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

		$this->app['command.dc'] = $this->app->share(function($app)
		{
		$dcParser = new DcParser();

		return new DcCommand($dcParser);
		});
		$this->commands('command.dc');
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