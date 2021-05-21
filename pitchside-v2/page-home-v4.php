<?php
	/*
	 Template Name: Home Page v4 (with extended Join form)
	*/

	 get_header();
 ?>





    <div class="js-header-background-trigger"></div>
    <div class="container-fluid">
      <div class="row home-hero--v3-row">
    		<section class="section home-hero home-hero--generic home-hero--v3">

          <?php $videoURL = get_field('vimeo_url');
          if($videoURL && $_GET['newpage'] == true) { ?>
            <div class="vimeo-wrapper --not-full-width">
              <iframe src="<?php echo $videoURL; ?>?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1" allow="autoplay; fullscreen" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              <div class="video-overlay"></div>
            </div>

          <?php } else { ?>

      			<div class="hh__background <?php if(!get_field('use_image_overlay')) { echo 'no-background-overlay'; } ?>">
              <?php 
              $img1 = get_field('background_image_1'); 
              $img2 = get_field('background_image_2'); 
              ?>
      				<div class="image-wrapper cover <?php if($img2) { echo 'image-wrapper--two-images'; } ?>">
                <img src="<?php echo $img1['sizes']['background']; ?>" alt="<?php the_field('title'); ?>" />
                <?php if($img2) { ?>
                  <img src="<?php echo $img2['sizes']['background']; ?>" alt="<?php the_field('title'); ?>" />
                <?php } ?>
      				</div>
      			</div>

          <?php } ?>

    			<div class="content-wrapper">
    				<div class="hero-copy">
              <?php $above_title_text = get_field('above_title_text'); ?>
              <?php if($above_title_text) { ?>
                <div class="subtitle-wrapper" style="margin-bottom: 12px;">
                  <h2 class="above-title-text"><?php echo $above_title_text; ?></h2>
                </div>
              <?php } ?>

              <h1><?php the_field('title'); ?></h1>
              <?php $subtitle = get_field('subtitle'); ?>
              <?php if($subtitle) { ?>
                <div class="subtitle-wrapper">
                  <!-- <h2 class="js__anim-typewriter line-1 text-filled-background"><?php echo $subtitle; ?></h2> -->
                  <h2 class="text-filled-background"><?php echo $subtitle; ?></h2>
                </div>
              <?php } ?>

              <div class="split-buttons-wrapper">
                <div class="split-buttons">
                  <a href="<?php echo get_home_url(); ?>/join">Join</a>  
                  <a href="<?php echo get_home_url(); ?>/leagues">Leagues</a>  
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="sidebar-container --increased-form-padding">
          <div class="sidebar-container__inner">
            <h5>Join a League</h5>
            <p>We have no idea how you got here. But it’s a good thing you did - let’s make up for lost time.</p>
            <p>To register for a league complete the form below – solo and team options available.</p>

            <?php echo do_shortcode('[contact-form-7 id="2468" title="Join Us Form (sidebar)"]'); ?>
          </div>
        </div>

          
        </div>
      </div>
    </div>
    

    <?php get_template_part( 'footer-section' ); ?>
   
   
    <script src="<?php echo get_template_directory_uri(); ?>/library/dist/js/jquery.selectric.min.js"></script>


<?php get_footer(); ?>
