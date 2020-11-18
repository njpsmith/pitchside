<section class="image-cta-panel">

	<div class="background-image image-wrapper cover">
		<img src="<?php echo $m['cta_row']['background_image']['url']; ?>" alt="<?php echo $m['cta_row']['background_image']['alt']; ?>" />
	</div>

	<div class="content-wrapper">
		<div class="row align-items-center justify-content-start <?php if($m['cta_row']['alignment'] == 'right'){ ?>flex-lg-row-reverse<?php } ?>">
			
			<div class="col-12 col-lg-6 content">
				<h3 class="subtitle"><?php echo $m['cta_row']['cta_subtitle']; ?></h3>
				<h1><?php echo $m['cta_row']['cta_title']; ?></h1>
				<a href="<?php echo $m['cta_row']['link']['url']; ?>" target="<?php echo $m['cta_row']['link']['target']; ?>" class="button red"><?php echo $m['cta_row']['link']['title']; ?></a>
			</div>

		</div>
	</div>

</section>	