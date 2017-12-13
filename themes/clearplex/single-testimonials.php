<?php
	$header_bg = '/assets/images/top-bg-dealer-success.jpg';
	get_header();
	get_template_part('template-parts/top-bg');
?>

<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'singletest_title', true) ? get_post_meta( $post->ID, 'singletest_title', true) : get_the_title() ); ?></h2>
	</div>
</div>

<div class="main-wrap" role="main">
	<div class="small-10 small-centered content-wrap">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="entry-content large-11">
				<?php the_content(); ?>
					<address class="gray-p">
						<span class="author">&mdash;<?php the_field('testimonial_author',$id); ?></span><br>
						<span class="job"><?php the_field('testimonial_job',$id); ?></span>
					</address>
			</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</article>
	<?php get_sidebar('singlecase'); ?>
	</div>
</div>
<?php get_footer(); ?>