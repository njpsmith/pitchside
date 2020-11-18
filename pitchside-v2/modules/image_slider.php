<section class="image-gallery">

	<ul class="ig__slider">
		<?php 
			foreach($m['image_slider']['image_slides'] as $i){
				?>
					<li class="ig__slide">
						<div class="image-wrapper cover">
							<img src="<?php echo $i['url']; ?>" alt="<?php echo $i['alt']; ?>" />
						</div>
					</li>
				<?php
			}
		?>
	</ul>

</section>