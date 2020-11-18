	
	<?php 
		$backgroundColour = $m['text']['background_colour'];
		if($backgroundColour == 'bkgrnd__secondary-one'){
			$textColour = 'txt__light';
		}elseif($backgroundColour == 'bkgrnd__secondary-two'){
			$textColour = 'txt__secondary-one';
		}elseif($backgroundColour == 'bkgrnd__secondary-three'){
			$textColour = 'txt__secondary-one';
		}else{
			$textColour = 'txt__dark';
		}

	?>


	<section class="m__promo-block <?php echo $backgroundColour; ?> image" style="background-image:url(<?php echo $m['text']['background_image']['sizes']['large']; ?>);">
		<div class="wrapper row align-items-center justify-content-center text-center <?php if($m['image_position'] == 'right'){ echo 'flex-md-row-reverse';} ?>">

			<div class="col-md-6 image-half">
				<div class="image" style="background-image:url('<?php echo $m['image']['sizes']['large']; ?>');"></div>
			</div>

			<div class="col-md-6 text-half">
				<div class="image fit <?php echo useSA('fadeIn'); ?>" style="background-image:url(<?php echo $m['text']['image']['sizes']['medium']; ?>);"></div>
				<h4 class="h1-text <?php echo useSA('fadeIn'); ?> <?php echo $textColour; ?>"><?php echo $m['text']['title']; ?></h4>
				<p class="small-regular <?php echo useSA('fadeInUp'); ?> <?php echo $textColour; ?>"><?php echo $m['text']['copy']; ?></p>
				<?php 
					$linkDetails = generateLink($m['cta_link']);
					if($linkDetails['display']){
						if($m['cta_link']['link_type'] == 'booking'){
				?>
							<a class="button <?php echo useSA('fadeInUp');?> js__popup" data-popup="booking" id="<?php echo $clickID; ?>" href="<?php echo $linkDetails['url']; ?>" <?php echo $linkDetails['external']; ?>><?php echo $linkDetails['label']; ?></a>
				<?php 
						}else{
				?>
							<a class="button <?php echo useSA('fadeInUp');?>" id="<?php echo $clickID; ?>" href="<?php echo $linkDetails['url']; ?>" <?php echo $linkDetails['external']; ?>><?php echo $linkDetails['label']; ?></a>
				<?php
						}
					} 
				?>
			</div>

		</div>
	</section>

