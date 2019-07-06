<?php
require_once './app/store/config.php';
require_once './app/store/db.php';
require_once './app/helpers/router.php';
require_once './app/helpers/human_date.php';
require_once './app/helpers/get_config_data.php';

$page = router();

require_once './app/views/' . $page['metas'] . '.php';
require_once './app/components/html_header.php';
require_once './app/components/header.php';
require_once './app/views/' . $page['content'] . '.php';
require_once './app/components/html_footer.php';
