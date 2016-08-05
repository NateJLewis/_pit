<?php
/**
 *
 * Template Name: Single Snippet
 */

get_header();

$snippets = new WP_Query( array(
    'post_type' => 'snippet'
) );

while ( $snippets->have_posts() ):

    $snippets->the_post();

    get_template_part( 'components/posts/content', 'single-snippet' );

endwhile;
get_footer();
