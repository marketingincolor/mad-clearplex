<section class="home-testimonials">
	<div class="row">
		<div class="large-8 large-offset-2 columns">
      <div class="row">
        <div class="medium-1 columns show-for-large" style="padding: 0;position:relative;top:8px">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/quote-icon.png" alt="" class="gray-quote">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white-quote-icon.png" alt="" class="white-quote">
        </div>
        <div class="medium-11 columns">
          <h2 class="blue-heading">What They're Saying About ClearPlex Windshield Protection Film</h2>
        </div>
        <div class="large-1 columns hide-for-large">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/quote-icon.png" alt="" class="gray-quote">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/white-quote-icon.png" alt="" class="white-quote">
        </div>
      </div>
			<div class="orbit" role="region" aria-label="Testimonials" data-orbit data-auto-play="false">
			  <div class="orbit-wrapper">
			    <ul class="orbit-container">

            <?php
              // Query custom post type 'testimonials' with
              // category depending on current page
              $slug = get_post_field('post_name', get_post());
              if ($slug == 'home') {
                $args = array(
                  'post_type'      => 'testimonials',
                  'posts_per_page' => -1,
                );
              }elseif($slug == 'dealer' || $slug == 'become-dealer'){
                $args = array(
                  'post_type'      => 'testimonials',
                  'posts_per_page' => -1,
                  'category_name'  => 'dealer'
                );
              }else{
                $args = array(
                  'post_type'      => 'testimonials',
                  'posts_per_page' => -1,
                  'category_name'  => $slug
                );
              }
              $count = 1;
              $the_query = new WP_Query($args);

              if ( $the_query->have_posts() ) {
                while ($the_query->have_posts()) {
                  $the_query->the_post();
                  $id = get_the_ID();
            ?>

			      <li class="orbit-slide">
			        <div class="row">
                <div class="medium-11 large-offset-1 columns">
  	        			<p class="gray-p"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
  	        			<address class="gray-p">
  	        			  <span class="author"><?php the_field('testimonial_author',$id); ?></span><br>
  	        			  <span class="job"><?php the_field('testimonial_job',$id); ?></span>
  	        			</address>
  	        		</div>
			        </div>
			      </li>

            <?php $count++; }} wp_reset_postdata(); ?> 

			    </ul>
			    <div class="large-8 large-offset-1 medium-12 columns end">
			    	<div class="row">
			    		<div class="large-11 columns end" style="padding-left:0;">
			    			<nav class="orbit-bullets">

                <?php for ($i=1; $i < $count; $i++) { ?>
                  
                  <button <?php if($i==1){echo 'class="is-active"';} ?> data-slide="<?php echo $i-1; ?>"></button>

                <?php } ?>

			    			</nav>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</section>