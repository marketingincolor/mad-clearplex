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
				<h1>CLEARPLEX&reg; Windshield Protection Film</h1>
				<h2>High Performance Cars Deserve the World's<br class="hide-for-small-only"> Best Performing Windshield Protection</h2>
				<p>Because your vehicle is more than a car, it's a prized possession.</p>
				<a href="<?php echo site_url(); ?>/#!" class="btn">Learn More</a>
			</div>
		</div>
	</div>
</section>

<section class="vehicle-types">
	<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
	  <div class="orbit-wrapper">
	    <ul class="orbit-container">
	      <li class="is-active orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type1.jpg);">
	        <div class="row">
	        	<div class="medium-6 medium-offset-6 columns">
	        		<h2 class="blue-heading">Classic Cars</h2>
	        		<p class="gray-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
	        		<a href="#!" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
	        	</div>
	        </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type2.jpg);">
          <div class="row">
          	<div class="medium-6 medium-offset-6 columns">
          		<h2 class="blue-heading">Performance Cars</h2>
          		<p class="gray-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
          		<a href="#!" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	      <li class="orbit-slide" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/vehicle-type3.jpg);">
          <div class="row">
          	<div class="medium-6 medium-offset-6 columns">
          		<h2 class="blue-heading">Luxury Cars</h2>
          		<p class="gray-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac orci enim. Donec ac massa vel leo pellentesque congue. Morbi a dui bibendum, hendrerit orci sit amet.</p>
          		<a href="#!" class="btn">Learn More</a><a href="#!" class="move-prev"><i class='fa fa-chevron-left'></i></a><a href="#!" class="move-next"><i class='fa fa-chevron-right'></i></a>
          	</div>
          </div>
	      </li>
	    </ul>
	  </div>
	</div>
</section>

<section class="fast-dealer" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background.jpg);">
	<div class="row">
		<div class="small-10 medium-6 large-5 columns">
			<h2 class="white-heading">Our Dealer Directory: Fast <br class="hide-for-small-only">and Convenient</h2>
			<p class="white-p">Madico's Dealer Directory is the quickest way to locate the nearest ClearPlex dealer to you.</p>
			<a href="http://dealerdirectory.madico.com/" class="btn">Find A Dealer</a>
		</div>
		<div class="small-10 medium-6 large-5 large-offset-2 columns end">
			<h2 class="white-heading">Become a ClearPlex film Dealer: It's Easy and Profitable</h2>
			<p class="white-p">Add ClearPlex to your Portfolio and Profits to your Bottom Line.</p>
			<a href="<?php echo site_url(); ?>/become-dealer" class="btn">Become A Dealer</a>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="about-home" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/about-home-bg.jpg);">
	<div class="row">
		<div class="medium-6 small-10 columns">
			<h2 class="white-heading">About Madico</h2>
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