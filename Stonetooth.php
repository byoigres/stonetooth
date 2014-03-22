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
    private $appConfiguration;
    private $configuration;
    
    const DS = DIRECTORY_SEPARATOR;

    public function __construct() {
        
    }

    public function init($appConfig) {
        $this->appConfiguration['application'] = $appConfig;

        /*
        echo "<pre>";
        var_dump($this->appConfiguration);
        echo "</pre>";
        exit(0);
        # */

        # $globalConfig = require_once 'configuration/Configuration.php';
        
        $this->startRouting();

    }

    private function loadConfiguration() {
        
    }

    private function startRouting() {

        $appRoutes = require_once $this->appConfiguration['application']['appPath'] . '/config/Routes.php';

        echo "<pre>";
        var_dump($appRoutes);
        echo "</pre>";

        $router = new Router($appRoutes);

        $router->processRequest();

        /*
        echo "<pre>";
        var_dump($this->appConfiguration);
        echo "</pre>";
        # */
    }

    public function __destruct() {
        
    }

}
