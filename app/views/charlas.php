  <figure class="Hero u-firstContent">
    <img src="<?=$meta_img?>" alt="jonmircha" style="
      --obj-fit: cover;
      --obj-pos: 15% 50%;
      --filters: brightness(.5);
    ">
    <figcaption>
      <h1>Invítame 🎤🤓</h1>
    </figcaption>
  </figure>
<main class="Speak">
  <article class="Text">
    <p>
      Me gusta hablar y enseñar sobre el maravilloso mundo de la web. Desde grandes eventos y conferencias hasta pequeños encuentros y charlas de café.
    </p>
    <p>
      Puedo participar de forma presencial u <i>online</i>.
    </p>
    <p>
      Usualmente <b>NO</b> cobro dinero por hablar en público, pero tendrás que pagar mis viáticos 🧳. También puedo cotizarte cursos o talleres técnicos.
    </p>
    <p>
      ¿Tienes un evento?
    </p>
    <p>
      Escríbeme a <a href="mailto:hola@jonmircha.com" target="_blank">hola@jonmircha.com</a> y lo conversamos. Suelo contestar en un lapso de 72 horas 🕖.
    </p>
    <br>
    <br>
    <br>
    <h2>Charlas que puedo ofrecer:</h2>
    <ul class="Focus">
      <?php get_list_items( APP['speak'] ); ?>
    </ul>
    <p class="u-textRight">
      <small><b>PD: Mis charlas no suelen durar más de 20 minutos. Voy al grano.</b></small>
    </p>
    <br>
    <br>
    <br>
    <h2>Talleres que puedo impartir:</h2>
    <ul class="Focus">
      <?php get_list_items( APP['workshops'] ); ?>
    </ul>
    <p class="u-textRight">
      <small><b>PD: Mis talleres pueden durar 1, 2 o 3 horas. Me adapto a tus necesidades.</b></small>
    </p>
  </article>
</main>
