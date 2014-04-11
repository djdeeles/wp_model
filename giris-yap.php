<?php
/*
Template Name: Giris-Yap
*/
?>
<?php get_header(); ?>

<div id="content">
  <div class="site-genel">
    <div class="sagbar">
      <div class="tamsayfa">
        <?php global $user_ID, $user_identity; get_currentuserinfo(); if (!$user_ID): ?>
        <div class="baslik">
          <h2><b>
            <?php the_title(); ?>
            </b></h2>
        </div>
        <div class="icerik">
          <form name="loginform" id="loginform" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post">
            <div class="msgSuccess"><span style="color: #ff0000;">Kullanıcı Adı</span></div>
            <input type="text" name="log" id="uyeisim" tabindex="1" value="" class="cls-input" />
            <div class="temizle"></div>
            <div class="msgSuccess"><span style="color: #ff0000;">Şifre</span></div>
            <input type="password" name="pwd" id="uyesifre" tabindex="2" value="" class="cls-input" />
            <div class="temizle"></div>
            <input type="submit" name="submit" id="uyegiris" value="İşlemi Tamamla" tabindex="3" />
            <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
          </form>
        </div>
        <?php  else:?>
        <div class="baslik">
          <h2><b><span style="color: #ff0000;">Hoşgeldiniz</span></b></h2>
        </div>
        <div class="icerik">
          <div class="msgSuccess"><span style="color: #ff0000;"><?php echo $user_identity; ?> - </span><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Çıkış">Çıkış Yapmak İçin Tıklayınız</a></div>
          <div class="temizle"></div>
          <div class="tamsayfa">
            <ul id="firma-liste">
              <li><a href="http://www.lezclub.com/wp-admin/post-new.php" rel="tab1" class="selected">İlan Ekle</a></li>
            </ul>
            <script type="text/javascript">
var countries=new ddtabcontent("firma-liste")
countries.setpersist(true)
countries.setselectedClassTarget("link")
countries.init()
</script> 
          </div>
        </div>
        <?php endif;?>
      </div>
    </div>
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
