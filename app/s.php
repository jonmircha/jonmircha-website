<?php
/* ********** DATA ********** */
define('HOME', (ENV === 'dev') ? '/jon' : 'https://jonmircha.com');
define('NAME', 'jonmircha');
define('BIO', 'Profesor, Programador Web, Maratonista 🏃x15 & Minimalista: Menos pero mejor.');
define('BIO_HTML', 'Profesor, Programador Web, <a href="' . HOME . '/maratones">Maratonista</a>&nbsp;🏃x15 & Minimalista: Menos pero mejor.');
define('THEME_COLOR', '#fe4918');
define('IMG_AVATAR', HOME . '/img/jonmircha.jpg');
define('IMG_POSTER', HOME . '/img/jonmircha-poster.jpg');
define('IMG_ICON', HOME . '/img/jonmircha-icon.png');
define('IMG_YOUTUBE', HOME . '/img/youtube-poster.png');

$now = array(
  'Mi canal de <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">YouTube</a> y mi <a href="' . HOME . '/notas">Blog</a>.',
  'Mis clases en <a href="https://lasalle.mx/" target="_blank">La Salle</a> y <a href="https://centroadm.com/" target="_blank">Centro ADM</a>.',
  'Preparando el <a href="https://escuela.it/cursos/curso-desarrollo-frontend-react" target="_blank">Curso de desarrollo frontend con React</a> para Escuela IT.',
  'Desarrollando un sitio y una webapp en React para un cliente privado.',
  '¿Tienes un proyecto? ✍🏻 a <a href="mailto:hola@jonmircha.com" target="_blank">hola@jonmircha.com</a>.'
);

$nowDate = 'Enero 28, 2020';

$marathons = array(
  array(
    'title' => 'Maratón de la Ciudad de México 2012',
    'time' => '4:35:35',
    'date' => '2012-09-02',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2013',
    'time' => '3:58:14',
    'date' => '2013-08-25',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Maratón Lala 2014',
    'time' => '3:56:22',
    'date' => '2014-03-02',
    'altitude' => '1120'
  ),
  array(
    'title' => 'Ultra Trail 50K Guadalajara 2014',
    'time' => '🌲 8:23:01',
    'date' => '2014-03-30',
    'altitude' => '1800'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2014',
    'time' => '4:26:47',
    'date' => '2014-08-31',
    'altitude' => '2250'
  ),
  array(
    'title' => 'San Francisco Marathon 2015',
    'time' => '3:33:38',
    'date' => '2015-07-26',
    'altitude' => '20'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2015',
    'time' => '3:43:04',
    'date' => '2015-08-30',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2016',
    'time' => '3:51:16',
    'date' => '2016-08-28',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Rock&Roll Querétaro Marathon 2016',
    'time' => '3:46:38',
    'date' => '2016-10-02',
    'altitude' => '1850'
  ),
  array(
    'title' => 'Maratón Powerade Monterrey 2016',
    'time' => '3:35:59',
    'date' => '2016-12-11',
    'altitude' => '550'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2017',
    'time' => '3:46:52',
    'date' => '2017-08-27',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Spartan Race UltraBeast Mexico 2017',
    'time' => '🌲 10:00:32',
    'date' => '2017-12-03',
    'altitude' => '2700'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2018',
    'time' => '3:47:41',
    'date' => '2018-08-26',
    'altitude' => '2250'
  ),
  array(
    'title' => 'Bank of America Chicago Marathon 2018',
    'time' => '🏅 3:27:13',
    'date' => '2018-10-07',
    'altitude' => '180'
  ),
  array(
    'title' => 'Maratón de la Ciudad de México 2019',
    'time' => '3:41:39',
    'date' => '2019-08-25',
    'altitude' => '2250'
  ),
);

$marathonsNum = count($marathons);

