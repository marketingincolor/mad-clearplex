<?php
	/*
	Template Name: FAQ
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg');
?>


<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered">
	<article class="main-content">
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
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

<?php }} wp_reset_postdata(); ?>

	</article>
	<?php get_sidebar('faq'); ?>
	</div>
</div>
<?php get_footer(); ?>