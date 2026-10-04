<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =====================================================
// PUBLIC ROUTES
// =====================================================

$routes->get('/', 'TaskController::index');

$routes->get('tasks', 'TaskController::index');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');

$routes->get('logout', 'Auth::logout');

$routes->group('', ['filter'=>'auth'], function($routes){

    $routes->get('tasks/new', 'TaskController::create');

    $routes->post('tasks/store', 'TaskController::store');

    $routes->get('tasks/edit/(:num)', 'TaskController::edit/$1');

    $routes->post('tasks/update/(:num)', 'TaskController::update/$1');

    $routes->get('tasks/delete/(:num)', 'TaskController::delete/$1');

});