<div class="footer-wrapper bkgrnd__primary row align-items-start justify-content-center" id="footer__1">

	<div class="col-md-12 social-links text-center">
		<p class="h3-text txt__light">Follow us</p>
		<?php socialIcons('txt__light'); //Echo out social links ?>
	</div>

	<div class='col-md-4 nav'>
		<div class="fn__links">
			<?php 
				$links = get_field('footer_nav_links','option'); 
				foreach($links as $l){
					$linkDetails = generateLink($l);
					if($linkDetails['display']){
			?>
						<a class="very-small-regular txt__light" href="<?php echo $linkDetails['url']; ?>" <?php echo $linkDetails['external']; ?>><?php echo $linkDetails['label']; ?></a>

			<?php
					}
				}
			?>
		</div>
	</div>

	<div class='col-md-4 left'>
		<?php $col = get_field('left_column','option'); ?>
		<h5 class="txt__light h4-text"><?php echo $col['title']; ?></h5>
		<p class="txt__light very-small-regular"><?php echo $col['copy']; ?></p>
	</div>

	<div class='col-md-4 right'>
		<?php $col = get_field('right_column','option'); ?>
		<h5 class="txt__light h4-text"><?php echo $col['title']; ?></h5>
		<p class="txt__light very-small-regular"><?php echo $col['copy']; ?></p>
	</div>

	<div class="col-md-12 footer-nav">
		<p class="copywrite txt__light very-small-regular">© <?php echo date('Y'); ?> ETM Group</p>
		
		<a href="http://ignitehospitality.com" target="_blank" class="ignite-link txt__light very-small-regular">Website by Ignite</a>
	</div>

</div>