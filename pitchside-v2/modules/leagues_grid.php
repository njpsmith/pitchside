<section class="image-grid">
		<div class="content-wrapper">
			<div class="row">
				<?php 
					foreach($m['leagues_grid']['leagues'] as $l){
						?>
							<div class="col-12 col-lg-4 ig__box">
								<a href="<?php echo $l['link']; ?>">
									<div class="image-wrapper cover">
										<img src="<?php echo $l['image']['url']; ?>" alt="<?php echo $l['image']['alt']; ?>" />
									</div>
									<h4><?php echo $l['title']; ?></h4>
								</a>
							</div>

						<?php
					}
				?>

			</div>
		</div>
	</section>