<?php
require_once "Parsedown.php";
require_once 'e.php';
require_once 's.php';

$error = (ENV === 'dev') ? null : error_reporting(0);

/* ********** DB ********** */
function dbConnect () {
  $DB = array(
    'dsn' => (ENV === 'dev') ? 'mysql:host=localhost;dbname=jonmirch_subscribers' : 'mysql:host=localhost;dbname=jonmirch_subscribers',
    'user' => (ENV === 'dev') ? 'root' : 'jonmirch_a',
    'pass' => (ENV === 'dev') ? 'qwerty' : 'J0nM1rCh4_19',
    'options' => array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' )
  );

  try {
    $db = new PDO( $DB['dsn'], $DB['user'], $DB['pass'], $DB['options'] );
    return $db;
  } catch ( PDOException $e ) {
    return array ( 'err' => true, 'code' => $e->getCode(), 'msg' => $e->getMessage() );
    die();
  }
}

function dbAffect ( $sql, $data ) {
  $db = dbConnect();
  $mysql = $db->prepare($sql);
  $query = $mysql->execute($data);
  $db = null;

  $result = ($query)
    ? array ( 'err' => false, 'msg' => 'Operación Exitosa' )
    : array ( 'err' => true, 'msg' => 'Error al ejecutar la operación' );

  return $result;
}

function dbSearch ( $sql, $all = true, $data = array() ) {
  $db = dbConnect();
  $mysql = $db->prepare($sql);
  $query = $mysql->execute($data);

  $result = ($query)
    ? ($all)
      ? $mysql->fetchAll(PDO::FETCH_ASSOC)
      : $mysql->fetch(PDO::FETCH_ASSOC)
    : array ( 'err' => true, 'msg' => 'Error al ejecutar la operación' );

  $db = null;

  return $result;
}

/* ********** Newsletter ********** */

function sendNewsletter() {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $domain = $_SERVER['HTTP_HOST'];
  $subject = '😎📨 Por favor, confirma tu suscripción a ' . $domain;
  $to = "$name < $email >";
  $message = "
    <html>
    <head>
      <title>$subject</title>
      <style>
        article {
          width: 70% !important;
          margin: auto !important;
          padding: 16px !important;
          font-size: 16px !important;
          text-align: center !important;
          background-color: #edf2f7 !important;
        }

        .button {
          margin: auto !important;
          padding: 16px !important;
          display: block !important;
          width: 50% !important;
          font-size: 20px !important;
          text-decoration: none !important;
          text-align: center !important;
          background-color: #fe4918 !important;
          color: #edf2f7 !important;
        }
      </style>
    </head>
    <body>
      <article>
        <h2><b>$name</b>, ya casi estás suscrito 😃</h2>
        <a href=\"" . HOME . "/suscribir?mood=:)&email=$email&name=$name\" target=\"_blank\" class=\"button\">Sí, me quiero suscribir a esta lista de correos.</a>
        <p>
          Si recibiste este mensaje por error, simplemente bórralo. No te suscribirás si no haces clic en el enlace de confirmación de arriba.
        </p>
        <p>
          Para preguntas sobre esta lista de correos, escribe a <a href=\"mailto:hola@jonmircha.com\">hola@jonmircha.com</a>
        </p>
      </article>
    </body>
    </html>
  ";
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  $headers .= "From: Jonathan MirCha < hola@jonmircha.com >";

  $send = (ENV === 'dev') ? true : mail($to, $subject, $message, $headers);

  if ( $send ) {
    $res = array(
      'err' => false,
      'msg' => $_POST['name'] . ' 😎 ya casi te suscribes,<br>revisa tu 📨 correo, también tu <i>spam</i>, a veces, el mensaje se va ahí 😅.'
    );
  } else {
    $res = array(
      'err' => true,
      'msg' => 'Algo salió mal ' . $_POST['name'] . ', ☹️ inténtalo de nuevo.'
    );
  }

  header( 'Content-type: application/json' );
  echo json_encode($res);
}

