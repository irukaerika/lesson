<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="samurai university" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css"/>
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>
  <header id="flexBox" class="header">
    <a href="<?php echo get_template_directory_uri(); ?>/home.php">
      <div>FALCON</div>
    </a>
    <nav id="nav-pc">
      <a href="<?php echo home_url(); ?>">HOME</a>
      <a href="<?php echo home_url(); ?>/category/service">SERVICE</a>
      <a href="<?php echo home_url(); ?>/category/stock_list">STOCK LIST</a>
      <a href="<?php echo home_url(); ?>/category/news">NEWS</a>
      <a href="<?php echo home_url(); ?>/category/blog">BLOG</a>
      <a href="<?php echo home_url(); ?>/category/shop">SHOP</a>
      <a href="<?php echo home_url(); ?>/category/download">DOWNLOAD</a>
    </nav>
      <a href="#">検索マーク</a>
  </header>