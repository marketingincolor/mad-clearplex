<?php
	/*
	Template Name: Product
	*/
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg-truck');
?>

<section class="best-windshield">
	<div class="row">
		<div class="large-6 large-offset-3 medium-8 medium-offset-2 columns text-center">
			<h2 class="blue-heading">ClearPlex®. The Best Windshield Protection You'll Never See.</h2>
		</div>
		<div class="large-10 large-offset-1 columns text-center end">
			<p class="gray-p">Driving on today's highways can be hazardous—especially to your windshield. From small rocks to road debris, unwanted objects that strike your glass can lead to serious, costly damages, and driving distractions.</p>
			<p class="gray-p">Driving on today's highways can be hazardous—especially to your windshield. From small rocks to road debris, unwanted objects that strike your glass can lead to serious, costly damages, and driving distractions.</p>
		</div>
	</div>
</section>

<section class="product-types" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/product-types-bg.jpg);">
	<div class="row">
		<div class="large-4 large-offset-8 columns">
			<h2 class="blue-heading">Classic, Luxury, and High Performance Cars</h2>
			<p class="gray-p">ClearPlex protects your prized possession by helping to retain the vehicle's original look and value.</p>
			<a href="#!" class="btn">Learn More</a>
		</div>
	</div>
</section>

<section class="product-benefits">
	<div class="row">
		<div class="large-12 columns">
			<div class="owl-theme benefits-carousel">
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			    <div class="item text-center">
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/scratch.png" alt="">
			    	<h5>Scratch Resistant</h5>
			    	<p>Stands up to everyday abrasions like windshield wipers.</p>
			    </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>