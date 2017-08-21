<section class="home-testimonials">
	<div class="row">
		<div class="large-8 large-offset-2 columns">
      <div class="row">
        <div class="large-1 columns">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/quote-icon.png" alt="" class="gray-quote">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white-quote-icon.png" alt="" class="white-quote">
        </div>
        <div class="large-11 columns">
          <h2 class="blue-heading">What They're Saying About ClearPlex® Windshield Protection Film</h2>
        </div>
      </div>
			<div class="orbit" role="region" aria-label="Testimonials" data-orbit data-auto-play="false">
			  <div class="orbit-wrapper">
			    <ul class="orbit-container">

            <?php
              // Query custom post type 'testimonials'
              $args = array(
                'post_type'      => 'testimonials',
                'posts_per_page' => -1,
              );
              $count = 1;
              $the_query = new WP_Query($args);

              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  $id = get_the_ID();
            ?>

			      <li class="orbit-slide">
			        <div class="row">
                <div class="large-11 large-offset-1 columns">
  	        			<p class="gray-p"><?php echo get_the_content(); ?> <a href="#!" class="read-more">Read More »</a></p>
  	        			<address class="gray-p">
  	        			  <span class="author">-<?php the_field('testimonial_author',$id); ?></span><br>
  	        			  <span class="job"><?php the_field('testimonial_job',$id); ?></span>
  	        			</address>
  	        		</div>
			        </div>
			      </li>

            <?php $count++; }} wp_reset_postdata(); ?> 

			    </ul>
			    <div class="large-8 large-offset-1 columns end">
			    	<div class="row">
			    		<div class="large-11 columns end" style="padding-left:0;">
			    			<nav class="orbit-bullets">
			    			  <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
			    			  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
			    			  <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
			    			</nav>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</section>