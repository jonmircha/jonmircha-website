<?php
if (isset($_GET['mood'])) {
  $email = $_GET['email'];
  $name = $_GET['name'];
  $domain = $_SERVER['HTTP_HOST'];

  if ($_GET['mood'] === ':)') {
    $sql = "SELECT * FROM subscribers WHERE email = ?";
    $data = array( $email );
    $search = db_search($sql, false, $data);

    if (!$search) {
      $sql = 'INSERT INTO subscribers (email, name, date) VALUES (?, ?, NOW())';
      $data = array( $email, $name );
      $res = db_affect($sql, $data);

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
                background-color: #F7F7F7;
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
                color: #F7F7F7;
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
        mail($to, $subject, $message, $headers);

        $res['msg'] = "
          ¡Gracias 🤗 por suscribirte $name!
          <br>
          Revisa tu 📨 correo.
        ";
      } else {
        $res['msg'] = "Algo salió mal $name, ☹️ inténtalo de nuevo.";
      }
    } else {
      $res['msg'] = "$name, 😉 ya estabas suscrito.";
    }
  } else if ($_GET['mood'] === ':(') {
    $sql = 'DELETE FROM subscribers WHERE email = ?';
    $data = array( $email );
    $res = db_affect($sql, $data);

    if (!$res['err']) {
      $res['msg'] = "$name, 🥺 lamento que te vayas 🤗 te deseo suerte.";
    } else {
      $res['msg'] = "Algo salió mal $name, ☹️ inténtalo de nuevo.";
    }
  }
} else {
  header('Location: ./');
}
