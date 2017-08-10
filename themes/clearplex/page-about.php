<?php
	/*
	Template Name: About
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<!-- standard loop -->

<?php get_footer(); ?>