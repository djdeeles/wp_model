<script type="text/javascript">
stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:2000},
	panelbehavior: {speed:500, wraparound:true, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['<?php bloginfo('template_url'); ?>/resim/sol.png', -25, 0], rightnav: ['<?php bloginfo('template_url'); ?>/resim/sag.png', 5, 1]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['external'] //content setting ['inline'] or ['external', 'path_to_external_file']
})
</script>
<div id="mygallery" class="stepcarousel">
  <div class="belt">
    <?php $kategori = get_option('slider_kat'); ?>
    <?php $postslist = get_posts("numberposts=10&category='.$kategori'"); foreach ($postslist as $post) : setup_postdata($post); ?>
    <div class="panel">
      <div class="vip"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/resim/slider_ana.png" border="0" width="174" height="205" alt=""/></a></div>
      <a href="<?php the_permalink() ?>" ><img src="<?php echo bloginfo('template_url'); ?>/optimize/timthumb.php?src=<?php echo get_post_meta($post->ID, "resim", true); ?>&amp;w=148&amp;h=200" class="ballon" onmouseover="tooltip.show('<?php the_title(); ?>');" onmouseout="tooltip.hide();" border="0" alt="<?php the_title(); ?>" /></a></div>
    <?php endforeach; ?>
  </div>
</div>
