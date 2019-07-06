<?php
define('ENV', 'dev');

define('DB', array(
  'dsn' => (ENV === 'dev') ? 'mysql:host=localhost;dbname=jonmirch_subscribers' : 'mysql:host=localhost;dbname=jonmirch_subscribers',
  'user' => (ENV === 'dev') ? 'root' : 'jonmirch_a',
  'pass' => (ENV === 'dev') ? 'qwerty' : 'J0nM1rCh4_19'
));

define('APP', array(
  'home_url' => (ENV === 'dev') ? '/jonmircha' : 'https://jonmircha.com',
  'name' => 'jon<b>mircha</b>',
  'logo' => './img/jonmircha-icon.png',
  'favicon' => './img/jonmircha-icon.png',
  'apple_touch_icon' => './img/jonmircha-icon.png',
  'apple_touch_startup_image' => './img/jonmircha-icon.png',
  'language' => 'es',
  'theme_color' => '#191919',
  'twitter' => '@jonmircha',
  'num_marathons' => 14,
  'marathons' => array(
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2012',
      'time' => '4:35:35',
      'date' => '2012-09-02',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2013',
      'time' => '3:58:14',
      'date' => '2013-08-25',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional Lala 2014',
      'time' => '3:56:22',
      'date' => '2014-03-02',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Ultra Trail 50K Guadalajara 2014',
      'time' => '⛰️🌲 8:23:01 🌲⛰️',
      'date' => '2014-03-30',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2014',
      'time' => '4:26:47',
      'date' => '2014-08-31',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'San Francisco Marathon 2015',
      'time' => '3:33:38',
      'date' => '2015-07-26',
      'place' => '🇺🇸'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2015',
      'time' => '3:43:04',
      'date' => '2015-08-30',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2016',
      'time' => '3:51:16',
      'date' => '2016-08-28',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Rock&Roll Querétaro Marathon 2016',
      'time' => '3:46:38',
      'date' => '2016-10-02',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Powerade Monterrey 2016',
      'time' => '3:35:59',
      'date' => '2016-12-11',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2017',
      'time' => '3:46:52',
      'date' => '2017-08-27',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Spartan Race UltraBeast Mexico 2017',
      'time' => '⛰️🌲 10:00:32 🌲⛰️',
      'date' => '2017-12-03',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Maratón Internacional de la Ciudad de México 2018',
      'time' => '3:47:41',
      'date' => '2018-08-26',
      'place' => '🇲🇽'
    ),
    array(
      'title' => 'Bank of America Chicago Marathon 2018',
      'time' => '🏅 3:27:13 🏅',
      'date' => '2018-10-07',
      'place' => '🇺🇸'
    )
  ),
  'social_media' => array(
    array(
      'url' => 'mailto:hola@jonmircha.com',
      'title' => 'hola@jonmircha.com'
    ),
    array(
      'url' => 'https://www.youtube.com/jonmircha/',
      'title' => 'YouTube'
    ),
    array(
      'url' => 'https://www.instagram.com/jonmircha/',
      'title' => 'Instagram'
    ),
    array(
      'url' => 'https://twitter.com/jonmircha/',
      'title' => 'Twitter'
    ),
    array(
      'url' => 'https://www.linkedin.com/in/jonmircha/',
      'title' => 'LinkedIn'
    ),
    array(
      'url' => 'https://www.github.com/jonmircha/',
      'title' => 'GitHub'
    )
  ),
  'projects' => array(
    array(
      'url' => 'https://youtube.com/jonmircha?sub_confirmation=1',
      'title' => '¡Suscríbete! a mi canal'
    ),
    array(
      'url' => 'https://github.com/jonmircha/kiss-php',
      'title' => 'Mini Framework KISS PHP'
    ),
    array(
      'url' => 'https://github.com/jonmircha/kenai-wp-starter-theme',
      'title' => 'kEnAi WP Starter Theme'
    ),
    /* array(
      'url' => '#',
      'title' => 'Experiencia Airbnb'
    ), */
    array(
      'url' => 'https://lucylara.com/',
      'title' => 'LucyLara.com'
    ),
    array(
      'url' => 'https://promoleasing.com.mx/',
      'title' => 'PromoLeasing.com.mx'
    ),
  ),
  'now' => array(
    'Trabajando en <a href="https://new.siemens.com/mx/es.html" target="_blank">Siemens México</a> como desarrollador web.',
    'Mi canal de <a href="https://www.youtube.com/jonmircha/" target="_blank">YouTube</a>.',
    'Mis clases en <a href="https://www.iconos.edu.mx/" target="_blank">ICONOS</a> y <a href="https://centroadm.com/" target="_blank">Centro ADM</a>.',
    '👆🏻 ¿Tienes un proyecto? ✍🏻 a <a href="mailto:hola@jonmircha.com" target="_blank">hola@jonmircha.com</a>.'
  ),
  'now_date' => 'Julio 06, 2019',
  'speak' => array(
    'La filosofía de programar.',
    'Programación esencialista.',
    'Trabajar menos pero mejor.',
    'Aprende a aprender.',
    'Git como herramienta educativa del docente.',
    'Arquitecturas CSS.',
    '¿Otro tema en mente? 🤯 ✍🏻 a <a href="mailto:hola@jonmircha.com" target="_blank">hola@jonmircha.com</a>.'
  ),
  'workshops' => array(
    'Maquetación CSS (<small>con Flexbox, Grid y/o Frameworks</small>).',
    'Sitios estáticos con JS.',
    'Sitios estáticos con PHP.',
    'Desarrollo web orientado a componentes con PHP.',
    'Convierte tu sitio en aplicación web progresiva (PWA).',
    'Node.js para diseñadores web.',
    'Firebase para diseñadores web.',
    'WordPress para diseñadores web.',
    'Desarrollo de temas en WordPress.',
    '¿Otro tema en mente? 🤯 ✍🏻 a <a href="mailto:hola@jonmircha.com" target="_blank">hola@jonmircha.com</a>.'
  ),
  'courses' => array(
    array(
      'name' => 'Escuela IT',
      'url' => 'https://escuela.it/teacher/jonathan-mircha',
      'description' => 'Cursos y Talleres',
      'since' => 'desde marzo 2013',
      'type' => 'en línea'
    ),
    array(
      'name' => 'ICONOS',
      'url' => 'https://www.iconos.edu.mx/',
      'description' => 'Licenciaturas y Posgrados',
      'since' => 'desde abril 2011',
      'type' => 'presencial'
    ),
    array(
      'name' => 'YouTube',
      'url' => 'https://www.youtube.com/jonmircha/playlists',
      'description' => 'Tutoriales, Cursos y Vlogs',
      'since' => 'desde enero 2012',
      'type' => 'en línea'
    ),
    array(
      'name' => 'ADM',
      'url' => 'https://centroadm.com/',
      'description' => 'Diplomados y Especialidades',
      'since' => 'desde octubre 2015',
      'type' => 'presencial'
    )
  ),
  'blog' => array(
    array(
      'title' => 'La experiencia de correr la Maratón de San Francisco 2015',
      'date' => '2015-08-05',
      'url' => 'https://medium.com/@jonmircha/la-experiencia-de-correr-una-marat%C3%B3n-con-10kg-y-2250m-menos-c639fc2fee9c',
      'tags' => 'running, fitness, personal'
    ),
    array(
      'title' => 'Node.js v4',
      'date' => '2015-09-11',
      'url' => 'https://desarrolloweb.com/articulos/el-futuro-de-nodejs4.html',
      'tags' => 'node, javascript, programación'
    ),
    array(
      'title' => 'Primeros pasos con Webpack',
      'date' => '2018-12-10',
      'url' => 'https://desarrolloweb.com/articulos/primeros-pasos-webpack.html',
      'tags' => 'webpack, javascript, programación'
    )
  ),
  'videos' => array(
    array(
      'title' => 'Malos hábitos en los programadores.',
      'url' => 'https://www.youtube.com/watch?v=fVNFBF-vsds'
    ),
    array(
      'title' => '5 consejos para mejorar tu lógica de programación.',
      'url' => 'https://www.youtube.com/watch?v=ifHxQpueZxQ'
    ),
    array(
      'title' => 'Cómo me enfoco y elimino distracciones.',
      'url' => 'https://www.youtube.com/watch?v=vJ2QdvQTM-4'
    ),
    array(
      'title' => 'Libérate de todo lo que NO necesites.',
      'url' => 'https://www.youtube.com/watch?v=XNI53yNUMXI'
    ),
    array(
      'title' => 'Convierte tu Sitio Web a PWA.',
      'url' => 'https://www.youtube.com/watch?v=9oQIylJ-JpU&list=PLvq-jIkSeTUYIw8CP2AP7QJs4GeeZdvs6'
    ),
    array(
      'title' => 'Creando un Starter Theme para WordPress.',
      'url' => 'https://www.youtube.com/watch?v=iuW5mBqcz38&list=PLvq-jIkSeTUatjsaQ8ZxqsQGrBNOWXDoG'
    ),
    array(
      'title' => '¿Debería seguir usando jQuery?',
      'url' => 'https://www.youtube.com/watch?v=AJ8YtVD3764'
    ),
    array(
      'title' => 'Mini Framework KISS PHP',
      'url' => 'https://www.youtube.com/watch?v=5ZtTHSmj884'
    )
  )
));
