<?php
	/*
	 Template Name: Home Page v3 (with Join form)
	*/

	 get_header();
 ?>





    <div class="js-header-background-trigger"></div>
    <div class="container-fluid">
      <div class="row home-hero--v3-row">
    		<section class="section home-hero home-hero--generic home-hero--v3">
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

        <div class="sidebar-container">
          <div class="sidebar-container__inner">
            <h5>Register Now</h5>
            <!-- <p>To register for a league complete the form below - solo and team options available.</p> -->

            <?php echo do_shortcode('[contact-form-7 id="2468" title="Join Us Form (sidebar)"]'); ?>
          </div>
        </div>

          <?php $img = get_field('background_image'); ?>
          <div class="sidebar-promobox" style="background-image: url('<?php echo $img['sizes']['medium']; ?>')">
            <h6><?php the_field('promo_subtitle'); ?></h6>
            <h5><?php the_field('promo_title'); ?></h5>

            <div class="cta-buttons">
              <a href="<?php the_field('cta_button_link_url'); ?>" class="c-button c-button--small c-button--white-yellow">
                <div class="c-button__inner-text"><?php the_field('cta_button_text'); ?></div>
                <div class="c-button__background-fill"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

   
   
    <script src="<?php echo get_template_directory_uri(); ?>/library/dist/js/jquery.selectric.min.js"></script>


<?php get_footer(); ?>
