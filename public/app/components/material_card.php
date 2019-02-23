<article class="MaterialCard <?php echo $color_card; ?>">
  <header class="MaterialCard-header">
      <h2><?php echo $title; ?></h2>
      <strong>
        <?php if ( $type === 'free' ) { ?>
          <i class="fas fa-gift"></i>
          Gratis
        <?php } ?>
        <?php if ( $type === 'pay' ) { ?>
          <i class="far fa-money-bill-alt"></i>
          Pago
        <?php } ?>
        <?php if ( $type === 'vlog' ) { ?>
          <i class="fab fa-youtube"></i>
          Vlog
        <?php } ?>
        <?php if ( $type === 'site' ) { ?>
          <i class="fas fa-sitemap"></i>
          Sitio Web
        <?php } ?>
        <?php if ( $type === 'app' ) { ?>
          <i class="fas fa-rocket"></i>
          Aplicación Web
        <?php } ?>
        <?php if ( $type === 'code' ) { ?>
          <i class="fas fa-code"></i>
          Código
        <?php } ?>
        <?php if ( $type === 'book' ) { ?>
          <i class="fas fa-book"></i>
          Teoría
        <?php } ?>
        <?php if ( $type === 'community' ) { ?>
          <i class="fas fa-globe"></i>
          Comunidad
        <?php } ?>
        <?php if ( $type === 'startup' ) { ?>
          <i class="fas fa-paper-plane"></i>
          Emprendimiento
        <?php } ?>
      </strong>
  </header>
  <figure class="MaterialCard-figure">
    <div class="MaterialCard-image  lozad-parent">
        <img class="lozad" data-src="<?php echo $poster; ?>">
    </div>
    <figcaption class="MaterialCard-description">
      <?php echo $description; ?>
    </figcaption>
  </figure>
  <a class="MaterialCard-btnAction">
      <i class="fa fa-bars"></i>
  </a>
  <footer class="MaterialCard-footer">
    <ul>
      <?php if ( $url !== null ) { ?>
        <li>
          <span>Accede</span>
          <a href="<?php echo $url; ?>" class="fas fa-sign-in-alt" target="_blank"></a>
        </li>
      <?php } ?>
      <?php if ( $slides !== null ) { ?>
        <li>
          <span>Teoría</span>
          <a href="<?php echo $slides; ?>" class="fas fa-book" target="_blank"></a>
        </li>
      <?php } ?>
      <?php if ( $resources !== null ) { ?>
        <li>
          <span>Recursos</span>
          <a href="<?php echo $resources; ?>" class="fas fa-archive" download></a>
        </li>
      <?php } ?>
      <?php if ( $code !== null ) { ?>
        <li>
          <span>Códigos</span>
          <a href="<?php echo $code; ?>" class="fas fa-code" target="_blank"></a>
        </li>
      <?php } ?>
    </ul>
  </footer>
</article>
