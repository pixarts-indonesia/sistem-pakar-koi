<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('', ['namespace' => 'App\Modules\Frontend\Controllers'], function($subroutes){

	/*** Route for Akun ***/
	$subroutes->add('akun', 'Akun::index');
	$subroutes->add('akun/ubah', 'Akun::update');
	$subroutes->match(['add', 'put'], 'akun/forgot-password', 'Akun::forgotPassword');

	/*** Route for Auth ***/
	$subroutes->add('login', 'Auth::login');
	$subroutes->add('daftar', 'Auth::daftar');
	$subroutes->add('logout', 'Auth::logout');
	$subroutes->match(['add', 'put'], 'forgot-password', 'Auth::forgotPassword');

	/*** Route for Diagnosa ***/
	$subroutes->add('diagnosa', 'Diagnosa::index');
	$subroutes->get('diagnosa/hasil/(:any)', 'Diagnosa::hasil/$1');

	/*** Route for Home ***/
	$subroutes->add('/', 'Home::index');

	/*** Route for Responden ***/
	$subroutes->add('responden', 'Responden::index');

});