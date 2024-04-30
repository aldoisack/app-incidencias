<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Incidencias
$routes->get('/', 'Controller_incidencias::index');
$routes->get('crear', 'Controller_incidencias::crear');

// Áreas
$routes->get('areas', 'Controller_areas::index');
$routes->get('areas/crear', 'Controller_areas::crear');
