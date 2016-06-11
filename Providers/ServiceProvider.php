<?php

namespace Wazoomie\Api\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
	/**
	 * @return void
	 */
	public function register()
	{
		app()->bind('Wazoomie\Api\Requests\Contracts\RequestInterface', 'Wazoomie\Api\Requests\Request');
		app()->bind('Wazoomie\Api\Responses\Contracts\ResponseInterface', 'Wazoomie\Api\Responses\Response');
	}
}