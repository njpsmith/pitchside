<?php
	/*
	 Template Name: Single League Page
	*/

	 get_header();
 	$m = array();
	

	$m['small_hero'] = get_field('small_hero');
	include('modules/small_hero.php');
?>
	<section class="home-intro">
		<div class="content-wrapper">
			<?php the_field('page_content'); ?> 
		</div>	
	</section>


	<section class="league-data">
		<div class="content-wrapper">
			<ul class="ld__header">
				<li data-tab="0" class="active">
					TABLE
				</li>
				<li data-tab="1">
					FIXTURES
				</li>
				<li data-tab="2">
					RESULTS
				</li>
				<li data-tab="3">
					TOP PLAYERS
				</li>
				<li data-tab="4">
					VENUE
				</li>
			</ul>

			<ul class="ld__content">
				<li data-tab="0" class="active">
					<?php echo do_shortcode(get_field('league_table_shortcode')); ?>
				</li>
				<li data-tab="1">
					<?php echo do_shortcode(get_field('fixtures_shortcode')); ?>
				</li>
				<li data-tab="2">
					<?php echo do_shortcode(get_field('results_shortcode')); ?>
				</li>
				<li data-tab="3">
					<?php echo do_shortcode(get_field('top_players_shortcode')); ?>
				</li>
				<li data-tab="4">
					<div class="row venue-tab">
						<div class="col-lg-6">
							<?php the_field('map_iframe'); ?>
						</div>
						<div class="col-lg-6">
							<address>
								<?php the_field('venue_address'); ?>
							</address>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>


	<section class="pay-fees" id="pay-fees">
		<div class="content-wrapper">
			<h2 class="subtitle">Pay Fees</h2>
			<?php echo do_shortcode(get_field('pay_fees_shortcode')); ?>
		</div>
	</section>

<?php
	$m['cta_row'] = get_field('cta_row');
	include('modules/cta_row.php');

	 get_footer(); 
?>
