<?php
	/*
	Template Name: Case Studies
	*/
	$header_bg = '/assets/images/top-bg-case-studies.jpg';
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="case-study-feed">
	<!-- tabs -->
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h1 class="blue-heading"><?php the_field('case_studies_title'); ?></h1>
			<ul class="tabs" data-tabs id="example-tabs">
			  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true" class="gray-p"><?php the_field('category1'); ?></a></li> <span class="gray-p">|</span>
			  <li class="tabs-title"><a data-tabs-target="#panel2" href="#panel2" class="gray-p"><?php the_field('category2'); ?></a></li> <span class="gray-p">|</span>
			  <li class="tabs-title"><a data-tabs-target="#panel3" href="#panel3" class="gray-p"><?php the_field('category3'); ?></a></li>
			</ul>
		</div>
	</div>
	<!-- tab containers -->
	<div class="row">
		<div class="tabs-content" data-tabs-content="example-tabs">
		  <div class="tabs-panel is-active" id="panel1">
				<div class="large-12 columns">
					<div class="row case-study-row">
					<?php
						$count = 0;
						$args  = array( 
							'post_type' => 'case_studies', 
							'category_name' => get_field('category1'),
							'posts_per_page' => -1
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						$post_count = $loop->post_count;
					  $count++;
					?>

				    <div class="medium-4 columns end">
				    	<h5 class="blue-heading"><?php the_title(); ?></h5>
				    	<p class="gray-p"><?php echo wp_trim_words(get_the_content(),30,'...'); ?></p>
				    	<a href="<?php the_permalink(); ?>" class="study-link"><?php the_field('button_link_text',32); ?></a>
				    </div>
					  <?php
					  	if ($count % 3 == 0) {
					  		echo '</div>';
					  	}
					  	if ($post_count > $count && $count >= 3) {
					  		echo '<div class="row case-study-row">';
					  	}
					  	if ($post_count > 3 && $post_count == $count && $count % 3 > 0) {
					  		echo '</div>';
					  	}
					  ?>

				  <?php endwhile; wp_reset_postdata(); ?>

				</div>
		  </div>
		  <div class="tabs-panel" id="panel2">
		    
				<?php
					$count = 0;
					$args = array( 
						'post_type' => 'case_studies', 
						'category_name' => get_field('category2'),
						'posts_per_page' => -1
					);
					$the_loop = new WP_Query( $args );
					while ( $the_loop->have_posts() ) : $the_loop->the_post();
					$count++;
					$post_count = $the_loop->post_count;
				?>

			    <div class="medium-4 columns end">
			    	<h5 class="blue-heading"><?php the_title(); ?></h5>
			    	<p class="gray-p"><?php echo wp_trim_words(get_the_content(),30,'...'); ?></p>
			    	<a href="<?php the_permalink(); ?>" class="study-link"><?php the_field('button_link_text',32); ?></a>
			    </div>

			    <?php
			    	if ($count % 3 == 0) {
			    		echo '</div>';
			    	}
			    	if ($post_count > $count && $count >= 3) {
			    		echo '<div class="row case-study-row">';
			    	}
			    	if ($post_count > 3 && $post_count == $count && $count % 3 > 0) {
			    		echo '</div>';
			    	}
			    ?>

			  <?php endwhile; wp_reset_postdata(); ?>

		  </div>
		  <div class="tabs-panel" id="panel3">
		    	
				<?php
					$count = 0;
					$args = array( 
						'post_type' => 'case_studies', 
						'category_name' => get_field('category3'),
						'posts_per_page' => -1
					);
					$dealer_loop = new WP_Query( $args );
					while ( $dealer_loop->have_posts() ) : $dealer_loop->the_post();
					$count++;
					$post_count = $dealer_loop->post_count;
				?>

			    <div class="medium-4 columns">
			    	<h5 class="blue-heading"><?php the_title(); ?></h5>
			    	<p class="gray-p"><?php echo wp_trim_words(get_the_content(),30,'...'); ?></p>
			    	<a href="<?php the_permalink(); ?>" class="study-link"><?php the_field('button_link_text',32); ?></a>
			    </div>

			    <?php
			    	if ($count % 3 == 0) {
			    		echo '</div>';
			    	}
			    	if ($post_count > $count && $count >= 3) {
			    		echo '<div class="row case-study-row">';
			    	}
			    	if ($post_count > 3 && $post_count == $count && $count % 3 > 0) {
			    		echo '</div>';
			    	}
			    ?>

			  <?php endwhile; wp_reset_postdata(); ?>

		  </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>