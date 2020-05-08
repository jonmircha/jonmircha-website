<?php require "app/j.php"; ?>
<?php header('HTTP/1.0 403 Forbidden'); header('Status: 403 Forbidden'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("\ ( o_o ) / | jonmircha", "Error 403: Prohibido. No tienes permiso para acceder a esta página."); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main class="flex-center">
    <article class="error">
      <span class="x3">\(o_o)/</span>
      <p>No tienes permiso para acceder a esta página.</p>
    </article>
  </main>
  <?php getFooter(); ?>
</body>
</html>
