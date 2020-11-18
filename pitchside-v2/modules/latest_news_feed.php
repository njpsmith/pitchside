<section class="news-feed">

	<div class="content-wrapper">
		<div class="row">
			<div class="col-12">
				<h1 class="subtitle">NEWS</h1>
				<h2>THE LATEST NEWS</h2>
			</div>
			<div class="col-12 col-lg-6 aside-boxes">
				<?php 
					$args = array( 'posts_per_page' => 3);
					$myposts = get_posts( $args );
				?>
				<div class="news-box aside">
					<a href="<?php the_permalink($myposts[1]->ID); ?>">
						<div class="image-wrapper cover">
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $myposts[1]->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" alt="" />
						</div>
						<div class="content">
							<p class="date"><?php echo get_the_date('F j, Y',$myposts[1]->ID); ?></p>
							<p class="title"><?php echo get_the_title($myposts[1]->ID); ?></p>
							<p class="excerpt"><?php echo substr(get_the_excerpt($myposts[1]->ID),0,100); ?></p>
						</div>
					</a>
				</div>
				<div class="news-box aside">
					<a href="<?php the_permalink($myposts[2]->ID); ?>">
						<div class="image-wrapper cover">
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $myposts[2]->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" alt="" />
						</div>
						<div class="content">
							<p class="date"><?php echo get_the_date('F j, Y',$myposts[2]->ID); ?></p>
							<p class="title"><?php echo get_the_title($myposts[2]->ID); ?></p>
							<p class="excerpt"><?php echo substr(get_the_excerpt($myposts[2]->ID),0,100); ?></p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="news-box">
					<a href="<?php the_permalink($myposts[0]->ID); ?>">
						<div class="image-wrapper cover">
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $myposts[0]->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" alt="" />
						</div>
						<div class="content">
							<p class="date"><?php echo get_the_date('F j, Y',$myposts[0]->ID); ?></p>
							<p class="title"><?php echo get_the_title($myposts[0]->ID); ?></p>
							<p class="excerpt"><?php echo substr(get_the_excerpt($myposts[0]->ID),0,100); ?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

</section>