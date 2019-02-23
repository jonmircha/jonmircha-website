<?php
define('APP', array(
  'theme_color' => '#FE4918',
  'age' => 34,
  'marathons' => 13,
  'best_race' => 'San Francisco 2015',
  'best_time' => '3:33:38hrs',
  'courses' => array(
    array(
      'title' => 'Tutoriales AS3',
      'color_card' => 'Red-AS3',
      'type' => 'free',
      'poster' => './img/curso-as3.jpg',
      'description' => 'Aprenderás los fundamentos de ActionScript 3 el lenguaje de programación de Flash útil para realidad aumentada, videojuegos, e interactivos.',
      'url' => 'https://www.youtube.com/playlist?list=PLB9840C1696C1BC94',
      'slides' => null,
      'resources' => 'https://github.com/jonmircha/tutoriales-as3/raw/master/recursos-tutoriales-as3.zip',
      'code' => 'https://github.com/jonmircha/tutoriales-as3'
    ),
    array(
      'title' => 'Tutoriales PHP',
      'color_card' => 'Purple-PHP',
      'type' => 'free',
      'poster' => './img/curso-php.jpg',
      'description' => 'Aprenderás los fundamentos de uno de los lenguajes de programación de lado servidor más utilizado en la web: PHP. También revisaremos su interacción con el manejador de base de datos MySQL.',
      'url' => 'https://www.youtube.com/playlist?list=PL469D93BF3AE1F84F',
      'slides' => null,
      'resources' => 'https://github.com/jonmircha/tutoriales-php/raw/master/recursos-tutoriales-php.zip',
      'code' => 'https://github.com/jonmircha/tutoriales-php'
    ),
    array(
      'title' => 'Tutoriales HTML5',
      'color_card' => 'Orange-HTML5',
      'type' => 'free',
      'poster' => './img/curso-html5.jpg',
      'description' => 'Aprenderás a realizar sitios web con los estándares de la W3C: HTML5 y CSS3; teniendo en cuenta que tus diseños se puedan visualizar en cualquier dispositivo.',
      'url' => 'https://www.youtube.com/playlist?list=PL211E9DF848CA18FF',
      'slides' => null,
      'resources' => 'https://github.com/jonmircha/tutoriales-html5/raw/master/recursos-tutoriales-html5.zip',
      'code' => 'https://github.com/jonmircha/tutoriales-html5'
    ),
    array(
      'title' => 'Tutoriales JS',
      'color_card' => 'Yellow-JS',
      'type' => 'free',
      'poster' => './img/curso-js.jpg',
      'description' => 'Aprenderás los fundamentos de programación en JavaScript el lenguaje de lado cliente de la web; además revisaremos APIs y herramientas que puedan ser útiles en el desarrollo frontend.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUaw9krmA6bf5inYcuvUNWI3',
      'slides' => null,
      'resources' => null,
      'code' => 'https://github.com/jonmircha/tutoriales-javascript'
    ),
    array(
      'title' => 'Diseño y Programación Web',
      'color_card' => 'Orange-HTML5',
      'type' => 'free',
      'poster' => './img/curso-web.jpg',
      'description' => 'Aprenderás lo básico para iniciarte en el diseño y la programación web. En el frontend: HTML5, CSS3 y JS. En el backend: AJAX, PHP y MySQL, además desplegaremos un proyecto en producción.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbxAO7uRoeNHH6ZCyjr7xq2',
      'slides' => 'http://jonmircha.github.io/slides-web/#/',
      'resources' => 'https://github.com/jonmircha/curso-web/raw/master/recursos-diseno-y-programacion-web.zip',
      'code' => 'https://github.com/jonmircha/curso-web'
    ),
    array(
      'title' => 'Node.js',
      'color_card' => 'Green-Node',
      'type' => 'free',
      'poster' => './img/curso-nodejs.jpg',
      'description' => 'Aprenderás a crear aplicaciones robustas y veloces de tipo full stack; cliente, servidor y base de datos con un sólo lenguaje de programación: JavaScript, gracias a su poderoso entorno Node.js.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUY3gY-ptuqkNEXZHsNwlkND',
      'slides' => 'http://jonmircha.github.io/slides-nodejs/#/',
      'resources' => null,
      'code' => 'https://github.com/jonmircha/curso-nodejs'
    ),
    array(
      'title' => 'jQuery',
      'color_card' => 'Blue-jQuery',
      'type' => 'free',
      'poster' => './img/curso-jquery.jpg',
      'description' => 'Aprenderás a crear sitios y aplicaciones enriquecidas de efectos visuales y provistos de interactividad JavaScript compatibles en cualquier navegador web.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUYvLDfVUXOhnZ6QSouIfQQ7',
      'slides' => 'http://jonmircha.github.io/slides-jquery',
      'resources' => 'https://github.com/jonmircha/curso-jquery/raw/master/recursos-jquery.zip',
      'code' => 'https://github.com/jonmircha/curso-jquery'
    ),
    array(
      'title' => 'WordPress',
      'color_card' => 'Black-WordPress',
      'type' => 'free',
      'poster' => './img/curso-wordpress.jpg',
      'description' => 'Aprenderás a diseñar sitios y aplicaciones web autogestionables con WordPress, creando tus propios temas y plantillas desde cero.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUZDOcKsQz79wnYlTvmAdLkj',
      'slides' => 'http://jonmircha.github.io/slides-wordpress',
      'resources' => 'https://github.com/jonmircha/curso-wordpress/raw/master/recursos-wordpress.zip',
      'code' => 'https://github.com/jonmircha/curso-wordpress'
    ),
    array(
      'title' => 'Responsive Design',
      'color_card' => 'Red-Responsive',
      'type' => 'free',
      'poster' => './img/curso-responsive-design.jpg',
      'description' => 'Aprenderás a desarrollar sitios web que se visualicen correctamente en todo tipo de dispositivos. Con una metodología basada en la accesibilidad, usabilidad y optimización del contenido.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbFYbzpJFN1GLMBZnm9hX5G',
      'slides' => null,
      'resources' => 'https://github.com/jonmircha/curso-responsive-design/raw/master/recursos-responsive-design.zip',
      'code' => 'https://github.com/jonmircha/curso-responsive-design'
    ),
    array(
      'title' => 'P.O.O. con PHP y MySQL',
      'color_card' => 'Purple-PHP',
      'type' => 'free',
      'poster' => './img/curso-poo-php-mysql.jpg',
      'description' => 'Aprenderás el paradigma de la Programación Orientada a Objetos con PHP. Desarrollarás aplicaciones web con Bases de Datos construyendo tu propio Framework MVC.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUZEHvKw7Gx3g5CjlcvA3jr1',
      'slides' => 'http://jonmircha.github.io/slides-poo-php-mysql',
      'resources' => null,
      'code' => 'https://github.com/jonmircha/curso-poo-php-mysql'
    ),
    array(
      'title' => 'Node.js Desde Cero',
      'color_card' => 'Green-Node',
      'type' => 'pay',
      'poster' => './img/curso-nodejs-desde-cero.jpg',
      'description' => 'Si has usado JS en el frontend, con este curso aprenderás JS en el backend y en las bases de datos; convertirte en un FullStack Developer y crea aplicaciones con el lenguaje más importante de la web.',
      'url' => 'https://ed.team/cursos/nodejs',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'React.js Desde Cero',
      'color_card' => 'Blue-React',
      'type' => 'pay',
      'poster' => './img/curso-react-desde-cero.jpg',
      'description' => 'Aprenderás la librería JS orientada a componentes creada por Facebook para resolver las dificultades de construir interfaces de usuario.',
      'url' => 'https://ed.team/cursos/react',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'JS Avanzado: Paradigmas',
      'color_card' => 'Yellow-JS',
      'type' => 'pay',
      'poster' => './img/curso-js-avanzado-paradigmas.jpg',
      'description' => 'Aprenderás diferentes paradigmas de programación útiles en JS: Orientación a Objetos, Funcional, Reactivo y Asíncrono.',
      'url' => 'https://ed.team/cursos/javascript-avanzado',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'CSS: Grid + Flexbox',
      'color_card' => 'Red-Responsive',
      'type' => 'pay',
      'poster' => './img/curso-css-avanzado-grid-flexbox.png',
      'description' => 'Aprenderás técnicas avanzadas de maquetación combinando Flexbox y Grid. Es el primer curso en español en abordar a fondo CSS Grid con 2 de los más reconocidos expertos en diseño web de Latinoamérica.',
      'url' => 'https://ed.team/cursos/css-avanzado',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Gestión de Proyectos Web',
      'color_card' => 'Red-Responsive',
      'type' => 'pay',
      'poster' => './img/curso-gestion-desarrollo-web.png',
      'description' => 'Tendrás un panorama completo de como abordar proyectos web en todas sus etapas. Dictado por 4  expertos reconocidos en toda Latinoamérica.',
      'url' => 'https://ed.team/cursos/desarrollo-web',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Progressive Web Apps',
      'color_card' => 'Green-Vue',
      'type' => 'pay',
      'poster' => './img/curso-html5-pwas.png',
      'description' => 'Las PWA\'s nos permiten tener aplicaciones web HTML5 que se comportan como nativas del teléfono. Estas nos brindan múltiples ventajas en el desarrollo web/móvil.',
      'url' => 'https://ed.team/cursos/pwa',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Vue.js Desde Cero',
      'color_card' => 'Blue-Vue',
      'type' => 'pay',
      'poster' => './img/curso-vue-desde-cero.png',
      'description' => 'Aprenderás Vue.js, el framework JS progresivo para frontend, que ha escalado en la preferencia de los desarrolladores por su facilidad de aprendizaje, su velocidad y flexibilidad.',
      'url' => 'https://ed.team/vue',
      'slides' => null,
      'resources' => null,
      'code' => null
    )
  ),
  'projects' => array(
    array(
      'title' => '#ProgramadorFitness',
      'color_card' => 'Yellow-JS',
      'type' => 'vlog',
      'poster' => './img/proyectos-programador-fitness.jpg',
      'description' => 'Serie de videos, donde te daré consejos para llevar una vida saludable y evitar el sedentarismo. Recuerda... mente sana en cuerpo sano :)',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbJFWQx8gcy1MK0lTLrdLR9',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'El Vlog de MirCha',
      'color_card' => 'Black-WordPress',
      'type' => 'vlog',
      'poster' => './img/proyectos-vlog-de-mircha.jpg',
      'description' => 'Serie de videos opinión sobre diferentes temáticas de interés personal y profesional.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUaourms9u_1KfoMtCWuLgvv',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'kEnAi Gulp Starter Kit',
      'color_card' => 'Brown-kEnAi',
      'type' => 'code',
      'poster' => './img/proyectos-kenai-gulp-starter-kit.jpg',
      'description' => 'Kit de inicio para desarrollo web con HTML, SCSS, JS, Módulos EcmaScript y PHP automatizado con Gulp.',
      'url' => null,
      'slides' => null,
      'resources' => null,
      'code' => 'https://github.com/jonmircha/kenai-gulp-starter-kit'
    ),
    array(
      'title' => 'kEnAi NPM Starter Kit',
      'color_card' => 'Brown-kEnAi',
      'type' => 'code',
      'poster' => './img/proyectos-kenai-npm-starter-kit.jpg',
      'description' => 'Kit de inicio para desarrollo frontend basado en componentes (Pug, Sass y JS) y automatizado con Scripts NPM.',
      'url' => null,
      'slides' => null,
      'resources' => null,
      'code' => 'https://github.com/jonmircha/kenai-npm-starter-kit'
    ),
    array(
      'title' => 'Responsimple',
      'color_card' => 'Orange-HTML5',
      'type' => 'code',
      'poster' => './img/proyectos-responsimple.jpg',
      'description' => 'Es una librería CSS responsive y mobile first, que usa flexbox para maquetar sitios web.',
      'url' => 'http://jonmircha.github.io/responsimple/',
      'slides' => 'https://github.com/jonmircha/responsimple',
      'resources' => null,
      'code' => 'http://jonmircha.github.io/responsimple/css/responsimple.min.css'
    ),
    array(
      'title' => 'Talleres',
      'color_card' => 'Green-Vue',
      'type' => 'community',
      'poster' => './img/proyectos-talleres.jpg',
      'description' => 'En esta lista de reproducción encontrarás videos de eventos, clases y charlas de diferentes comunidades web en las que participo.',
      'url' => 'https://www.youtube.com/playlist?list=PLvq-jIkSeTUbcJZztYZ4ijLzcl3xTbxEO',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'EDteam',
      'color_card' => 'Red-Responsive',
      'type' => 'community',
      'poster' => './img/proyectos-edteam.jpg',
      'description' => 'Es la comunidad digital donde escribo artículos e imparto cursos de diseño y programación web. En este enlace puedes ver mi perfil y contribuciones.',
      'url' => 'https://ed.team/profesores/jon-mircha',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Presentaciones',
      'color_card' => 'Yellow-JS',
      'type' => 'book',
      'poster' => './img/proyectos-presentaciones.jpg',
      'description' => 'Repositorio de GitHub donde encontrarás los enlaces a todas las presentaciones que hago para mis cursos, charlas y conferencias.',
      'url' => 'https://github.com/jonmircha/my-slides',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Lucy Lara',
      'color_card' => 'Black-WordPress',
      'type' => 'site',
      'poster' => './img/proyectos-lucylara.jpg',
      'description' => 'Sitio web de la reconocida editora de revistas y autora de libros sobre moda, belleza y estilo de vida: Lucy Lara. Desarrollado con WordPress a medida del cliente.',
      'url' => 'http://lucylara.com',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Malvestida',
      'color_card' => 'Black-WordPress',
      'type' => 'site',
      'poster' => './img/proyectos-malvestida.jpg',
      'description' => 'Sitio web de Malvestida, revista digital sobre estilo de vida, actualidad, moda y cultura. Desarrollado con WordPress a medida del cliente.',
      'url' => 'http://malvestida.com/',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'EDgram',
      'color_card' => 'Blue-React',
      'type' => 'app',
      'poster' => './img/proyectos-edgram.jpg',
      'description' => 'EDgram, aplicación web progresiva inspirada en Instagram realizada con fines educativos en el curso Progressive Web Apps de EDteam. Desarrollada con JavaScript, Webpack y Firebase.',
      'url' => 'https://jonmircha.github.io/edgram/',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Somms',
      'color_card' => 'Black-WordPress',
      'type' => 'site',
      'poster' => './img/proyectos-somms.jpg',
      'description' => 'Sitio web de Somms, grupo de rock y sommeliers. Desarrollado con HTML5, jQuery y PHP.',
      'url' => 'http://somms.mx/',
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Bextlán',
      'color_card' => 'Blue-Bextlan',
      'type' => 'startup',
      'poster' => './img/proyectos-bextlan.jpg',
      'description' => 'Bextlán... lugar de bits, vectores y pixeles. Fue el primer nombre que tuvo mi canal de YouTube de 2012 a 2017. Cursos y Tutoriales sobre el maravilloso mundo de la web.',
      'url' => null,
      'slides' => null,
      'resources' => null,
      'code' => null
    ),
    array(
      'title' => 'Café Latino',
      'color_card' => 'Brown-CafeLatino',
      'type' => 'startup',
      'poster' => './img/proyectos-cafe-latino.jpg',
      'description' => 'Mi primer gran fracaso como emprendedor, la apertura de un café que tuve que cerrar a los 8 meses de su apertura. Pérdida de dinero y mucho aprendizaje de mis errores y del maravilloso mundo del café.',
      'url' => null,
      'slides' => null,
      'resources' => null,
      'code' => null
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
      'title' => 'Hello Blog',
      'date' => '2017-06-05',
      'url' => 'https://ed.team/blog/hello-blog',
      'tags' => 'personal, edteam'
    ),
    array(
      'title' => 'Clientes Bully cómo evitarlos y confrontarlos',
      'date' => '2017-06-12',
      'url' => 'https://ed.team/blog/clientes-bully-como-evitarlos-y-confrontarlos',
      'tags' => 'personal, freelance, clientes'
    ),
    array(
      'title' => 'Introducción a Grid CSS',
      'date' => '2017-06-19',
      'url' => 'https://ed.team/blog/introduccion-grid-css',
      'tags' => 'grid, css, maquetación'
    ),
    array(
      'title' => 'Posicionamiento Grid CSS',
      'date' => '2017-06-26',
      'url' => 'https://ed.team/blog/posicionamiento-grid-css',
      'tags' => 'grid, css, maquetación'
    ),
    array(
      'title' => 'Todo lo que debes saber sobre el Responsive Web Design',
      'date' => '2017-07-03',
      'url' => 'https://ed.team/blog/todo-lo-que-debes-saber-sobre-el-responsive-web-design',
      'tags' => 'css, responsive design, diseño web'
    ),
    array(
      'title' => 'CSS Orientado a Objetos (OOCSS)',
      'date' => '2017-07-10',
      'url' => 'https://ed.team/blog/css-orientado-objetos-oocss',
      'tags' => 'css, arquitecturas css, diseño web'
    ),
    array(
      'title' => 'EDcamp Bogotá 2017 una gran experiencia',
      'date' => '2017-07-26',
      'url' => 'https://ed.team/blog/edcamp-bogota-2017-una-gran-experiencia',
      'tags' => 'personal, edteam, edcamp'
    ),
    array(
      'title' => 'Las Eras de JavaScript',
      'date' => '2017-07-31',
      'url' => 'https://ed.team/blog/las-eras-de-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
    array(
      'title' => 'Aplicaciones Web Progresivas: La evolución del Diseño Responsivo',
      'date' => '2017-08-14',
      'url' => 'https://ed.team/blog/aplicaciones-web-progresivas-la-evolucion-del-diseno-responsivo',
      'tags' => 'responsive design, progressive web apps, pwa'
    ),
    array(
      'title' => 'Mejora la accesibilidad web de tus proyectos',
      'date' => '2017-08-21',
      'url' => 'https://ed.team/blog/mejora-la-accesibilidad-web-de-tus-proyectos',
      'tags' => 'responsive design, accesibilidad web, diseño web'
    ),
    array(
      'title' => 'Características Flexbox',
      'date' => '2017-08-29',
      'url' => 'https://ed.team/blog/caracteristicas-flexbox',
      'tags' => 'flexbox, css, maquetación'
    ),
    array(
      'title' => 'Responsive Design con Grid CSS y sin Media Queries',
      'date' => '2017-09-11',
      'url' => 'https://ed.team/blog/responsive-design-con-grid-css-y-sin-media-queries',
      'tags' => 'responsive design, grid, maquetación'
    ),
    array(
      'title' => 'Fuerza México',
      'date' => '2017-09-24',
      'url' => 'https://ed.team/blog/fuerza-mexico',
      'tags' => 'personal, méxico'
    ),
    array(
      'title' => 'Introducción a NPM',
      'date' => '2017-10-03',
      'url' => 'https://ed.team/blog/introduccion-npm',
      'tags' => 'npm, nodejs, programación'
    ),
    array(
      'title' => 'Introducción a HTML',
      'date' => '2017-10-14',
      'url' => 'https://ed.team/blog/introduccion-html',
      'tags' => 'html, html5, diseño web'
    ),
    array(
      'title' => 'Modelo de Caja CSS',
      'date' => '2017-10-22',
      'url' => 'https://ed.team/blog/modelo-de-caja-css',
      'tags' => 'css, modelo de caja, maquetación'
    ),
    array(
      'title' => 'Tipos de clases en PHP',
      'date' => '2017-11-01',
      'url' => 'https://ed.team/blog/tipos-de-clases-en-php',
      'tags' => 'php, programación, orientado a objetos'
    ),
    array(
      'title' => 'Conceptos Básicos de Bases de Datos',
      'date' => '2017-11-07',
      'url' => 'https://ed.team/blog/conceptos-basicos-de-bases-de-datos',
      'tags' => 'bases de datos, sql, nosql'
    ),
    array(
      'title' => 'Modelo Entidad-Relación',
      'date' => '2017-11-14',
      'url' => 'https://ed.team/blog/modelo-entidad-relacion',
      'tags' => 'bases de datos, modelo entidad relación'
    ),
    array(
      'title' => 'Normalización de Bases de Datos',
      'date' => '2017-12-12',
      'url' => 'https://ed.team/blog/normalizacion-de-bases-de-datos',
      'tags' => 'bases de datos, normalización'
    ),
    array(
      'title' => 'ECMAScript el estándar de JavaScript',
      'date' => '2018-01-03',
      'url' => 'https://ed.team/blog/ecmascript-el-estandar-de-javascript',
      'tags' => 'ecmascript, javascript, programación'
    ),
    array(
      'title' => 'Babel',
      'date' => '2018-01-19',
      'url' => 'https://ed.team/blog/babel',
      'tags' => 'javascript, babel, programación'
    ),
    array(
      'title' => 'Variables,Constantes y Niveles de Bloque en JavaScript',
      'date' => '2018-01-26',
      'url' => 'https://ed.team/blog/variablesconstantes-y-niveles-de-bloque-en-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
    array(
      'title' => 'Template Strings en JavaScript',
      'date' => '2018-02-26',
      'url' => 'https://ed.team/blog/template-strings-en-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
    array(
      'title' => 'Arrow Functions en JavaScript',
      'date' => '2018-03-07',
      'url' => 'https://ed.team/blog/arrow-functions-en-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
    array(
      'title' => 'Objetos Literales en JavaScript',
      'date' => '2018-03-20',
      'url' => 'https://ed.team/blog/objetos-literales-en-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
    array(
      'title' => 'Destructuración en JavaScript',
      'date' => '2018-04-03',
      'url' => 'https://ed.team/blog/destructuracion-en-javascript',
      'tags' => 'javascript, ecmascript, programación'
    ),
  )
));
