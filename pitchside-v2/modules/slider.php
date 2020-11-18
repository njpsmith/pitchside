
	<section class="m__slider">
		<div class="wrapper row align-items-center justify-content-center text-center">
			<div class="col-md-12">
				<?php if($m['title'] > ''){ ?>
				<h4 class="txt__secondary-one h1-text"><?php echo $m['title']; ?></h4>
				<?php } ?>

				<ul class="slider-slick">
					<?php foreach($m['slides'] as $s){ ?>
							<li>
								<div class="image" style="background-image:url(<?php echo $s['image']['sizes']['large']; ?>);">
									<?php if($s['title'] > ''){ ?>
										<h5 class="txt__light h3-text"><?php echo $s['title']; ?></h5>
									<?php } ?>
									<p class="txt__light page-description"><?php echo $s['copy']; ?></p>
								</div>
							</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</section>
