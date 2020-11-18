<?php 
	/*
	 Template Name: Content Page
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
					<h1>Title About Us Intro Copy</h1>
				</div>
				<div class="col-12 col-lg-6 content">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
					<p>Aelit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Sed ut perspiciatis, unde omnis iste natus error sit uptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
					<p>Aelit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Sed ut perspiciatis, unde omnis iste natus error sit uptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="image-gallery">

		<ul class="ig__slider">
			
			<li class="ig__slide">
				<div class="image-wrapper cover">
					<img src="/wp-content/uploads/2019/05/photo-1431324155629-1a6deb1dec8d.jpeg" alt="" />
				</div>
			</li>

			<li class="ig__slide">
				<div class="image-wrapper cover">
					<img src="/wp-content/uploads/2019/05/photo-1527871454777-032ec3f75edc.jpeg" alt="" />
				</div>
			</li>

			<li class="ig__slide">
				<div class="image-wrapper cover">
					<img src="/wp-content/uploads/2019/05/photo-1521731978332-9e9e714bdd20.jpeg" alt="" />
				</div>
			</li>

			<li class="ig__slide">
				<div class="image-wrapper cover">
					<img src="/wp-content/uploads/2019/05/photo-1434648957308-5e6a859697e8.jpeg" alt="" />
				</div>
			</li>


		</ul>

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
					<!-- <h2>Little more here if you need to add some extra context</h2> -->
					<a href="#" class="button red">Call To Action</a>
				</div>

			</div>
		</div>

	</section>




<?php get_footer(); ?>
