<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Incidencias
$routes->get('incidencias', 'Controller_incidencias::index');
$routes->get('incidencias/crear', 'Controller_incidencias::crear');
$routes->post('incidencias/guardar', 'Controller_incidencias::guardar');

// Áreas
$routes->get('areas', 'Controller_areas::index');
$routes->get('areas/crear', 'Controller_areas::crear');
$routes->post('areas/guardar', 'Controller_areas::guardar');

// Estados
$routes->get('estados', 'Controller_estados::index');
$routes->get('estados/crear', 'Controller_estados::crear');
$routes->post('estados/guardar', 'Controller_estados::guardar');
