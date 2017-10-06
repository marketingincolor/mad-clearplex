<?php
	/*
	Template Name: Contact
	*/
	get_header();
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-12 medium-10 small-centered columns">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
	</div>
	<div class="sub-img small-12 medium-10 small-centered columns">
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'contact_title', true) ? get_post_meta( $post->ID, 'contact_title', true) : get_the_title() ); ?></h2>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="entry-content large-11 columns">
				<p class="gray-p subheading"><?php echo get_the_content(); ?></p>
			</div>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		<article id="contact" class="show-for-medium">
			<h3 class="ca-title blue-heading">Madico, Inc. Headquarters</h5>
			<p class="contact-address gray-p">
			2630 Fairfield Ave South<br>
			St. Petersburg, FL 33712<br>
			(727)-372-2544</p>
		</article>
	</div>
</div>

<div class="row show-for-small-only">
	<div class="small-12 columns" style="padding: 0 40px;">
		<article id="contact" class="widget widget_contact">
			<h4 class="ca-title blue-heading">Madico, Inc. Headquarters</h4>
			<p class="contact-address">
			2630 Fairfield Ave South<br>
			St. Petersburg, FL 33712<br>
			(727)-372-2544</p>
		</article>
	</div>
</div>

<div class="row mobile-form" role="main">
	<div class="medium-10 small-centered columns clearfix">
		<article class="main-content">
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</article>
		<div class="show-for-large">
			<?php get_sidebar('contact'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
