<?php
	/*
	Template Name: FAQ
	*/
	$header_bg = '/assets/images/top-bg-faq.jpg';
	get_header(); 
	$bg_img = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
	get_template_part('template-parts/top-bg');
?>
<div class="sub-head">
	<div class="sub-img small-10 small-centered">
		<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'fp-large' );  ?>
		<h2 class="blue-heading"><?php echo ( get_post_meta( $post->ID, 'faq_title', true) ? get_post_meta( $post->ID, 'faq_title', true) : get_the_title() ); ?></h2>
	</div>
</div>
<!-- standard loop -->
<div class="main-wrap" role="main">
	<div class="small-10 small-centered">
	<article class="main-content hide-for-small-only">

		<div id="consumer" class="product-faqs consumer">
			<h2 class="ltblue-heading">Consumer</h2>
			<?php
			$args = array(
				'post_type'      => 'faq',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'category_name'  => 'consumer',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div id="commercial" class="product-faqs commercial">
			<h2 class="ltblue-heading">Commercial</h2>
			<?php 
			$args = array( 
				'post_type'      => 'faq',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'category_name'  => 'commercial',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div id="dealer" class="product-faqs dealer">
			<h2 class="ltblue-heading">Dealer</h2>
			<?php 
			$args = array( 
				'post_type'      => 'faq',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'category_name'  => 'dealer, become-dealer',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</article>

	<!-- Show 3 categories at top for mobile only -->
	<article class="main-content show-for-small-only case-study-feed">
		<div class="row">
			<div class="small-12 columns text-center">
				<ul class="tabs" data-tabs id="example-tabs">
				  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true" class="gray-p">Consumer</a></li> <span class="gray-p">|</span>
				  <li class="tabs-title"><a data-tabs-target="#panel2" href="#panel2" class="gray-p">Commercial</a></li> <span class="gray-p">|</span>
				  <li class="tabs-title"><a data-tabs-target="#panel3" href="#panel3" class="gray-p">Dealer</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="tabs-content" data-tabs-content="example-tabs">
			  <div class="tabs-panel is-active" id="panel1">
					<div class="large-12 columns">
						<div class="row case-study-row">

							<?php
								$args = array(
									'post_type' => 'faq', 
									'category_name' => 'consumer',
									'posts_per_page' => -1
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post()
							?>

						    <div class="entry-content large-11">
						    	<h5 class="question">Q. <?php the_title(); ?></h5>
						    	<div class="answer">A. <?php echo get_the_content(); ?></div>
						    </div>

						  <?php endwhile; wp_reset_postdata(); ?>

					  </div>
			    </div>
			  </div>
			  <div class="tabs-panel" id="panel2">
			    
					<?php
						$args = array(
							'post_type' => 'faq', 
							'category_name' => 'commercial',
							'posts_per_page' => -1
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post()
					?>

				    <div class="entry-content large-11">
				    	<h5 class="question">Q. <?php the_title(); ?></h5>
				    	<div class="answer">A. <?php echo get_the_content(); ?></div>
				    </div>

				  <?php endwhile; wp_reset_postdata(); ?>

			  </div>
			  <div class="tabs-panel" id="panel3">
			    	
						<?php
							$args = array(
								'post_type' => 'faq', 
								'category_name' => 'dealer',
								'posts_per_page' => -1
							);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post()
						?>

					    <div class="entry-content large-11">
					    	<h5 class="question">Q. <?php the_title(); ?></h5>
					    	<div class="answer">A. <?php echo get_the_content(); ?></div>
					    </div>

					  <?php endwhile; wp_reset_postdata(); ?>

			  </div>
			</div>
		</div>
		<!-- END MOBILE TABS -->


		<!-- DESKTOP & TABLET ONLY -->
		<div id="consumer" class="product-faqs consumer hide-for-small-only">
			<h2 class="ltblue-heading">Consumer</h2>
			<?php
			$args = array(
				'post_type' => 'faq', 
				'category_name' => 'consumer',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div id="commercial" class="product-faqs commercial hide-for-small-only">
			<h2 class="ltblue-heading">Commercial</h2>
			<?php 
			$args = array( 
				'post_type' => 'faq', 
				'category_name' => 'commercial',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<div id="dealer" class="product-faqs dealer hide-for-small-only">
			<h2 class="ltblue-heading">Dealer</h2>
			<?php 
			$args = array( 
				'post_type' => 'faq', 
				'category_name' => 'dealer, become-dealer',
				'posts_per_page' => -1
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="entry-content large-11">
				<h5 class="question"><?php the_title(); ?></h5>
				<div class="answer"><?php the_content(); ?></div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</article>

		<div class="hide-for-small-only">
		<?php get_sidebar('faq'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>