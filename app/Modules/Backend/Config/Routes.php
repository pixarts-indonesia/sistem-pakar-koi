<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('backend', ['namespace' => 'App\Modules\Backend\Controllers'], function($subroutes){

    /*** Route for Dashboard ***/
    $subroutes->add('dashboard', 'Dashboard::index');

});
