<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group("admin", function ($routes) {
    $routes->get('/', 'Admin::index', ['as' => 'admin.home']);
});
