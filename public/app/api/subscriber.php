<?php
//var_dump( $match['params'], $_GET );
$action = $_GET['action'];
$email = base64_decode( $_GET['email'] );
$name = base64_decode( $_GET['name'] );
$domain = $_SERVER['HTTP_HOST'];

if ( $action === 'ok' ) {
  error_reporting(0);
  //$conn = new mysqli( 'localhost', 'root', '', 'jonmirch_suscribers' );
  $conn = new mysqli( 'localhost', 'jonmirch_a', 'J0nM1rCh4_19', 'jonmirch_subscribers' );
  $conn->set_charset( 'utf8' );

  if ( $conn->connect_error ) {
    $res = "<i class=\"fas fa-frown\"></i> <b>Error $conn->connect_errno</b>: $conn->connect_error <i class=\"fas fa-frown\"></i>";
  } else {
    $result = $conn->query( "INSERT INTO subscribers (email, name, date) VALUES ('$email', '$name', NOW())" );

    if ( $result ) {
      $subject = '📧😎 Suscripción confirmada a ' . $domain;
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
              background-color: #FE4918;
              color: #FFF;
            }
          </style>
        </head>
        <body>
          <article>
            <p>
              ¡Gracias por suscribirte <b>$name</b>!
            </p>
            <p>
              Me alegré tanto, que hice un pequeño baile de agradecimiento:
            </p>
            <img src=\"https://media.giphy.com/media/18RnbF8lLA9tC/giphy.gif\" alt=\"Baile de agradecimiento\">
            <p>
              Espero que disfrutes el contenido de mi sitio. Si tienes alguna solicitud de temas que te gustaría que cubra, me encantaría escucharla. No dudes en enviarme un correo electrónico o twittéame a <a href=\"https://twitter.com/@jonmircha\" target=\"_blank\">@jonmircha</a>.
            </p>
          </article>
        </body>
        </html>
      ";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=utf-8\r\n";
      $headers .= "From: Jonathan MirCha < hola@jonmircha.com >";
      mail($to, $subject, $message, $headers);

      $res = '<i class="fas fa-smile"></i> ¡Gracias por suscribirte <b>' . $name . '</b>!, revisa tu email <i class="far fa-envelope"></i>';
    } else {
      $res = '<i class="fas fa-frown"></i> Error: <b>'. $conn->error . '</b>. Inténtalo de nuevo ' . $name . '<i class="fas fa-frown"></i>';
    }
  }

  $conn->close();
} else {
  header( "Location: ../../../" );
}
