<?php get_header(); ?>

<div class="aciklama-ana">
	<div class="has2">
		<h2 class="baslik">
			<?php the_title(); ?>
		</h2>
	</div>
	<div class="aciklama2">
		<div class="aciklamaresim">
			<!--<img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=455&amp;h=350" border="0" alt="<?php the_title(); ?>" />-->
			<img src="<?php echo get_post_meta($post->ID, "resim", true); ?>" width="455px" border="0" alt="<?php the_title(); ?>" />
		</div>
	</div>
	<div class="aciklama3">
		<div class="bilgibaslik">Galeri</div>
		<div class="post-screenshot">
			<?php
			$attachment_args = array(
				'post_type' => 'attachment',
				'numberposts' => -1,
				'post_status' => null,
				'post_parent' =>$post->ID,
				'orderby' => 'menu_order ID'
				);
			$attachments = get_posts($attachment_args);
			if ($attachments) {
				foreach($attachments as $gall_image )                                                                 
				{
					$att_img =  wp_get_attachment_url( $gall_image->ID);
					echo '<li>';
					echo '<a class="grouped_elements" rel="fancybox" rel="group1" href="'.$att_img.'">';
					echo  '<img src="'.get_bloginfo('template_url').'/optimize/timthumb.php?src='.$att_img.'&amp;w=88&amp;h=88" alt=""/>';
					echo '</a>';
					echo '</li>';
				}
			}
			?>
		</div>
	</div>
</div>
<div class="solkisim2">
	<?php if (have_posts()) { while (have_posts()) : the_post(); ?>
		<div class="yazilar">
			<?php if (get_option('ilan_bilgi_ac_kapat')=='Aç'){ include (TEMPLATEPATH . "/bilgiler.php"); }?>
			<div class="kat-detaylar">
				<div class="bilgibaslik3">Açıklama</div>
				<?php the_content(); ?>
				<div class="temizle"></div>
			</div>
			<?php if (get_option('ilan_sosyal_ac_kapat')=='Aç') { include (TEMPLATEPATH . "/single_paylas.php"); } ?>
			<div class="kat-detaylar2">
				<div style="color:#fff;">
					<?php the_tags('Etiketler &raquo; ', ' ', ''); ?>
				</div>
			</div>
			<!--<div class="kat-detaylar3"><div class="yorumlar"><?php comments_template(); // Get wp-comments.php template ?></div>-->
		<?php endwhile; } ?>
		<!--</div>--> 
	</div>
</div>
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
