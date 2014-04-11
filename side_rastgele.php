<div class="yanmenu">
  <h2 class="widgettitle">En Popüler İlanlar</h2>
  <div>
    <?php $posts = get_posts('meta_key=views&orderby=meta_value_num&order=DESC&numberposts=6'); foreach($posts as $post) { ?>
    <div class="sag-kutu2">
      <div class="sag-ortala2">
        <div class="sag-resim2"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=90&amp;h=120" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="temizle"></div>
</div>
