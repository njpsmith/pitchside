

<nav class="header-1">
	<div class="desktop hidden-lg-down">
		<?php $nl = get_field('nav_links_left','option'); ?>
		<div class="left">
			<a href="<?php the_permalink($nl['link_1']); ?>" class="normal menu-item-<?php echo $nl['link_1']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_1']); ?></a>

			<a href="<?php the_permalink($nl['link_2']); ?>" class="normal menu-item-<?php echo $nl['link_2']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_2']); ?></a>

			<a href="<?php the_permalink($nl['link_3']); ?>" class="normal menu-item-<?php echo $nl['link_3']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_3']); ?></a>

			<a href="<?php the_permalink($nl['link_4']); ?>" class="normal menu-item-<?php echo $nl['link_4']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_4']); ?></a>

			<a href="<?php the_permalink($nl['link_5']); ?>" class="normal menu-item-<?php echo $nl['link_5']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_5']); ?></a>
		</div>
		<a href="<?php echo get_site_url(); ?>" class="logo">
			<img src="<?php the_field('header_logo','option'); ?>"  />
		</a>

		<?php $nr = get_field('nav_links_right','option'); ?>
		<div class="right">
			<a href="<?php the_permalink($nr['link_1']); ?>" class="normal menu-item-<?php echo $nr['link_1']; ?> txt__light button-and-nav"><?php echo get_the_title($nr['link_1']); ?></a>

			<a href="#" class="special txt__light button-and-nav js__popup" id="button-header-newsletter" data-popup="newsletter"><?php echo $nr['newsletter_signup_label']; ?></a>

			<a href="#" class="special-alt txt__light button-and-nav js__popup" id="button-header-booking" data-popup="booking"><?php echo $nr['booking_popup_label']; ?></a>
		</div>
	</div>



	<div class="mobile hidden-xl-up">
		<div class="top-row">
			<div class="hamburger closed"></div>

			<a href="#" class="special txt__light button-and-nav js__popup" id="button-header-newsletter-mobile" data-popup="newsletter"><?php echo $nr['newsletter_signup_label']; ?></a>
			<a href="#" class="special-alt txt__light button-and-nav js__popup" id="button-header-booking-mobile" data-popup="booking"><?php echo $nr['booking_popup_label']; ?></a>
		</div>

		<div class="logo-row">
			<a href="<?php echo get_site_url(); ?>" class="logo">
				<img src="<?php the_field('header_logo','option'); ?>"  />
			</a>
		</div>

		<div class="nav-popup bkgrnd__primary">
			<a href="<?php the_permalink($nl['link_1']); ?>" class="normal menu-item-<?php echo $nl['link_1']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_1']); ?></a>
			<a href="<?php the_permalink($nl['link_2']); ?>" class="normal menu-item-<?php echo $nl['link_2']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_2']); ?></a>
			<a href="<?php the_permalink($nl['link_3']); ?>" class="normal menu-item-<?php echo $nl['link_3']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_3']); ?></a>
			<a href="<?php the_permalink($nl['link_4']); ?>" class="normal menu-item-<?php echo $nl['link_4']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_4']); ?></a>
			<a href="<?php the_permalink($nl['link_5']); ?>" class="normal menu-item-<?php echo $nl['link_5']; ?> txt__light button-and-nav"> <?php echo get_the_title($nl['link_5']); ?></a>
			<a href="<?php the_permalink($nr['link_1']); ?>" class="normal menu-item-<?php echo $nr['link_1']; ?> txt__light button-and-nav"><?php echo get_the_title($nr['link_1']); ?></a>
		</div>

	</div>
</nav>