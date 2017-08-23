<?php if($_POST['query']) { ?>
<h1>Search Query: <?php echo $_POST['query']; ?></h1>
<?php } ?>
<div class="row medium-up-3">

	<!-- query video post format -->
	<?php
	  $query  = $_POST['query'];
		$search = new WP_Query( array(
	    's'         => $query,
	    'tax_query' => array(
	      array(                
	        'taxonomy' => 'post_format',
	        'field' => 'slug',
	        'terms' => array('post-format-video')
	      )
	    ),
		));
	  // ob_start();

	  echo $query;

	  if($search->have_posts()) { while($search->have_posts()) { $search->the_post(); 
	?>

	<div class="column column-block" title="Play Video" data-title="<?php the_title(); ?>" data-video="<?php the_field('video_link'); ?>">
		<a href="#!"><?php the_post_thumbnail(); ?></a>
		<h5 class="video-title white-heading"><?php the_title(); ?></h5>
		<p class="video-body white-p"><?php echo get_the_content(); ?></p>
	</div>

	<?php }
	
  }else{echo '<p>hello</p>';}

	 //  $content = ob_get_clean();
		// echo $content;
		// die();
	?>

</div>