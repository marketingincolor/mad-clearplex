<!-- video modal -->
<div id="video-modal" class="small reveal" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
  <div class="flex-video widescreen">
  	<h2></h2>
    <video src="<?php echo home_url();the_field('video_url'); ?>" controls autoplay></video>
  </div>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>