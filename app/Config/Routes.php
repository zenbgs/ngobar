<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static function () {
  $data = [
    'title' => 'Dashboard',
    'slug_title' => 'Dashboard',
    'slug_sub_title' => 'Dashboard'
  ];
  return view('pages/dashboard/dashboard', $data);
});
$routes->get('/table', 'Pages::table');
$routes->add('/table/new', 'Pages::create');
$routes->get('/table/delete/(:num)', 'Pages::delete/$1');
