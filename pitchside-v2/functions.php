<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

//Run auto plugin install!
require_once( 'library/php/auto-plugin-install.php' );

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy() {

  //Allow editor style.
  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );


  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}


/**
* Disable the emoji's
*/
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );


/**
* Filter function used to remove the tinymce emoji plugin.
* 
* @param array $plugins 
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

    $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }

return $urls;
}




/*** Image Sizes ***/
add_image_size( 'small', 400, 400, true );
add_image_size( 'medium', 800, 800, true );
add_image_size( 'big', 1200, 1200, true );
add_image_size( 'background', 1440, 920, true );
add_image_size( 'middle_image', 1180, 700, true );



 if( function_exists('acf_add_options_page') ) {
  
    acf_add_options_page(array(
      'page_title'  => 'CMS Blocks',
      'menu_title'  => 'CMS Blocks',
      'menu_slug'   => 'site-content',
      'icon_url'    => 'dashicons-editor-kitchensink',
      'redirect'    => false
    ));
}




/*** Enqueuing Styles & Scripts ***/
function load_stylesheets() {
  // wp_enqueue_style('main', get_template_directory_uri() . '/library/dist/css/style.min.css', false, '');
  wp_enqueue_style('main', get_template_directory_uri() . '/library/dist/css/style.min.css?debug='.date('U'), false, ''); //Adding UNIX timestamp tricks Chrome into not caching these files - handy for dev!

}//load_stylesheets


add_action('wp_enqueue_scripts', 'load_stylesheets');



add_action('wp_enqueue_scripts', 'load_stylesheets');

wp_deregister_script('jquery'); 
wp_register_script('jquery', '', '', '', true);



function load_scripts() {
  
  //Call Custom js file
  // wp_register_script('easings_js', get_template_directory_uri() . '/library/js/libs/easings.min.js', array('jquery'), '', true);

  // wp_register_script('fullpage_js', get_template_directory_uri() . '/library/js/libs/fullpage.min.js', array('jquery'), '', true);

  wp_register_script('remodal', get_template_directory_uri() . '/library/js/libs/remodal.min.js', array('jquery'), '', true);
  
  wp_register_script('main_js', get_template_directory_uri() . '/library/dist/js/main.js?debug='.date('U'), array('jquery'), '', true); //Adding UNIX timestamp tricks Chrome into not caching these files - handy for dev!
  
  // wp_enqueue_script( 'easings_js' );
  // wp_enqueue_script( 'fullpage_js' );
  wp_enqueue_script( 'remodal' );
  wp_enqueue_script( 'main_js' );

}//load_scripts


add_action('wp_enqueue_scripts', 'load_scripts'); // Initiate the function

add_theme_support( 'sportspress' );




function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
  if ( 'post-thumbnail' === $size ) {
    if ( is_active_sidebar( 'sidebar-1' ) ) {
      $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
    } else {
      $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
    }
  }
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

function twentysixteen_post_thumbnail() {
  if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
    return;
  }

  if ( is_singular() ) :
  ?>

  <div class="post-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div><!-- .post-thumbnail -->

  <?php else : ?>

  <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
    <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
  </a>

  <?php endif; // End is_singular()
}


function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  $words[count($words)-1] = preg_replace('/[,-]/', '', $words[count($words)-1]);   
  return implode(' ', $words);
}




/* DON'T DELETE THIS CLOSING TAG */ ?>
