<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/Home', 'Home::Home');
$routes->get('/ux', 'AdminController::Titi');
$routes->post('/create', 'AdminController::create');
$routes->post('admins/edit/(:num)', 'AdminController::edit/$1');
$routes->get('admins/delete/(:num)', 'AdminController::delete/$1');