function saveSubscriber() {
  $email = $_GET['email'];
  $name = $_GET['name'];
  $domain = $_SERVER['HTTP_HOST'];

  if ($_GET['mood'] === ':)') {
    $sql = "SELECT * FROM subscribers WHERE email = ?";
    $data = array( $email );
    $search = dbSearch($sql, false, $data);

    if (!$search) {
      $sql = 'INSERT INTO subscribers (email, name, date) VALUES (?, ?, NOW())';
      $data = array( $email, $name );
      $res = dbAffect($sql, $data);

      if (!$res['err']) {
        $subject = '😎📨 Suscripción confirmada a ' . $domain;
        $to = "$name < $email >";
        $message = "
          <html>
          <head>
            <title>$subject</title>
            <style>
              article {
                width: 70%;
                margin: auto;
                padding: 16px;
                font-size: 16px;
                text-align: center;
                background-color: #edf2f7;
              }

              img {
                margin: auto;
                display:  block;
              }

              .button {
                margin: auto;
                padding: 16px;
                display: block;
                width: 50%;
                font-size: 20px;
                text-decoration: none;
                text-align: center;
                background-color: #fe4918;
                color: #edf2f7;
              }
            </style>
          </head>
          <body>
            <article>
              <p>
                ¡Gracias por suscribirte <b>$name</b>!
              </p>
              <img src=\"". HOME . "/img/suscribir-hi.gif\" alt=\"¡Gracias por suscribirte!\">
              <p>
                Espero que disfrutes el contenido de mi sitio. Te interesa algún tema en particular y quieres que lo aborde, me encantaría escuchar tu propuesta. No dudes en enviarme un correo o twittéame a <a href=\"https://twitter.com/@jonmircha\" target=\"_blank\">@jonmircha</a>.
              </p>
              <p>
                Nos leemos pronto 🤗.
              </p>
            </article>
          </body>
          </html>
        ";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        $headers .= "From: Jonathan MirCha < hola@jonmircha.com >";
        (ENV === 'dev') ? true : mail($to, $subject, $message, $headers);

        $res['msg'] = "¡Gracias 🤗 por suscribirte $name!<br>Revisa tu 📨 correo.";
        $res['img'] = HOME . "/img/suscribir-aplausos.gif";
      } else {
        $res['msg'] = "Algo salió mal $name, ☹️ inténtalo de nuevo.";
        $res['img'] = HOME . "/img/suscribir-error.gif";
      }
    } else {
      $res['msg'] = "$name, 😉 ya estabas suscrito.";
      $res['img'] = HOME . "/img/suscribir-ya.gif";
    }
  } else if ($_GET['mood'] === ':(') {
    $sql = 'DELETE FROM subscribers WHERE email = ?';
    $data = array( $email );
    $res = dbAffect($sql, $data);

    if (!$res['err']) {
      $res['msg'] = "$name, 🥺 Lamento que te vayas 🤗 te deseo suerte.";
      $res['img'] = HOME . "/img/suscribir-bye.gif";
    } else {
      $res['msg'] = "Algo salió mal $name, ☹️ inténtalo de nuevo.";
      $res['img'] = HOME . "/img/suscribir-error.gif";
    }
  }

  return $res;
}

/* ********** HELPERS ********** */

function getURL($forwardedHost = false) {
  $ssl = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
  $proto = strtolower($_SERVER['SERVER_PROTOCOL']);
  $proto = substr($proto, 0, strpos($proto, '/')) . ($ssl ? 's' : '' );

  if ($forwardedHost && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
  } else {
    if (isset($_SERVER['HTTP_HOST'])) {
      $host = $_SERVER['HTTP_HOST'];
    } else {
      $port = $_SERVER['SERVER_PORT'];
      $port = ((!$ssl && $port=='80') || ($ssl && $port=='443' )) ? '' : ':' . $port;
      $host = $_SERVER['SERVER_NAME'] . $port;
    }
  }

  $request = $_SERVER['REQUEST_URI'];
  return $proto . '://' . $host . $request;
}

