</div>

<div style="clear: both;"></div>
<div id="altkisim">
  <div style="width: 950px; margin: 0px auto;">
    <div id="ustmenu1">
      <?php wp_nav_menu( array( 'theme_location' => 'alt-menu' ) ); ?>
    </div>
    <div id="altbilgi">
      <p>
        <?php $footers = get_option('footers'); echo stripslashes($footers); ?>
      </p>
    </div>
  </div>
</div>
<div id="shadow"></div>
<?php wp_footer(); ?>
<!--<div class="timer">
  <?php timer_stop(1); ?>
  saniyede. <?php echo get_num_queries(); ?> sorgu ile oluşturuldu.</div>
</body></html>-->