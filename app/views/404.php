<?php
  header('HTTP/1.0 404 Not Found');
  header('Status: 404 Not Found');
?>
<figure class="Hero is-no-margin u-firstContent">
  <img src="<?=$meta_img?>" alt="jonmircha" style="
    --obj-fit: cover;
    --obj-pos: 50% 50%;
    --filters: brightness(.5) grayscale(1);
  ">
  <figcaption>
    <div>
      <h1><?=$meta_title?></h1>
      <h2><?=$meta_description?></h2>
    </div>
  </figcaption>
</figure>
