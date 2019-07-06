<figure class="Hero is-no-margin u-firstContent">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 50% 100%;
    --filters: brightness(.5);
  ">
  <figcaption>
    <h1>Lugares y plataformas donde enseño.</h1>
  </figcaption>
</figure>
<main class="Courses">
  <?php get_courses_item( array_reverse(APP['courses']) ); ?>
</main>
