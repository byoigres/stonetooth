<?php

require_once 'lib/Configuration.php';
require_once 'lib/Router.php';

/**
 * Descripción de Stonetooth
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 03:49:41 PM
 */

/**
 * Descripción de Stonetooth
 */
class Stonetooth {
    private $configuration;
    
    const DS = DIRECTORY_SEPARATOR;

    public function __construct() {
        
    }

    public function init($config) {
        $this->configuration = $config;
        
        $config = require_once 'configuration/Configuration.php';

        $router = new Router();

        $router->processRequest();
        
        var_dump($this->configuration);
    }

    public function __destruct() {
        
    }

}
