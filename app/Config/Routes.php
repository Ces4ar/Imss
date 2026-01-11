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
$routes->get('salidas', 'salidas::index');
$routes->post('salidas/registrar', 'salidas::registrar');

$routes->get('usuarios', 'Usuarios::crear', ['filter' => 'auth']);
$routes->post('usuarios/guardar', 'Usuarios::guardar', ['filter' => 'auth']);

$routes->get('perfil', 'perfil::index');
$routes->post('perfil/actualizar', 'perfil::actualizar');








$routes->get('/welcome', 'Home::welcome');