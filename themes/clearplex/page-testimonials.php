<?php
	/*
	Template Name: Testimonials
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="testimonials-page">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'testimonials_title', true) ? get_post_meta( $post->ID, 'testimonials_title', true) : get_the_title() ); ?></h2>
		</div>
		<div class="large-12 columns">
			<div class="row test-row">
			
				<?php
				  // Query custom post type 'testimonials'
				  $args = array(
				    'post_type'      => 'testimonials',
				    'posts_per_page' => -1,
				  );
				  $count = 1;
				  $the_query = new WP_Query($args);

				  if ( $the_query->have_posts() ) {
				    while ( $the_query->have_posts() ) {
				      $the_query->the_post();
				      $count_posts = wp_count_posts('testimonials')->publish;
				?>

				<div class="medium-4 columns<?php if ($count == $count_posts){echo ' end';} ?>">
					<p class="gray-p test-body subheading">&ldquo;<?php echo get_the_content(); ?>&rdquo;</p>
					<p class="read-more"><a href="<?php the_permalink(); ?>">Read More »</a></p>
					<address class="gray-p">
					  <span class="author">-<?php the_field('testimonial_author',$id); ?></span><br>
					  <span class="job"><?php the_field('testimonial_job',$id); ?></span>
					</address>
				</div>

				<?php if($count % 3 == 0) { ?>
					<?php if($count_posts % $count != 0) { ?>
					  </div><div class="row test-row">
					<?php }else{ ?>
						</div>
					<?php } ?>
				<?php } ?>

				<?php $count++; }} wp_reset_postdata(); ?>

		</div><!--  /.large12 -->
	</div><!--  /.row -->
</section>

<?php get_footer(); ?>