<?php require "app/j.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas("Proyectos | jonmircha", "En qué cosas me he involucrado."); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main>
    <h1 class="text-center">Proyectos</h1>
    <details>
      <summary>
        <h2>Como profesional</h2>
      </summary>
      <?php getAsProfessional(); ?>
    </details>
    <details>
      <summary>
        <h2>Como profesor</h2>
      </summary>
      <?php getAsTeacher(); ?>
    </details>
    <details>
      <summary>
        <h2>Como microemprendedor</h2>
      </summary>
      <?php getAsEntrepreneur(); ?>
    </details>
    <details>
      <summary>
        <h2>Código open source</h2>
      </summary>
      <?php getOpenSource(); ?>
    </details>
    <details>
      <summary>
        <h2>Cursos en YouTube</h2>
      </summary>
      <?php getCourses(); ?>
    </details>
  </main>
  <?php getFooter(); ?>
</body>
</html>
