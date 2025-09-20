# Agencia Andina CRM (maqueta PHP)

Pequeña maqueta sin funcionalidad de un CRM para una empresa de turismo. Hecha en PHP "puro y duro", lista para correr con el servidor embebido de PHP.

## Cómo ejecutar
1) Requisitos: PHP 8+ instalado.
2) En la terminal, ubícate en esta carpeta y ejecuta:
   php -S localhost:80 -t public
3) Abre http://localhost:80 en tu navegador.

## Estructura
- public/index.php  → Inicio
- src/router.php    → Resolución de rutas (?r=clientes, etc.)
- views/layout/    → Header y footer
- views/pages/     → Vistas de cada sección (estáticas)
- assets/css/      → Estilos

> Todo es estático / de demostración. Los botones de acción están deshabilitados a propósito.
