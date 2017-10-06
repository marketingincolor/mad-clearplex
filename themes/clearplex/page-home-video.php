<?php
	/*
	Template Name: Home Video
	*/
	
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>
<style>
	video{
		min-width: 100%;
		min-height: 100%;
		z-index: 0;
		opacity: .4;
		object-fit: fill;
	}
	.home-hero{
		background: #00467f;
		overflow: hidden;
		position: relative;
	}
	.home-hero .center{
		position: absolute;
		max-width: 75rem;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
    width: 100%;
    z-index: 1;
	}
</style>

<section class="home-hero">
	<video src="http://dev.marketingincolor.com/cplex/wp-content/uploads/2017/08/ClearPlex-Video-Background.mp4" autoplay="" loop="" muted="" preload="auto"></video>
	<div class="center">
		<div class="small-12 columns">
			<div class="slide-meta">
				<h1><?php the_field('top_section_title'); ?></h1>
				<h2><?php the_field('top_section_subtitle'); ?></h2>
				<p><?php the_field('top_section_paragraph'); ?></p>
				<a href="<?php echo site_url();the_field('top_section_button_url'); ?>" class="btn"><?php the_field('top_section_button_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="scroll-down">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/scroll-down.png" alt="scroll down" title="scroll-down">
	</div>
</section>

<section class="vehicle-types">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-auto-play="false">
	  <div class="orbit-wrapper">
	    <ul class="orbit-container">
	      <li id="homeslide1" class="is-active orbit-slide" style="background-image: url(<?php the_field('performance_image'); ?>);">
	        <div class="row">
	        	<div class="large-4 large-offset-8 columns first-slide">
	        		<h2 class="blue-heading"><?php the_field('performance_title'); ?></h2>
	        		<p class="gray-p"><?php the_field('performance_body'); ?></p>
	        		<a href="<?php echo site_url();the_field('performance_button_url'); ?>" class="btn"><?php the_field('performance_button_text'); ?></a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
	        	</div>
	        </div>
	      </li>
	      <li id="homeslide2" class="orbit-slide" style="background-image: url(<?php the_field('fleet_image'); ?>);">
          <div class="row">
          	<div class="large-4 large-offset-8 columns">
          		<h2 class="blue-heading"><?php the_field('fleet_title'); ?></h2>
          		<p class="gray-p"><?php the_field('fleet_body'); ?></p>
          		<a href="<?php echo site_url();the_field('fleet_button_link'); ?>" class="btn"><?php the_field('fleet_button_text'); ?></a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	      <li id="homeslide3" class="orbit-slide" style="background-image: url(<?php the_field('luxury_image'); ?>);">
          <div class="row">
          	<div class="large-4 large-offset-8 columns">
          		<h2 class="blue-heading"><?php the_field('luxury_title'); ?></h2>
          		<p class="gray-p"><?php the_field('luxury_body'); ?></p>
          		<a href="<?php echo site_url();the_field('luxury	_button_link'); ?>" class="btn"><?php the_field('luxury_button_text'); ?></a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	    </ul>
	  </div>
	</div>
</section>

<section class="fast-dealer hide-for-small-only" style="background-image: url(<?php the_field('dealer_desktop_image'); ?>);">
	<div class="row">
		<div class="large-5 columns">
			<h2 class="white-heading"><?php the_field('dealer_title'); ?></h2>
			<p class="white-p"><?php the_field('dealer_body'); ?></p>
			<a href="<?php echo site_url();the_field('dealer_button_link'); ?>" class="btn"><?php the_field('dealer_button_text'); ?></a>
		</div>
	</div>
</section>

<section class="fast-dealer show-for-small-only">
	<div class="row small-collapse">
		<div class="small-12 columns">
			<img src="<?php the_field('dealer_desktop_image'); ?>" alt="clearplex dealer">
		</div>
	</div>
	<div class="row" style="padding:20px">
		<div class="small-12 columns">
			<h2 class="white-heading"><?php the_field('dealer_title'); ?></h2>
			<p class="white-p"><?php the_field('dealer_body'); ?></p>
			<a href="<?php echo site_url();the_field('dealer_button_link'); ?>" class="btn"><?php the_field('dealer_button_text'); ?></a>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="about-home hide-for-small-only" style="background-image: url(<?php the_field('about_desktop_image'); ?>);">
	<div class="row">
		<div class="large-7 columns">
			<h2 class="white-heading"><?php the_field('about_title'); ?></h2>
			<p class="white-p"><?php the_field('about_body'); ?></p>
			<a href="<?php echo site_url();the_field('about_button_link'); ?>" class="btn"><?php the_field('about_button_text'); ?></a>
		</div>
	</div>
</section>

<section class="about-home show-for-small-only">
	<div class="row small-collapse">
		<div class="small-12 columns">
			<img src="<?php the_field('about_mobile_image'); ?>" alt="About ClearPlex">
		</div>
	</div>
	<div class="row" style="padding:20px">
		<div class="medium-6 columns">
			<h2 class="white-heading"><?php the_field('about_title'); ?></h2>
			<p class="white-p"><?php the_field('about_body'); ?></p>
			<a href="<?php echo site_url();the_field('about_button_link'); ?>" class="btn"><?php the_field('about_button_text'); ?></a>
		</div>
	</div>
</section>


<?php get_footer(); ?>

<script>
	$('.move-next').on('click',function(){
		$('.orbit').foundation('changeSlide',true);
	});
	$('.move-prev').on('click',function(){
		$('.orbit').foundation('changeSlide',false);
	});
</script>