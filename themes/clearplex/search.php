<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 
get_template_part('template-parts/top-bg');
?>

<?php
	get_template_part('/template-parts/everything-else-search');
?>

<?php get_footer();