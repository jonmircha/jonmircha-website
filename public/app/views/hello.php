<?php
echo '<header class="Site-header">';
  require_once './app/components/logo.php';
  require_once './app/components/social_media.php';
echo '</header>';
echo '<section class="Site-about">';
?>
  <main class="About">
    <div class="About-container  u-container">
      <article class="About-avatar">
        <figure class="lozad-parent">
          <img class="lozad" data-src="./img/jonmircha.jpg" alt="Jonathan MirCha">
          <figcaption>
            <h2>Jonathan MirCha</h2>
          </figcaption>
        </figure>
      </article>
      <article class="About-bio">
        <p>
          Instructor web y <a href="https://www.youtube.com/playlist?list=PLvq-jIkSeTUbJFWQx8gcy1MK0lTLrdLR9" target="_blank">#ProgramadorFitness</a> de <?php echo APP['age']; ?> años ubicado en CDMX, México. Desde el 2004 tengo experiencia profesional en el área de la educación y el desarrollo web.
        </p>
        <p>
          Imparto clases, charlas, conferencias, seminarios, diplomados y capacitación para diferentes empresas, instituciones educativas y comunidades en Internet.
        </p>
        <p>
          También desarrollo y colaboro en proyectos por cuenta propia. Estoy orientado al Frontend (HTML, CSS y mucho JavaScript) y al Backend con WordPress y Firebase.
        </p>
        <p>
          Tengo un canal en <a href="https://www.youtube.com/bextlancom" target="_blank">YouTube</a> donde enseño sobre el maravilloso mundo de la web. Doy clases presenciales en <a href="http://iconos.edu.mx/" target="_blank">ICONOS</a> y <a href="http://centroadm.com/" target="_blank">Centro ADM</a>. Colaboro como profesor en línea y bloguero en <a href="https://ed.team/" target="_blank">EDteam</a>.
        </p>
        <p>
          Llevo un estilo de vida fitness, me encanta hacer ejercicio y correr maratones, llevo <b><?php echo APP['marathons']; ?></b>, mi mejor tiempo es <b><?php echo APP['best_time']; ?></b> en el maratón de <b><?php echo APP['best_race']; ?></b>.
        </p>
        <p>
          Mi esposa es <a href="http://www.celiacos.org/enfermedad-celiaca.html" target="_blank">celiaca</a>, por lo que llevo una alimentación muy sana y <b>libre de gluten</b>, lo que ha ayudado a mejorar mi condición física y mental.
        </p>
        <p>
          <a href="<?php echo $router->generate('bryan'); ?>">Bryan</a>, mi inspiración.
        </p>
      </article>
      <article class="About-info">
        <div class="About-skills">
          <h3><i class="fas fa-wrench"></i> Conocimientos</h3>
          <ul>
            <li>Responsive & Adaptive Design</li>
            <li>UI <span>/</span> UX <span>/</span> WPO</li>
            <li>HTML <span>/</span> CSS <span>/</span> JavaScript</li>
            <li>PHP <span>/</span> MySQL <span>/</span> WordPress</li>
            <li>Vanilla JS <span>/</span> ECMAScript <span>/</span> Node.js</li>
            <li>Vue.js <span>/</span> React</li>
            <li>Express.js <span>/</span> Firebase</li>
            <li>NPM <span>/</span> Gulp <span>/</span> Webpack</li>
            <li>Pug <span>/</span> Sass <span>/</span> Babel</li>
            <li>Markdown <span>/</span> Git <span>/</span> GitHub</li>
            <li>Frameworks Frontend <span>/</span> jQuery</li>
            <li>Flash <span>/</span> AS2 <span>/</span> AS3</li>
          </ul>
        </div>
        <div class="About-education">
          <h3><i class="fas fa-graduation-cap"></i> Educación</h3>
          <ul>
            <li>
                2017, Maestría en Comunicación con Medios Virtuales
                <br>
                ICONOS: Instituto de Investigación en Comunicación y Cultura
            </li>
            <li>
                2008, Ingeniero en Sistemas
                <br>
                UVM: Universidad del Valle de México
            </li>
          </ul>
        </div>
        <div class="About-cv">
          <h3>
            <a href="./cv_jonmircha.pdf" download>
              <i class="far fa-file-pdf"></i>
              <span>currículum</span>
            </a>
          </h3>
        </div>
      </article>
    </div>
</main>
<?php
echo '</section>';
echo '<footer class="Site-footer">';
  require_once './app/components/menu.php';
echo '</footer>';
?>
