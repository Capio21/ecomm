<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

     $routes->match(['get', 'post'], '/first', 'Home::index');
     $routes->match(['get', 'post'], '/product', 'Home::product');
     $routes->match(['get', 'post'], '/first', 'Home::first');
     $routes->match(['get', 'post'], '/ux', 'AdminController::insert');
     $routes->match(['get', 'post'], '/create', 'AdminController::create');
     $routes->match(['get', 'post'], 'admins/edit/(:num)', 'AdminController::edit/$1');
     $routes->match(['get', 'post'], 'admins/delete/(:num)', 'AdminController::delete/$1');
     $routes->match(['get', 'post'], '/register', 'UserController::register');
     $routes->match(['get', 'post'], '/', 'SigninController::login');
     $routes->match(['get', 'post'], '/user/store', 'Home::first');
     $routes->match(['get', 'post'], '/first', 'SigninController::login');
     $routes->match(['get', 'post'], '/signin/loginAuth', 'SigninController::loginAuth', ['filter' => 'authGuard']);
