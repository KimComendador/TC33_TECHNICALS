<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('hash', function() {

    echo password_hash('admin123', PASSWORD_DEFAULT);

});

$routes->get('/', 'Auth::login');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::authenticate');

$routes->get('logout', 'Auth::logout');

$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
?>
