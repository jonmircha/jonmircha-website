<figure class="Hero u-firstContent">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 25% 100%;
    --filters: brightness(.5);
  ">
  <figcaption>
    <h1>¿Qué estoy haciendo ahora mismo?</h1>
  </figcaption>
</figure>
<main class="Now">
  <article class="Text">
    <p>
      Como <a href="https://www.youtube.com/watch?v=zkk15OKWY6M" target="_blank">esencialista</a>, aprecio mucho mi calidad de vida. Respeto mi tiempo y el de los demás.
    </p>
    <p>
      Profesionalmente no me comprometo a trabajar en más proyectos de los que pueda contar con mi mano 🖐🏻.
    </p>
    <p>
      <i>
        Esto me permite mantenerme enfocado e invertir de la manera más inteligente posible mi tiempo y energía para dar la mayor contribución posible...
      </i>
    </p>
    <p class="u-textRight">
      <b><i>... menos pero mejor.</i></b>
    </p>
    <p>Actualmente enfocado en:</p>
    <ol class="Focus">
      <?php get_list_items( APP['now'] ); ?>
    </ol>
    <p class="u-textRight">
      <small><b>Última actualización: <?=APP['now_date']?>.</b></small>
    </p>
  </article>
</main>
