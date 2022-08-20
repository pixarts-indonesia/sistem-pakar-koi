<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('', ['namespace' => 'App\Modules\Frontend\Controllers'], function($subroutes){

    /*** Route for Home ***/
    $subroutes->get('/', 'Home::index');

});
