<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Profil::index');
$routes->get('praktikum-oop', 'PraktikumOop::index');
$routes->get('sapa', 'Sapa::index');
$routes->get('sapa/(:segment)', 'Sapa::nama/$1');
$routes->get('kegiatan', 'Kegiatan::index');
$routes->get('kegiatan/(:num)', 'Kegiatan::detail/$1');
