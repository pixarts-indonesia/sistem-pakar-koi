<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Backend\Controllers'], function($subroutes){

	/*** Route for Auth ***/
	$subroutes->add('login', 'Auth::login');
	$subroutes->add('logout', 'Auth::logout');

	/*** Route for Dashboard ***/
	$subroutes->add('', 'Dashboard::index');

	/*** Route for Gejala ***/
	$subroutes->add('gejala', 'Gejala::index');
	$subroutes->get('gejala/view/(:num)', 'Gejala::view/$1');
	$subroutes->match(['add', 'delete'], 'gejala/delete/(:num)', 'Gejala::delete/$1');
	$subroutes->match(['add', 'post'], 'gejala/create', 'Gejala::create');
	$subroutes->match(['add', 'put'], 'gejala/update/(:num)', 'Gejala::update/$1');

	/*** Route for Histori ***/
	$subroutes->add('histori', 'Histori::index');

	/*** Route for Histori Responden ***/
	$subroutes->add('hasil-responden', 'HistoriResponden::index');
	$subroutes->match(['add', 'delete'], 'hasil-responden/delete/(:num)', 'HistoriResponden::delete/$1');

	/*** Route for Penyakit ***/
	$subroutes->add('penyakit', 'Penyakit::index');
	$subroutes->get('penyakit/view/(:num)', 'Penyakit::view/$1');
	$subroutes->match(['add', 'delete'], 'penyakit/delete/(:num)', 'Penyakit::delete/$1');
	$subroutes->match(['add', 'post'], 'penyakit/create', 'Penyakit::create');
	$subroutes->match(['add', 'put'], 'penyakit/update/(:num)', 'Penyakit::update/$1');

	/*** Route for Responden ***/
	$subroutes->add('responden', 'Responden::index');
	$subroutes->match(['add', 'put'], 'responden/update/(:num)', 'Responden::update/$1');
	$subroutes->match(['add', 'post'], 'responden/create', 'Responden::create');
	$subroutes->match(['add', 'delete'], 'responden/delete/(:num)', 'Responden::delete/$1');

	/*** Route for Rules ***/
	$subroutes->add('rules', 'Rules::index');
	$subroutes->get('rules/view/(:num)', 'Rules::view/$1');
	$subroutes->match(['add', 'put'], 'rules/update/(:num)', 'Rules::update/$1');
	$subroutes->match(['add', 'post'], 'rules/create', 'Rules::create');
	$subroutes->match(['add', 'delete'], 'rules/delete/(:num)', 'Rules::delete/$1');

	/*** Route for User ***/
	$subroutes->add('user', 'User::index');
	$subroutes->get('user/view/(:num)', 'User::view/$1');
	$subroutes->match(['add', 'put'], 'user/forgot-password/(:num)', 'User::forgotPassword/$1');

});