<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin', 'Admin\AdminDashboard::index');
$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/loginAuth', 'AdminController::loginAuth');
$routes->get('admin/logout', 'AdminController::logout');
$routes->get('admin/dashboard', 'AdminController::dashboard');


