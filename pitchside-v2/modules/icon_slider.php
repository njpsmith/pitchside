<section class="icon-slider">
	<div class="content-wrapper">
		<h1 class="subtitle"><?php echo $m['icon_slider']['is_subtitle']; ?></h1>
		<h2><?php echo $m['icon_slider']['is_title']; ?></h2>
		<ul>
			<?php 
				foreach($m['icon_slider']['slides'] as $s){
					?>
						<li>
							<div class="image-wrapper">
								<img src="<?php echo $s['icon']['url']; ?>" alt="<?php echo $s['icon']['alt']; ?>" />
							</div>
							<h3><?php echo $s['title']; ?></h3>
						</li>
					<?php
				}
			?>
		</ul>
	</div>
</section>