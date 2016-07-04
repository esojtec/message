<?php

namespace Esojtec\Messages\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\AliasLoader;

class MessageServiceProvider extends ServiceProvider {

	function register() {

		$this->app->bind('message', function() {
			return new \Esojtec\Messages\Libraries\Message;
		});

		$this->app->boot(function() {
			$loader = AliasLoader::getInstance();
			$loader->alias('Message', 'Esojtec\Messages\Facades\MessageFacade');
		});
	}
}