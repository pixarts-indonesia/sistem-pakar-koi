<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('', ['namespace' => 'App\Modules\Frontend\Controllers'], function($subroutes){

	/*** Route for Auth ***/
	$subroutes->add('/login', 'Auth::login');

	/*** Route for Daftar ***/
	$subroutes->add('/daftar', 'Auth::daftar');

	/*** Route for Forgot Password ***/
	$subroutes->add('/forgot_password', 'Auth::forgot_password');

	/*** Route for Home ***/
	$subroutes->add('/', 'Home::index');

});
