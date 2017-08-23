<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php
	$data = $_GET['hidden'];
	echo 'hidden = '.$data;
	if ($data == 'video-gallery') {
		get_template_part('videos-search');
	} else{
		get_template_part('everything-else-search');
	}
?>

<?php get_footer();