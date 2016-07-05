<?php

namespace Esojtec\Messages\Libraries;

use 

class Message {

	var $flash = "esojtec.messages"
	var $_messages = [];

	function __Construct(){

	}

	function message($message, $type = 'info') {

		\Session::put($flash, ['message' => $message, 'type' => $type]);
	}

	function render() {
		return \Session::get($flash);
	}
}