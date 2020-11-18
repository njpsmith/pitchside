<?php
  /*
   Template Name: Venue page
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
				<div class="hero-copy hero-copy--on-mob-push-up-for-icons">
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

        <div class="icon-list-wrapper icon-list-wrapper--desktop icon-list-wrapper--league-page">
          <div class="icon-list">
            <?php
            if( have_rows('icons') ):
              while ( have_rows('icons') ) : the_row(); ?>

                <div class="icon-list-item">
                  <div class="icon-list-item__img-wrapper">
                    <img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_text'); ?>">
                  </div>
                  <div class="text-filled-background">
                    <?php the_sub_field('icon_text'); ?>
                  </div>
                </div>

              <?php endwhile;
            else :
            endif;
            ?>
          </div>
        </div>

        <div class="icon-list-wrapper icon-list-wrapper--mobile icon-list-wrapper--league-page">
          <div class="icon-list js-icon-carousel">
            <?php
            if( have_rows('icons') ):
              while ( have_rows('icons') ) : the_row(); ?>

                <div class="icon-list-item">
                  <div class="icon-list-item__img-wrapper">
                    <img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_text'); ?>">
                  </div>
                  <div class="text-filled-background">
                    <?php the_sub_field('icon_text'); ?>
                  </div>
                </div>

              <?php endwhile;
            else :
            endif;
            ?>
          </div>

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
        <div class="js-generic-content-section-fade-in">
          
            <div class="blog-content">
              <section class="league-data">
                <div>
                  <div class="m-content-section__inner-padding">
                    <div class="m-content-section__inner">
                        <?php $tabBackgrounds = get_field('tab_backgrounds'); ?>
                        <div class="ld__header l-tab-headers">
                          <div data-tab="0" class="active l-tab-headers__indiv js-tab-heading" style="background-image: url('<?php echo $tabBackgrounds['overview']['url'] ?>');">
                            <span>OVERVIEW</span> 
                          </div>
                          
                          <div class="l-tab-headers__indiv --has-sub-menu js-mobile-tab-heading-wrapper" style="background-image: url('<?php echo $tabBackgrounds['table']['url'] ?>');">
                            <span>TABLES</span>

                            <div class="l-tab-headers__dropdown-menu">
                              <?php
                              $x = 1;
                              if( have_rows('league') ):
                                while ( have_rows('league') ) : the_row(); ?>
                                  <div data-tab="<?php echo $x; ?>" class="js-tab-heading">
                                    <?php the_sub_field('day_of_the_week'); ?>
                                  </div> 
                                <?php 
                                $x++;
                                endwhile;
                              else :
                              endif;
                              ?>
                            </div>
                          </div>
                          
                          <div class="l-tab-headers__indiv --has-sub-menu js-mobile-tab-heading-wrapper" style="background-image: url('<?php echo $tabBackgrounds['fixtures_results']['url'] ?>');">
                            <span>FIXTURES/RESULTS</span>

                            <div class="l-tab-headers__dropdown-menu">
                              <?php
                              if( have_rows('league') ):
                                while ( have_rows('league') ) : the_row(); ?>
                                  <div data-tab="<?php echo $x; ?>" class="js-tab-heading">
                                    <?php the_sub_field('day_of_the_week'); ?>
                                  </div> 
                                <?php 
                                $x++;
                                endwhile;
                              else :
                              endif;
                              ?>
                            </div>
                          </div>
                          
                          <div class="l-tab-headers__indiv --has-sub-menu js-mobile-tab-heading-wrapper" style="background-image: url('<?php echo $tabBackgrounds['top_players']['url'] ?>');">
                            <span>TOP PLAYERS</span>
                            
                            <div class="l-tab-headers__dropdown-menu">
                              <?php
                              if( have_rows('league') ):
                                while ( have_rows('league') ) : the_row(); ?>
                                  <div data-tab="<?php echo $x; ?>" class="js-tab-heading">
                                    <?php the_sub_field('day_of_the_week'); ?>
                                  </div> 
                                <?php 
                                $x++;
                                endwhile;
                              else :
                              endif;
                              ?>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <ul class="ld__content">
                    <li data-tab="0" class="active">
                      <div class="m-content-section__inner-padding l-content-area__section-1">
                        <div class="m-content-section__inner">
                          <div class="row venue-tab">
                            <div class="col-12 col-lg-7 order-12 order-lg-1">
                              <?php $img = get_field('image'); ?>
                              <img class="l-content-area__accompanying-image" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="col-12 col-lg-5 order-1 order-lg-12">
                              <?php $heading = get_field('content_area_heading');
                              if($heading) { ?>
                                <h2><?php echo $heading; ?></h2>
                              <?php } ?>
                              <?php the_field('page_content'); ?> 
                              
                              <div class="cta-buttons cta-buttons--larger">
                                <a href="<?php echo get_site_url(); ?>/join" class="c-button c-button--red">
                                  <div class="c-button__inner-text">JOIN</div>
                                  <div class="c-button__background-fill"></div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <?php
                          if( have_rows('full-bleed_images') ): ?>
                            <div class="l-content-area__middle">
                              <!-- <div> -->
                                <div class="js-middle-images-carousel">
                                  <?php while ( have_rows('full-bleed_images') ) : the_row(); ?>
                                    <?php $image = get_sub_field('image'); ?>
                                    <div class="l-content-area__middle-image">
                                      <img src="<?php echo $image['sizes']['middle_image']; ?>">
                                    </div>
                                  <?php endwhile; ?>
                                </div>

                                <div class="arrow-wrapper arrow-wrapper--left js-middle-images-carousel--scroll-prev">
                                  <div class="nav-arrow nav-arrow--left">
                                    <div class="line-1"></div>
                                    <div class="line-2"></div>
                                  </div>
                                  <div class="arrow arrow--left arrow--small arrow-blink"></div>
                                </div>

                                <div class="arrow-wrapper arrow-wrapper--right js-middle-images-carousel--scroll-next">
                                  <div class="nav-arrow nav-arrow--right">
                                    <div class="line-1"></div>
                                    <div class="line-2"></div>
                                  </div>
                                  <div class="arrow arrow--right arrow--small arrow-blink"></div>
                                </div>

                              <!-- </div> -->
                            </div>
                          <?php
                          else :
                          endif;
                          ?>
                        </div>
                      </div>

                      <div class="m-content-section__inner-padding l-content-area__section-3">
                        <div class="m-content-section__inner">
                          <div class="row">
                            <div class="col-12 col-lg-6">
                              <div class="l-second-content-area">
                                <?php $heading = get_field('second_content_area_heading');
                                if($heading) { ?>
                                  <h2><?php echo $heading; ?></h2>
                                <?php } ?>

                                <?php the_field('second_content_area'); ?>

                                <div class="cta-buttons cta-buttons--larger">
                                  <a target="_blank" href="<?php the_field('rules_pdf'); ?>" class="c-button c-button--red">
                                    <div class="c-button__inner-text">LEAGUE RULES</div>
                                    <div class="c-button__background-fill"></div>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-lg-6">
                              <?php the_field('map_iframe'); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <?php
                    $y = 1;
                    if( have_rows('league') ):
                      while ( have_rows('league') ) : the_row(); ?>
                        <li data-tab="<?php echo $y; ?>">
                          <div class="m-content-section__inner">
                            <?php echo do_shortcode(get_sub_field('league_table_shortcode')); ?> 
                          </div>
                        </li>
                      <?php 
                      $y++;
                      endwhile;
                    else :
                    endif;

                    if( have_rows('league') ):
                      while ( have_rows('league') ) : the_row(); ?>
                        <li data-tab="<?php echo $y; ?>">
                          <div class="m-content-section__inner">
                            <?php echo do_shortcode(get_sub_field('fixtures_shortcode')); ?>
                          </div>
                        </li>
                      <?php 
                      $y++;
                      endwhile;
                    else :
                    endif;

                    if( have_rows('league') ):
                      while ( have_rows('league') ) : the_row(); ?>
                        <li data-tab="<?php echo $y; ?>">
                          <div class="m-content-section__inner">
                            <?php echo do_shortcode(get_sub_field('top_players_shortcode')); ?>
                          </div>
                        </li>
                      <?php 
                      $y++;
                      endwhile;
                    else :
                    endif;
                    ?>
                  </ul>
                </div>
              </section>         
            </div>

        </div>


        <div class="m-content-section__inner-padding js-generic-content-section-fade-in">
          <div class="m-content-section__inner">
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