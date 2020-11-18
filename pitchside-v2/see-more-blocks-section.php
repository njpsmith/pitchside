
<?php
if( have_rows('blocks') ): ?>
  <div class="l-see-more-blocks-section">
    <?php $heading = get_field('heading'); 
    if($heading) { ?>
      <h3><?php the_field('heading'); ?></h3>
    <?php } ?>
    <div class="l-see-more-blocks-section__inner">
      <?php while ( have_rows('blocks') ) : the_row(); ?>
        
        <?php $img = get_sub_field('image'); ?>
        <article>
          <div class="image-underlay">
            <div class="l-see-more-block__image" style="background-image: url('<?php echo $img['sizes']['medium']; ?>')"></div>
          </div>
          <?php $linkURL = get_sub_field('link'); ?>
          <a href="<?php echo $linkURL['url']; ?>">
            <div><?php the_sub_field('text'); ?></div>
          </a>
        </article>

      <?php endwhile; ?>
    </div>
  </div>
<?php 
else :
endif;
?>