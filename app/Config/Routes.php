<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [\App\Controllers\Inicio::class, 'index']);
$routes->get('historia', [\App\Controllers\Inicio::class, 'historia']);
$routes->get('galeria', [\App\Controllers\Inicio::class, 'galeria']);
$routes->get('campeonatos', [\App\Controllers\Inicio::class, 'campeonatos']);
$routes->get('eventos', [\App\Controllers\Inicio::class, 'eventos']);
$routes->get('contacto', [\App\Controllers\Inicio::class, 'contacto']);