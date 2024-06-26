<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::auth', ['as' => 'login.auth']);
$routes->get('login/destroy', 'Auth::destroy', ['as' => 'login.destroy']);

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Dashboard::index');
});
