<?php
/*
Template Name: Uye-Ol
*/
?>
<?php get_header(); ?>

<div id="content">
  <?php $blogUrl = get_bloginfo('wpurl'); ?>
  <?php 
$formGoster = true;
$kayitDevam = true;
if(isset($_POST['buttonKayitOl']))
{
	$ggln_kullaniciAdi = mysql_real_escape_string($_POST['textboxKullaniciAdi']);
	$ggln_kullaniciSifre = mysql_real_escape_string($_POST['textboxSifre']);
	$ggln_kullaniciSifreTekrar = mysql_real_escape_string($_POST['textboxSifreTekrar']);
	$ggln_kullaniciEMail = mysql_real_escape_string($_POST['textboxEPosta']);
	if(strlen($ggln_kullaniciAdi) < 4 or strlen($ggln_kullaniciAdi) > 16){echo '<div class="msgError">Kullanıcı adı en az 4, en fazla 16 karakter olmalı.</div>'; $kayitDevam = false; }
	if (ereg("[^A-Za-z1-9]",$ggln_kullaniciAdi)) {echo '<div class="msgError">Kullanıcı adı sadece türkçe karekterlerden oluşabilir.</div>'; $kayitDevam = false; }
	if(strlen($ggln_kullaniciSifre) < 6 or strlen($ggln_kullaniciSifre) > 16){echo '<div class="msgError">Şifren en az 6, en fazla 16 karakter olmalı.</div>'; $kayitDevam = false; }
	if($ggln_kullaniciSifre != $ggln_kullaniciSifreTekrar){echo '<div class="msgError">Şifreniz ile tekrar eden şifreniz uyuşmuyor.</div>'; $kayitDevam = false; }
	if(!filter_var($ggln_kullaniciEMail, FILTER_VALIDATE_EMAIL)){echo '<div class="msgError">Gerçersiz bir e-posta adresi.</div>'; $kayitDevam = false; }
	// KULLANICI ADI KONTROL EDILIYOR
	$sorgu_kullaniciVarMi = mysql_query("SELECT * FROM wp_users WHERE user_login='$ggln_kullaniciAdi'");
	if(mysql_num_rows($sorgu_kullaniciVarMi) > 0){echo '<div class="msgError">Bu kullanıcı adı [<strong>'.$ggln_kullaniciAdi.'</strong>] başka bir kullanıcı tarafından kullanılmış.</div>'; $kayitDevam = false;}

	// KULLANICI EMAIL KONTROL EDILIYOR
	$sorgu_kullaniciVarMi = mysql_query("SELECT * FROM wp_users WHERE user_email='$ggln_kullaniciEMail'");
	if(mysql_num_rows($sorgu_kullaniciVarMi) > 0){echo '<div class="msgError">Bu e-mail adresi [<strong>'.$ggln_kullaniciEMail.'</strong>] başka bir kullanıcı tarafından kullanılmış.</div>'; $kayitDevam = false;}
	
	$ggln_kullaniciSifre = wp_hash_password($ggln_kullaniciSifre);
	if($kayitDevam == true)
	{
		$kayitTarihi = date("Y-m-d H:i:s");
		mysql_query("INSERT INTO wp_users (user_login,user_pass,user_nicename,user_email,user_registered,user_status,display_name) 
		VALUES
		('$ggln_kullaniciAdi','$ggln_kullaniciSifre','$ggln_kullaniciAdi','$ggln_kullaniciEMail','$kayitTarihi','0','$ggln_kullaniciAdi')");
		if(mysql_affected_rows() > 0){echo '<div class="msgSuccess"><span style="color: #ff0000;">Kayıt işlemi başarılı. Şimdi üst kısımdan üye girişi yaparak üye panelinize ulaşabilirsiniz.</span></div>';	}
		else{echo '<div class="mesajKutusuHata">Bilinmeyen bir hata gerçekleşti.</div>'; echo mysql_error(); }
		$sonEklenenKullaniciID = mysql_insert_id();
		
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','first_name','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','last_name','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','nickname','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','description','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','wp_capabilities','a:1:{s:10:\"subscriber\";s:1:\"1\";}')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','show_admin_bar_front','false')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','show_admin_bar_admin','false')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','rich_editing','true')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','admin_color','fresh')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','use_ssl','0')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','jabber','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','yim','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','aim','')");
		mysql_query("INSERT INTO wp_usermeta (user_id,meta_key,meta_value) VALUES ('$sonEklenenKullaniciID','wp_user_level','0')");
		$formGoster = false;
	}
}
if($formGoster == true)
{
	
	if(!is_user_logged_in()){
?>
  <form name="formUyeKayit" id="formUyeKayit" action="" method="POST">
    <div class="msgSuccess"><span style="color: #ff0000;">Kullanıcı Adı</span></div>
    <input type="text" name="textboxKullaniciAdi" id="textboxKullaniciAdi" value="" class="cls-input" />
    <div class="temizle"></div>
    <div class="msgSuccess"><span style="color: #ff0000;">Şifre</span></div>
    <input type="password" name="textboxSifre" id="textboxSifre" value="" class="cls-input" />
    <div class="temizle"></div>
    <div class="msgSuccess"><span style="color: #ff0000;">Şifre Tekrar</span></div>
    <input type="password" name="textboxSifreTekrar" id="textboxSifreTekrar" value="" class="cls-input" />
    <div class="temizle"></div>
    <div class="msgSuccess"><span style="color: #ff0000;">E-Posta</span></div>
    <input type="text" name="textboxEPosta" id="textboxEPosta" value="" class="cls-input" />
    <div class="temizle"></div>
    <input type="submit" name="buttonKayitOl" value="Üye Ol" />
  </form>
  <?php
	}
	else
	{echo '<p><span style="color: #00ffff;"><strong>Şu anda oturum açmış bulunuyorsunuz.</strong></span></p>';
	$uyeID = get_current_user_id(); }
}
?>
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
