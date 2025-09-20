<?php
// views/pages/clientes_nuevo.php
?>
<section class="section">
  <h2>Nuevo Cliente</h2>
  <form class="form grid-2" method="post" action="#">
    <label>Nombres
      <input type="text" name="nombres" required>
    </label>
    <label>Apellidos
      <input type="text" name="apellidos" required>
    </label>
    <label>Email
      <input type="email" name="email" required>
    </label>
    <label>Teléfono
      <input type="tel" name="telefono">
    </label>
    <label>País
      <input type="text" name="pais" placeholder="Perú">
    </label>
    <label>Idiomas
      <input type="text" name="idiomas" placeholder="Español, Inglés">
    </label>
    <label>Preferencias
      <textarea name="preferencias" rows="3" placeholder="Aventura, cultura, gastronomía"></textarea>
    </label>
    <div class="actions">
      <button class="btn primary" type="submit" disabled>Guardar (maqueta)</button>
      <a class="btn" href="?r=clientes">Cancelar</a>
    </div>
  </form>
</section>
