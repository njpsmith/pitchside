<section class="league-highlight">
	<div class="content-wrapper">
		<h2 class="subtitle"><?php echo $m['shortcode_block']['subtitle']; ?></h2>

		<?php echo do_shortcode($m['shortcode_block']['shortcode']); ?>

		<a href="<?php echo $m['shortcode_block']['cta']['url']; ?>" target="<?php echo $m['shortcode_block']['cta']['target']; ?>" class="button red"><?php echo $m['shortcode_block']['cta']['title']; ?></a>
	</div>
</section>