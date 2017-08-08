<?php
	/*
	Template Name: Home
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
?>

<section class="home-hero">
	<div class="owl-carousel owl-theme">
	  <div class="item">
	  	<img src="<?php bloginfo('template_directory'); ?>/assets/images/hero-slide1.jpg" alt="">
	  	<div class="row">
	  		<div class="medium-9 columns">
	  			<div class="slide-meta">
	  				<h1>CLEARPLEX&reg; Windshield Protection Film</h1>
	  				<h2>High Performance Cars Deserve the World's<br class="hide-for-small-only"> Best Performing Windshield Protection</h2>
	  				<p>Because your vehicle is more than a car, it's a prized possession.</p>
	  				<a href="#!" class="btn">Learn More</a>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	  <div class="item">
	  	<img src="<?php bloginfo('template_directory'); ?>/assets/images/hero-slide1.jpg" alt="">
	  	<div class="row">
	  		<div class="medium-9 columns">
	  			<div class="slide-meta">
	  				<h6>CLEARPLEX&reg; Windshield Protection Film</h6>
	  				<h2>High Performance Cars Deserve the World's<br class="hide-for-small-only"> Best Performing Windshield Protection</h2>
	  				<p>Because your vehicle is more than a car, it's a prized possession.</p>
	  				<a href="#!" class="btn">Learn More</a>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	  <div class="item">
	  	<img src="<?php bloginfo('template_directory'); ?>/assets/images/hero-slide1.jpg" alt="">
  		<div class="row">
  			<div class="medium-9 columns">
  				<div class="slide-meta">
  					<h6>CLEARPLEX&reg; Windshield Protection Film</h6>
  					<h2>High Performance Cars Deserve the World's<br class="hide-for-small-only"> Best Performing Windshield Protection</h2>
  					<p>Because your vehicle is more than a car, it's a prized possession.</p>
  					<a href="#!" class="btn">Learn More</a>
  				</div>
  			</div>
  		</div>
	  </div>
	</div>
</section>

<section class="vehicle-types">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
	  <div class="orbit-wrapper">
	    <div class="orbit-controls">
	      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class='fa fa-chevron-left'></i></button>
	      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class='fa fa-chevron-right'></i></button>
	    </div>
	    <ul class="orbit-container">
	      <li class="is-active orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type1.jpg);">
	        <div class="row">
	        	<div class="medium-6 medium-offset-6 columns">
	        		<h2>Classic Cars</h2>
	        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
	        		<a href="#!" class="btn">Learn More</a>
	        	</div>
	        </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type2.jpg);">
          <div class="row">
          	<div class="medium-6 medium-offset-6 columns">
          		<h2>Performance Cars</h2>
          		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
          		<a href="#!" class="btn">Learn More</a>
          	</div>
          </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type3.jpg);">
          <div class="row">
          	<div class="medium-6 medium-offset-6 columns">
          		<h2>Luxury Cars</h2>
          		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
          		<a href="#!" class="btn">Learn More</a>
          	</div>
          </div>
	      </li>
	    </ul>
	  </div>
	</div>
</section>

<?php get_footer(); ?>