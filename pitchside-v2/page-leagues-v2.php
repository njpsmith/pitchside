<?php
	/*
	 Template Name: Leagues v2 page
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
    

    <section class="blog-article-list-wrapper m-content-section js-section-to-scroll-to">
      <div class="js-content-section-trigger">
        <div class="m-content-section__inner-padding js-generic-content-section-fade-in">
          <div class="m-content-section__inner">
            <div class="blog-article-list">
              <?php $leagues = new WP_Query(array(
              'post_type'=>'leagues',
              'post_status'=>'publish',
              'posts_per_page'=>-1,
              'order'=>'ASC'
              ));

              while ($leagues->have_posts()) : $leagues->the_post(); ?>
                  <article>
                    <div class="news-box aside">
                      <?php 
                      $gtmLeagueName = strtolower(get_the_title($p->ID));
                      $gtmLeagueName = str_replace(" ", "_", $gtmLeagueName); 
                      $gtmLeagueName = str_replace("(", "", $gtmLeagueName); 
                      $gtmLeagueName = str_replace(")", "", $gtmLeagueName); 
                      ?>
                      <a href="<?php the_permalink($p->ID); ?>" class="gtm-league-<?php echo $gtmLeagueName; ?>">
                        <div class="image-wrapper cover">
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' ); ?>
                          <img src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                        <div class="content">
                          <p class="title"><?php echo get_the_title($p->ID); ?></p>
                          <p class="excerpt">
                            <?php
                              the_field('excerpt');
                            ?>
                            <div class="news-box__divider"></div>
                            <div class="news-box__read-more">View League</div>
                          </p>
                        </div>
                      </a>
                    </div>
                  </article>
              <?php endwhile; ?>
            </div>

            
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'see-more-blocks-section' ); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>


    <?php get_template_part( 'footer-section' ); ?>


<?php get_footer(); ?>
