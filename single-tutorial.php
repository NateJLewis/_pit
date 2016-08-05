<?php
/**
 *
 * Template Name: Single Tutorial
 */

get_header();

$tutorials = new WP_Query( array(
    'post_type' => 'tutorial'
) );

while ( $tutorials->have_posts() ):

    $tutorials->the_post();

    get_template_part( 'components/posts/content', 'single-tutorial' );

endwhile;
get_footer();
