<main>
  <?php require_once './app/components/logo.php'; ?>
  <h2><?php echo $_GET['meta_title']; ?></h2>
  <h3>( · . · )</h3>
  <figure>
    <figcaption>
      <?php echo $_GET['meta_description']; ?>
		</figcaption>
    <img src="./img/kEnAi.png" alt="kEnAi">
	</figure>
  <a href="<?php echo $router->generate('home'); ?>"><i class="fa fa-home"></i></a>
</main>
