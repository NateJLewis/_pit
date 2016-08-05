<?php
/**
 * The template for displaying all pages.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _pit
 */

get_header();
while ( have_posts() ) : the_post();

	get_template_part( 'components/page/content', 'page' );

endwhile;
get_footer();
