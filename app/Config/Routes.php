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
$routes->group('table', static function ($routes) {
  $routes->get('', 'Pages::table');
  $routes->post('add', 'Pages::create');
  $routes->delete('delete/(:num)', 'Pages::delete/$1');
  $routes->post('edit', 'Pages::edit/$1');
});
