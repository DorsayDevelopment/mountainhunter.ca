<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
  <?php wp_head(); ?>
</head>
<body>

<nav id="main-nav">

  <ul>
    <li class="blog-title full-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></li>
    <li class="blog-title short-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('description'); ?></a></li>
    
    <?php wp_nav_menu( array( 'theme_location' => 'header-main-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
    
    <li class="nav-right"><a href="https://twitter.com/mtnhuntsociety"><i class="fa fa-twitter-square"></i></a></li>
    <li class="nav-right"><a href="https://instagram.com/mountainhuntersociety/"><i class="fa fa-instagram"></i></a></li>
  </ul>

</nav>