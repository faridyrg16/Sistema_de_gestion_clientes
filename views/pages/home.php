<?php
// views/pages/home.php
?>
<section class="hero">
  <h1>Bienvenido a <?= APP_NAME ?></h1>
  <p class="muted">Tu brújula para viajeros: clientes, reservas y rutas, todo en orden.</p>

  <div class="grid">
    <a class="card" href="?r=clientes">
      <h3>Clientes</h3>
      <p>Explora y registra viajeros, idiomas, preferencias y contactos.</p>
    </a>
    <a class="card" href="?r=viajes">
      <h3>Viajes</h3>
      <p>Catálogo de destinos, fechas, cupos y precios.</p>
    </a>
    <a class="card" href="?r=reservas">
      <h3>Reservas</h3>
      <p>Seguimiento de ventas, estados y comprobantes.</p>
    </a>
    <a class="card" href="?r=proveedores">
      <h3>Proveedores</h3>
      <p>Hoteles, guías, transporte: tus aliados en ruta.</p>
    </a>
  </div>
</section>
