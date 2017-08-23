<?php
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php ( the_field('cs_title') ? the_field('cs_title') : the_title() ); ?></h2>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered content-wrap">
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
	<?php get_sidebar('singlecase'); ?>
	</div>
	<div class="cs-functions large-8 end columns">
		<button class="blue-button">Share this Case Study</button>
		<button class="blue-button">Read More Case Studies</button>
	</div>
</div>
<?php get_footer(); ?>