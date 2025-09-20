<?php
// public/index.php
declare(strict_types=1);

// Very tiny front controller.
// Run with: php -S localhost:8000 -t public
// VSCode: install PHP extension (optional), open this folder, run the above command in terminal.

session_start();

// Simple autoload for src/ files (not really needed but nice to have).
spl_autoload_register(function ($class) {
  $file = __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
  if (file_exists($file)) require $file;
});

// Basic config (adjust as needed)
define('APP_NAME', 'Agencia Andina CRM');
define('APP_URL', '/');

// Basic router
require __DIR__ . '/../src/router.php';
