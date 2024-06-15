<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get("/", "Controller_login::login");
$routes->post("/autenticar", "Controller_login::autenticar");
$routes->get("/register", "Controller_login::register");
$routes->post("/register/guardar", "Controller_login::guardar");
$routes->get("/cerrar_sesion", "Controller_login::cerrar_sesion");

// -----------------------------------------------------------------------
// INCIDENCIAS
// -----------------------------------------------------------------------

$routes->get('incidencias/crear', 'Controller_incidencias::crear');
$routes->get('incidencias/leer', 'Controller_incidencias::leer');
$routes->get('incidencias/actualizar/(:num)', 'Controller_incidencias::actualizar/$1');

$routes->post('incidencias/guardar', 'Controller_incidencias::guardar');
$routes->post('incidencias/guardar_cambios', 'Controller_incidencias::guardar_cambios');

$routes->get("incidencias/imprimirTicket/(:num)", "Controller_incidencias::imprimirTicket/$1");
$routes->get("incidencias/finalizar/(:num)", "Controller_incidencias::finalizar/$1");

$routes->get("historial", "Controller_incidencias::historial");

// -----------------------------------
// Oficinas
// -----------------------------------

$routes->get('oficinas/crear', 'Controller_oficinas::crear');
$routes->get('oficinas/leer', 'Controller_oficinas::leer');
$routes->get('oficinas/actualizar/(:num)', 'Controller_oficinas::actualizar/$1');

$routes->post('oficinas/guardar', 'Controller_oficinas::guardar');
$routes->post('oficinas/guardar_cambios', 'Controller_oficinas::guardar_cambios');

// -----------------------------------
// Técnicos
// -----------------------------------

$routes->get('tecnicos/crear', 'Controller_tecnicos::crear');
$routes->get('tecnicos/leer', 'Controller_tecnicos::leer');
$routes->get('tecnicos/actualizar/(:num)', 'Controller_tecnicos::actualizar/$1');

$routes->post('tecnicos/guardar', 'Controller_tecnicos::guardar');
$routes->post('tecnicos/guardar_cambios', 'Controller_tecnicos::guardar_cambios');

// -----------------------------------------------------------------------
// EXTRAS 
// -----------------------------------------------------------------------

$routes->get("incidencias/obtener_oficina/(:num)", "Controller_incidencias::obtener_oficina/$1");
$routes->get("bitacora", "Controller_bitacora::index");

// Perfiles
// $routes->get("perfiles", "Controller_perfiles::index");
// $routes->get("perfiles/crear", "Controller_perfiles::crear");
// $routes->post("perfiles/guardar", "Controller_perfiles::guardar");
