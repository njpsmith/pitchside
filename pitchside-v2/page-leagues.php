<?php
	/*
	 Template Name: Leagues page
	*/

	 get_header();
 ?>





<div class="arrow-wrapper arrow-wrapper--left arrow-wrapper--has-hover-effect js-scroll-prev not-active">
  <div class="nav-arrow nav-arrow--left">
    <div class="line-1"></div>
    <div class="line-2"></div>
  </div>
  <div class="arrow arrow--left arrow--small arrow-blink"></div>
  <div class="arrow__text">
    PITCHSIDE LEAGUES
  </div>
</div>

<div class="arrow-wrapper arrow-wrapper--right arrow-wrapper--has-hover-effect js-scroll-next">
  <div class="nav-arrow nav-arrow--right">
    <div class="line-1"></div>
    <div class="line-2"></div>
  </div>
  <div class="arrow arrow--right arrow--small arrow-blink"></div>
  <div class="arrow__text">
    WARREN ST
  </div>
</div>


  <div id="homepage-carousel">

		<section class="section home-hero home-hero--slide-1">
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
    </section>
    



    <section class="section home-hero home-hero--slide-2">
			<div class="hh__background <?php if(!get_field('use_image_overlay_slide_2')) { echo 'no-background-overlay'; } ?>">
        <?php 
        $img1 = get_field('background_image'); 
        $img2 = get_field('background_image_2'); 
        ?>
				<div class="image-wrapper cover <?php if($img2) { echo 'image-wrapper--two-images'; } ?>">
          <img src="<?php echo $img1['sizes']['background']; ?>" alt="Why pitchside?" />
          <?php if($img2) { ?>
            <img src="<?php echo $img2['sizes']['background']; ?>" alt="Why pitchside?" />
          <?php } ?>
				</div>
			</div>

			<div class="content-wrapper">
				<div class="hero-copy">
          <h1><?php the_field('league_title'); ?></h1>
          <div class="subtitle-wrapper">
            <h2 class="text-filled-background"><?php the_field('league_subtitle'); ?></h2>
          </div>

          <div class="league-day-buttons">
            <?php
            if( have_rows('days') ):
              while ( have_rows('days') ) : the_row();

                $link = get_sub_field('day'); ?>
                <a href="<?php echo $link['url']; ?>" class="c-button">
                  <div class="c-button__inner-text"><?php echo $link['title']; ?></div>
                  <div class="c-button__background-fill"></div>
                </a>

              <?php endwhile;
            else :
            endif;
            ?>
          </div>
        </div>


        <div class="icon-list-wrapper">
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
    </section>
    
    
  </div>



<?php get_footer(); ?>
