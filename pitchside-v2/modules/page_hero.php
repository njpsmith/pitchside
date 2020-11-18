
	<section class="m__page-hero">
		<div class="wrapper row">

			<ul class="slider-wrapper col-md-12">
				<?php foreach($m['slides'] as $s){ ?>
				
					<li class="image" style="background-image:url('<?php echo $s['image']['url']; ?>');">
						<div class="mph__wrapper <?php echo $s['overlay']; ?> row align-items-center justify-content-center">
							<?php if($s['overlay'] == 'text'){ ?>
								<div class="col-md-12 text-center">
									<h3 class="main-hero-statement txt__light <?php echo useSA('fadeInUp');?>"><?php echo $s['text_content'][0]['title'];?></h3>
									<h4 class="page-description txt__light <?php echo useSA('fadeInUp');?>" data-wow-delay=".25s"><?php echo $s['text_content'][0]['subtitle']; ?></h4>
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
							<?php }elseif($s['overlay'] == 'image'){ ?>
								<div class="col-md-5 image fit" style="background-image:url('<?php echo $s['image_overlay']['sizes']['large']; ?>');"></div>
							<?php } ?>
						</div>
					</li>

				<?php } ?>

				</li>

			</ul>

		</div>
	</section>