function humanDate ($date) {
  $date = substr($date, 0, 10);
  $numberDay = date('d', strtotime($date));
  $day = date('l', strtotime($date));
  $month = date('F', strtotime($date));
  $year = date('Y', strtotime($date));
  $daysES = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
  $daysEN = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
  $dayName = str_replace($daysEN, $daysES, $day);
  $monthsES = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
  $monthsEN = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $monthName = str_replace($monthsEN, $monthsES, $month);
  return $monthName . ' ' . $numberDay . ', ' .$year;
}

/* ********** COMPONENTS ********** */

function getMetas($title = NAME, $description = BIO, $image = IMG_POSTER) {
  echo '
    <!-- Meta Tags HTML -->
      <meta charset="UTF-8">
      <title>' . $title . '</title>
      <meta name="description" content="' . $description . '">
    <!-- Meta Tags Responsive -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="theme-color" content="' . THEME_COLOR . '">
      <meta name="MobileOptimized" content="width">
      <meta name="HandheldFriendly" content="true">
    <!-- Meta Tags Twitter -->
      <meta name="twitter:site" content="@jonmircha">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="' . $title . '">
      <meta name="twitter:description" content="' . $description . '">
      <meta name="twitter:image" content="' . $image . '">
    <!-- Meta Tags Facebook -->
      <meta property="og:site_name" content="' . NAME . '">
      <meta property="og:url" content="' . getURL() . '">
      <meta property="og:type" content="website">
      <meta property="og:title" content="' . $title . '">
      <meta property="og:description" content="' . $description . '">
      <meta property="og:image" content="' . $image . '">
    <!-- Meta Tags Google -->
      <meta itemprop="name" content="' . $title . '">
      <meta itemprop="description" content="' . $description . '">
      <meta itemprop="image" content="' . $image . '">
    <!-- Meta Tags iOS -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <meta name="format-detection" content="telephone=no">
      <meta name="apple-mobile-web-app-title" content="' . NAME . '">
    <!-- Meta Tags Windows -->
      <meta name="msapplication-TileColor" content="' . THEME_COLOR . '">
      <meta name="msapplication-TileImage" content="' . IMG_ICON . '">
    <!-- Meta Tags Iconos -->
      <link rel="apple-touch-icon" href="' . IMG_ICON . '">
      <link rel="apple-touch-startup-image" href="' . IMG_ICON . '">
      <link rel="shortcut icon" type="image/png" href="' . IMG_ICON . '">
    <!-- Varios Links -->
      <link rel="author" type="text/plain" href="'. HOME . '/humans.txt">
      <link rel="sitemap" type="application/xml" title="Sitemap" href="'. HOME . '/sitemap.xml">
      <link rel="manifest" href="'. HOME . '/manifest.json">
      <link rel="canonical" href="' . getURL() . '">
    <!-- Hojas CSS -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="' . HOME . '/assets/j.css">
    ';

  if (ENV !== 'dev') {
    echo '
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114853516-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-114853516-1");
        </script>
    ';
  }
}

function getHeader() {
  echo '
    <header class="header">
      <img src="' . IMG_AVATAR . '" alt="' . NAME . '" loading="lazy">
      <h2>
        <a href="'. HOME . '"><span>jon</span>mircha</a>
      </h2>
      <p>' . BIO_HTML . '</p>
      <hr />
    </header>
  ';
}

function getMenu() {
  echo '
    <nav class="menu">
      <a href="'. HOME . '/">hola</a>
      <a href="'. HOME . '/ahora">ahora</a>
      <a href="'. HOME . '/proyectos">proyectos</a>
      <a href="'. HOME . '/notas">notas</a>
    </nav>
  ';
}

function getFooterIcons() {
  echo '
    <nav class="footer-icons">
      <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">
        <img class="icon" src="'. HOME . '/img/youtube.svg" alt="Mi canal de YouTube" title="Mi canal de YouTube" loading="lazy">
      </a>
      <a href="https://tinyletter.com/jonmircha/" target="_blank">
        <img class="icon" src="'. HOME . '/img/newsletter.svg" alt="Lista de Correo" title="Lista de Correo" loading="lazy">
      </a>
      <a href="'. HOME . '/jonmircha-cv.pdf" target="_blank">
        <img class="icon" src="'. HOME . '/img/cv.svg" alt="Descarga mi Currículum" title="Descarga mi Currículum" loading="lazy">
      </a>
      <a href="https://paypal.me/jonmircha" target="_blank">
        <img class="icon" src="'. HOME . '/img/taco.svg" alt="Invítame un Taco" title="Invítame un Taco" loading="lazy">
      </a>
      <a id="btn-theme" href="#">
        <img class="icon" src="'. HOME . '/img/moon.svg" alt="Tema Oscuro" title="Tema Oscuro" loading="lazy">
      </a>
    </nav>
  ';
}

