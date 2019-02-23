<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- HTML Meta Tags -->
<title><?php echo $_GET['meta_title']; ?></title>
<meta name="description" content="<?php echo $_GET['meta_description']; ?>">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="<?php echo $_GET['meta_title']; ?>">
<meta itemprop="description" content="<?php echo $_GET['meta_description']; ?>">
<meta itemprop="image" content="<?php echo $_GET['meta_img']; ?>">
<!-- Facebook Meta Tags -->
<meta property="og:url" content="<?php echo $_GET['meta_url']; ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $_GET['meta_title']; ?>">
<meta property="og:description" content="<?php echo $_GET['meta_description']; ?>">
<meta property="og:image" content="<?php echo $_GET['meta_img']; ?>">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $_GET['meta_title']; ?>">
<meta name="twitter:description" content="<?php echo $_GET['meta_description']; ?>">
<meta name="twitter:image" content="<?php echo $_GET['meta_img']; ?>">
<!-- Meta Tags Generated via http://heymeta.com -->
<meta name="theme-color" content="<?php echo APP['theme_color']; ?>">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
<link rel="shortcut icon" type="image/png" href="/img/favicon64.png">
<link rel="apple-touch-icon" href="/img/favicon1024.png">
<link rel="apple-touch-startup-image" href="/img/favicon1024.png">
<link rel="author" type="text/plain" href="/humans.txt">
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
<link rel="canonical" href="<?php echo $_GET['meta_url']; ?>">
<link rel="manifest" href="/manifest.json">
