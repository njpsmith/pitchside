<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/floe/library/images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/floe/library/images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/floe/library/images/favicons/favicon-16x16.png">
		<!-- <link rel="manifest" href="/wp-content/themes/floe/library/images/favicons/site.webmanifest"> -->
		<link rel="mask-icon" href="/wp-content/themes/floe/library/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/wp-content/themes/floe/library/images/favicons/favicon.ico?v2">
		<meta name="msapplication-TileColor" content="#ffc40d">
		<meta name="msapplication-config" content="/wp-content/themes/floe/library/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
	</head>

  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

    <div id="wptime-plugin-preloader"></div>

		<div id="container">

			<header class="header <?php if(get_the_ID() == 2465) { ?>header--v2<?php } ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="content-wrapper">
          <a class="logo" href="<?php echo home_url(); ?>" rel="nofollow">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/pitchside-logo-yellow.png" />
          </a>
          
          <?php if(get_the_ID() == 2465) { ?>
            <div class="header--v2__rhs">
              <nav class="desktop-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <ul>
                  <li id="menu-item-23" class="desktop-nav__dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                    <a href="<?php echo get_site_url(); ?>/leagues/">LEAGUES</a>
                  </li>
                  <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="https://pitchside.london/join/">JOIN US</a></li>
                  <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="https://pitchside.london/about-us/">ABOUT</a></li>
                  <li id="menu-item-972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-972"><a href="https://pitchside.london/newsroom/">NEWSROOM</a></li>
                  <li id="menu-item-1650" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1650"><a href="https://pitchside.london/contact/">CONTACT</a></li>
                  <!-- <li id="menu-item-973" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-973"><a href="#fees">FEES</a></li> -->
                </ul>
              </nav>

              <!-- <div class="header__email-address">
                <a href="mailto:hello@pitchside.london">hello@pitchside.london</a>
              </div> -->

              <ul class="social-icons">
                <li>
                  <a href="https://www.instagram.com/pitchside.london/" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/pitchside.london/" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          <?php } else { ?>
            <div class="l-header-leagues-dropdown">
              <a href="<?php echo get_site_url(); ?>/leagues/" class="l-header-leagues-dropdown__title">LEAGUES</a>
              <ul class="l-header-leagues-dropdown__dropdown">
                <li><a href="<?php echo get_site_url(); ?>/leagues/warren-street/">Warren Street</a></li>
              </ul>
            </div>
          <?php } ?>

          <div class="header__navicon navicon js__open-nav" tabindex="0" data-navicon="">
            <i class="navicon__bar navicon__bar--top"></i>
            <i class="navicon__bar navicon__bar--mid"></i>
            <i class="navicon__bar navicon__bar--bottom"></i>
          </div>
      </div>
    </header>

    <div class="js__mobile-nav c__mobile-nav">
      <nav class="mobile-nav__popup" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <?php wp_nav_menu(array(
          'container' => false,                           // remove nav container
          'container_class' => 'menu cf',                 // class of container (should you choose to use it)
          'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
          'menu_class' => 'nav top-nav cf',               // adding custom nav class
          'theme_location' => 'main-nav',                 // where it's located in the theme
          'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
          'fallback_cb' => ''                             // fallback function (if there is one)
        )); ?>
      </nav>
    </div>
  <main>
