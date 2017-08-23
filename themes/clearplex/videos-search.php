<div class="medium-10 medium-offset-1 columns end gallery-container">
	<div class="row medium-up-3">
		
	<!-- query video post format -->
	<?php
	$video_query = new WP_Query( array(
		's' => s,
    'tax_query'      => array(
      array(
        'taxonomy' => 'post_format',
        'field' => 'slug',
        'terms' => array('post-format-video')
      )
    )
	));
	if ($video_query->have_posts()) : while ($video_query->have_posts()) : $video_query->the_post();
	?>

	<div class="column column-block" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_link'); ?>">
		<a href="#!"><?php the_post_thumbnail(); ?></a>
		<h5 class="video-title white-heading"><?php the_title(); ?></h5>
		<p class="video-body white-p"><?php echo get_the_content(); ?></p>
	</div>			

	<?php endwhile;endif;wp_reset_postdata(); ?>

	</div>
</div>