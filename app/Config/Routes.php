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
  $routes->get('anggota', 'Anggota::table');
  $routes->post('anggota/add', 'Anggota::create');
  $routes->delete('anggota/delete/(:num)', 'Anggota::delete/$1');
  $routes->post('anggota/edit', 'Anggota::edit/$1');
});

$routes->group('table', static function ($routes) {
  $routes->get('project', 'Project::table');
  $routes->post('project/add', 'Project::create');
  $routes->delete('project/delete/(:num)', 'Project::delete/$1');
  $routes->post('project/edit', 'Project::edit/$1');
});
