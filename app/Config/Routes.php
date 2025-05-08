<?php

use App\Controllers\Dashboard\PaginaPrincipal;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', [Home::class, 'index']);
$routes->get('/', [PaginaPrincipal::class, 'index']);
