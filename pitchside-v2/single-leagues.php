<?php
	 get_header();
 ?>
<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
    $postTypeObject = get_post_type_object(get_post_type( get_the_ID())); ?>  
      
    <div class="js-header-background-trigger"></div>
    <section class="section home-hero home-hero--generic">

        
      <?php $videoURL = get_field('vimeo_url');
      if($videoURL) { ?>
        <div class="vimeo-wrapper">
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
        <div class="js-generic-content-section-fade-in">
          
            <div class="blog-content">
              <section class="league-data">
                <div>
                  <div class="m-content-section__inner-padding">
                    <div class="m-content-section__inner">

                        <?php //if($_GET['nick'] == true) { ?>
                        <div class="league-egle-wide-bg league-egle-wide-bg--icons">
                          <div class="leagues-icon-list --desktop">
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
                        </div>

                        <div class="leagues-icon-list --mobile">
                          <div class="icon-list">
                            <div class="js-icon-carousel">
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


                        <div class="ld__header l-tab-headers">
                          <div data-tab="0" class="l-tab-headers__indiv js-tab-heading js-overview-tab-mob --has-no-sub-menu active">
                            <!-- <span class="js-mobile-tab-heading-wrapper js-has-no-sub-menu js-tab-heading active">OVERVIEW</span>  -->
                            <span class="">OVERVIEW</span> 
                          </div>
                          
                          <div class="l-tab-headers__indiv --has-sub-menu">
                            <span class="js-mobile-tab-heading-wrapper js-has-sub-menu">TABLES</span>

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
                          
                          <div class="l-tab-headers__indiv --has-sub-menu">
                            <span class="js-mobile-tab-heading-wrapper js-has-sub-menu">FIXTURES/RESULTS</span>

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
                          
                          <div class="l-tab-headers__indiv --has-sub-menu">
                            <span class="js-mobile-tab-heading-wrapper js-has-sub-menu">TOP PLAYERS</span>
                            
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
                            <div class="col-12 col-lg-7 order-1 order-lg-1">
                              <div style="max-width: 440px;">
                                <?php //$img = get_field('image'); ?>
                                <!-- <img class="l-content-area__accompanying-image" src="<?php echo $img['sizes']['medium']; ?>" alt="<?php the_title(); ?>"> -->

                                <?php $heading = get_field('content_area_heading');
                                if($heading) { ?>
                                  <h2><?php echo $heading; ?></h2>
                                <?php } ?>
                                <?php the_field('page_content'); ?>
                              </div>
                            </div>
                            <div class="col-12 col-lg-5 order-12 order-lg-12">
                              <div class="ko-time">
                                <div class="ko-time__inner">
                                  <?php the_field('page_content_2'); ?>
                                  
                                  <div class="cta-buttons cta-buttons--larger">
                                    <a href="<?php echo get_site_url(); ?>/join" class="c-button c-button--white-yellow">
                                      <div class="c-button__inner-text">JOIN</div>
                                      <div class="c-button__background-fill"></div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php
                      if( have_rows('middle_images_set') ): 

                        $middleImageSet = get_field('middle_images_set' ); // get all the rows
                        $imageURL1 = $middleImageSet[0]['image']['sizes']['middle_image'];
                        $imageURL2 = $middleImageSet[1]['image']['sizes']['medium'];
                        $imageURL3 = $middleImageSet[2]['image']['sizes']['medium'];
                        $imageURL4 = $middleImageSet[3]['image']['sizes']['small'];
                        $imageURL5 = $middleImageSet[4]['image']['sizes']['small'];
                        $imageURL6 = $middleImageSet[5]['image']['sizes']['small'];

                        ?>
                        <div class="l-content-area__middle l__image-grid">
                          <div class="row">
                            <div class="col-12">
                              <img src="<?php echo $imageURL1; ?>">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-6">
                              <img src="<?php echo $imageURL2; ?>">
                            </div>
                            <div class="col-6">
                              <img src="<?php echo $imageURL3; ?>">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-4">
                              <img src="<?php echo $imageURL4; ?>">
                            </div>
                            <div class="col-4">
                              <img src="<?php echo $imageURL5; ?>">
                            </div>
                            <div class="col-4">
                              <img src="<?php echo $imageURL6; ?>">
                            </div>
                          </div>
                        </div>
                      <?php
                      else :
                      endif;
                      ?>


                      <div class="m-content-section__inner-padding venue-info-content">
                        <div class="m-content-section__inner">
                          <div class="row">
                            <div class="col-12 col-lg-7 order-12 order-lg-1">
                              <?php $img = get_field('venue_info_image'); ?>
                              <img src="<?php echo $img['sizes']['medium']; ?>" style="width: 100%; max-width: 550px;">
                            </div>
                            <div class="col-12 col-lg-5 order-1 order-lg-12">
                              <div class="l-second-content-area">
                                <?php $heading = get_field('second_content_area_heading');
                                if($heading) { ?>
                                  <h2><?php echo $heading; ?></h2>
                                <?php } ?>

                                <?php the_field('second_content_area'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="m-content-section__inner-padding">
                        <div class="m-content-section__inner">
                          <div class="league-egle-wide-bg league-egle-wide-bg--address">
                            <div class="row">
                              <div class="col-12 col-lg-6">
                                <div class="l-second-content-area c-venue-content l-venue-content">
                                  <?php the_field('venue_address'); ?>

                                  <div class="cta-buttons cta-buttons--larger">
                                    <a target="_blank" href="<?php the_field('rules_pdf'); ?>" class="c-button c-button--white-yellow">
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