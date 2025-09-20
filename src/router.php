<?php
// src/router.php

// Resolve route from query string (?r=clientes) or default to 'home'
$route = $_GET['r'] ?? 'home';

// Register routes -> map to page identifiers
$routes = [
  'home'            => 'home',
  'login'           => 'login',
  'clientes'        => 'clientes',
  'clientes_nuevo'  => 'clientes_nuevo',
  'viajes'          => 'viajes',
  'reservas'        => 'reservas',
  'proveedores'     => 'proveedores',
  'reportes'        => 'reportes',
  'ajustes'         => 'ajustes',
];

$page = $routes[$route] ?? '404';

// Render the page with a tiny view system
$view_file = __DIR__ . '/../views/pages/' . $page . '.php';
$header = __DIR__ . '/../views/layout/header.php';
$footer = __DIR__ . '/../views/layout/footer.php';

if (!file_exists($view_file)) {
  $view_file = __DIR__ . '/../views/pages/404.php';
}

$title_map = [
  'home' => 'Inicio',
  'login' => 'Acceso',
  'clientes' => 'Clientes',
  'clientes_nuevo' => 'Nuevo Cliente',
  'viajes' => 'Viajes',
  'reservas' => 'Reservas',
  'proveedores' => 'Proveedores',
  'reportes' => 'Reportes',
  'ajustes' => 'Ajustes',
  '404' => 'No encontrado'
];

$page_title = $title_map[$page] ?? 'Agencia Andina CRM';

include $header;
include $view_file;
include $footer;
