

<section class="home-hero">

		<div class="hh__background">
			<div class="image-wrapper cover">
				<img src="<?php echo $m['large_hero']['background_image']['url']; ?>" alt="<?php echo $m['large_hero']['alt']; ?>" />
			</div>
			<div id="video" data-url="p2PLgRpdVbk"></div>
		</div>

		<div class="content-wrapper">

			<div class="hero-copy">
				<p class="subheader"><?php echo $m['large_hero']['subtitle']; ?></p>
				<h1><?php echo $m['large_hero']['title']; ?></h1>
				<h2><?php echo $m['large_hero']['small_copy']; ?></h2>
				<a href="<?php echo $m['large_hero']['link']['url']; ?>" target="<?php echo $m['large_hero']['link']['target']; ?>" class="button red"><?php echo $m['large_hero']['link']['title']; ?></a>
			</div>

			<div class="featured-articles">
				<ul>
					<?php foreach($m['large_hero']['featured_articles'] as $f){
						?>	
							<li>
								<a href="<?php echo get_the_permalink($f->ID); ?>">
									<p class="title"><?php echo get_the_title($f->ID); ?></p>
									<p class="date"><?php echo substr(get_the_excerpt($f->ID),0,200); ?></p>
								</a>
							</li>
						<?php
					} ?>
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