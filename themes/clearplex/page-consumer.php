<?php
	/*
	Template Name: Consumer
	*/
	get_header('find-dealer');
	get_template_part('template-parts/top-bg');
?>

<section class="best-windshield">
	<div class="row">
		<div class="large-6 large-offset-3 medium-8 medium-offset-2 columns text-center">
			<h2 class="blue-heading"><?php the_field('top_section_heading'); ?></h2>
		</div>
		<div class="large-10 large-offset-1 columns text-center end">
			<p class="gray-p subheading"><?php the_field('top_section_first_paragraph'); ?></p>
		</div>
	</div>
</section>

<section class="product-types show-for-large" style="background-image: url(<?php the_field('vehicle_type_bg_img'); ?>);">
	<div class="row">
		<div class="large-4 large-offset-8 columns">
			<h2 class="blue-heading"><?php the_field('vehicle_type_heading'); ?></h2>
			<p class="gray-p"><?php the_field('vehicle_type_body'); ?></p>
			<a href="<?php echo site_url();the_field('vehicle_type_button_link'); ?>" class="btn"><?php the_field('vehicle_type_button_text'); ?></a>
		</div>
	</div>
</section>

<!-- Mobile/Tablet -->
<section class="product-types hide-for-large">
	<div class="row small-collapse large-uncollapse">
		<div class="small-12 columns">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/consumer-cars-mobile.jpg" alt="clearplex commercial fleets">
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns" style="padding:30px">
			<h2 class="blue-heading"><?php the_field('vehicle_type_heading'); ?></h2>
			<p class="gray-p"><?php the_field('vehicle_type_body'); ?></p>
			<a href="<?php echo site_url();the_field('vehicle_type_button_link'); ?>" class="btn"><?php the_field('vehicle_type_button_text'); ?></a>
		</div>
	</div>
</section>

<section class="product-benefits">
	<div class="row">
		<div class="large-12 columns">
			<div class="owl-carousel owl-theme">

			    <!-- Query custom post type benefits -->
			    <?php 

			    	$args = array(
			    		'post_type'      => 'benefits',
			    		'posts_per_page' => -1,
			    	);
			    	
			    	$the_query = new WP_Query($args);

			    	if ( $the_query->have_posts() ) {
			    		while ( $the_query->have_posts() ) {
			    			$the_query->the_post();
			    	?>

			    <div class="item text-center">
			    	<img src="<?php the_field('gray_icon'); ?>" alt="">
			    	<h5><?php the_title(); ?></h5>
			    	<?php the_content(); ?>
			    </div>

			    <?php }} wp_reset_postdata(); ?>
			    
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="product-faqs">
	<div class="row">
		<div class="medium-10 small-centered columns text-center">
			<h2 class="blue-heading">FAQ<small>s</small></h2>
		</div>
		<div class="large-10 small-centered columns">

			<?php get_template_part('template-parts/dealer-faqs'); ?>
			
		</div>
</section>

<section class="find-dealer" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/find-dealer-consumer.jpg);">
	<div class="row">
		<div class="large-5 large-offset-7 medium-8 columns">
			<h2 class="white-heading"><?php the_field('find_dealer_heading'); ?></h2>
			<p class="white-p"><?php the_field('find_dealer_body'); ?></p>
			<a href="<?php the_field('find_dealer_button_link'); ?>" class="btn"><?php the_field('find_dealer_button_text'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>