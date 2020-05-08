<?php require "app/j.php"; ?>
<?php header('HTTP/1.0 404 Not Found'); header('Status: 404 Not Found'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("( ; - ; ) | jonmircha", "Error 404: No Encontrado. Lamentablemente, esta página no existe."); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main class="flex-center">
    <article class="error">
      <span>(;-;)</span>
      <p>Lamentablemente, esta página no existe.</p>
    </article>
  </main>
  <?php getFooter(); ?>
</body>
</html>
