<?php
// views/pages/ajustes.php
?>
<section class="section">
  <h2>Ajustes</h2>
  <form class="form">
    <label>Nombre de la agencia
      <input type="text" value="Agencia Andina" />
    </label>
    <label>Moneda por defecto
      <select>
        <option>USD</option>
        <option>PEN</option>
        <option>EUR</option>
      </select>
    </label>
    <label>Impuestos (%)
      <input type="number" value="18" />
    </label>
    <button class="btn primary" type="button" disabled>Guardar (maqueta)</button>
  </form>
</section>
