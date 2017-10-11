<section class="testimonials-side">
	<div class="row">
		<div class="large-12">
      <div class="row">
        <div class="large-6 columns">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/quote-icon.png" alt="" class="gray-quote">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white-quote-icon.png" alt="" class="white-quote">
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
                <div class="small-12 columns">
  	        			<p class="gray-p"><?php echo wp_trim_words(get_field('testimonial_excerpt'),25,'...'); ?></p>
  	        			<address class="gray-p">
  	        			  <span class="author">&mdash;<?php the_field('testimonial_author',$id); ?></span><br>
  	        			  <span class="job"><?php the_field('testimonial_job',$id); ?></span>
  	        			</address>
  	        		</div>
			        </div>
			      </li>

            <?php $count++; }} wp_reset_postdata(); ?> 

			    </ul>
			    <div class="large-8 columns end">
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