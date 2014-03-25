<?php

require_once 'lib/Configuration.php';
require_once 'lib/AutoLoader.php';

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
    private $localConfiguration;
    private $autoload;

    public function __construct() {
        
    }

    public function init($appConfig) {
        $this->appConfiguration['application'] = $appConfig;
        $this->localConfiguration= require_once dirname(__FILE__) . '/configuration/Default.php';
        
        $this->autoload = new AutoLoader(implode("; ", $this->localConfiguration['paths']));
        
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
        echo "Router loaded<br/>";

        $router->processRequest();
        
        echo "<br/>Paths: " . get_include_path();
        
        $controller = new UserController();
        
        echo "<br/>UserController loaded<br/>";
        
        $controller->indexAction();
    }

    public function __destruct() {
        
    }

}
