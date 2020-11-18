
	<section class="m__menus-module">
	<?php 
		$menus = $m['menus']; 

		 if($m['display_type'] == 'full'){
	?>

		<div class="wrapper row align-items-start justify-content-center">

			<div class="col-md-3 menus-nav text-center">
				<ul>
					<?php 
						$x=1;
						foreach($menus as $i){
					?>
							<li class="txt__secondary-one h2-text<?php if($x==1){ echo ' active';} ?>" data-menu="<?php echo $x; ?>"><?php the_field('name',$i); ?></li>
					<?php
							$x++;
						}
					?>
				</ul>
			</div>

			<div class="col-md-9 menus-display">

				<ul>
					<?php 
						$x=1;
						foreach($menus as $i){
							$menu = get_field('sections',$i);
					?>
							<li class="menu<?php if($x==1){ echo ' active';} ?>" id="menu-<?php echo $x; ?>">

							<?php 
								foreach($menu as $s){
							?>
								<div class="menu-block">
									<h4 class="txt__secondary-one h4-text"><?php echo $s['title']; ?></h4>
									<?php 
										foreach($s['menu_items'] as $mi){
									?>
											<div class="menu-item row align-items-end  very-small-regular txt__secondary-one">
												<p class="mi__title col-md-9"><?php echo $mi['item_name']; ?></p>
												<p class="mi__price col-md-3 text-right"><?php echo $mi['price']; ?></p>
											</div>
									<?php
										}
									?>
								</div>
							<?php 
								}
							?>
							</li>
					<?php
							$x++;
						}
					?>

				</ul>

			</div>

		</div>

	<?php 
		}elseif($m['display_type'] == 'pdf'){
	?>
			<div class="wrapper pdf-links row align-items-start justify-content-center">
			<?php 
				foreach($menus as $i){
			?>
				<div class="col-md-4">
					<a class="button" href="<?php the_field("pdf_file",$i); ?>" id="menu__<?php echo seoUrl(get_field('name',$i)); ?>" target="_blank"><?php the_field('name',$i); ?></a>
				</div>
			<?php 
				}
			?>
			</div>	
	<?php 
		}elseif($m['display_type'] == 'feed'){
	?>

	<?php 
		}
	?>
	</section>
