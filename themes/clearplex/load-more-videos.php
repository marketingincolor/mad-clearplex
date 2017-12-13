<?php 

require('../../../wp-blog-header.php');
header("HTTP/1.1 200 OK"); 

?>

<div class="row medium-up-3">

	<!-- query video post format -->
	<?php
	  $query  = $_POST['query'];
	  
		$search = new WP_Query( array(
			post__not_in => array($post->ID)
	    'tax_query' => array(
	      array(                
	        'taxonomy' => 'post_format',
	        'field' => 'slug',
	        'terms' => array('post-format-video')
	      )
	    ),
		));

	  if($search->have_posts()) { while($search->have_posts()) { $search->the_post(); 
	?>

	<div class="column column-block" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_link'); ?>">
		<a href="#!"><?php the_post_thumbnail(); ?></a>
		<h5 class="video-title white-heading"><?php the_title(); ?></h5>
		<p class="video-body white-p"><?php echo get_the_content(); ?></p>
	</div>

	<?php }
	
  }else{echo '<h3 class="blue-heading">Sorry, no videos match that search. Please try again.</p>';}

	?>

</div>