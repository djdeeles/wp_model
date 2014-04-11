<div class="sagkisim">
	<?php 
	if (get_option('side_platin_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_platin.php");
	}else{
	}
	if (get_option('side_gold_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_gold.php");
	}else{
	}
	if (get_option('side_silver_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_silver.php");
	}else{
	}
	if (get_option('side_tab_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_tab.php");
	}else{
	}
	if (get_option('sidebar_reklam_ac_kapat')=='Aç') { ?> <br /> <?php $sag125 = get_option('sidebar_reklam_300x250'); echo stripslashes($sag125); } 
	if (get_option('sosyal_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_sosyal.php");
	}else{
	}
	if (get_option('rastgele_ac_kapat')=='Aç') {
		include (TEMPLATEPATH . "/side_rastgele.php");
	}else{
	} ?>
	<div>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
		endif; ?>
	</div>
</div>
