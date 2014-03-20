<?php

/**
 * Descripción de Router
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 04:14:00 PM
 */

/**
 * Descripción de Router
 */
class Router {

    private $requestedURI;
    private $requestedMethod;

    const REQUEST_URI = 'PATH_INFO'; # 'REQUEST_URI'
    const REQUEST_METHOD = 'REQUEST_METHOD';

    public function __construct() {
        
    }

    public function processRequest() {
        $this->processURI();
        $this->processMethod();

        var_dump($this);
    }

    private function processURI() {
        $requestedURI = filter_input(INPUT_SERVER, self::REQUEST_URI);
        
        if($requestedURI === NULL) {
            $requestedURI = '/';
        }
        
        $this->requestedURI = $requestedURI;
    }
    
    private function processMethod() {
        $requestedMethod = filter_input(INPUT_SERVER, self::REQUEST_METHOD);
        
        if($requestedMethod === NULL) {
            $requestedMethod = 'GET';
        }
        
        $this->requestedMethod = $requestedMethod;
    }

    public function __destruct() {
        
    }

}
