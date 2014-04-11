<?php get_header(); ?>
<?php include (TEMPLATEPATH . "/reklamlar.php"); ?>
<div class="temizle"></div>
<?php if( !function_exists('wp_pagenavi') || ($paged == 0 && !is_paged()) ) { ?>
<?php if (get_option('platin_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/ana_platin.php"); } ?>
<div class="temizle"></div>
<?php if (get_option('gold_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/ana_gold.php"); } ?>
<div class="temizle"></div>
<?php if (get_option('silver_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/ana_silver.php"); } ?>
<div class="temizle"></div>
<?php if (get_option('slider_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/ana_slider.php"); } ?>
<?php } ?>
<div class="temizle"></div>
<div class="solkisim">
	<div class="widgettitle3">En Son Eklenenler<div class="domestos"></div>
</div>
<div class="ana-tam">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="ana-kutu">
			<div class="ana-ortala">
				<div class="ana-baslik"><a href="<?php the_permalink() ?>" class="ballon" onmouseover="tooltip.show('<?php the_title(); ?>');" onmouseout="tooltip.hide();">
					<?php baslik(); ?>
				</a></div>
				<div class="ana-resim"><a href="<?php the_permalink() ?>" ><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=140&amp;h=160" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
				<div class="sehir-baslik"><a><?php echo kisalt(get_post_meta($post->ID, "telefon", true)); ?></a></div>
			</div>
		</div>
	<?php endwhile; else: ?>
	<p>
		<?php _e('İçerik Yok'); ?>
	</p>
<?php endif; ?>
<div class="temizle"></div>
<br />
<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); else : ?>
	<div class="navigasyon">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
<?php endif; ?>
</div>
</div>
<?php 
get_sidebar(); 
if (function_exists('wp_pagenavi') && is_paged() && $paged != 0) {
	if (get_option('platin_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/single_platin.php"); } 
	if (get_option('platin_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/single_gold.php"); } 
	if (get_option('platin_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/single_silver.php"); }
} 
get_footer(); ?>