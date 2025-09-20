<?php
// views/pages/login.php
?>
<section class="section">
  <h2>Acceso</h2>
  <form class="form" method="post" action="#">
    <label>Correo
      <input type="email" name="email" placeholder="tú@agencia.com" required>
    </label>
    <label>Contraseña
      <input type="password" name="password" placeholder="••••••••" required>
    </label>
    <button class="btn primary" type="submit" disabled>Entrar (maqueta)</button>
  </form>
  <p class="muted">* Esta es una maqueta; el botón está deshabilitado.</p>
</section>
