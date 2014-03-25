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

    private $appRoutes;
    private $requestedURI;
    private $controller;
    private $action;
    private $requestedMethod;

    const REQUEST_URI = 'PATH_INFO'; # 'REQUEST_URI'
    const REQUEST_METHOD = 'REQUEST_METHOD';

    public function __construct($appRoutes = array()) {
        $this->appRoutes = $appRoutes;
    }

    public function processRequest() {
        $requestedURI = filter_input(INPUT_SERVER, self::REQUEST_URI);
        
        if($requestedURI === NULL) {
            $requestedURI = '/';
        }

        $this->requestedURI = $requestedURI;

        $requestedMethod = filter_input(INPUT_SERVER, self::REQUEST_METHOD);

        if($requestedMethod === NULL) {
            $requestedMethod = 'GET';
        }

        $this->requestedMethod = $requestedMethod;
        
        /*
        echo "Requested URI: {$this->requestedURI}<br/>";

        $result = preg_match_all("%/([A-Za-z0-9/]+)/([^/]+)/?$%", $this->requestedURI);
        
        echo "/([A-Za-z0-9/]+)/([^/]+)/?$ => $result<br/>";

        $result = preg_match_all("%^/[A-Za-z0-9]+/[A-Za-z0-9]+$%", $this->requestedURI);

        echo "^/[A-Za-z0-9]+/[A-Za-z0-9]+?$ => $result<br/>";

        $result = preg_match_all("%^/[A-Za-z0-9]+/?$%", $this->requestedURI);

        echo "^/[A-Za-z0-9]+/?$ => $result<br/>";

        $result = preg_match_all("%^/$%", $this->requestedURI);

        echo "^/$ => $result<br/>";
        
        
        echo "<pre>";
        var_dump(array_filter(explode("/", $requestedURI)));
        echo "</pre>";
        */
        $this->matchRoutes();
    }

    private function matchRoutes() {
        foreach (array_keys($this->appRoutes) as $route) {
            if($this->requestedURI === $route) {
                echo "Route matched: $route";
                break;
            }
        }
    }
    
    public function matches() {
        
    }

    public function __destruct() {
        
    }

}
