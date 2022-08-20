<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('frontend', ['namespace' => 'App\Modules\Frontend\Controllers'], function($subroutes){

    /*** Route for Home ***/
    $subroutes->add('home', 'Home::index');

});
