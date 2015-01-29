<?php namespace Intervention\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProviderLaravel5 extends ServiceProvider
{
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(
			__DIR__.'/../../views', 'message'
		);

		$this->publishes(array(
			__DIR__.'/../../views' => base_path('resources/views/vendor/message'),
		));
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['message'] = $this->app->share(function($app) {
            return new Message;
        });
	}
}
