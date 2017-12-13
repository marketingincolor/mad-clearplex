    <div class="row">
			<div class="medium-6 columns end">
	
			<!-- Query custom post type faq -->
			<?php
				$slug = get_post_field( 'post_name', get_post() );
				$args = array(
					'post_type'      => 'faq',
					'posts_per_page' => -1,
					'category_name'  => $slug
				);
				$count = 1;
				$the_query = new WP_Query($args);

				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$count_faqs = $the_query->post_count;
				?>

					<h5 class="question">Q. <?php the_title(); ?></h5>
					<div class="answer">A. <?php echo get_the_content(); ?></div>

				<?php if($count == floor($count_faqs / 2) + 1){ ?>
					</div><div class="medium-6 columns end">
				<?php	} ?>
				<?php if($count == $count_faqs){ ?>
					</div>
				<?php } ?>
				
			<?php $count++; }} wp_reset_postdata(); ?> 