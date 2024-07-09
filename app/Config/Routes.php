<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --------------------------------------------------
// INICIO
// --------------------------------------------------

$routes->get("ticket", "Controller_incidencias::crear");
$routes->post("incidencias/seguimiento", "Controller_incidencias::seguimiento");
$routes->get("principal", "Controller_principal::index");


// --------------------------------------------------
// LOGIN
// --------------------------------------------------

$routes->get("/", "Controller_login::login");
$routes->get("logout", "Controller_login::logout");
$routes->post("autenticar", "Controller_login::autenticar");

// --------------------------------------------------
// INCIDENCIAS
// --------------------------------------------------

$routes->get('incidencias/listar', 'Controller_incidencias::listar');
$routes->get('incidencias/crear', 'Controller_incidencias::crear');
$routes->get('incidencias/editar/(:num)', 'Controller_incidencias::editar/$1');

$routes->post('incidencias/guardar', 'Controller_incidencias::guardar');
$routes->post('incidencias/actualizar', 'Controller_incidencias::actualizar');

$routes->get("incidencias/tomar/(:num)", "Controller_incidencias::tomar/$1");
$routes->get("incidencias/finalizar/(:num)", "Controller_incidencias::finalizar/$1");

// --------------------------------------------------
// HISTORIAL
// --------------------------------------------------

$routes->get("historial/listar", "Controller_historial::listar");
$routes->get("historial/editar/(:num)", "Controller_historial::editar/$1");

// --------------------------------------------------
// OFICINAS
// --------------------------------------------------

$routes->get('oficinas/listar', 'Controller_oficinas::listar');
$routes->get('oficinas/crear', 'Controller_oficinas::crear');
$routes->get('oficinas/editar/(:num)', 'Controller_oficinas::editar/$1');

$routes->post('oficinas/guardar', 'Controller_oficinas::guardar');
$routes->post('oficinas/actualizar', 'Controller_oficinas::actualizar');

// --------------------------------------------------
// TÉCNICOS
// --------------------------------------------------

$routes->get('tecnicos/listar', 'Controller_tecnicos::listar');
$routes->get('tecnicos/crear', 'Controller_tecnicos::crear');
$routes->get('tecnicos/editar/(:num)', 'Controller_tecnicos::editar/$1');

$routes->post('tecnicos/guardar', 'Controller_tecnicos::guardar');
$routes->post('tecnicos/actualizar', 'Controller_tecnicos::actualizar');

// --------------------------------------------------
// CATEGORIAS
// --------------------------------------------------

$routes->get("categorias/listar", "Controller_categorias::listar");
$routes->get("categorias/crear", "Controller_categorias::crear");
$routes->get("categorias/editar/(:num)", "Controller_categorias::editar/$1");

$routes->post('categorias/guardar', 'Controller_categorias::guardar');
$routes->post('categorias/actualizar', 'Controller_categorias::actualizar');

// --------------------------------------------------
// EXTRAS 
// --------------------------------------------------

$routes->get("bitacora", "Controller_bitacora::index");
$routes->get("estadisticas", "Controller_estadisticas::index");
$routes->get("longpolling", "Controller_longpolling::checkNewRecords");
$routes->get("pdf/(:num)", "Controller_pdf::generatePdf/$1");
$routes->get("dashboard", "Controller_dashboard::index");
$routes->get("cambiar_contrasenia/(:num)", "Controller_tecnicos::cambiar_contrasenia/$1");
$routes->post("actualizar_contrasenia", "Controller_tecnicos::actualizar_contrasenia");
$routes->get("asignar_tecnico/(:num)", "Controller_asignaciones::index/$1");
$routes->get("sse", "Controller_sse::index");
$routes->setAutoRoute(true);
