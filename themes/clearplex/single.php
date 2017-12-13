<?php
	get_header();
	get_template_part('template-parts/top-bg');
?>

<section class="single-video">
	<div class="row">
		<div class="medium-6 medium-offset-1 columns">

		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div id="<?php get_the_ID(); ?>"> class="video-container main-video" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_link'); ?>">
				<a href="#!"><?php the_post_thumbnail(); ?></a>
				<a href="#!"><h2 class="blue-heading"><?php the_title(); ?></h2></a>
				<p class="gray-p"><?php	the_content(); ?></p>
			</div>

		  <?php endwhile;endif; ?>

			<a href="#!" class="btn" id="load-more-videos">Load More Videos <i class="fa fa-video-camera" aria-hidden="true"></i></a>

		</div>
		<div class="medium-3 medium-offset-1 columns end">
			<h5 class="gray-p">Related Videos</h5>
			<!-- set video tags to get related videos -->
			<?php
				$orig_post = $post;
				$tags = wp_get_post_tags($post->ID);
				if ($tags) {
				  $tag_ids = array();
				  foreach($tags as $individual_tag){ 
				  	$tag_ids[] = $individual_tag->term_id;
				  }
				  $args = array(
				  'tag__in' => $tag_ids,
				  'post__not_in' => array($post->ID),
				  'posts_per_page'=>2
				);

			  $my_query = new wp_query( $args );
			   
			  while( $my_query->have_posts() ) {
			    $my_query->the_post();

			?>

				<div class="video-container" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_link'); ?>">
					<a href="#!"><?php the_post_thumbnail(); ?></a>
					<a href="#!"><h4 class="blue-heading"><?php the_title(); ?></h4></a>
					<p class="gray-p"><?php	the_content(); ?></p>
				</div>

			<?php
		      } 
		    }
			  $post = $orig_post;
			  wp_reset_query();
			?>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/video-modal'); ?>
<?php get_footer(); ?>