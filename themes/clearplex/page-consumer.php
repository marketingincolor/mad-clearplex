<?php
	/*
	Template Name: Consumer
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<?php get_footer(); ?>