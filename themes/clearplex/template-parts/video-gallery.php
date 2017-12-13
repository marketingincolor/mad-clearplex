<div class="medium-10 medium-offset-1 columns end gallery-container">
	<div class="row">
		
	<!-- query video post format -->
	<?php
	$video_query = new WP_Query( array(
		'posts_per_page' => 2,
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

	<div class="medium-6 medium-offset-3 columns" title="Play Video" data-title="<?php the_title(); ?>" data-open="video-modal" data-video="<?php the_field('video_link'); ?>" data-youtube="<?php echo get_field('video_url').'?rel=0&enablejsapi=1&origin=https%3A%2F%2Fclearplex.com'; ?>">
		<a href="#!"><?php the_post_thumbnail(); ?></a>
		<a href="#!"><h5 class="video-title white-heading"><?php the_title(); ?></h5></a>
		<p class="video-body white-p"><?php echo get_the_content(); ?></p>
	</div>			

	<?php endwhile;endif;wp_reset_postdata(); ?>

	</div>
</div>