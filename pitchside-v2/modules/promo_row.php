<section class="home-intro">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 col-lg-3 image">
				<div class="image-wrapper cover">
					<img src="<?php echo $m['promo_row']['image']['url']; ?>" alt="<?php echo $m['promo_row']['image']['alt']; ?>" />
					</div>
			</div>
			<div class="col-12 col-lg-9 content">
				<h2 class="subtitle"><?php echo $m['promo_row']['subtitle']; ?></h2>
				<h1><?php echo $m['promo_row']['title']; ?></h1>
				<?php echo $m['promo_row']['content']; ?>
			</div>
		</div>
	</div>
</section>