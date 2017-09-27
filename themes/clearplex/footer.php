<?php
	$options = get_option('mic_theme_options');
?>

		</section>

		<div class="footer-container desktop-footer show-for-large">
			<footer class="footer">
				<div class="row">
					<div class="large-4 columns">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" alt="ClearPlex by Madico">
						<p class="terms"><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></p>
						<p>&copy; <?php echo Date('Y'); ?> ClearPlex by Madico. All Rights Reserved.</p>
					</div>
					<div class="large-4 large-offset-2 columns">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
					</div>
					<div class="large-2 columns">
						<ul class="social-links">
						<?php if ($options['facebook_link']) { ?>
							<li><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['facebook_link']; ?>">Facebook</a></li>
						<?php }if($options['twitter_link']){ ?>
							<li><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['twitter_link']; ?>">Twitter</a></li>
						<?php }if($options['gplus_link']){ ?>
							<li><i class="fa fa-google-plus" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['gplus_link']; ?>">Google+</a></li>
						<?php }if($options['linkedin_link']){ ?>
							<li><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['linkedin_link']; ?>">LinkedIn</a></li>
						<?php }if($options['instagram_link']){ ?>
							<li><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['instagram_link']; ?>">Instagram</a></li>
						<?php }if($options['youtube_link']){ ?>
							<li><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['youtube_link']; ?>">YouTube</a></li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</footer>
		</div>

		<div class="footer-container mobile-footer hide-for-large">
			<footer class="footer">
				<div class="row">
					<div class="large-4 columns text-center">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" alt="ClearPlex by Madico">
						<!-- Get mobile menu and put into a select dropdown -->
						<?php
							$menu_name  = 'footer-menu';
							$locations  = get_nav_menu_locations();
							$menu       = wp_get_nav_menu_object($locations[$menu_name]);
							$menu_items = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
						?>
					</div>
					<div class="small-12 columns text-center">
						<select id="footer-dropdown" onChange="window.location.href=this.value;this.style.backgroundImage = 'none';this.style.paddingLeft = '25px'">
								<option selected="true" disabled="disabled"></option>
							<?php
						    foreach($menu_items as $item){
					        // set up title and url
					        $title = $item->title;
					        $link = $item->url;
					        echo '<option value="'.$link.'">'.$title.'</option>';
					      }
							?>
						</select>
					</div>
					<div class="large-2 columns">
						<ul class="social-links">
						<?php if ($options['facebook_link']) { ?>
							<li><a href="<?php echo $options['facebook_link']; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
						<?php }if($options['twitter_link']){ ?>
							<li><a href="<?php echo $options['twitter_link']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<?php }if($options['gplus_link']){ ?>
							<li><a href="<?php echo $options['gplus_link']; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<?php }if($options['linkedin_link']){ ?>
							<li><a href="<?php echo $options['linkedin_link']; ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						<?php }if($options['instagram_link']){ ?>
							<li><a href="<?php echo $options['instagram_link']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<?php }if($options['youtube_link']){ ?>
							<li><a href="<?php echo $options['youtube_link']; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<?php } ?>
						</ul>
					</div>
					<div class="large-4 columns text-center">
						<p class="terms"><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></p>
						<p>&copy; <?php echo Date('Y'); ?> ClearPlex by Madico. All rights reserved.</p>
					</div>
				</div>
			</footer>
		</div>

<?php wp_footer(); ?>

<script>
	$(document).on('closed.zf.reveal',function(){
		$('#video-modal').find('video').trigger('pause');
	});
</script>
<?php echo $options['gtm_code_body'];
      echo $options['other_footer_script']; ?>

</body>
</html>
