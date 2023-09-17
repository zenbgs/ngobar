<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/table', 'Pages::table');
$routes->add('/table/new', 'Pages::create');
$routes->get('/table/delete/(:num)', 'Pages::delete/$1');
