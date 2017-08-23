<?php
	/*
	Template Name: Video Gallery
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="video-gallery">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php 	the_title(); ?></h2>
			<p class="gray-p"><?php echo get_the_content(); ?></p>
		</div>
		<div class="medium-10 medium-offset-1 columns">
			<?php get_search_form(); ?>
		</div>
		<?php get_template_part('template-parts/video-gallery'); ?>
	</div>
</section>

<style>
	.gallery-container.loading > * {
		opacity: 0.2;
	}
	#content.loading:before {
    content: "Loading Videos";
    padding: 22px;
    background: #000;
    color: #fff;
    width: 100%;
    box-sizing: border-box;
	}
</style>

<?php get_template_part('template-parts/video-modal'); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>