function getFooter() {
  echo '<footer class="footer">';
    getMenu();
    getFooterIcons();
  echo '</footer>';
  echo '<script src="'. HOME . '/assets/j.js"></script>';
}

function getSocialMedia() {
  echo '
    <p class="text-center">Puedes seguirme en:</p>
    <nav class="social-media">
      <a href="https://github.com/jonmircha" target="_blank">
        <img class="icon" src="'. HOME . '/img/github.svg" alt="GitHub" title="GitHub" loading="lazy">
      </a>
      <a href="https://www.linkedin.com/in/jonmircha/" target="_blank">
        <img class="icon" src="'. HOME . '/img/linkedin.svg" alt="LinkedIn" title="LinkedIn" loading="lazy">
      </a>
      <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">
        <img class="icon" src="'. HOME . '/img/youtube.svg" alt="Mi canal de YouTube" title="Mi canal de YouTube" loading="lazy">
      </a>
      <a href="https://instagram.com/jonmircha" target="_blank">
        <img class="icon" src="'. HOME . '/img/instagram.svg" alt="Instagram" title="Instagram" loading="lazy">
      </a>
      <a href="https://twitter.com/jonmircha" target="_blank">
        <img class="icon" src="'. HOME . '/img/twitter.svg" alt="Twitter" title="Twitter" loading="lazy">
      </a>
    </nav>
  ';
}

function getSpinner() {
  return '
    <!-- https://codepen.io/aurer/pen/jEGbA -->
    <div class="spinner hide" title="0">
      <svg version="1.1" id="loader-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
        <path opacity="0.2" fill="' . THEME_COLOR . '" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
        <path fill="' . THEME_COLOR . '" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013 10.047z">
          <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite" />
        </path>
      </svg>
    </div>
  ';
}

function getNewsletter() {
  echo '
    <form class="newsletter accent">
      <h2>📭 La lista de MirCha</h2>
      <p>
        Puedes suscribirte a mi lista de correo, te avisaré cuando escriba,
        grabe o produzca contenido que aporte valor a tu formación personal o
        profesional.
      </p>
      <p>
        Puedes darte de baja en cualquier momento, sin hacer preguntas.
      </p>
      <h3>¿Te animas?</h3>
      <input type="text" name="name" placeholder=" nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
      <input type="email" name="email" placeholder="email" pattern="^[a-z0-9]+(.[_a-z0-9]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,15})$" required>
      <p>🤖 Comprobemos que seas humano 😅</p>
      <div class="is-human">
        <span class="number-1"></span>
        <span>+</span>
        <span class="number-2"></span>
        <span>=</span>
        <input class="result" name="result" type="number" required>
        <input class="result-hidden" type="hidden" name="result-hidden">
      </div>
      ' . getSpinner() . '
      <aside class="message hide"></aside>
      <button type="submit">Suscribirme</button>
    </form>
  ';
}

function getTaco() {
  echo '
    <p class="text-center">
      Si te gusta mi contenido y quieres apoyarme invítame un
      <a href="https://paypal.me/jonmircha" target="_blank">taco por paypal</a>.
    </p>
    <div class="taco text-center">
      <a href="https://paypal.me/jonmircha" target="_blank">
        <img src="'. HOME . '/img/taco.jpg" alt="Invítame un Taco" loading="lazy">
      </a>
    </div>
  ';
}

function getNow() {
  global $now, $nowDate;

  echo '<ol class="now-list accent">';
    foreach ($now as $key => $value) {
      echo '<li>' . $value . '</li>';
    }
  echo '</ol>';
  echo '
    <p class="text-right">
      <small><b>Última actualización: ' . $nowDate . '.</b></small>
    </p>
  ';
}

