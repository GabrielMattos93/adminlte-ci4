<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group("admin", function ($routes) {
    $routes->get('/', 'Admin\Admin::index', ['as' => 'admin.home']);
});
