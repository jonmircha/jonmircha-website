<?php
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
        background-color: #F7F7F7 !important;
      }

      .button {
        margin: auto !important;
        padding: 16px !important;
        display: block !important;
        width: 50% !important;
        font-size: 20px !important;
        text-decoration: none !important;
        text-align: center !important;
        background-color: #FE4918 !important;
        color: #F7F7F7 !important;
      }
    </style>
  </head>
  <body>
    <article>
      <h2><b>$name</b>, ya casi estás suscrito 😃</h2>
      <a href=\"https://jonmircha.com/suscribir?mood=:)&email=$email&name=$name\" target=\"_blank\" class=\"button\">Sí, me quiero suscribir a esta lista de correos.</a>
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

if ( mail($to, $subject, $message, $headers) ) {
  $res = array(
    'err' => false,
    'msg' => $_POST['name'] . ' 😎 ya casi te suscribes,<br>revisa tu 📨 correo.'
  );
} else {
  $res = array(
    'err' => true,
    'msg' => 'Algo salió mal ' . $_POST['name'] . ', ☹️ inténtalo de nuevo.'
  );
}

header( 'Content-type: application/json' );
echo json_encode($res);
