<?php
	/*
	Template Name: About
	*/
	$header_bg = '/assets/images/top-bg-about.jpg';
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
	</div>
	<div class="sub-img small-10 large-8 small-centered">
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'about_title', true) ? get_post_meta( $post->ID, 'about_title', true) : get_the_title() ); ?></h2>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content large-11">
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

	</article>
	<?php get_sidebar('about'); ?>
	</div>
</div>
<?php get_footer(); ?>