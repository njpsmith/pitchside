<?php
	/*
	 Template Name: Home Page v3 (with Join form)
	*/

	 get_header();
 ?>





    <div class="js-header-background-trigger"></div>
		<section class="section home-hero home-hero--generic">
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
              <h2 class="text-filled-background"><?php echo $subtitle; ?></h2>
            </div>
          <?php } ?>
        </div>
      </div>

      <div class="scroll-down-btn-wrapper">
        <div class="svg-nav-arrow js-scroll-down-btn">
          <div class="arrow-wrapper arrow-wrapper--right">
            <div class="nav-arrow nav-arrow--right">
              <div class="line-1"></div>
              <div class="line-2"></div>
            </div>
            <div class="arrow arrow--right arrow--small arrow-blink"></div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="signup-form m-content-section js-section-to-scroll-to">
      <div class="js-content-section-trigger">
        <div class="m-content-section__inner-padding js-generic-content-section-fade-in">
          
          
          <div class="l-content-area l-content-area--above-form">
            <div class="l-content-area__section-1">
              <div class="m-content-section__inner">
                <h2>REGISTER NOW</h2>

                <?php if(get_field('section_1_copy')) { ?>
                  <div class="row">
                    <div class="col-12 col-lg-7 order-12 order-lg-1">
                      <?php $img = get_field('section_1_image'); ?>
                      <img class="l-content-area__accompanying-image" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="col-12 col-lg-5 order-1 order-lg-12">
                      <?php $heading = get_field('section_1_heading');
                      if($heading) { ?>
                        <h2><?php echo $heading; ?></h2>
                      <?php } ?>
                      <?php the_field('section_1_copy'); ?> 
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        


          <div class="m-content-section__inner">
            <?php if(get_field('form_intro_copy')) { ?>
              <div class="join-form-copy">
                <?php the_field('form_intro_copy'); ?>
              </div>
            <?php } ?>

            <?php echo do_shortcode('[contact-form-7 id="54" title="Join Us Form"]'); ?>
            
            <?php get_template_part( 'see-more-blocks-section' ); ?>
          </div>
        </div>
      </div>
    </section>
    

    <?php get_template_part( 'footer-section' ); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/library/dist/js/jquery.selectric.min.js"></script>


<?php get_footer(); ?>
