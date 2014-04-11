<div class="aciklama4">
	<div class="bilgibaslik">Silver İlanlar</div>
	<div>
		<?php 
		$args = array( 
			'posts_per_page'   => 9, 
			'category'         => get_option("silver_kat"), 
			'order'            => 'rand');
		$postslist = get_posts($args); foreach ($postslist as $post) : setup_postdata($post);
		?>
		<div class="sag-kutu">
			<div class="sag-ortala">
				<div class="vip"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/resim/silver_single.png" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" width="105" height="145" alt=""/></a></div>
				<div class="sag-resim"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=100&amp;h=138" class="ballon" onmouseover="tooltip.show('<?php if (get_post_meta($post->ID, "semt", true) != null) { echo get_post_meta($post->ID, "sehir", true) ." - ". get_post_meta($post->ID, "semt", true); } else { echo get_post_meta($post->ID, "sehir", true); } ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>
