<?php
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	$root = get_bloginfo('template_directory').'/assets/images/';
	$img = 'top-bg-testimonials.jpg';
?>
<section class="top-bg" style="background-image: url(<?php echo $root.$img; ?>);"></section>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'singletest_title', true) ? get_post_meta( $post->ID, 'singletest_title', true) : get_the_title() ); ?></h2>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered content-wrap">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content large-11">
			<?php the_content(); ?>
				<address class="gray-p">
					<span class="author">-<?php the_field('testimonial_author',$id); ?></span><br>
					<span class="job"><?php the_field('testimonial_job',$id); ?></span>
				</address>
		</div>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php the_post_navigation(); ?>
	</article>
	<?php get_sidebar('singlecase'); ?>
	</div>
</div>
<?php get_footer(); ?>