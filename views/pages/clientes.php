<?php
// views/pages/clientes.php
?>
<section class="section">
  <div class="section-header">
    <h2>Clientes</h2>
    <a class="btn primary" href="?r=clientes_nuevo">Nuevo</a>
  </div>

  <form class="toolbar" method="get" action="">
    <input type="hidden" name="r" value="clientes">
    <input type="search" name="q" placeholder="Buscar por nombre, email..." />
    <button class="btn" type="submit" disabled>Buscar</button>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th>#</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>País</th><th>Preferencias</th><th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td><td>Ana Quispe</td><td>ana@example.com</td><td>+51 999 111 222</td><td>Perú</td><td>Costa, gourmet</td>
        <td><a class="link" href="#">Ver</a></td>
      </tr>
      <tr>
        <td>2</td><td>Luis Huamán</td><td>lhuaman@example.com</td><td>+51 988 777 666</td><td>Perú</td><td>Aventura, trekking</td>
        <td><a class="link" href="#">Ver</a></td>
      </tr>
    </tbody>
  </table>
</section>
