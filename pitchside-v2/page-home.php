<?php
	/*
	 Template Name: Home Page v2
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
    <!-- PITCHSIDE LEAGUES -->
  </div>
</div>

<div class="arrow-wrapper arrow-wrapper--right arrow-wrapper--has-hover-effect js-scroll-next">
  <div class="nav-arrow nav-arrow--right">
    <div class="line-1"></div>
    <div class="line-2"></div>
  </div>
  <div class="arrow arrow--right arrow--small arrow-blink"></div>
  <div class="arrow__text">
    WHO?
  </div>
</div>


  <div id="homepage-carousel">

  	<section class="section home-hero home-hero--slide-0">
			<div class="hh__background <?php if(!get_field('use_image_overlay_slide_0')) { echo 'no-background-overlay'; } ?>">
        <?php 
        $img1 = get_field('slide_0_background_image_1'); 
        $img2 = get_field('slide_0_background_image_2'); 
        ?>
				<div class="image-wrapper cover <?php if($img2) { echo 'image-wrapper--two-images'; } ?>">
          <img src="<?php echo $img1['sizes']['background']; ?>" alt="Pitchside leagues" />
          <?php if($img2) { ?>
            <img src="<?php echo $img2['sizes']['background']; ?>" alt="Pitchside leagues" />
          <?php } ?>
				</div>
			</div>

			<div class="content-wrapper">
				<div class="hero-copy">
          <?php $above_title_text = get_field('above_title_text_slide_0'); ?>
          <?php if($above_title_text) { ?>
            <div class="subtitle-wrapper" style="margin-bottom: 12px;">
              <h2 class="above-title-text"><?php echo $above_title_text; ?></h2>
            </div>
          <?php } ?>

					<h1><?php the_field('heading_slide_0'); ?></h1>
					<div class="subtitle-wrapper">
            <h2 class="text-filled-background"><?php the_field('subtitle_slide_0'); ?></h2>
          </div>
          <div class="split-buttons-wrapper">
            <div class="split-buttons">
              <a href="<?php echo get_home_url(); ?>/join">Join</a>  
              <a href="<?php echo get_home_url(); ?>/leagues">Leagues</a>  
            </div>
          </div>
        </div>
      </div>
    </section>




		<section class="section home-hero home-hero--slide-1">
			<div class="hh__background <?php if(!get_field('use_image_overlay_slide_1')) { echo 'no-background-overlay'; } ?>">
        <?php 
        $img1 = get_field('slide_1_background_image_1'); 
        $img2 = get_field('slide_1_background_image_2'); 
        ?>
				<div class="image-wrapper cover <?php if($img2) { echo 'image-wrapper--two-images'; } ?>">
          <img src="<?php echo $img1['sizes']['background']; ?>" alt="Pitchside leagues" />
          <?php if($img2) { ?>
            <img src="<?php echo $img2['sizes']['background']; ?>" alt="Pitchside leagues" />
          <?php } ?>
				</div>
			</div>

			<div class="content-wrapper">
				<div class="hero-copy">
          <?php $above_title_text = get_field('above_title_text_slide_1'); ?>
          <?php if($above_title_text) { ?>
            <div class="subtitle-wrapper" style="margin-bottom: 12px;">
              <h2 class="above-title-text"><?php echo $above_title_text; ?></h2>
            </div>
          <?php } ?>

					<h1><?php the_field('heading_slide_1'); ?></h1>
					<div class="subtitle-wrapper">
            <h2 class="text-filled-background"><?php the_field('subtitle_slide_1'); ?></h2>
          </div>
          <div class="split-buttons-wrapper">
            <div class="split-buttons">
              <a href="<?php echo get_home_url(); ?>/join">Join</a>  
              <a href="<?php echo get_home_url(); ?>/leagues">Leagues</a>  
            </div>
          </div>
        </div>
      </div>
    </section>
    



    <section class="section home-hero home-hero--slide-2">
			<div class="hh__background <?php if(!get_field('use_image_overlay_slide_2')) { echo 'no-background-overlay'; } ?>">
        <?php 
        $img1 = get_field('slide_2_background_image_1'); 
        $img2 = get_field('slide_2_background_image_2'); 
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
          <?php $above_title_text = get_field('above_title_text_slide_2'); ?>
          <?php if($above_title_text) { ?>
            <div class="subtitle-wrapper" style="margin-bottom: 12px;">
              <h2 class="above-title-text"><?php echo $above_title_text; ?></h2>
            </div>
          <?php } ?>

          <h1><?php the_field('heading_slide_2'); ?></h1>
          <div class="subtitle-wrapper">
            <h2 class="text-filled-background"><?php the_field('subtitle_slide_2'); ?></h2>
          </div>

          <div class="split-buttons-wrapper">
            <div class="split-buttons">
              <a href="/join" class="">Join</a>  
              <a href="/leagues" class="">Leagues</a>  
            </div>
          </div>
        </div>

        <div class="icon-list-wrapper icon-list-wrapper--desktop">
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
    


    <section class="section home-hero home-hero--slide-3">
			<div class="hh__background <?php if(!get_field('use_image_overlay_slide_3')) { echo 'no-background-overlay'; } ?>">
        <?php 
        $img1 = get_field('slide_3_background_image_1'); 
        $img2 = get_field('slide_3_background_image_2'); 
        ?>
				<div class="image-wrapper cover <?php if($img2) { echo 'image-wrapper--two-images'; } ?>">
          <img src="<?php echo $img1['sizes']['background']; ?>" alt="Leagues" />
          <?php if($img2) { ?>
            <img src="<?php echo $img2['sizes']['background']; ?>" alt="Leagues" />
          <?php } ?>
				</div>
			</div>

			<div class="content-wrapper">
				<div class="hero-copy">
          <?php $above_title_text = get_field('above_title_text_slide_3'); ?>
          <?php if($above_title_text) { ?>
            <div class="subtitle-wrapper" style="margin-bottom: 12px;">
              <h2 class="above-title-text"><?php echo $above_title_text; ?></h2>
            </div>
          <?php } ?>

          <h1><?php the_field('heading_slide_3'); ?></h1>
          <div class="subtitle-wrapper">
            <h2 class="text-filled-background"><?php the_field('subtitle_slide_3'); ?></h2>
          </div>
          <div class="split-buttons-wrapper">
            <div class="split-buttons">
              <a href="/join" class="">Join</a>  
              <a href="/leagues" class="">Leagues</a>  
            </div>
          </div>
        </div>

        <div class="icon-list-wrapper">
          <div class="icon-list">
            <?php
            if( have_rows('icons_slide_3') ):
              while ( have_rows('icons_slide_3') ) : the_row(); ?>

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



		<!-- 
      <section class="home-intro">
			<div class="content-wrapper">
				<div class="row">
					<div class="col-12 col-lg-3 image">
						<div class="image-wrapper cover">
							<img src="/wp-content/uploads/2019/05/photo-1527871454777-032ec3f75edc.jpeg" alt="" />
 						</div>
					</div>
					<div class="col-12 col-lg-9 content">
						<h2 class="subtitle">Subtitle</h2>
						<h1>Main title goes here yo!</h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> 
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="image-cta-panel">

			<div class="background-image image-wrapper cover">
				<img src="/wp-content/uploads/2019/05/photo-1521731978332-9e9e714bdd20.jpeg" alt="" />
			</div>

			<div class="content-wrapper">
				<div class="row align-items-center justify-content-start  text-lg-right ">
					
					<div class="col-12 col-lg-6 content">
						<h3 class="subtitle">Subtitle</h3>
						<h1>Join Us</h1>
						<a href="#" class="button red">Call To Action</a>
					</div>

				</div>
			</div>

		</section>

		<section class="news-feed">

			<div class="content-wrapper">
				<div class="row">
					<div class="col-12">
						<h1 class="subtitle">NEWS</h1>
						<h2>THE LATEST NEWS</h2>
					</div>
					<div class="col-12 col-lg-6 aside-boxes">
						<div class="news-box aside">
							<a href="#">
								<div class="image-wrapper cover">
									<img src="/wp-content/uploads/2019/05/photo-1517960413843-0aee8e2b3285.jpeg" alt="" />
								</div>
								<div class="content">
									<p class="date">August 4, 2018</p>
									<p class="title">The World Cup – What to Expect from England</p>
									<p class="excerpt">How the fans should react to the stunts from the favorite…</p>
								</div>
							</a>
						</div>
						<div class="news-box aside">
							<a href="#">
								<div class="image-wrapper cover">
									<img src="/wp-content/uploads/2019/05/photo-1526838890080-053700ebe3d2.jpeg" alt="" />
								</div>
								<div class="content">
									<p class="date">August 4, 2018</p>
									<p class="title">The World Cup – What to Expect from England</p>
									<p class="excerpt">How the fans should react to the stunts from the favorite…</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="news-box">
							<a href="#">
								<div class="image-wrapper cover">
									<img src="/wp-content/uploads/2019/05/photo-1434648957308-5e6a859697e8.jpeg" alt="" />
								</div>
								<div class="content">
									<p class="date">August 4, 2018</p>
									<p class="title">The World Cup – What to Expect from England</p>
									<p class="excerpt">How the fans should react to the stunts from the favorite…</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

		</section>


		<section class="league-highlight">
			<div class="content-wrapper">
				<h2 class="subtitle">Featured League</h2>

				<?php echo do_shortcode('[team_standings 87]'); ?>

				<a href="#" class="button red">View all leagues</a>
			</div>
		</section>


		<section class="image-cta-panel">

			<div class="background-image image-wrapper cover">
				<img src="/wp-content/uploads/2019/05/photo-1519823038424-f8dbabca95f1.jpeg" alt="" />
			</div>

			<div class="content-wrapper">
				<div class="row align-items-center justify-content-start flex-lg-row-reverse">
					
					<div class="col-12 col-lg-6 content">
						<h3 class="subtitle">Subtitle</h3>
						<h1>Call To Action Title</h1>
						<a href="#" class="button red">Call To Action</a>
					</div>

				</div>
			</div>

		</section>	


		<section class="instagram-feed">
			<div class="content-wrapper">

				<h2 class="subtitle">Social</h2>
				<h1>Latest From Instagram</h1>
				<div class="if__wrapper">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
			</div>
		</section> -->



<?php get_footer(); ?>
