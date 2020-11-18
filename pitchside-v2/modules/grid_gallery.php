
	<section class="m__grid-gallery">

		<div class="wrapper row align-items-center justify-content-center text-center">
			<div class="col-md-12">
				<?php if($m['title'] > ''){ ?>
					<h2 class="txt__secondary-one h1-text"><?php echo $m['title']; ?></h2>
				<?php } ?>
			</div>

			<?php foreach($m['images'] as $i){ ?>
				<div class="gg__block col-md-4">
					<div class="image" style="background-image:url('<?php echo $i['sizes']['medium']; ?>');">
						<a href="<?php echo $i['url']; ?>" data-lightbox="grid-gallery"></a>
					</div>
				</div>
			<?php } ?>
		</div>

	</section>