function getMarathons() {
  global $marathons, $marathonsNum;

  foreach (array_reverse($marathons) as $pos => $marathon) {
    foreach ($marathon as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="marathon">
          <em>' . $marathonsNum . ') ' . $title . '</em>
          <div>
            <b>' . $time . '</b>
            <small>' . $altitude . '<sub>m 🌊</sub></small>
            <small>' . humanDate($date) . '</small>
          </div>
      </article>
    ';

    $marathonsNum--;
  }
}

function getAsProfessional() {
  global $asProfessional;

  foreach (array_reverse($asProfessional) as $pos => $project) {
    foreach ($project as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="item">
        <section>
          <img src="' . $img . '" alt="' . $name. '" loading="lazy">
          <div>
            <h3>' . $name . '</h3>
            <small>' . $excerpt . '</small>
          </div>
        </section>
      </article>
    ';
  }
}

function getAsTeacher() {
  echo '
    <article class="as-teacher">
      <p>
        Toda mi vida profesional he estado ligado al mundo de la educación, he dado clases en primaria, secundaria, bachilleratos, licenciaturas, posgrados, capacitaciones a la medida y cursos en línea.
      </p>
      <img class="mb-2" src="'. HOME . '/img/como-profesor.jpg" alt="Clase muestra en ICONOS" title="Clase muestra en ICONOS" loading="lazy">
      <p>
        Universidades, centros y plataformas educativas en las que he impartido cátedra: IMECC de México, UVM, UNIVDEP, ICONOS, MacTrainee, Bextlán, Escuela IT, Universidad Simón Bolívar, Centro ADM y <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">YouTube</a>.
      </p>
      <p>
        Empresas donde he capacitado personal en desarrollo web: BANXICO, SEGOB, UNAM, UNITEC, Grupo Reforma, American Cotton, Comex y Liverpool.
      </p>
      <img class="mb-2" src="'. HOME . '/img/como-profesor-2.jpg" alt="Capacitación en Lima, Perú" title="Capacitación en Lima, Perú" loading="lazy">
    </article>
  ';
}

function getAsEntrepreneur() {
  global $asEntrepreneur;

  echo "
    <article>
      <p>
        He iniciado tres proyectos: uno fracasó, otro cerró su ciclo y uno más continúa despegando. De cada uno he aprendido a base de pruebas, errores y aciertos. Cada uno me ha hecho mejor persona y profesional.
      </p>
      <p>
        Aún no pierdo mi entusiasmo así que seguiré materializando cada idea y oportunidad que me llegue a la cabeza.
      </p>
    </article>
  ";

  foreach (array_reverse($asEntrepreneur) as $pos => $project) {
    foreach ($project as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="item">
        <section>
          <img src="' . $img . '" alt="' . $name. '" loading="lazy">
          <div>
            <h3>' . $name . '</h3>
            <small>' . $excerpt . '</small>
          </div>
        </section>
      </article>
    ';
  }
}

function getOpenSource() {
  global $openSource;

  echo "
    <p>
      Te comparto algunos proyectos de código abierto que he desarrollado, si te sirven, siéntete libre de usarlos en tus proyectos.
    </p>
  ";

  foreach (array_reverse($openSource) as $pos => $project) {
    foreach ($project as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="item">
        <a href="' . $link . '" target="_blank">
          <img src="' . $img . '" alt="' . $name. '" loading="lazy">
          <div>
            <h3>' . $name . '</h3>
            <small>' . $excerpt . '</small>
          </div>
        </a>
      </article>
    ';
  }
}

function getCourses() {
  global $courses;

  echo "
    <p>
      Algunos cursos en mi canal que pueden interesarte.
    </p>
  ";

  foreach (array_reverse($courses) as $pos => $course) {
    foreach ($course as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="item">
        <a href="' . $link . '" target="_blank">
          <img src="' . $img . '" alt="' . $name. '" loading="lazy">
          <div>
            <h3>' . $name . '</h3>
            <small>' . $excerpt . '</small>
          </div>
        </a>
      </article>
    ';
  }
}

function getShare() {
  echo '
    <p class="text-center">
      Si te sirvió mi contenido, compártelo 🤗.
    </p>
    <div class="addthis_inline_share_toolbox_6qma"></div>
    <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d98208b017c1d74"></script>
  ';
}

function getDisqus($id) {
  echo '
    <div id="disqus_thread"><div>
    <script>
      var disqus_config = function () {
        this.page.url = "' . getURL() . '";
        this.page.identifier = "' . $id . '";
      };

      (function() {
        var d = document, s = d.createElement("script");
        s.src = "https://jonmircha.disqus.com/embed.js";
        s.setAttribute("data-timestamp", +new Date());
        (d.head || d.body).appendChild(s);
      })();
    </script>
    <noscript>Por favor habilita JavaScript para ver los <a href="https://disqus.com/?ref_noscript">comentarios gestionados por Disqus.</a></noscript>
  ';
}

function getNotes() {
  $fileList = glob('notes/*');
  $notes = array();

  echo '
    <h1 class="text-center">Notas</h1>
    <p>Siempre hago anotaciones de todo lo que me sirve o me hace crecer como persona o profesional, aquí te comparto mis notas.</p>
  ';

  foreach($fileList as $filePath) {
    $note = file($filePath);
    $noteDate = explode("*", $note[2])[1] ;
    $id = strtotime($noteDate);
    $url = HOME . "/" . substr($filePath, 6, -3);
    $title = substr($note[0], 2);
    $poster = explode("*", $note[4])[1];
    $notes[$id] = array(
      "url" => $url,
      "title" => $title,
      "poster" => $poster,
      "date" => humanDate($noteDate)
    );
  }

  krsort($notes);

  foreach ($notes as $pos => $note) {
    foreach ($note as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="item">
        <a href="' . $url . '">
          <img src="' . $poster . '" alt="' . $title . '" loading="lazy">
          <div>
            <h3>' . $title . '</h3>
            <small>' . $date . '</small>
          </div>
        </a>
      </article>
    ';
  }
}

function getNote () {
  $md = new Parsedown();
  $note = file_get_contents("notes/" . $_GET["id"] . ".md");

  if ( $note ) {
    echo '
      <section class="note">
        ' . $md->text($note) . '
      </section>
    ';
    getShare();
    getTinyletter();
    getTaco();
    echo "<br><br>";
    getDisqus($_GET["id"]);
  } else {
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    echo '
    <section class="flex-center">
      <article class="error">
        <span>(;-;)</span>
        <p>Lamentablemente, esta página no existe.</p>
      </article>
    </section>
    ';
  }
}

function getMetasNote() {
  $note = file("notes/" . $_GET["id"] . ".md");
  if ($note) {
    $title = substr($note[0], 2) . ' | jonmircha';
    $description = explode("*", $note[3])[1];
    $image = explode("*", $note[4])[1];
    getMetas($title, $description, $image);
  } else {
    getMetas("( ; - ; ) | jonmircha", "Error 404: No Encontrado. Lamentablemente, esta página no existe.");
  }
}

function getDrift () {
  echo '
    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = "0.3.1";
    drift.load("cga87pv427td");
    </script>
    <!-- End of Async Drift Code -->
  ';
}

function getTinyletter () {
  echo '
    <form class="newsletter accent" action="https://tinyletter.com/jonmircha" method="post" target="popupwindow" onsubmit="window.open(\'https://tinyletter.com/jonmircha\', \'popupwindow\', \'scrollbars=yes,width=800,height=600\'); return true">
      <h2>📭 La lista de MirCha</h2>
      <p>
        Suscríbete a mi lista, una vez al mes envío el contenido que escribo, grabo o produzco, 🤗 esperando pueda aportar valor personal o profesional.
      </p>
      <p>
        Puedes darte de baja en cualquier momento, sin hacer preguntas.
      </p>
      <h3>¿Te animas?</h3>
      <input type="email" name="email" id="tlemail" placeholder="Ingresa tu email" pattern="^[a-z0-9]+(.[_a-z0-9]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,15})$" required />
      <input type="hidden" value="1" name="embed"/>
      <button type="submit">Suscribirme</button>
    </form>
  ';
}
