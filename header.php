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


<!--Experimental splash screen-->
<div class="container-fluid hidden">
    <div id="splash-screen">
        Splash screen content
    </div>
</div>


<nav class="navbar navbar-default">
    <div class="container-fluid" id="site-logo-area">
        <div class="container">
            <div class="col-md-10 col-sm-12">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img id="site-logo" src="<?php bloginfo('template_directory')?>/img/MHS.png" alt="" class=""/>
                    <!--            <h1 class="site-title">--><?php //Site description if needed //bloginfo( 'name' ); ?><!--</h1>-->
                </a>
            </div>
            <div class="col-md-2 hidden-sm hidden-xs">
                <?php wp_nav_menu( array( 'theme_location' => 'header-secondary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only"></span>
                <?php for($i = 0; $i < 3; $i++) { ?>
                    <span class="icon-bar"></span>
                <?php } ?>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php wp_nav_menu( array( 'theme_location' => 'header-main-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'header-secondary-menu', 'menu_class' => 'nav navbar-nav hidden-md hidden-lg' ) ); ?>

            <ul id="social-bar-inside-collapsed" class="nav navbar-nav navbar-right social-icons">
                <li><a href=""><i class="fa fa-facebook-official"></i></a></li>
                <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
                <li><a href=""><i class="fa fa-pinterest-square"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
