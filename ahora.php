<?php require "app/j.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("Ahora | jonmircha", "¿Qué estoy haciendo ahora mismo?"); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main>
    <h1 class="text-center">¿Qué estoy haciendo ahora mismo?</h1>
    <p>
      Como esencialista, aprecio mucho mi calidad de vida. Respeto mi tiempo y el de los demás.
    </p>
    <p>
      Profesionalmente no me comprometo a trabajar en más proyectos de los que pueda contar con mi mano 🖐🏻.
    </p>
    <p>
      <i>
        Esto me permite mantenerme enfocado e invertir de la manera más inteligente posible mi tiempo y energía para dar la mayor contribución posible...
      </i>
    </p>
    <p class="text-right">
      <b><i>... menos pero mejor.</i></b>
    </p>
    <p>Actualmente enfocado en:</p>
    <?php getNow(); ?>
  </main>
  <?php getFooter(); ?>
</body>
</html>
