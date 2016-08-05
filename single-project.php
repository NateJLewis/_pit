<?php
/**
 *
 * Template Name: Single Project
 */

get_header();

$projects = new WP_Query( array(
    'post_type' => 'project'
) );

while ( $projects->have_posts() ):

    $projects->the_post();

    get_template_part( 'components/posts/content', 'single-project' );

endwhile;
get_footer();
