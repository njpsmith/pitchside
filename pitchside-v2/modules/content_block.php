
	<?php 
		$numCols = count($m['columns']); 
		$colSize = 12/$numCols;
	?>

	<section class="m__content-block">
		<div class="wrapper row align-items-center justify-content-center text-center">
		<?php 
			foreach($m['columns'] as $c){
		?>
			<?php if($c['column_type'] == 'text'){ ?>

				<div class="content-column col-md-<?php echo $colSize; ?> col-type-<?php echo $c['column_type']; ?> image <?php echo $c['background_image_size']; ?>" style="background-image:url(<?php echo $c['background_image']['sizes']['large']; ?>);">
					<?php if($c['title'] > ''){ ?>
						<h4 class="txt__secondary-one <?php if($numCols == 1){ echo 'h1-text'; }elseif($numCols == 2){ echo 'h3-text'; }elseif($numCols == 3){ echo 'h4-text'; } ?> <?php echo useSA('fadeIn'); ?>"> <?php echo $c['title']; ?> </h4>
					<?php } ?>
					<p class="<?php if($numCols != 1){ echo 'small-regular'; }else{ echo 'body-regular'; } ?> <?php echo useSA('fadeInUp'); ?> txt__secondary-one"><?php echo $c['content']; ?></p>
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

			<?php }elseif($c['column_type'] == 'image'){ ?>

				<div class="content-column col-md-<?php echo $colSize; ?> col-type-<?php echo $c['column_type']; ?>">
					<?php if($c['title'] > ''){ ?>
						<h4 class="txt__secondary-one h1-text <?php echo useSA('fadeIn'); ?>"><?php echo $c['title']; ?></h4>
					<?php } ?>
					<div class="image <?php echo useSA('fadeIn'); ?>" data-wow-delay=".25s" style="background-image:url(<?php echo $c['image']['sizes']['large']; ?>);"></div>
				</div>

			<?php } ?>
		<?php
			}
		?>
		</div>
	</section>
