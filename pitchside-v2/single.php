<?php get_header(); ?>

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
    

    <section class="m-content-section js-section-to-scroll-to">
      <div class="js-content-section-trigger">
        <div class="m-content-section__inner-padding js-generic-content-section-fade-in">
          <div class="m-content-section__inner">
        
            <div class="blog-content">
              <div class="content-wrapper">
                <?php
                  the_content();
                ?>

                <!-- Carousel -->
                <?php
                if( have_rows('image_carousel') ): ?>
                  <div class="c-content-section-image-carousel__wrapper">
                    <div class="c-content-section-image-carousel js-content-section-image-carousel">
                      <?php while ( have_rows('image_carousel') ) : the_row(); ?>
                          <div>
                            <?php $img = get_sub_field('image'); ?>
                            <img src="<?php echo $img['sizes']['middle_image']; ?>">
                          </div>
                      <?php endwhile; ?>
                    </div>

                    <div class="arrow-wrapper arrow-wrapper--left js-content-section-image-carousel--scroll-prev">
                      <div class="nav-arrow nav-arrow--left">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                      </div>
                      <div class="arrow arrow--left arrow--small arrow-blink"></div>
                    </div>

                    <div class="arrow-wrapper arrow-wrapper--right js-content-section-image-carousel--scroll-next">
                      <div class="nav-arrow nav-arrow--right">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                      </div>
                      <div class="arrow arrow--right arrow--small arrow-blink"></div>
                    </div>
                  </div>
                <?php 
                else : 
                endif;
                ?>
              </div>


                <!-- New blog content layout -->
                <?php
                  // Check value exists.
                  if( have_rows('content') ):

                      // Loop through rows.
                      while ( have_rows('content') ) : the_row();

                          if( get_row_layout() == 'copy' ):
                              $copy = get_sub_field('copy'); ?>
                              <div class="content-wrapper">
                                <?php echo $copy; ?>
                              </div>
                          <?php 
                          elseif( get_row_layout() == 'images' ): 
                              $images = get_sub_field('images');
                              $imageCount = count($images);
                              $colSize = 12;
                              $imageSize = 'middle_image';
                              if(imageCount == 1) { 
                                $colSize = 12;
                                $imageSize = 'middle_image';
                              } elseif ($imageCount == 2) {
                                $colSize = 6;
                                $imageSize = 'medium';
                              } elseif ($imageCount == 3) {
                                $colSize = 4;
                                $imageSize = 'medium';
                              } ?>

                              <div class="l-content-area__flexible-content l__image-grid">
                                <div class="row">
                                  <?php
                                  if( have_rows('images') ):
                                    while ( have_rows('images') ) : the_row(); ?>

                                      <div class="col-<?php echo $colSize; ?>">
                                        <?php 
                                        $image = get_sub_field('image');
                                        $imageURL = $image['sizes'][$imageSize];
                                        ?>
                                        <img src="<?php echo $imageURL; ?>">
                                      </div>

                                    <?php                                          
                                    endwhile;
                                  else :
                                  endif;
                                  ?>
                                </div>
                              </div>

                              <?php
                          endif;

                      // End loop.
                      endwhile;

                  // No value.
                  else :
                      // Do something...
                  endif;
                ?>
                <!-- .New blog content layout -->

              </div>
            </div><!-- .entry-content -->

            <div class="blog-back-button">
              <a href="<?php echo get_home_url() ?>/newsroom" class="c-button c-button--red">
                <div class="c-button__inner-text">BACK</div>
                <div class="c-button__background-fill"></div>
              </a>
            </div>

            <?php get_template_part( 'see-more-blocks-section' ); ?>

          </div>
        </div>
      </div>
    </section>
    

    <?php get_template_part( 'footer-section' ); ?>




    <?php // End of the loop.
  endwhile;
  ?>

<?php get_footer(); ?>