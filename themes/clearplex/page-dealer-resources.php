<?php
	/*
	Template Name: Dealer Resources
	*/
	$header_bg = '/assets/images/top-bg-windshield.jpg';
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="dealer-intro">
	<div class="row">
		<div class="large-12 colmns text-center">
			<h1 class="blue-heading"><?php the_field('dealer_intro_title'); ?></h1>
		</div>
		<div class="large-8 large-offset-2 columns text-center end">
			<p class="gray-p subheading"><?php the_field('dealer_intro_body'); ?></p>
		</div>
	</div>
</section>


<section class="sales-opp">
	<div class="row">
	<!-- Large Screens -->
		<div class="large-7 medium-6 columns show-for-large">
			<h2 class="blue-heading"><?php the_field('dealer_opportunity_title'); ?></h2>
			<?php the_field('dealer_opportunity_body'); ?>
			<a href="<?php echo site_url();the_field('dealer_opportunity_button_link'); ?>" class="btn"><?php the_field('dealer_opportunity_button_text') ?></a>
		</div>
		<div class="large-5 medium-6 columns text-center show-for-large">
			<img src="<?php the_field('dealer_opportunity_img'); ?>" alt="<?php the_field('dealer_opportunity_title'); ?>">
		</div>
		<!-- Mobile/Tablet -->
		<div class="small-12 columns text-center hide-for-large">
			<img src="<?php the_field('dealer_opportunity_img'); ?>" alt="<?php the_field('dealer_opportunity_title'); ?>">
		</div>
		<div class="small-12 columns hide-for-large">
			<h2 class="blue-heading"><?php the_field('dealer_opportunity_title'); ?></h2>
			<?php the_field('dealer_opportunity_body'); ?>
			<a href="<?php echo site_url();the_field('dealer_opportunity_button_link'); ?>" class="btn"><?php the_field('dealer_opportunity_button_text') ?></a>
		</div>
	</div>
</section>

<section id="dealer-videos" class="dealer-videos" style="background-image: url(<?php the_field('dealer_video_bg'); ?>);">
	<div class="row">
		<div class="large-12 columns text-center">
			<h2 class="white-heading"><?php the_field('dealer_video_title'); ?></h2>
			<p class="white-p video-head-body"><?php the_field('dealer_video_body'); ?></p>
		</div>

		<?php get_template_part('template-parts/video-gallery'); ?>
		
	</div>
</section>

<section class="download-docs">
	<div class="row">
		<div class="large-8 large-offset-2 columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_documents_title'); ?></h2>
			<p class="gray-p doc-subhead"><?php the_field('dealer_documents_body'); ?></p>
		</div>
		<div class="large-10 large-offset-1 columns end">

			<!-- query link post format -->
			<?php

			$the_query = new WP_Query( array(
		    'tax_query' => array(
	        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-link')
	        )
		    )
			));
			$doc_count = $the_query->found_posts;
			$count = 1;
			$link_query = new WP_Query( array(
				'posts_per_page' => -1,
		    'tax_query'      => array(
	        array(                
	          'taxonomy' => 'post_format',
	          'field' => 'slug',
	          'terms' => array('post-format-link')
	        )
		    )
			));
			if ($link_query->have_posts()) : while ($link_query->have_posts()) : $link_query->the_post();
			?>

				<div class="row doc-row<?php if($count < $doc_count){echo ' no-border-bottom';} ?>">
					<ul class="doc-list">
						<li class="one-fifth"><?php the_post_thumbnail(); ?></li>
						<li class="three-fifths"><h5 class="doc-title"><?php the_title(); ?></h5>
							<p class="doc-body"><?php echo get_the_content(); ?></p></li>
							<div class="clearfix show-for-small-only"></div>
						<li class="one-fifth"><a href="<?php echo site_url();the_field('download_button_link'); ?>" target="_blank" class="button"><?php the_field('download_button_text'); ?> <i class="fa fa-download" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			<?php $count++;endwhile;endif;wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section class="product-faqs">
	<div class="row">
		<div class="medium-10 small-centered columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_faq_title'); ?></h2>
		</div>
		<div class="medium-10 small-centered columns">

			<?php get_template_part('template-parts/dealer-faqs'); ?>
			
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<?php get_template_part('template-parts/video-modal'); ?>

<?php get_footer(); ?>