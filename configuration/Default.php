<?php

/**
 * Descripción de AppConfiguration
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 05:26:23 PM
 */
return array(
    'application' => array(
        'directories' => array(
            'controllers' => '/api/controllers',
            'models' => '/api/models',
            'views' => '/views',
            'assets' => '/assets'
        )
    ),
    'routes' => array(
        'action' => 'index',
        'helpers' => array(
            'controller/:id' => array(
                'regexp' => '%^[0-9]+$%',
                'redirect' => 'controller/list'
            ),
        ),
        'blueprints' => array(
            '/' => 'GET',
            '/create' => 'POST',
            '/update' => 'POST',
            '/delete' => 'POST'
        )
    )
);
