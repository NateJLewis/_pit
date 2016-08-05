<?php
/**
 *
 * Template Name: Single Product
 */

get_header();

$products = new WP_Query( array(
    'post_type' => 'product'
) );

while ( $products->have_posts() ):

    $products->the_post();

    get_template_part( 'components/posts/content', 'single-product' );

endwhile;
get_footer();
