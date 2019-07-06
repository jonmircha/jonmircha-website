<figure class="Hero u-firstContent">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 50% 0%;
    --filters: brightness(.5);
  ">
  <figcaption>
    <h1>🏃🏻‍ Corre Jon Corre 🏃🏻‍</h1>
  </figcaption>
</figure>
<main class="Marathons">
  <?php get_marathons_item( array_reverse(APP['marathons']) ); ?>
</main>
