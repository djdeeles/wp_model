<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title>
<?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?>
</title>
<meta name="language" content="tr-TR" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="location" content="istanbul, türkiye, tr, turkey" />
<meta name="revisit" content="1 day" />
<meta name="google" content="notranslate" />
<base href="http://www.bestmodelim.com/" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php $favicon = get_option('favicon'); echo stripslashes($favicon); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
<?php wp_head(); ?>
<script type="text/javascript">
if (typeof jQuery == 'undefined') {
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "http://code.jquery.com/jquery-latest.min.js";
    document.getElementsByTagName('head')[0].appendChild(script);
}
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ballon.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/SpryTabbedPanels.js"></script>
<?php $sayac = get_option('sayac'); echo stripslashes($sayac); ?>
<!--[if IE 8]>
		<style type="text/css">
			.yorum-paneli textarea{margin-top:-20px;}
		</style>
		<![endif]-->
<!--[if IE 7]>
		<style type="text/css">
			.tur {margin:-0px 0px 0px -147px;
		</style>
		<![endif]-->
</head>
<body oncontextmenu="return false;" unselectable="on" onselectstart="return false;" style="-moz-user-select: none; -webkit-touch-callout: none; -khtml-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;">
<div id="wrapper">
  <div class="logokismi">
    <div class="logo"><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('description'); ?>"><img src="<?php $logo = get_option('logo'); echo stripslashes($logo); ?>" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" border="0" /></a></div>
  </div>
  <div class="temizle"></div>
</div>
<div id="ustmenu">
  <?php wp_nav_menu( array( 'theme_location' => 'ust-menu' ) ); ?>
  <div id="searchformana">
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <input type="text" value="İlan Ara ..." name="s" id="s" onfocus="if (this.value == 'İlan Ara ...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'İlan Ara ...';}" />
      <input type="submit" id="searchsubmit" value="İlan Ara ..." />
    </form>
  </div>
</div>
<div id="reklam728">
  <?php $ust_banner = get_option('ust_banner'); echo stripslashes($ust_banner); ?>
</div>
<div class="icerikbasliyor">
