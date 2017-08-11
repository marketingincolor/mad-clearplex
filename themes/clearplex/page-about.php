<?php
	/*
	Template Name: About
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>
<!-- standard loop -->
<div class="row" style="display: block;">
	<div class="small-10 small-offset-1 columns">
		<img src="<?php echo $bg_img; ?>" alt="" />
	</div>
</div>
<div class="row">
	<div class="small-12 medium-8 medium-offset-2 columns text-center">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-6 medium-offset-1 columns">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar('about'); ?>
</div>

<?php get_footer(); ?>