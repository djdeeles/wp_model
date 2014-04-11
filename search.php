<?php get_header(); ?>

<div class="solkisim">
  <div class="ana-tam">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="ana-kutu">
      <div class="ana-ortala">
        <div class="ana-baslik"><a href="<?php the_permalink() ?>" class="ballon" onmouseover="tooltip.show('<?php the_title(); ?>');" onmouseout="tooltip.hide();">
          <?php baslik(); ?>
          </a></div>
        <div class="ana-resim"><a href="<?php the_permalink() ?>" ><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=140&amp;h=160&amp;zc=1&amp;q=100" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
        <div class="sehir-baslik"><a><?php echo kisalt(get_post_meta($post->ID, "telefon", true)); ?></a></div>
      </div>
    </div>
    <?php endwhile; else: ?>
    <p>
      <?php _e('İçerik Yok'); ?>
    </p>
    <?php endif; ?>
    <?php /* Normal Videolar Sayfalı BİTİŞ */?>
    <?php /* Sıfırla */?>
    <div class="temizle"></div>
    <br />
    <?php /* Sayfalama */?>
    <?php if(function_exists('wp_pagenavi')) : ?>
    <?php wp_pagenavi() ?>
    <?php else : ?>
    <div class="navigasyon">
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
    <?php endif; ?>
    <?php /* Sıfırla */?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php if (get_option('ilan_platin_ac_kapat')=='Aç') { ?>
<?php include (TEMPLATEPATH . "/single_platin.php"); ?>
<?php }else{ ?>
<?php } ?>
<?php if (get_option('ilan_gold_ac_kapat')=='Aç') { ?>
<?php include (TEMPLATEPATH . "/single_gold.php"); ?>
<?php }else{ ?>
<?php } ?>
<?php if (get_option('ilan_silver_ac_kapat')=='Aç') { ?>
<?php include (TEMPLATEPATH . "/single_silver.php"); ?>
<?php }else{ ?>
<?php } ?>
<?php get_footer(); ?>
