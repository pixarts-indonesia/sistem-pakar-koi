<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('', ['namespace' => 'App\Modules\Frontend\Controllers'], function($subroutes){

	/*** Route for Akun ***/
	$subroutes->add('akun', 'Akun::index');

	/*** Route for Auth ***/
	$subroutes->add('login', 'Auth::login');
	$subroutes->add('forgot_password', 'Auth::forgot_password');
	$subroutes->add('daftar', 'Auth::daftar');
	$subroutes->add('logout', 'Auth::logout');

	/*** Route for Diagnosa ***/
	$subroutes->add('diagnosa', 'Diagnosa::index');

	/*** Route for Home ***/
	$subroutes->add('/', 'Home::index');

	/*** Route for Responden ***/
	$subroutes->add('responden', 'Responden::index');

});