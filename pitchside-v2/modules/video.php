
	<section class="m__video bkgrnd__primary">
		<div class="wrapper row">
			<div class="col-md-12">
				<video controls muted loop autoplay
				  poster="<?php echo $m['placeholder_image']['sizes']['medium']; ?>" >
				  <source
				    src="<?php echo $m['webm']; ?>"
				    type="video/webm">
				  <source
				    src="<?php echo $m['mp4']; ?>"
				    type="video/mp4">
				  Your browser doesn't support HTML5 video tag.
				</video>
			</div>
		</div>
	</section>
