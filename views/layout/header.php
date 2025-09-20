<?php
// views/layout/header.php
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title ?? APP_NAME) ?> · <?= APP_NAME ?></title>
  <link rel="stylesheet" href="/../assets/css/styles.css">
</head>
<body>
<header class="topbar">
  <div class="brand">
    <div class="logo">🗺️</div>
    <div class="title"><?= APP_NAME ?></div>
  </div>
  <nav class="nav">
    <a href="?r=home">Inicio</a>
    <a href="?r=clientes">Clientes</a>
    <a href="?r=viajes">Viajes</a>
    <a href="?r=reservas">Reservas</a>
    <a href="?r=proveedores">Proveedores</a>
    <a href="?r=reportes">Reportes</a>
    <a href="?r=ajustes">Ajustes</a>
  </nav>
  <div class="session">
    <a class="btn" href="?r=login">Iniciar sesión</a>
  </div>
</header>
<main class="container">
