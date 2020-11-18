<?php 
	/*
	 Template Name: Content (Join) Page
	*/
	get_header(); 
?>
	<section class="inner-hero">
		<div class="ih__background image-wrapper cover">
			<img src="/wp-content/uploads/2019/05/photo-1527871454777-032ec3f75edc.jpeg" alt="" />
		</div>
		<div class="content-wrapper">
			<div class="ih__title">
				<h2 class="subtitle">Intro</h2>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section class="home-intro">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-12 col-lg-6 header">
					<h2 class="subtitle">Subtitle</h2>
					<h1>Want to join Pitchside?</h1>
				</div>
				<div class="col-12 col-lg-6 content">
					<p>Aelit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Sed ut perspiciatis, unde omnis iste natus error sit uptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore.</p>

					<?php echo do_shortcode('[contact-form-7 id="54" title="Join Us Form"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="image-cta-panel">

			<div class="background-image image-wrapper cover">
				<img src="/wp-content/uploads/2019/05/photo-1431324155629-1a6deb1dec8d.jpeg" alt="" />
			</div>

			<div class="content-wrapper">
				<div class="row align-items-center justify-content-start flex-lg-row-reverse">
					
					<div class="col-12 col-lg-6 content">
						<h3 class="subtitle">Subtitle</h3>
						<h1>Call To Action Title</h1>
						<!-- <h2>Little more here if you need to add some extra context</h2> -->
						<a href="#" class="button red">Call To Action</a>
					</div>

				</div>
			</div>

		</section>	




<?php get_footer(); ?>
