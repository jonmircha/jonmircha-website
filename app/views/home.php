<figure class="Hero u-firstContent">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 40% 50%;
    --filters: brightness(.5);
  ">
  <figcaption>
    <h1>Soy tu amigo y docente digital...</h1>
  </figcaption>
</figure>
<main class="Home">
  <section class="AboutMe">
    <article>
      <h2>💪🤓 Sobre mi</h2>
      <div>
        <p>
          Profesor & Programador Web <b>&middot;</b> <a href="https://celiacos.org/enfermedad-celiaca/que-es-la-enfermedad-celiaca/" target="_blank">#Celiaco</a> por ❤️ <b>&middot;</b> <a href="https://www.youtube.com/watch?v=zkk15OKWY6M" target="_blank">Esencialista</a>: Menos pero mejor <b>&middot;</b> <a href="<?=APP['home_url']?>/maratones">Maratonista</a> 🏃x<?=APP['num_marathons']?> <b>&middot;</b> Vivo <a href="https://www.instagram.com/explore/tags/programadorfitness/" target="_blank">Fitness</a> 💪🤓.
        </p>
      </div>
    </article>
    <article>
      <h2>🤗 Hola</h2>
      <div>
        <p>Puedes contactarme en:</p>
        <ul>
          <?php get_about_me_titles( APP['social_media'] ); ?>
        </ul>
      </div>
    </article>
    <article>
      <h2>🎯 Ahora</h2>
      <div>
        <p>Actualmente enfocado en:</p>
        <ol>
          <?php get_list_items( APP['now'] ); ?>
        </ol>
        <small>Última actualización: <?=APP['now_date']?>.</small>
      </div>
    </article>
    <article>
      <h2>👨‍💻 Proyectos</h2>
      <div>
        <ul>
          <?php get_about_me_titles( APP['projects'] ); ?>
          <li><a class="AboutMe-link" href="https://github.com/jonmircha/" target="_blank">más... 👀</a></li>
        </ul>
      </div>
    </article>
    <article>
      <h2>📰 Artículos</h2>
      <div>
        <ul>
          <?php get_about_me_titles( array_slice(array_reverse(APP['blog']), 0, 6) ); ?>
          <li><a class="AboutMe-link" href="<?=APP['home_url']?>/blog">más... 👀</a></li>
        </ul>
      </div>
    </article>
    <article>
      <h2>📹 Videos</h2>
      <div>
        <ul>
          <?php get_about_me_titles( array_slice(array_reverse(APP['videos']), 0, 8) ); ?>
          <li><a class="AboutMe-link" href="https://www.youtube.com/jonmircha/videos" target="_blank">más... 👀</a></li>
        </ul>
      </div>
    </article>
  </section>
  <article class="u-textCenter">
    <h2>🌮</h2>
    <p>
      Si el contenido que comparto te gusta y quieres ayudarme,<br><a href="https://paypal.me/jonmircha" target="_blank"><b>invítame un taco remoto</b></a>
    </p>
  </article>
  <?php require_once './app/components/subscribe_form.php'; ?>
</main>
