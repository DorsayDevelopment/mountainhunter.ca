<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-02
 * Time: 6:22 PM
 */
?>
<footer class="footer">
    <!-- Desktop version-->
    <div class="container hidden-sm hidden-xs">
        <div class="row underline footer-headline">
            <div class="col-md-3">Navigation</div>
            <div class="col-md-3">Store</div>
            <div class="col-md-3 col-md-offset-3 text-right">MountainHunter.com</div>
        </div>
        <div class="row footer-body underline">
            <div class="col-md-3">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-nav-menu', 'menu_class' => 'footer-menu' ) ); ?>
            </div>
            <div class="col-md-3">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-store-menu', 'menu_class' => 'footer-menu' ) ); ?>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/img/MHS.png" alt="" id="footer-image" class="img-responsive center-block"/></a>
            </div>
        </div>
        <div class="row text-center footer-copy">
            <p>
                &copy; 2015 Mountain Hunter Society | <a href="http://brycendorsay.com">Dorsay Development</a>
            </p>
        </div>
    </div>

    <!-- Mobile version -->
    <div class="container-fluid hidden-md hidden-lg">
        <div class="col-sm-12">
            <p class="footer-headline underline">
                Navigation
            </p>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-nav-menu', 'menu_class' => 'footer-menu' ) ); ?>
        </div>
        <div class="col-sm-12 underline">
            <p class="footer-headline underline">
                Store
            </p>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-store-menu', 'menu_class' => 'footer-menu' ) ); ?>
        </div>
        <div class="row text-center footer-copy">
            <p>
                &copy; 2015 Mountain Hunter Society | <a href="http://brycendorsay.com">Dorsay Development</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>