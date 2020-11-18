<?php
	/*
	 Template Name: About page
	*/

	 get_header();
 ?>


  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
    $postTypeObject = get_post_type_object(get_post_type( get_the_ID())); ?>	
      
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
    

    <section class="m-content-section js-section-to-scroll-to l-content-area">
      <div class="js-content-section-trigger">
      
          <div class="js-generic-content-section-fade-in">

            <div class="m-content-section__inner-padding l-content-area__section-1">
              <div class="m-content-section__inner">
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
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <?php $middleImage = get_field('middle_section_image'); 
                if($middleImage) { ?>
                  <div class="l-content-area__middle l-content-area__middle--extra-top-margin">
                    <div class="l-content-area__middle-image">
                      <img src="<?php echo $middleImage['sizes']['middle_image']; ?>">
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="m-content-section__inner-padding l-content-area__section-3">
              <div class="m-content-section__inner">
                <div class="row">
                  <div class="col-12 col-lg-6 order-12 order-lg-1">
                    <div class="l-second-content-area">
                      <?php $heading = get_field('section_3_heading');
                      if($heading) { ?>
                        <h2><?php echo $heading; ?></h2>
                      <?php } ?>

                      <?php the_field('section_3_copy'); ?>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 order-1 order-lg-12">
                    <?php $img = get_field('section_3_image'); ?>
                    <img class="l-content-area__accompanying-image" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
                  </div>
                </div>
              </div>
            </div>





            <div class="m-content-section__inner-padding">
              <div class="m-content-section__inner">
                <?php get_template_part( 'see-more-blocks-section' ); ?>
              </div>
            </div>

          </div>

      </div>
    </section>
    

    <?php get_template_part( 'footer-section' ); ?>




    <?php // End of the loop.
  endwhile;
  ?>

<?php get_footer(); ?>
