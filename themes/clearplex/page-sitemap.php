<?php
	/*
	Template Name: Sitemap
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
	while ( have_posts() ) : the_post();
?>

<section class="sitemap fast-dealer">
	<div class="row">
		<div class="columns medium-12 text-center">
			<h1 class="blue-heading"><?php the_title(); ?></h1>
		</div>
		<div class="columns medium-4 text-center">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="<?php echo site_url(); ?>/dealer">Dealer</a></li>
				<li><a href="<?php echo site_url(); ?>/consumer">Consumer</a></li>
				<li><a href="<?php echo site_url(); ?>/commercial">Commercial</a></li>
			</ul>
		</div>
		<div class="columns medium-4 text-center">
			<ul>
				<li><a href="<?php site_url(); ?>/about">About</a></li>
				<li><a href="<?php site_url(); ?>/contact">Contact</a></li>
				<li><a href="<?php site_url(); ?>/faqs">FAQs</a></li>
				<li><a href="<?php site_url(); ?>/write-review">Write A Review</a></li>
			</ul>
		</div>
		<div class="columns medium-4 text-center">
			<ul>
				<li><a href="<?php site_url(); ?>/become-distributor">Become A Distributor</a></li>
				<li><a href="<?php site_url(); ?>/become-dealer">Become A Dealer</a></li>
				<li><a href="<?php site_url(); ?>/testimonials">Testimonials</a></li>
			</ul>
		</div>
	</div>
</section>

<?php endwhile;get_footer(); ?>