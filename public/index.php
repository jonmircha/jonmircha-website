<?php require_once './app/helpers/routes.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once './app/helpers/meta_tags.php'; ?>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="<?php echo $_GET['page']; ?>">
  <?php require_once $_GET['content']; ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114853516-1"></script>
  <script src="/js/script.js"></script>
</body>
</html>
