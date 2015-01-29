<?php namespace Intervention\Message;

use Illuminate\Support\ServiceProvider;

class MessageServiceProviderLaravel4 extends ServiceProvider
{
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('intervention/message');
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
