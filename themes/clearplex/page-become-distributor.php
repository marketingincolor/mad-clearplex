<?php
	/*
	Template Name: Become Distributor
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'dist_title', true) ? get_post_meta( $post->ID, 'dist_title', true) : get_the_title() ); ?></h2>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	<div class="entry-content large-12 columns">
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; // End have_posts() check. ?>

</div>
<?php get_footer(); ?>