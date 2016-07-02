<?php

namespace Esojtec\Messages\Facades;

use Illuminate\Support\Facades\Facade;

class MessageFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'message';
	}
}