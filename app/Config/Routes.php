<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/table', 'Pages::table');
$routes->get('/formtambah', 'Pages::formtambah');
$routes->get('/table/delete/(:num)', 'Pages::delete/$1');
