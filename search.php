<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _pit
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'components/post/content', 'search' );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'components/post/content', 'none' );

endif;
get_footer();
