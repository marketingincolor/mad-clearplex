<?php
	/*
	Template Name: Terms Conditions
	*/
	$header_bg = '/assets/images/top-bg-terms.jpg';
	get_header();
	get_template_part('template-parts/top-bg');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="terms-conditions">
		<div class="row">
			<div class="large-8 large-offset-2 columns">
				<h2 class="blue-heading"><?php the_title(); ?></h2>
				<p class="subhead subheading"><?php the_field('terms_subheading'); ?></p>
				<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php endwhile;endif; ?>

<?php get_footer(); ?>