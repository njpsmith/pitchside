
	<section class="m__action bkgrnd__secondary-one">
		<div class="wrapper row align-items-center justify-content-center text-center">
			<div class="col-md-12">
				<h4 class="txt__light accent-font"><?php echo $m['title']; ?></h4>
				<p class="txt__light small-regular <?php echo useSA('fadeIn');?>"><?php echo $m['copy']; ?></p>

				<?php 
					if($m['cta_type'] == "normal"){

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
					}else{ 
						//Newsletter signup
				?>

						<div class="action__signup ">
							<input type="email" id="temp-email" class="txt__light small-regular text-left <?php echo useSA('fadeInUp');?>" placeholder="Enter email address"/> 
							<a href="#" class="button js__popup <?php echo useSA('fadeInUp');?>" id="<?php echo $clickID; ?>" data-popup="newsletter">SIGN UP NOW</a>
						</div>

				<?php

					}

				?>

			</div>
		</div>
	</section>
