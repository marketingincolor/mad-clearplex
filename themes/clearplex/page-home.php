<?php
	/*
	Template Name: Home
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<section class="home-hero" style="background-image: url(<?php echo $bg_img; ?>);">
	<div class="row">
		<div class="medium-9 columns">
			<div class="slide-meta">
				<h1>CLEARPLEX<sup>&reg;</sup> Windshield Protection Film</h1>
				<h2>Enhance your Vehicle with the World's<br class="hide-for-small-only"> Best Performing Windshield Protection</h2>
				<p>Because it's more than a car, it's a prized possession.</p>
				<a href="<?php echo site_url(); ?>/product" class="btn">Learn More</a>
			</div>
		</div>
	</div>
</section>

<section class="vehicle-types">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
	  <div class="orbit-wrapper">
	    <ul class="orbit-container">
	      <li class="is-active orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/performance-vehicle.jpg);">
	        <div class="row">
	        	<div class="medium-4 medium-offset-8 columns">
	        		<h2 class="blue-heading">The Ideal Solution for Performance Cars</h2>
	        		<p class="gray-p">With ClearPlex get the performance you expect. High-performance protection for your high-performance vehicle.</p>
	        		<a href="<?php echo site_url(); ?>/product" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
	        	</div>
	        </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/commercial-vehicles.jpg);">
          <div class="row">
          	<div class="medium-4 medium-offset-8 columns">
          		<h2 class="blue-heading">The Ideal Solution for Fleets</h2>
          		<p class="gray-p">Keep fleets on the road&mdash;and off the pepair list. With ClearPlex, windshields and bottom lines are protected.</p>
          		<a href="<?php echo site_url(); ?>/product" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/luxury-classic.jpg);">
          <div class="row">
          	<div class="medium-4 medium-offset-8 columns">
          		<h2 class="blue-heading">The Ideal Solution for Luxury &amp; Classic Cars</h2>
          		<p class="gray-p">With ClearPlex, you'll get more than protection, you'll get peace of mind.</p>
          		<a href="<?php echo site_url(); ?>/product" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	    </ul>
	  </div>
	</div>
</section>

<section class="fast-dealer" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/fast-dealer.jpg);">
	<div class="row">
		<div class="small-10 medium-6 large-5 columns">
			<h2 class="white-heading">Expand Your Portfolio and Improve Profits with ClearPlex Windshield Protection Film.</h2>
			<p class="white-p">ClearPlex film is a natural, easy tie-in if you currently sell paint protection film and/or window film.</p>
			<a href="<?php echo site_url(); ?>/become-dealer" class="btn">Become A Dealer</a>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="about-home" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/about-home-bg.jpg);">
	<div class="row">
		<div class="medium-6 small-10 columns">
			<h2 class="white-heading">About Madico<sup>&reg;</sup></h2>
			<p class="white-p">ClearPlex Windhshield Protection Film is brought to you by Madico, a pioneer and world leader in the development of window protection systems. As an award-winning organization, we have been manufacturing high performance, complex, multilayer films engineered to exceed customer expectations since 1903.</p>
			<a href="<?php echo site_url(); ?>/about" class="btn">More About Madico</a>
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