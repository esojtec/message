<?php

namespace Esojtec\Messages\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\AliasLoader;
use Illuminate\Session\Storage;

class MessageServiceProvider extends ServiceProvider {

	function register() {

		$this->app->bind(
                        '\Illuminate\Session\Storage'
		);
                
                $this->app->singleton('message', function(){
                    return new \Esojtec\Messages\Libraries\Message;
                });

		$this->app->boot(function() {
			$loader = AliasLoader::getInstance();
			$loader->alias('Message', 'Esojtec\Messages\Facades\MessageFacade');
		});
	}
}