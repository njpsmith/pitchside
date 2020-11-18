<?php
	/*
	 Template Name: Home Page
	*/

	 get_header();
 ?>

		<section class="home-hero">

			<div class="hh__background">
				<div class="image-wrapper cover">
					<img src="/wp-content/uploads/2019/05/photo-1434648957308-5e6a859697e8.jpeg" alt="" />
				</div>
				<div id="video" data-url="p2PLgRpdVbk"></div>
			</div>

			<div class="content-wrapper">

				<div class="hero-copy">
					<p class="subheader">Welcome</p>
					<h1>Pitchside</h1>
					<h2>And a little bit extra here to describe football or leagues</h2>
					<a href="#" class="button red">CTA Here pls</a>
				</div>

				<div class="featured-articles">
					<ul>
						<li>
							<a href="#">
								<p class="title">League Update June 2019</p>
								<p class="date"> Teddy Sheringham for Tottenham Hotspur against Newcastle United on the 3rd December 1994.</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p class="title">Hat Trick Hero</p>
								<p class="date">George Boyd for Peterborough United against Accrington Stanley on the 15th January 2008.</p>
							</a>
						</li>
					</ul>
				</div>




				<script>
					// var tag = document.createElement('script');

					// tag.src = "https://www.youtube.com/iframe_api";
					// var firstScriptTag = document.getElementsByTagName('script')[0];
					// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

					// var player;
					// function onYouTubeIframeAPIReady() {
					// 	var player;
					// 	player = new YT.Player('video', {
					// 		videoId: jQuery('.home-hero #video').data('url'),  // YouTube Video ID
					// 		width: jQuery('.home-hero').width(),               // Player width (in px)
					// 		height: jQuery('.home-hero').height(),             // Player height (in px)
					// 		playerVars: {
					// 			autoplay: 1,        // Auto-play the video on load
					// 			controls: 0,        // Show pause/play buttons in player
					// 			showinfo: 0,        // Hide the video title
					// 			modestbranding: 1,  // Hide the Youtube Logo
					// 			playlist: jQuery('.home-hero #video').data('url'),
					// 			loop: 1,            // Run the video in a loop
					// 			fs: 0,              // Hide the full screen button
					// 			cc_load_policy: 0,  // Hide closed captions
					// 			iv_load_policy: 3,  // Hide the Video Annotations
					// 			autohide: 0         // Hide video controls when playing
					// 		},
					// 		events: {
					// 			onReady: function(e) {
					// 				e.target.mute();
					// 			}
					// 		}
					// 	});
					// }
				</script>

			</div>

			

		</section>




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
						<!-- <h2>Little more here if you need to add some extra context</h2> -->
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
						<!-- <h2>Little more here if you need to add some extra context</h2> -->
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
		</section>



<?php get_footer(); ?>
