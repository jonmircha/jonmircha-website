<?php require_once './app/api/subscriber.php'; ?>
<main>
  <?php require_once './app/components/logo.php'; ?>
  <p><?php echo $res; ?></p>
  <a href="<?php echo $router->generate('home'); ?>"><i class="fa fa-home"></i></a>
</main>
