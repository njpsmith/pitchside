<?php
	/*
	 Template Name: Blog page
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
        <!-- <div class="svg-nav-arrow js-scroll-down-btn">
          <svg class="play-arrow scroll-to-2nd-section" enable-background="new 0 0 26 26" height="26px" id="Layer_1" version="1.1" viewBox="0 0 26 26" width="26px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon fill="#ffffff" points="0.046,2.582 2.13,0.498 12.967,11.334 23.803,0.498 25.887,2.582 12.967,15.502  "></polygon><polygon fill="#ffffff" points="0.046,13.582 2.13,11.498 12.967,22.334 23.803,11.498 25.887,13.582 12.967,26.502  "></polygon></g></svg>
        </div> -->
      </div>
    </section>
    

    <section class="blog-article-list-wrapper m-content-section js-section-to-scroll-to">
      <div class="js-content-section-trigger">
        <div class="m-content-section__inner-padding js-generic-content-section-fade-in">
          <div class="m-content-section__inner">
            <div class="blog-article-list">
              <?php 
              $args = array( 'posts_per_page' => -1);

              if($_GET['news-cat'] > ''){
                $args['category'] = $_GET['news-cat'];
              }

              $myposts = get_posts( $args );
              foreach ( $myposts as $p ){
                if(get_field('post_type', $p->ID) == 'video') {
                ?>
                  <article>
                    <div class="news-box aside">
                      <a class="magnific-youtube-popup" href="<?php the_field('youtube_url', $p->ID); ?>">
                        <div class="news-box__play-button">
                          <i class="fa fa-play-circle"></i>
                        </div>
                        <div class="image-wrapper cover">
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' ); ?>
                          <img src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                        <div class="content">
                          <p class="title"><?php echo get_the_title($p->ID); ?></p>
                          <p class="date"><?php echo get_the_date('F j, Y',$p->ID); ?></p>
                          <p class="excerpt">
                            <?php
                              $excerpt = get_the_excerpt($p->ID);
                              $trimmedExcerpt = string_limit_words($excerpt,25);
                              $trimmedExcerptLarger = string_limit_words($excerpt,26);
                              
                              echo $trimmedExcerpt;
                              if($trimmedExcerpt != $trimmedExcerptLarger) {
                                echo ' [...]';
                              }
                            ?>
                            <div class="news-box__divider"></div>
                            <div class="news-box__read-more">Watch video</div>
                          </p>
                        </div>
                      </a>
                    </div>
                  </article>
                <?php
                } else { ?>
                  <article>
                    <div class="news-box aside">
                      <a href="<?php the_permalink($p->ID); ?>">
                        <div class="image-wrapper cover">
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' ); ?>
                          <img src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                        <div class="content">
                          <p class="title"><?php echo get_the_title($p->ID); ?></p>
                          <p class="date"><?php echo get_the_date('F j, Y',$p->ID); ?></p>
                          <p class="excerpt">
                            <?php
                              $excerpt = get_the_excerpt($p->ID);
                              $trimmedExcerpt = string_limit_words($excerpt,25);
                              $trimmedExcerptLarger = string_limit_words($excerpt,26);
                              
                              echo $trimmedExcerpt;
                              if($trimmedExcerpt != $trimmedExcerptLarger) {
                                echo ' [...]';
                              }
                            ?>
                            <div class="news-box__divider"></div>
                            <div class="news-box__read-more">Read more</div>
                          </p>
                        </div>
                      </a>
                    </div>
                  </article>
                <?php
                } 
              } ?>
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
