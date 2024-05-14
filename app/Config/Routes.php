<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get("/", "Controller_login::index");

// Incidencias
$routes->get('incidencias', 'Controller_incidencias::index');
$routes->get('incidencias/crear', 'Controller_incidencias::crear');
$routes->post('incidencias/guardar', 'Controller_incidencias::guardar');

// Oficinas
$routes->get('oficinas', 'Controller_oficinas::index');
$routes->get('oficinas/crear', 'Controller_oficinas::crear');
$routes->post('oficinas/guardar', 'Controller_oficinas::guardar');

// Técnicos
$routes->get('tecnicos', 'Controller_tecnicos::index');
$routes->get('tecnicos/crear', 'Controller_tecnicos::crear');
$routes->post('tecnicos/guardar', 'Controller_tecnicos::guardar');
