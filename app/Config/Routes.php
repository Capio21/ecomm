<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

     $routes->get('/', 'Home::index');
     $routes->get('/product', 'Home::product');
     $routes->get('/Home', 'Home::Home');
     $routes->get('/ux', 'AdminController::insert');
     $routes->post('/create', 'AdminController::create');
     $routes->post('admins/edit/(:num)', 'AdminController::edit/$1');
     $routes->get('admins/delete/(:num)', 'AdminController::delete/$1');
     $routes->get('Login/Register', 'UserController::register' ,['filter' => 'authGuard']);
     $routes->get('Login/Signin', 'UserController::signin' ,['filter' => 'authGuard']); // You need to create this method in your controller
