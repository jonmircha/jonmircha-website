<?php
error_reporting(0);

$name = $_POST['name'];
$email = $_POST['email'];
$name64 = base64_encode( $_POST['name'] );
$email64 = base64_encode( $_POST['email'] );
$domain = $_SERVER['HTTP_HOST'];
$subject = '😃📧 Por favor, confirma tu suscripción a ' . $domain;
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
        background-color: #F8F8F8;
      }

      .button {
        margin: auto;
        padding: 16px;
        display: block;
        width: 50%;
        font-size: 20px;
        text-decoration: none;
        text-align: center;
        background-color: #FE4918;
        color: #FFF;
      }
    </style>
  </head>
  <body>
    <article>
      <h2><b>$name</b>, ya casi estás suscrito 😃</h2>
      <a href=\"https://jonmircha.com/subscribe/ok/$email64/$name64\" target=\"_blank\" class=\"button\">Sí, me quiero suscribir a esta lista de correos.</a>
      <p>
        Si recibiste este correo electrónico por error, simplemente bórralo. No te suscribirás si no haces clic en el enlace de confirmación de arriba.
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

if ( mail($to, $subject, $message, $headers) ) {
  $res = array(
    'err' => false,
    'msg' => '<i class="fas fa-smile"></i> ' . $_POST['name'] . ' ya casi te suscribes, revisa tu email <i class="far fa-envelope"></i>',
  );
} else {
  $res = array(
    'err' => true,
    'msg' => '<i class="fas fa-frown"></i> algo salió mal ' . $_POST['name'] . ', inténtalo de nuevo <i class="fas fa-frown"></i>',
  );
}

header( 'Content-type: application/json' );
echo json_encode($res);
