
	<section class="m__events">
		<div class="wrapper row align-items-center justify-content-center text-center">
			<div class="col-md-12">
				<h3 class="h1-text txt__secondary-one"><?php echo $m['title'] ?></h3>
			</div>

			<?php if($m['copy'] > ''){ ?>
				<div class="col-md-12 extra-copy">
					<p class="small-regular <?php echo useSA('fadeIn'); ?> txt__secondary-one"><?php echo $m['copy']; ?></p>
				</div>
			<?php } ?>



			<?php if($m['show_cats']){ ?>
				<div class="col-md-12 categories">
					<ul>
						
					</ul>
				</div>
			<?php } ?>

			

			<?php 

				$numEvents = $m['module_size'];
				$eventsType = get_field('event_display_type','option');

				if($m['custom_start_date']){
				 $startFrom = $m['start_from_date'];
				}else{
					$startFrom = null;
				}

				$x = 0;

				$eventsList = getIgniteEvents(null,null,array(),0,$numEvents);
				foreach($eventsList['events'] as $event){

					
			?>
				<div class="event-block col-md-4 <?php echo useSA('fadeInUp'); ?>" data-wow-delay="<?php echo ($x * 0.25); ?>s" data-event="<?php echo $event['id'] ?>">
					<div class="eb__wrapper row align-items-center justify-content-center text-center">
						<?php $image = get_field('image',$event['id']); ?>
						<div class="image" style="background-image:url('<?php echo $image['sizes']['medium'] ?>')"></div>
						<div class="content col-md-12">
							<?php 
								if(get_field('events_show_dates','option') == 'show'){
							?>
									<p class="date button-and-nav txt__light"><?php echo date('d.m.Y',$event['startdate']); ?></p>
							<?php 
								}
							?>
							<h5 class="title h3-text txt__light"><?php echo get_the_title($event['id']); ?></h5>

							<?php if($eventsType == 'full'){ ?>

								<a href="<?php echo the_permalink($event['id']); ?>" class="button">SEE MORE</a>

							<?php }elseif($eventsType == 'popup'){ ?>

								<a href="#" class="button events-popup" data-events-popup="event-text-<?php echo $x; ?>">SEE MORE</a>

							<?php } ?>

						</div>

					<?php if($eventsType == 'popup'){ ?>
						<div class="text bkgrnd__background txt__secondary-one" id="event-text-<?php echo $x; ?>">
							<div class="events-close buttons-and-nav txt__dark">x</div>
							<h5 class="title h4-text txt__dark"><?php echo get_the_title($event['id']); ?></h5>
							<div class="very-small-regular">
								<?php the_field('description',$event['id']); ?>
							</div>
						</div>
					<?php } ?>

					</div>
				</div>
			<?php
					$x++;
				}
			?>

			


			<?php if($m['show_pagination']){ ?>


			<?php } ?>

			

		</div>
	</section>

