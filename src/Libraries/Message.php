<?php

namespace Esojtec\Messages\Libraries;

class Message {

	var $_messages = [];

	function __Construct(){

	}

	function message($message, $type = 'info') {
		$this->_messages[] = ['message' => $message, 'type' => $type];
	}

	function render() {
		return $this->_messages;
	}
}