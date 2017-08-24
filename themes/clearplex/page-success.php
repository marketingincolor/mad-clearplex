<?php
	/*
	Template Name: Success
	*/
	get_header();
	get_template_part('template-parts/top-bg');
	$options = get_option('mic_theme_options');
	$slug    = get_post_field( 'post_name', get_post() );
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="success">
	<div class="row">
		<div class="small-10 large-8 small-centered text-center">
			<h1 class="blue-heading"><?php the_field('main_heading'); ?></h1>
			<p class="gray-p"><?php echo get_the_content(); ?></p>
			<ul class="social-logos">
				<?php if($options['instagram_link']){ ?>
					<li><a href="<?php echo $options['instagram_link']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<?php }if($options['gplus_link']){ ?>
					<li><a href="<?php echo $options['gplus_link']; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
				<?php }if ($options['facebook_link']){ ?>
					<li><a href="<?php echo $options['facebook_link']; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<?php }if($options['twitter_link']){ ?>
					<li><a href="<?php echo $options['twitter_link']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<?php }if($options['linkedin_link']){ ?>
					<li><a href="<?php echo $options['linkedin_link']; ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
				<?php }if($options['youtube_link']){ ?>
					<li><a href="<?php echo $options['youtube_link']; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<?php } ?>
			</ul>
			<ul class="link-list">

				<?php if(get_field('middle_button_link')) { ?>

					<li><a href="<?php echo site_url();the_field('left_button_link'); ?>"><?php the_field('left_button_text') ?>&nbsp;&nbsp;<?php the_field('left_button_icon') ?></a></li>

				<?php }if(get_field('middle_button_link')) { ?>

					<li><a href="<?php echo site_url();the_field('middle_button_link'); ?>"><?php the_field('middle_button_text') ?>&nbsp;&nbsp;<?php the_field('middle_button_icon') ?></a></li>
				
				<?php }if(get_field('right_button_link')) { ?>

					<li><a href="<?php echo site_url();the_field('right_button_link'); ?>"><?php the_field('right_button_text') ?>&nbsp;&nbsp;<?php the_field('right_button_icon') ?></a></li>

				<?php } ?>

			</ul>
	  </div>
	  	
	  	<?php if ($slug == 'review-success') { ?>
	  		<div class="small-12 columns text-center">
	  			<h2 class="blue-heading read-test">Read Testimonials</h2>
	  		</div>
	  		<?php get_template_part('template-parts/testimonials-section'); ?>
	  	<?php } ?>

	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>