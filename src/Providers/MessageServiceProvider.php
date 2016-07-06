<?php

namespace Esojtec\Messages\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\AliasLoader;

class MessageServiceProvider extends ServiceProvider {

	function register() {

		$this->app->bind(
                        'Illuminate\Session\Storage'
		);
                
                $this->app->singleton('message', function(){
                    return $this->app->make('Esojtec\Messages\Libraries\Message');
                });
	}
        
        function boot(){
            $this->loadViewsFrom(__DIR__ .'\..\views', 'message');
            
            $this->publishes([
                __DIR__ . '\..\views' => base_path('resources/views/vendor/messages')
            ]);
        }
}