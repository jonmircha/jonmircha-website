<?php
echo '<header class="Site-header">';
  require_once './app/components/logo.php';
  require_once './app/components/filter_list.php';
echo '</header>';
echo '<section class="Site-list">';
  $courses = array_reverse(APP['courses']);

  foreach ($courses as $pos => $course) {
    foreach ($course as $key => $value) {
      $$key = $value;
    }
    echo '<div class="Site-listItem">';
      require './app/components/material_card.php';
    echo '</div>';
  }
echo '</section>';
echo '<footer class="Site-footer">';
  require_once './app/components/menu.php';
echo '</footer>';
