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
     $routes->get('/register', '\App\Controllers\UserController::register');
     $routes->post('/user/store', '\App\Controllers\UserController::store');
     $routes->get('/', '\App\Controllers\SigninController::login');
     $routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth', ['filter' => 'authGuard']);
