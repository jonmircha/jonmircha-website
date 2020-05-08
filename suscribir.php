<?php
  require "app/j.php";
  if (isset($_GET["mood"])) {
    $res = saveSubscriber();
  } else {
    header("Location: " . HOME);
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("Lista de correos | jonmircha", "Espero que disfrutes el contenido. Te interesa algún tema en particular y quieres que lo aborde, me encantaría escuchar tu propuesta."); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main class="flex-center">
    <article>
      <h1><?=$res['msg'];?></h1>
      <img src="<?=$res['img'];?>" alt="¡Gracias!" loading="lazy">
    </article>
  </main>
  <?php getFooter(); ?>
</body>
</html>
