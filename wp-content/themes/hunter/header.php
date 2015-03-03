<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-02
 * Time: 6:12 PM
 */
?>
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

<nav class="navbar navbar-default">
    <div class="container-fluid" id="site-logo-area">
        <div class="container">
            <a class="home-link col-md-2" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img id="site-logo" src="<?php bloginfo('template_directory')?>/img/MHS.png" alt="" class=""/>
                <!--            <h1 class="site-title">--><?php //bloginfo( 'name' ); ?><!--</h1>-->
            </a>
        </div>
    </div>
    <div class="container">
        <!-- Collapsed version -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-version">
                <span class="sr-only"></span>
                <?php for($i = 0; $i < 3; $i++) { ?>
                    <span class="icon-bar"></span>
                <?php } ?>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-version">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav navbar-left' ) ); ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
