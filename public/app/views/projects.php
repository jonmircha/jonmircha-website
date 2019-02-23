<?php
echo '<header class="Site-header">';
  require_once './app/components/logo.php';
  require_once './app/components/filter_list.php';
echo '</header>';
echo '<section class="Site-list">';
  $projects = APP['projects'];

  foreach ($projects as $pos => $project) {
    foreach ($project as $key => $value) {
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