$asProfessional = array(
  array(
    'name' => 'Desarrollador Flash',
    'img' => HOME . '/img/flash.jpg',
    'excerpt' => 'De 2004 a 2010 desarrollé diferentes sitios e interactivos hechos con Flash y ActionScript (2 y 3).'
  ),
  array(
    'name' => 'MVS e&middot;go',
    'img' => HOME . '/img/e-go.png',
    'excerpt' => 'De 2006 a 2008 trabajé como desarrollador web del sitio corporativo, el de ventas y la intranet de <b><em>e&middot;go</em></b>. Usé HTML, CSS, JS, jQuery, Flash, AS2, AS3, PHP, MySQL, Informix y Windows Server 2003.'
  ),
  array(
    'name' => 'VOIT',
    'img' => HOME . '/img/voit.png',
    'excerpt' => 'En 2009 fui contratado por proyecto para rediseñar en HTML5 el <a href="https://voit.com.mx/" target="_blank">sitio corporativo</a> que estaba en Flash. Adicionalmente desarrollé un catálogo de productos con PHP y MySQL.'
  ),
  array(
    'name' => 'Gamol',
    'img' => HOME . '/img/gamol.png',
    'excerpt' => 'En 2013 y 2014 colaboré como freelance, desarrollando landing pages, interactivos en jQuery y sitios en WordPress para clientes de la <a href="http://www.gamol.com.mx/" target="_blank">agencia</a>.'
  ),
  array(
    'name' => 'somms',
    'img' => HOME . '/img/somms.png',
    'excerpt' => 'En 2015 diseñé el sitio de la banda <a href="http://somms.mx/" target="_blank">somms</a>.'
  ),
  array(
    'name' => 'Guardianes',
    'img' => HOME . '/img/guardianes.png',
    'excerpt' => 'En 2016 diseñé y desarrollé el sitio y tema WordPress de <a href="http://guardianes.org.mx/" target="_blank">Guardianes</a>.'
  ),
  array(
    'name' => 'Condé Nast',
    'img' => HOME . '/img/conde-nast.png',
    'excerpt' => 'En 2015 y 2016 colaboré con la <a href="https://condenastmexico-latam.com/" target="_blank">editorial</a> como freelance, desarrollando landing pages y registros en línea para eventos de <a href="https://www.glamour.mx/" target="_blank">GLAMOUR</a>.'
  ),
  array(
    'name' => 'Malvestida',
    'img' => HOME . '/img/malvestida.png',
    'excerpt' => 'En 2016 diseñé y desarrollé el sitio y tema WordPress de <a href="https://malvestida.com/" target="_blank">Malvestida</a>.'
  ),
  array(
    'name' => 'Lucy Lara',
    'img' => HOME . '/img/lucylara.png',
    'excerpt' => 'En 2018 diseñé y desarrollé el sitio y tema WordPress de <a href="https://lucylara.com/" target="_blank">Lucy Lara</a>. Actualmente sigo administrando la web.'
  ),
  array(
    'name' => 'SOLCOM',
    'img' => HOME . '/img/solcom.svg',
    'excerpt' => 'En 2016 y 2019 colaboré como freelance, desarrollando sitios en WordPress y proyectos en React para clientes de la <a href="https://solucionesdecomunicacion.mx/" target="_blank">agencia</a>.'
  ),
  array(
    'name' => 'Aeromexico',
    'img' => HOME . '/img/aeromexico.svg',
    'excerpt' => 'En 2019 colaboré como freelance en el equipo que maquetó la <a href="https://miaeromexico.com/" target="_blank">intranet corporativa</a> hecha en React.'
  ),
  array(
    'name' => 'SIEMENS',
    'img' => HOME . '/img/siemens.svg',
    'excerpt' => 'En 2019 fui contratado por proyecto para auditar y depurar el código y contenido del <a href="https://new.siemens.com/mx/es.html" target="_blank">sitio corporativo</a>. Desarrollé nuevas páginas y mejoré el posicionamiento con SEO onPage.'
  )
);

$asEntrepreneur = array(
  array(
    'name' => 'Café Latino',
    'img' => HOME . '/img/cafe-latino.png',
    'excerpt' => 'En 2008, puse una café: mi falta de conocimiento del negocio, una mala ubicación del local, discrepancias con mi socia y los efectos de la recesión económica de ese año, nos obligaron a cerrar a los 10 meses.'
  ),
  array(
    'name' => 'Bextlán',
    'img' => HOME . '/img/bextlan.png',
    'excerpt' => 'De 2013 a 2017 me dediqué a la educación en línea, tanto que desarrollé mi propio sitio para dictar cursos de programación, sin embargo, con el boom de las plataformas educativas y el abaratamiento de los cursos, decidí migrarme a YouTube.'
  ),
  array(
    'name' => 'Mi canal de YouTube',
    'img' => HOME . '/img/youtube.svg',
    'excerpt' => 'En esta red social he encontrado un medio para aterrizar mi pasión por la enseñanza y la programación. Ayudo a otras personas y de paso genero ingresos pasivos. <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">¡Suscríbete a mi canal!</a>.'
  )
);

