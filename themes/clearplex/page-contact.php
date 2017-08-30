<?php
	/*
	Template Name: Contact
	*/
	get_header();
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'contact_title', true) ? get_post_meta( $post->ID, 'contact_title', true) : get_the_title() ); ?></h2>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="entry-content large-11">
				<p class="gray-p subheading"><?php echo get_the_content(); ?></p>
			</div>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered">
	<article class="main-content">
		<?php echo do_shortcode('[ninja_form id=1]'); ?>
	</article>
	<?php get_sidebar('contact'); ?>
	</div>
</div>
<?php get_footer(); ?>