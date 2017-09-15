<?php
	/*
	Template Name: Become Dealer
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<h1 class="blue-heading"><?php the_field('top_section_heading'); ?></h1>
	</div>
</div>

<section class="become-dealer-content">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<p class="gray-p subheading"><?php the_field('top_section_body') ?></p>
			<!-- <a href="#!" id="dealer-video"><img src="<?php the_field('top_section_video_img'); ?>" alt=""></a> -->
		</div>
	</div>
</section>

<section class="become-dealer-icons">
	<div class="row">
		<div class="small-12 columns">
			<p class="doc-subhead text-center"><?php the_field('benefits_opening_paragraph'); ?></p>
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
			      	<img src="<?php the_field('white_icon'); ?>" alt="">
			      	<h5><?php the_title(); ?></h5>
			      	<?php the_content(); ?>
			      </div>

			      <?php }} wp_reset_postdata(); ?>
			      
			</div>
		</div>
		<div class="large-8 medium-10 columns text-center small-centered">
			<p class="doc-subhead"><a href="#dealer-form" class="btn">Become A Dealer</a></p>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="product-faqs">
	<div class="row">
		<div class="medium-10 small-centered columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_faq_heading'); ?></h2>
		</div>
		<div class="large-10 small-centered columns">

			<?php get_template_part('template-parts/dealer-faqs'); ?>
			
		</div>
	</div>

	</div>
</section>

<?php get_template_part('template-parts/video-modal'); ?>

<section class="dealer-form" id="dealer-form">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="white-heading"><?php the_field('form_section_heading'); ?></h2>
			<p class="form-body"><?php the_field('form_section_body'); ?></p>
		</div>
		<div class="medium-8 small-centered columns text-center">
			<?php echo do_shortcode('[ninja_form id=3]'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
	$('#menu-item-18').find('a').attr('href',location.href + '#dealer-form');
</script>