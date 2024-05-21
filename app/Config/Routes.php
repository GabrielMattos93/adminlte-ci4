<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::index');

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Dashboard::index');
    // $routes->get('news', 'Admin/NewsController::index');
    // $routes->get('news/create', 'Admin/NewsController::create');
    // // $routes->post('news/store', 'Admin/NewsController::store');
    // $routes->get('categories', 'Admin/CategoryController::index');
    // $routes->get('categories/create', 'Admin/CategoryController::create');
    // $routes->post('categories/store', 'Admin/CategoryController::store');
});
