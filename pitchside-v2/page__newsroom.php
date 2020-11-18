<?php
	/*
	 Template Name: Newsroom Page
	*/

	 get_header();
 ?>

	<section class="inner-hero">
		<div class="ih__background image-wrapper cover">
			<?php 
				$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
			?>
			<img src="<?php echo $img; ?>" alt="" />
		</div>
		<div class="content-wrapper">
			<div class="ih__title">
<!-- 				<h2 class="subtitle">Intro</h2>
 -->				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<section class="newsroom">
		<div class="content-wrapper">
			<div class="row">

				<div class="col-12 col-lg-9 posts">

					<?php 
						if($_GET['news-cat'] >''){

						}else{

							$featured = get_field('featured_post');
							?>
								<div class="news-box featured">
									<a href="<?php the_permalink($featured->ID); ?>">
											<div class="image-wrapper cover">
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $featured->ID ), 'single-post-thumbnail' ); ?>
												<img src="<?php echo $image[0]; ?>" alt="" />
											</div>
											<div class="content">
												<p class="date"><?php echo get_the_date('F j, Y',$featured->ID); ?></p>
												<p class="title"><?php echo get_the_title($featured->ID); ?></p>
												<p class="excerpt"><?php echo substr(get_the_excerpt($featured->ID),0,100); ?></p>
											</div>
										</a>
								</div>
							<?php
						}	
					?>

					<?php 
						$args = array( 'posts_per_page' => 5);

						if($_GET['news-cat'] > ''){
							$args['category'] = $_GET['news-cat'];
						}


						$myposts = get_posts( $args );
						foreach ( $myposts as $p ){
							//var_dump($p);
							?>
								<li>
									<div class="news-box aside">
										<a href="<?php the_permalink($p->ID); ?>">
											<div class="image-wrapper cover">
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' ); ?>
												<img src="<?php echo $image[0]; ?>" alt="" />
											</div>
											<div class="content">
												<p class="date"><?php echo get_the_date('F j, Y',$p->ID); ?></p>
												<p class="title"><?php echo get_the_title($p->ID); ?></p>
												<p class="excerpt"><?php echo substr(get_the_excerpt($p->ID),0,100); ?></p>
											</div>
										</a>
									</div>
								</li>
							<?php
						}
					?>

				</div>


				<div class="col-12 col-lg-3 controls">

					<div class="control-box categories">
						<h3 class="cb__header">Categories</h3>
						<div class="cb__content">
							<ul>
								<?php 
									$cats = get_categories(); 
									foreach($cats as $c){
										$class = '';
										if($_GET['news-cat'] > ''){
											if($_GET['news-cat'] == $c->term_id){
												$class = 'active';
											}
										}
										?>
											<li>
												<a href="<?php echo get_permalink(16).'?news-cat='.$c->term_id; ?>" class="<?php echo $class; ?>"><?php echo $c->name; ?></a>
											</li>
										<?php
									}
								?>
							</ul>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>




<?php get_footer(); ?>
