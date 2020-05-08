<?php require "app/j.php"; ?>
<?php
/* Este código es para poder acceder a mis directorios de manera cómoda, proteger los que no tengan archivo index.html o index.php y lo tuve que escribir por las reglas que tengo en el .htaccess para las urls amigables del blog */

if ( isset($_GET["id"]) ) {
  if (is_dir($_GET["id"])) {
    if ( file_exists($_GET["id"] . "/index.html") ) {
      header("Location: index.html");
    } else if ( file_exists($_GET["id"] . "/index.php") ) {
      header("Location: index.php");
    } else {
      header("Location: ". HOME . "/403");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    !isset($_GET["id"])
      ? getMetas("Notas | jonmircha", "Siempre tomo nota de todo lo que me pueda servir o me haga crecer como persona o profesional, aquí te lo comparto.")
      : getMetasNote();
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism-okaidia.min.css">
</head>
<body>
  <?php getHeader(); ?>
  <main>
    <?php !isset($_GET["id"]) ? getNotes() : getNote(); ?>
  </main>
  <?php getFooter(); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/prism.min.js"></script>
</body>
</html>
