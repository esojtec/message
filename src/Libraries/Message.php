<?php

namespace Esojtec\Messages\Libraries;

use Illuminate\Session\Store;

class Message {

	var $_flash = "esojtec.messages"

    var $_session = [];

	function __Construct(Store $session){
            $this->_session = $session;
	}

	function message($message, $type = 'info') {

		$this->_session->put($this->_flash,['message' => $message, 'type' => $type]);

	}

    function success($message){
        $this->message($message, 'success');
    }
    
    function error($message){
        $this->message($message, 'danger');
    }
    
    function warning($message){
        $this->message($message, 'warning');
    }
    
    function info(){
        $this->message($message, 'info');
    }
        
	function render() {
		return $this->_session->get($this->_flash);
	}
}