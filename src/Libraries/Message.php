<?php

namespace Esojtec\Messages\Libraries;

use Illuminate\Session\Store;

class Message {

    var $_flash = "esojtec.messages";

    function __Construct(Store $session){
        $this->_session = $session;
        $this->_session->remove($this->_flash);
    }

    function message($message, $type = 'info') {

        $this->_session->push($this->_flash,['message' => $message, 'type' => $type]);

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
    
    function info($message){
        $this->message($message, 'info');
    }
}