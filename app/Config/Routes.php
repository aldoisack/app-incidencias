<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get("/", "Controller_login::login");
$routes->get("/register", "Controller_login::register");
$routes->post("/register/guardar", "Controller_login::guardar");

// Incidencias
$routes->get('incidencias', 'Controller_incidencias::index');
$routes->get('incidencias/crear', 'Controller_incidencias::crear');
$routes->post('incidencias/guardar', 'Controller_incidencias::guardar');
$routes->get("incidencias/imprimirTicket/(:num)", "Controller_incidencias::imprimirTicket/$1");

// Oficinas
$routes->get('oficinas', 'Controller_oficinas::index');
$routes->get('oficinas/crear', 'Controller_oficinas::crear');
$routes->post('oficinas/guardar', 'Controller_oficinas::guardar');
$routes->get('oficinas/editar/(:num)', 'Controller_oficinas::editar/$1');
$routes->post('oficinas/actualizar', 'Controller_oficinas::actualizar');

// Técnicos
$routes->get('tecnicos', 'Controller_tecnicos::index');
$routes->get('tecnicos/crear', 'Controller_tecnicos::crear');
$routes->post('tecnicos/guardar', 'Controller_tecnicos::guardar');
$routes->get('tecnicos/editar/(:num)', 'Controller_tecnicos::editar');

// Perfiles
$routes->get("perfiles", "Controller_perfiles::index");
$routes->get("perfiles/crear", "Controller_perfiles::crear");
$routes->post("perfiles/guardar", "Controller_perfiles::guardar");
