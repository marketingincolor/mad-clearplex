<?php
	/*
	Template Name: FAQ
	*/
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
	<article class="main-content">

		<div class="product-faqs consumer">
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

		<div class="product-faqs commercial">
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

		<div class="product-faqs dealer" style="display:none;">
			<h2 class="ltblue-heading">Dealers</h2>
			<?php 
			$args = array( 
				'post_type' => 'faq', 
				'category_name' => 'dealer',
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
	<?php get_sidebar('faq'); ?>
	</div>
</div>
<?php get_footer(); ?>