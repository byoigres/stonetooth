<?php

/**
 * Descripción de AutoLoader
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 05:22:36 PM
 */

/**
 * Descripción de AutoLoader
 */
class AutoLoader {
    private $paths;

    public function __construct($includepaths) {
        $this->paths = $includepaths;
        spl_autoload_register(array($this, 'load'));
    }
    
    public function load($class) {
        echo "<br/>---------------------<br/>";
        echo "Loading class $class from {$this->paths}<br/>";
        
        set_include_path($this->paths);
        spl_autoload_extensions(".php");
        spl_autoload($class);
        
        echo "<br/>---------------------<br/>";
    }

    public function __destruct() {
        
    }

}
