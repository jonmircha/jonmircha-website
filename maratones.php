<?php require "app/j.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("Maratones 🏃🏻‍ | jonmircha", "Corre Jon Corre", HOME . "img/jonmircha-maratones.jpg"); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main>
    <h1 class="text-center">🏃🏻‍ Corre Jon Corre 🏃🏻‍</h1>
    <div class="full-width">
      <img class="marathon-poster" src="img/jonmircha-maratones.jpg" alt="🏃🏻‍ Corre Jon Corre 🏃🏻‍" loading="lazy">
    </div>
    <?php getMarathons(); ?>
  </main>
  <?php getFooter(); ?>
</body>
</html>
