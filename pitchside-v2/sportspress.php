<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			$postTypeObject = get_post_type_object(get_post_type( get_the_ID())); 
			?>	

				<article  data-sportspress="generic"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<section class="inner-hero">
						<div class="ih__background image-wrapper cover">
							<img src="/wp-content/uploads/2019/05/photo-1527871454777-032ec3f75edc.jpeg" alt="" />
						</div>
						<div class="content-wrapper">
							<div class="ih__title">
								<h2 class="subtitle"><?php echo $postTypeObject->label; ?></h2>
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
					</section>

					

					<div class="entry-content">
						<?php
						the_content();
						?>
					</div><!-- .entry-content -->


				</article><!-- #post-## -->

			<?php

			// End of the loop.
		endwhile;
		?>

<?php get_footer(); ?>
