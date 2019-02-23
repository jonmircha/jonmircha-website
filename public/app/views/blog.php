<?php
require_once './app/helpers/spanish_date.php';
echo '<header class="Site-header">';
  require_once './app/components/logo.php';
  require_once './app/components/filter_list.php';
echo '</header>';
echo '<section class="Site-blog">';
  $blog = array_reverse(APP['blog']);

  foreach ($blog as $pos => $post) {
    foreach ($post as $key => $value) {
      $$key = $value;
    }
    echo '<article class="Site-post">';
      echo '<h3>' . spanish_date($date) . '</h3>';
      echo '<h2>';
        echo '<a href="'. $url .'" target="_blank">' . $title . '</a>';
      echo '</h2>';
      echo '<small><i class="fas fa-tags"></i> ' . $tags . '</small>';
    echo '</article>';
  }
echo '</section>';
echo '<footer class="Site-footer">';
  require_once './app/components/menu.php';
echo '</footer>';
