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
  <div class="nav-wrapper">

    <?php
      $menu_name = 'header-main-menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
    ?>

    <a class="blog-title" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">

      <?php
      $count = 0;
      $submenu = false;
      foreach( $menuitems as $item ):
        $title = $item->title;
        $link = $item->url;
        if ( !$item->menu_item_parent ):
          $parent_id = $item->ID;
      ?>
      <li><a href="<?php echo $link; ?>"><?php echo $title; ?></a>
      <?php endif;
      if ( $parent_id == $item->menu_item_parent ):
      if ( !$submenu ): $submenu = true; ?>
        <ul class="sub-menu">
      <?php endif; ?>
          <li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
          <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
        </ul>
      <?php $submenu = false; endif;
      endif;
      if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
      </li>
      <?php $submenu = false; endif;
      $count++;
      endforeach; ?>

      <li><a href="https://twitter.com/mtnhuntsociety"><i class="fa fa-twitter-square"></i></a></li>
      <li><a href="https://instagram.com/mountainhuntersociety/"><i class="fa fa-instagram"></i></a></li>

    </ul>

    <?php
    wp_nav_menu(array(
      'container' => 'false',
      'theme_location' => 'header-main-menu',
      'menu_class' => 'side-nav',
      'menu_id' => 'mobile-nav'));
    ?>

  </div>

</nav>