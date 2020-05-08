<?php require "app/j.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php getMetas(); ?>
</head>
<body>
  <?php getHeader(); ?>
  <main>
    <h1>
      <div>Hola, soy tu amigo y docente digital...</div>
      <div class="text-right">Jonathan MirCha.</div>
    </h1>
    <p>
      Soy profesor, programador web y maratonista ubicado en Ciudad de México.
    </p>
    <p>
      Tengo un
      <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">canal de YouTube</a>
      donde puedes aprender del maravilloso mundo de la web.
    </p>
    <a href="https://youtube.com/jonmircha?sub_confirmation=1" target="_blank">
      <img class="mb-2" src="<?=IMG_YOUTUBE?>" alt="Suscríbete a mi canal de YouTube" loading="lazy">
    </a>
    <p>
      Como profesor he dado clases en IMECC de México, UVM, UNIVDEP, ICONOS, MacTrainee, Bextlán, Escuela IT, Universidad Simón Bolívar y Centro ADM. También he capacitado personal en BANXICO, SEGOB, UNAM, UNITEC, Grupo Reforma, American Cotton, Comex y Liverpool.
    </p>
    <p>
      Como desarrollador web he trabajado para empresas y marcas como MVS, e&middot;go, Voit, MALVESTIDA, Gamol, Condé Nast, Lucy Lara, Soluciones de Comunicación, Aeroméxico, SIEMENS, entre otros.
    </p>
    <img class="mb-2" src="<?=IMG_POSTER?>" alt="<?=NAME?>" loading="lazy">
    <p>
      Si quieres más información profesional descarga
      <a href="<?=HOME?>/jonmircha-cv.pdf" target="_blank">mi currículum</a>.
    </p>
    <p>
      Estás interesado en mis servicios
      <a href="mailto:hola@jonmircha.com">envíame un correo</a>
      y cuéntame sobre tu proyecto.
    </p>
    <?php getSocialMedia(); ?>
    <?php getTinyletter(); ?>
  </main>
  <?php getFooter(); ?>
  <?php getDrift(); ?>
</body>
</html>
