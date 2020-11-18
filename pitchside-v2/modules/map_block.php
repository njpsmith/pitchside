
	<section class="m__map-block bkgrnd__secondary-two">

		<script src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('google_maps_api_key','option'); ?>"></script>

		<div class="wrapper row align-items-center justify-content-center text-center <?php if($m['map_position'] == 'right'){ echo 'flex-md-column-reverse';} ?> image" style="background-image:url(<?php echo $m['background_image']['sizes']['large']; ?>);">
			
			<div class="col-md-6 map-wrapper">
				<?php $location = $m['map']; ?>
				<div class="mb__map acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<div class="mb__address <?php echo useSA('fadeInDown'); ?>">
					<address class="text-left very-small-regular txt__secondary-one">
						<?php echo $m['address']; ?> 
					</address>
					<div class="arrow-down"></div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="image fit <?php echo useSA('fadeIn'); ?>" style="background-image:url(<?php echo $m['text']['image']['sizes']['small']; ?>);"></div>
				<h4 class="h1-text txt__secondary-one <?php echo useSA('fadeIn'); ?>"><?php echo $m['text']['title']; ?></h4>
				<p class="small-regular txt__secondary-one <?php echo useSA('fadeInUp'); ?>"><?php echo $m['text']['copy']; ?></p>
				<?php 
					$linkDetails = generateLink($m['text']);
					if($linkDetails['display']){
				?>
						<a class="button <?php echo useSA('fadeInUp'); ?>" id="<?php echo $clickID; ?>" href="<?php echo $linkDetails['url']; ?>" <?php echo $linkDetails['external']; ?>><?php echo $linkDetails['label']; ?></a>
				<?php } ?>
				<div class="social-icons <?php echo useSA('fadeInUp'); ?>" data-wow-delay="1s">
					<?php socialIcons("txt__secondary-one"); ?>
				</div>
			</div>

		</div>
	</section>

