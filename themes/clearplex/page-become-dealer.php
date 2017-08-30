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
			<a href="#!" id="dealer-video"><img src="<?php the_field('top_section_video_img'); ?>" alt=""></a>
		</div>
	</div>
</section>

<section class="become-dealer-icons">
	<div class="row">
		<div class="small-10 columns small-centered">
			<p class="doc-subhead"><?php the_field('benefits_opening_paragraph'); ?></p>
			<div class="row medium-up-3 iconlist small-centered">
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

			    <div class="text-center column column-block icons">
					<?php 
						$thispost = get_post( get_the_ID() ); 
						$link = $thispost->post_name; 
						switch ($link) {
							case 'optically-clear':
								$icon = 'window-icon-white.png';
								break;
							case 'absorbs-impact':
								$icon = 'car-icon-white.png';
								break;
							case 'guaranteed':
								$icon = 'guaranteed-icon-white.png';
								break;
							case 'transparent':
								$icon = 'invisible-icon-white.png';
								break;
							case 'scratch-resistant':
								$icon = 'scratch-icon-white.png';
								break;
							default:
								$icon = 'invisible-icon-white.png';
								break;
						}
					?>
			    	<img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/<?php echo $icon; ?>" alt="">
			    	<h5><?php the_title(); ?></h5>
			    	<?php the_content(); ?>
			    </div>
			    <?php }} wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="large-8 medium-10 columns text-center small-centered">
			<p class="doc-subhead"><a href="#dealer-form" class="btn" style="margin-right:10px">Become A Dealer</a> <a href="<?php echo site_url(); ?>/case-studies" class="btn">View Case Studies</a></p>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<section class="download-docs">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_documents_heading'); ?></h2>
			<p class="gray-p doc-subhead"><?php the_field('dealer_documents_body'); ?></p>
		</div>
		<div class="medium-10 medium-offset-1 columns end">

			<!-- query link post format -->
			<?php
			$count = 0;
			$link_query = new WP_Query( array(
				'posts_per_page' => 3,
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

				<div class="row doc-row<?php if($count == 0 || $count == 1){echo ' no-border-bottom';}if($count == 2){echo ' btm-margin';} ?>">
					<ul class="doc-list">
						<li class="one-fifth"><?php the_post_thumbnail(); ?></li>
						<li class="three-fifths"><h5 class="doc-title"><?php the_title(); ?></h5>
							<p class="doc-body"><?php echo get_the_content(); ?></p></li>
						<li class="one-fifth"><a href="<?php echo site_url();the_field('download_button_link'); ?>" class="button"><?php the_field('download_button_text'); ?> <i class="fa fa-download" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			<?php $count++;endwhile;endif;wp_reset_postdata(); ?>


			<div class="large-12 text-center download-link">
				<a href="<?php echo site_url(); ?>/dealer" class="btn">View our dealer resources</a>
			</div>
		</div>
	</div>
</section>

<section class="product-faqs">
	<div class="row">
		<div class="large-12 columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_faq_heading'); ?></h2>
		</div>
		<div class="medium-5 medium-offset-1 columns">

		<!-- Query custom post type faq -->
		<?php

			$args = array(
				'post_type'      => 'faq',
				'posts_per_page' => 5,
			);
			$count = 1;
			$the_query = new WP_Query($args);

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$count_faqs = wp_count_posts('faq')->publish;
			?>

				<h5 class="question">Q. <?php the_title(); ?></h5>
				<div class="answer">A. <?php echo get_the_content(); ?></div>
				<?php if ($count == floor($count_faqs / 2)) { ?>
					</div><div class="medium-5 columns end">	
				<?php } ?>
			
				<?php if ($count == $count_faqs) { ?>
					</div>
				<?php } ?>
			
		<?php $count++; }} wp_reset_postdata(); ?> 

	</div>

	</div>
	<div class="row">
		<div class="large-12 text-center download-link">
			<a href="<?php echo site_url('/'); ?>faqs" class="button">view all faqs</a>
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