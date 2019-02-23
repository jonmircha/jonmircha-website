<?php
require_once './app/api/data.php';
require_once './app/helpers/AltoRouter.php';

$router = new AltoRouter();
$router->setBasePath('/j4/public');

$router->map('GET', '/', function () {
  $_GET = array(
    'page' => 'Home',
    'meta_title' => '<jonmircha>',
    'meta_description' => 'Jonathan MirCha | #ProgramadorFitness | Educación + Desarrollo Web + Deporte | Maratonista (x' . APP['marathons'] . ') | #Celiaco por amor | Menos es más',
    'meta_img' => '/img/jonmircha-edcamp-2017.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/home.php'
  );
}, 'home');

$router->map('GET', '/hola', function () {
  $_GET = array(
    'page' => 'Hello',
    'meta_title' => 'Hola soy  jonmircha #ProgramadorFitness',
    'meta_description' => 'Jonathan MirCha, entusiasta de la educación digital y el desarrollo web. Imparto clases, conferencias y capacitación para empresas, escuelas y comunidades en Internet.',
    'meta_img' => '/img/jonmircha.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/hello.php'
  );
}, 'hello');

$router->map('GET', '/cursos', function () {
  $_GET = array(
    'page' => 'Courses',
    'meta_title' => 'Cursos de jonmircha',
    'meta_description' => 'Aquí encontrarás cursos que tengo sobre desarrollo web, gratuitos y de pago. Espero te sirvan para adentrarte en el maravilloso mundo de la web :)',
    'meta_img' => '/img/jonmircha-edcamp-2017.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/courses.php'
  );
}, 'courses');

$router->map('GET', '/proyectos', function () {
  $_GET = array(
    'page' => 'Projects',
    'meta_title' => 'Proyectos de jonmircha',
    'meta_description' => 'Aquí encontrarás proyectos en los que participo (profesionales y personales): sitios, aplicaciones, códigos, vlogs, comunidades, emprendimientos, etc.',
    'meta_img' => '/img/jonmircha-edcamp-2017.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/projects.php'
  );
}, 'projects');

$router->map('GET', '/blog', function () {
  $_GET = array(
    'page' => 'Blog',
    'meta_title' => 'Blog de jonmircha',
    'meta_description' => 'Aquí encontrarás artículos que escribo, en su mayoría sobre desarrollo web, pero de vez en cuando te toparás con algún texto personal :P',
    'meta_img' => '/img/jonmircha-edcamp-2017.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/blog.php'
  );
}, 'blog');

$router->map('GET', '/subscribe/[:action]/[:email]/[:name]', function ($action, $email, $name) {
  $_GET = array(
    'page' => 'Subscribe',
    'meta_title' => 'Gracias por suscribirte',
    'meta_description' => 'Gracias por suscribirte a nuestra lista de correos.',
    'meta_img' => '/img/jonmircha-edcamp-2017.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/subscribe.php',
    'action' => $action,
    'email' => $email,
    'name' => $name
  );
}, 'subscribe');

$router->map('GET', '/bryan', function () {
  $_GET = array(
    'page' => 'Bryan',
    'meta_title' => 'Bryan',
    'meta_description' => 'FUISTE, ERES y SIEMPRE SERÁS... LO MEJOR DE MÍ.',
    'meta_img' => '/img/Bryan.jpg',
    'meta_url' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'content' => './app/views/Bryan.php'
  );
}, 'bryan');

$match = $router->match();

if( $match && is_callable( $match['target'] ) ) {
  call_user_func_array( $match['target'], $match['params'] );
} else {
  header( $_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
  $_GET = array(
    'page' => 'Error-404',
    'meta_title' => 'Error 404: Not Found',
    'meta_description' => 'Parece que kEnAi se comió el contenido que buscas.',
    'meta_img' => '/img/kEnAi.jpg',
    'meta_url' => null,
    'content' => './app/views/404.php'
  );
}
