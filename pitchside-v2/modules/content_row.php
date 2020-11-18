<section class="home-intro">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 col-lg-5 header">
				<h2 class="subtitle"><?php echo $m['content_row']['subtitle']; ?></h2>
				<h1><?php echo $m['content_row']['title']; ?></h1>

				<?php 
					if($m['content_row']['aside_images']){
						foreach($m['content_row']['aside_images'] as $i){
							?>
								<div class="image-wrapper cover">
									<img src="<?php echo $i['url']; ?>" alt="<?php echo $i['alt']; ?>" />
								</div>
							<?php
						}
					}
				?>
			</div>
			<div class="col-lg-1 spacer"></div>
			<div class="col-12 col-lg-6 content">
				<?php echo $m['content_row']['content']; ?>
			</div>
		</div>
	</div>
</section>
