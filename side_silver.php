<div class="yanmenu">
  <h2 class="widgettitle">Silver İlanlar</h2>
  <div>
    <?php $kategori = get_option('silver_kat'); ?>
    <?php $postslist = get_posts("numberposts=3&orderby=rand&category='.$kategori'"); foreach ($postslist as $post) : setup_postdata($post); ?>
    <div class="sag-kutu2">
      <div class="sag-ortala2">
        <div class="sag-resim2"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=90&amp;h=120" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
        <div class="vip"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/resim/silver_side.png" class="ballon" onmouseover="tooltip.show('<?php echo get_post_meta($post->ID, "sehir", true); ?>');" onmouseout="tooltip.hide();" border="0" width="90" height="120" alt=""/></a></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="temizle"></div>
</div>
