<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-15
 * Time: 3:25 PM
 */
?>

<div class="sidebar hidden-sm hidden-xs">
    <div>
        <div class="headline-2">Recent Posts</div>
        <ul class="sidebar-list">
        <?php
            $recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post'));
            foreach($recent_posts as $post) {
                echo '<li class="h3">';
                echo '<a class="col-md-12" href="' . get_permalink($post["ID"]) . '">' . $post["post_title"];
                ?><em class="col-md-12 post-date text-right"><?php the_time('l, F jS, Y') ?></em><?php
                echo '</a></li>';

            }
        ?>
        </ul>

    </div>

    <div class="headline-2">
        Recent Products
    </div>
</div>