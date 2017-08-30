<?php
	/*
	Template Name: Write Review
	*/
	get_header();
	get_template_part('template-parts/top-bg');
?>

<section class="become-distributor">
	<div class="row">
		<div class="large-8 small-10 small-centered text-center">
			<h1 class="blue-heading"><?php the_field('distributor_heading'); ?></h1>
			<p class="gray-p subheading"><?php the_field('distributor_body'); ?></p>
		</div>
		<div class="large-6 medium-8 small-10 small-centered">
			<?php echo do_shortcode('[ninja_form id=4]'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>