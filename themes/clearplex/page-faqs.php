<?php
	/*
	Template Name: FAQ
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<?php 

	$args = array(
		'post_type'      => 'faqs',
		'posts_per_page' => -1,
	);
	$count = 1;
	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
	?>


<?php }} wp_reset_postdata(); ?>


<?php get_footer(); ?>