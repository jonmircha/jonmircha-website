<?php
function get_about_me_titles ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    echo '
      <li>
        <a class="AboutMe-link" href="'. $url .'" target="_blank">' . $title . '</a>
      </li>
    ';
  }
}

function get_list_items ($array) {
  foreach ($array as $pos => $data) {
    echo '<li>'. $data . '</li>';
  }
}

function get_courses_item ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    echo '
      <article>
        <div>
          <h2>
            <a href="' . $url . '" target="_blank">' . $name . '</a>
          </h2>
          <p>' . $description . '</p>
          <small>' . $since . '</small>
          <br>
          <small>( ' . $type . ' )</small>
        </div>
      </article>
    ';
  }
}

function get_posts_blog ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    echo '
      <article class="Blog-post">
        <h3>' . human_date($date) . '</h3>
        <h2>
          <a href="'. $url .'" target="_blank">' . $title . '</a>
        </h2>
        <small>🏷️ ' . $tags . '</small>
      </article>
    ';
  }
}

function get_marathons_item ($array) {
  foreach ($array as $pos => $data) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    echo '
      <article>
        <div>
          <h2>' . $title . '</h2>
          <h3>' . $place . '</h3>
          <p>' . $time . '</p>
          <small>' . human_date($date) . '</small>
          <br>
        </div>
      </article>
    ';
  }
}