$openSource = array(
  array(
    'name' => 'Responsimple',
    'link' => 'https://github.com/jonmircha/responsimple',
    'img' => 'https://camo.githubusercontent.com/440d258372120060016d7f343eb2f9fb7246d87f/687474703a2f2f6a6f6e6d69726368612e6769746875622e696f2f726573706f6e73696d706c652f696d672f726573706f6e73696d706c652d6c6f676f2e706e67',
    'excerpt' => 'Un sistema de retícula CSS simple, flexible & responsive.'
  ),
  array(
    'name' => 'kEnAi NPM Starter Kit',
    'link' => 'https://github.com/jonmircha/kenai-npm-starter-kit',
    'img' => 'https://github.com/jonmircha/kenai-npm-starter-kit/raw/master/src/img/kenai-npm-starter-kit.png',
    'excerpt' => 'Kit de inicio para desarrollo frontend basado en componentes (Pug, Sass y JS)  y automatizado con Scripts NPM.'
  ),
  array(
    'name' => 'kEnAi Gulp Starter Kit',
    'link' => 'https://github.com/jonmircha/kenai-gulp-starter-kit',
    'img' => 'https://raw.githubusercontent.com/jonmircha/kenai-gulp-starter-kit/master/src/img/kenai-gulp-starter-kit.png',
    'excerpt' => 'Kit de inicio para desarrollo web con HTML, SCSS, JS, Módulos EcmaScript y PHP automatizado con Gulp.'
  ),
  array(
    'name' => 'Diseño Web en la era móvil: Diez tips sobre Responsible Responsive Design.',
    'link' => 'http://iconos.edu.mx/qrtesis/140171MV.html',
    'img' => 'http://iconos.edu.mx/qrtesis/tesis_140171MV/img_n.jpg',
    'excerpt' => 'Te comparto el proyecto de investigación que desarrollé para obtener mi grado de Maestría en Comunicación con Medios Virtuales en ICONOS.'
  ),
  array(
    'name' => 'KISS PHP',
    'link' => 'https://github.com/jonmircha/kiss-php',
    'img' => 'https://github.com/jonmircha/kiss-php/raw/master/img/favicon96.png',
    'excerpt' => 'Kit de inicio para desarrollo web en PHP, basado en el Principio de Diseño KISS: Mantén todo simple.'
  )
);

