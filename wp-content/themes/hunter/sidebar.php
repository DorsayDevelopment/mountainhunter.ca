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
        <ul>
            <?php
                $recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post'));
                foreach($recent_posts as $post) :  ?>
                    <li class="h3">
                        <a class="col-md-12" href="<?php echo get_permalink($post["ID"]); ?>">
                            <?php echo $post["post_title"]; ?>
                            <em class="col-md-12 post-date text-right"><?php echo get_post_time('l, F jS, Y', false, $post["ID"]); ?></em>
                        </a>
                    </li>
                <?php endforeach; ?>
        </ul>
    </div>

    <div>
        <div class="headline-2">Recent Products</div>
        <ul>
            <?php
                $recent_products =  wp_get_recent_posts(array('numberposts' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'product'));
                foreach($recent_products as $product) : ?>

                    <li class="h4">
                        <div class="col-md-3">
                        </div>
                        <a class="col-md-9" href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($product["ID"], 'thumbnail', array('class' => 'responsive-img col-md-5')); ?>
                            <p class="col-md-7">
                                <?php echo $product['post_title']; ?>
                            </p>
                        </a>
                    </li>

                <?php endforeach; ?>
        </ul>
    </div>
</div>