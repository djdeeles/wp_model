<div class="aciklama5">
  <div>
    <?php 
		$args = array( 
			'posts_per_page'   => 5, 
			'category'         => get_option("silver_kat"), 
			'orderby'          => 'meta_value_num', 
			'order'            => 'DESC', 
			'meta_key'         => 'sira');
		$postslist = get_posts($args); foreach ($postslist as $post) : setup_postdata($post);
	?>
    <div class="ana-kutu2">
      <div class="ana-ortala2">
        <div class="ana-baslik2"><a href="<?php the_permalink() ?>" class="ballon" onmouseover="tooltip.show('<?php the_title(); ?>');" onmouseout="tooltip.hide();"><?php echo get_post_meta($post->ID, "isim", true); ?></a></div>
        <div class="ana-resim2">
          <div class="vip"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/resim/silver_ana.png" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" width="174" height="205" alt=""/></a></div>
          <a href="<?php the_permalink() ?>" ><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=174&amp;h=205" class="ballon" onmouseover="tooltip.show('<?php echo get_post_meta($post->ID, "sehir", true); ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
        <div class="sehir-baslik"><a><?php echo get_post_meta($post->ID, "telefon", true); ?></a></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