$courses = array(
   array(
    'name' => 'Tutoriales AS3',
    'link' => 'https://www.youtube.com/playlist?list=PLB9840C1696C1BC94',
    'img' => 'https://i.ytimg.com/vi/sMloaEx_8xY/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLA8oV8_090nQJxZW_w71GUrwajdMQ',
    'excerpt' => 'Aprenderás los fundamentos de ActionScript 3 el lenguaje de programación de #Flash útil para realidad aumentada, videojuegos, e interactivos.'
  ),
  array(
    'name' => 'Tutoriales PHP',
    'link' => 'https://www.youtube.com/playlist?list=PL469D93BF3AE1F84F',
    'img' => 'https://i.ytimg.com/vi/ZNI7uyJvN6U/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBxKJgqrJVxmeq7t76DQMRQPQtfew',
    'excerpt' => 'Aprenderás los fundamentos de uno de los lenguajes de programación de lado servidor más utilizado en la web: PHP. También revisaremos su interacción con el manejador de base de datos MySQL.'
  ),
  array(
    'name' => 'Tutoriales HTML5',
    'link' => 'https://www.youtube.com/playlist?list=PL211E9DF848CA18FF',
    'img' => 'https://i.ytimg.com/vi/2VKHklZl4-I/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCqlE5E9lv7ekFq2AQqdcNvfn9E4g',
    'excerpt' => 'Aprenderás a realizar sitios web con los estándares de la W3C: HTML5 y CSS3; teniendo en cuenta que tus diseños sean #Responsive y se puedan visualizar en cualquier dispositivo.'
  ),
  array(
    'name' => 'Tutoriales JavaScript',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUaw9krmA6bf5inYcuvUNWI3',
    'img' => 'https://i.ytimg.com/vi/QqLC10iHOlE/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCj5b1NcJAAsluE0L5wXMsa8fOZ-w',
    'excerpt' => 'Aprende los fundamentos de programación en JavaScript el lenguaje de la web; además revisaremos APIs y herramientas que puedan ser útiles en el desarrollo frontend.'
  ),
  array(
    'name' => 'Curso de Diseño y Programación Web',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbxAO7uRoeNHH6ZCyjr7xq2',
    'img' => 'https://i.ytimg.com/vi/HIEqCOI_1Ic/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBxWenmSoZr3KI9fkd5t2GFOYU36g',
    'excerpt' => 'Aprenderás lo básico para iniciarte en el diseño y la programación web. En el frontend: HTML5, CSS3 y JS. En el backend: AJAX, PHP y MySQL, además desplegaremos un proyecto en producción.'
  ),
  array(
    'name' => 'Curso Responsive Design',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbFYbzpJFN1GLMBZnm9hX5G',
    'img' => 'https://i.ytimg.com/vi/mqAYh7Lwxwk/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCER9T7BNEoJYvhK5zBDkBP68t4mA',
    'excerpt' => 'Aprenderás a desarrollar sitios web que se visualicen correctamente en todo tipo de dispositivos. Con una metodología basada en la accesibilidad, usabilidad y optimización del contenido.'
  ),
  array(
    'name' => 'Curso jQuery',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUYvLDfVUXOhnZ6QSouIfQQ7',
    'img' => 'https://i.ytimg.com/vi/aQ1Ql-Fp3aE/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLC_JTjpmU6FXqPqf6KG9rUU5NYQMQ',
    'excerpt' => 'Aprenderás a crear sitios y aplicaciones enriquecidas de efectos visuales y provistos de interactividad JavaScript compatibles en cualquier navegador web.'
  ),
  array(
    'name' => 'Curso WordPress',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUZDOcKsQz79wnYlTvmAdLkj',
    'img' => 'https://i.ytimg.com/vi/VbJZ4WEoA_k/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDlBTFs6M4tnkxoDhZro6GSi7BHmQ',
    'excerpt' => 'Aprenderás a diseñar sitios y aplicaciones web autogestionables con WordPress, creando tus propios temas y plantillas desde cero.'
  ),
  array(
    'name' => 'Curso Programación Orientada a Objetos con PHP',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUZEHvKw7Gx3g5CjlcvA3jr1',
    'img' => 'https://i.ytimg.com/vi/OminOd-O5r0/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB6TWRE9HTQvC6ibTQ2mbNiPf0OeQ',
    'excerpt' => 'Aprenderás el paradigma de la Programación Orientada a Objetos con PHP. Desarrollarás aplicaciones web con Bases de Datos construyendo tu propio Framework MVC.'
  ),
  array(
    'name' => 'Curso Node.js',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUY3gY-ptuqkNEXZHsNwlkND',
    'img' => 'https://i.ytimg.com/vi/aWFUW4SDD4o/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLADasfOdfFUej0X89hjnFhdjsrabw',
    'excerpt' => 'Aprenderás a crear aplicaciones robustas y veloces de tipo full stack; cliente, servidor y base de datos con un sólo lenguaje de programación: JavaScript, gracias a su poderoso entorno Node.js.'
    ),
  array(
    'name' => 'KISS PHP - Mini Framework Web',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUZWYh18UN6Q9rfkoqy5A9Xn',
    'img' => 'https://i.ytimg.com/vi/5ZtTHSmj884/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCP-wTQXo3W--ZJ8xyHRW7KuPhuJw',
    'excerpt' => 'Es un mini framework web para el desarrollo de sitios estáticos con PHP. En esta serie de videos aprenderás a usarlo.'
  ),
  array(
    'name' => 'Configurando Software de Desarrollo Web',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUY7b6mTNigrfZxXNkk0aJd2',
    'img' => 'https://i.ytimg.com/vi/twrKk-2vRbU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLD3oP7D5VPUbNaQQsONYgOqoMSPag',
    'excerpt' => 'En esta lista de reproducción te comparto mi experiencia instalando y configurando software y herramientas que uso en mi día a día como desarrollador web.'
  ),
  array(
    'name' => 'Taller Progressive Web Apps - PWA',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUYIw8CP2AP7QJs4GeeZdvs6',
    'img' => 'https://i.ytimg.com/vi/9oQIylJ-JpU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB29A8OCPtg4zS2Ybk5ee6WdYjxdw',
    'excerpt' => 'En esta miniserie te enseño a convertir un sitio web en aplicación web progresiva (PWA).'
  ),
  array(
    'name' => 'Tips CSS',
    'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUYVLwbW09GGgG2EOFJeNWmQ',
    'img' => 'https://i.ytimg.com/vi/WF3iZvbCEXA/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB--CQyY087P5qtXpzoFBSwgjg7MA',
    'excerpt' => 'En esta lista de reproducción encontrarás Trucos y Tips sobre CSS que te pueden servir en tu día a día como maquetador web. Un tip por cada video.'
  ),
    array(
      'name' => 'Flexbox CSS',
      'link' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbQc3dGsssp8lxAi5npMrys',
      'img' => 'https://i.ytimg.com/vi/AAtvnv6LNMk/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB3Nqv34jRodephVv8by-392BUbPg',
      'excerpt' => 'En esta serie te enseño todo lo que necesitas saber sobre Flexbox CSS para maquetar sitios y aplicaciones web.'
    )
  );
