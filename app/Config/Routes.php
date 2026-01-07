<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('Tables/simple', 'Tables::simple');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('plantilla', 'Auth::plantilla');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('tables/simple', 'Tables::simple', ['filter' => 'auth']);
$routes->get('salidas', 'Salidas::index');
$routes->post('salidas/registrar', 'Salidas::registrar');

$routes->get('usuarios', 'Usuarios::crear', ['filter' => 'auth']);
$routes->post('usuarios/guardar', 'Usuarios::guardar', ['filter' => 'auth']);

$routes->get('perfil', 'Perfil::index');
$routes->post('perfil/actualizar', 'Perfil::actualizar');








$routes->get('/welcome', 'Home::welcome');