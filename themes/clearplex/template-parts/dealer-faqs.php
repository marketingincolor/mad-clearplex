<div class="row">
				
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
						$count_faqs = wp_count_posts('faq')->publish;
				?>

				<div class="medium-6 columns end">
					<h5 class="question">Q. <?php the_title(); ?></h5>
					<div class="answer">A. <?php echo get_the_content(); ?></div>
				</div>

				<?php if ($count % 2 == 0) { ?>
					<?php if ($count_faqs > $count) { ?>
						</div><div class="row">
					<?php }else{ ?>
						</div>
					<?php } ?>
				<?php } ?>

				<?php if($count % 2 == 1) { ?>
					<?php if($count == $count_faqs) { ?>
						</div>
					<?php } ?>
				<?php } ?>
				
			<?php $count++; }} wp_reset_postdata(); ?> 