<figure class="Hero is-no-margin u-firstContent" style="--hero-height: 50vh;">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 20% 50%;
    --filters: brightness(.5);
  ">
  <figcaption>
    <h1>Blog</h1>
  </figcaption>
</figure>
<main class="Blog">
  <aside class="Blog-search">
    <?php require_once './app/components/filter_list.php'; ?>
  </aside>
  <section class="Blog-list">
    <?php get_posts_blog( array_reverse(APP['blog']) ); ?>
  </section>
</main>
