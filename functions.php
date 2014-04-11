<?php

function register_my_menus() {
	register_nav_menus(
		array(
			'ust-menu' => __( 'Üst Menü' ), 'tab1' => __( '1. Tab Kısmı' ),
			'tab2' => __( '2. Tab Kısmı' ), 'tab3' => __( '3. Tab Kısmı' ),'alt-menu' => __( 'Alt Menü' )
			
			)
		);
}
add_action( 'init', 'register_my_menus' ); 
add_theme_support( 'post-thumbnails' );


if (file_exists(TEMPLATEPATH.'/temapaneli.php')) include_once("temapaneli.php");
//index yazı başlık uzun ayarı
function yeni_uzunluk($kelime) {
	return 42;
}
add_filter('excerpt_length', 'yeni_uzunluk');

function yeni_devam($devam) {
	return '...';
}
add_filter('excerpt_more', 'yeni_devam');

//Başlık Kısaltma.
function baslik() {
	$baslik = get_the_title();
	if(strlen($baslik)> 22) {
		$baslik = mb_substr($baslik, 0, 22) . '..';
	}
	echo $baslik;
}

//kısaltma
function kisalt($text) {
	if(strlen($text)> 22) {
		$text = mb_substr($text, 0, 22) . '..';
	}
	return $text;
}

//Yazı Panelindeki Detaylar.
function paneli_ekle() {
	global $post;
	
	$resim = get_post_meta($post->ID, 'resim', true);
	$isim = get_post_meta($post->ID, 'isim', true);
	$sehir = get_post_meta($post->ID, 'sehir', true);
	$semt = get_post_meta($post->ID, 'semt', true);
	$gorusme = get_post_meta($post->ID, 'gorusme', true);
	$egitim = get_post_meta($post->ID, 'egitim', true);
	$telefon = get_post_meta($post->ID, 'telefon', true);
	$webadresi = get_post_meta($post->ID, 'webadresi', true);
	$yas = get_post_meta($post->ID, 'yas', true);
	$boy = get_post_meta($post->ID, 'boy', true);
	$kilo = get_post_meta($post->ID, 'kilo', true);
	$gogus = get_post_meta($post->ID, 'gogus', true);
	$bel = get_post_meta($post->ID, 'bel', true);
	$kalca = get_post_meta($post->ID, 'kalca', true);
	$tenrengi = get_post_meta($post->ID, 'tenrengi', true);
	$sacrengi = get_post_meta($post->ID, 'sacrengi', true);
	$gozrengi = get_post_meta($post->ID, 'gozrengi', true);
	$ucretsaat = get_post_meta($post->ID, 'ucretsaat', true);
	$ucretgece = get_post_meta($post->ID, 'ucretgece', true);
	$sira = get_post_meta($post->ID, 'sira', true);
	
// Mevcut değerler.
	
	if($resim == "") $resim = "";
	if($isim == "") $isim = "";
	if($sehir == "") $sehir = "";
	if($semt == "") $semt = "";
	if($gorusme == "") $gorusme = "";
	if($egitim == "") $egitim = "";
	if($telefon == "") $telefon = "";
	if($webadresi == "") $webadresi = "#";
	if($yas == "") $yas = "";
	if($boy == "") $boy = "";
	if($kilo == "") $kilo = "";
	if($gogus == "") $gogus = "";
	if($bel == "") $bel = "";
	if($kalca == "") $kalca = "";
	if($tenrengi == "") $tenrengi = "";
	if($sacrengi == "") $sacrengi = "";
	if($gozrengi == "") $gozrengi = "";
	if($ucretsaat == "") $ucretsaat = "";
	if($ucretgece == "") $ucretgece = "";
	if($sira == "") $sira = "0";
	
//Güvenlik değeri
	echo'<input type="hidden" name="panelimiz_noncename" id="panelimiz_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
// Güvenlik bitiş.
	
//Yazı Paneli Tablosu
	echo' <div class="rmitem">
	
	<h2>İlan Kapak Resmi</h2>
	<input type="text" name="resim" value="'.$resim.'" /><br />
	<p><label for="resim">Yükle/Ekle Kısmını Kullanın.</label></p></div><div class="rmitem"><p>
	
	<h2>Escortun Ismi</h2>
	<input type="text" name="isim" value="'.$isim.'" /><br />
	<p><label for="isim">Ornek : Escort Yagmur</label></p></div><div class="rmitem"><p>

	</p><h2>Sıralama Değeri</h2>
	<input type="text" name="sira" value="'.$sira.'" /><br />
	<p><label for="sira">Örnek : 1</label></p></div><div class="rmitem"><p>
	
	</p><h2>Şehir</h2>
	<input type="text" name="sehir" value="'.$sehir.'" /><br />
	<p><label for="sehir">Örnek : İstanbul</label></p></div><div class="rmitem"><p>
	
	</p><h2>Semt</h2>
	<input type="text" name="semt" value="'.$semt.'" /><br />
	<p><label for="semt">Örnek : Bahçelievler</label></p></div><div class="rmitem"><p>
	
	</p><h2>Görüşme Yeri</h2>
	<input type="text" name="gorusme" value="'.$gorusme.'" /><br />
	<p><label for="gorusme">Örnek : Otel ya da Ev</label></p></div><div class="rmitem"><p>
	
	</p><h2>Eğitim Durumu</h2>
	<input type="text" name="egitim" value="'.$egitim.'" /><br />
	<p><label for="egitim">Örnek : Lise</label></p></div><div class="rmitem"><p>
	
	</p><h2>Telefon Numarası</h2>
	<input type="text" name="telefon" value="'.$telefon.'" /><br />
	<p><label for="telefon">Örnek : 05XX XXXXXXX</label></p></div><div class="rmitem"><p>
	
	<p></p><h2>Web Adresi</h2>
	<input type="text" name="webadresi" value="'.$webadresi.'" /><br />
	<p><label for="webadresi">Web Adresi Girin</label></p></div><div class="rmitem"><p>
	
	</p><h2>Yaş</h2>
	<input type="text" name="yas" value="'.$yas.'" /><br />
	<p><label for="yas4">Örnek : 24</label></p></div><div class="rmitem"><p>
	
	</p><h2>Boy</h2>
	<input type="text" name="boy" value="'.$boy.'" /><br />
	<p><label for="boy">Örnek : 174</label></p></div><div class="rmitem"><p>
	
	</p><h2>Kilo</h2>
	<input type="text" name="kilo" value="'.$kilo.'" /><br />
	<p><label for="kilo">Örnek : 53</label></p></div><div class="rmitem"><p>
	
	</p><h2>Göğüs</h2>
	<input type="text" name="gogus" value="'.$gogus.'" /><br />
	<p><label for="gogus">Örnek : 90</label></p></div><div class="rmitem"><p>
	
	</p><h2>Bel</h2>
	<input type="text" name="bel" value="'.$bel.'" /><br />
	<p><label for="bel">Örnek : 60</label></p></div><div class="rmitem"><p>
	
	</p><h2>Kalça</h2>
	<input type="text" name="kalca" value="'.$kalca.'" /><br />
	<p><label for="kalca">Örnek : 90</label></p></div><div class="rmitem"><p>
	
	</p><h2>Ten Rengi</h2>
	<input type="text" name="tenrengi" value="'.$tenrengi.'" /><br />
	<p><label for="tenrengi">Örnek : Esmer</label></p></div><div class="rmitem"><p>
	
	</p><h2>Saç Rengi</h2>
	<input type="text" name="sacrengi" value="'.$sacrengi.'" /><br />
	<p><label for="sacrengi">Örnek : Siyah</label></p></div><div class="rmitem"><p>
	
	</p><h2>Göz Rengi</h2>
	<input type="text" name="gozrengi" value="'.$gozrengi.'" /><br />
	<p><label for="gozrengi">Örnek : Ela</label></p></div><div class="rmitem"><p>
	
	</p><h2>Saat Ücreti</h2>
	<input type="text" name="ucretsaat" value="'.$ucretsaat.'" /><br />
	<p><label for="ucretsaat">Örnek : 150</label></p></div><div class="rmitem"><p>
	
	</p><h2>Gecelik Ücret</h2>
	<input type="text" name="ucretgece" value="'.$ucretgece.'" /><br />
	<p><label for="ucretgece">Örnek : 300</label></p></div>';	
}

function paneli_yarat() {
	if ( function_exists('add_meta_box') ) {
		add_meta_box( 'panelimiz', 'İlan Detayları', 'paneli_ekle', 'post', 'normal', 'high' );
	}
}
add_action('admin_menu', 'paneli_yarat');

function verileri_kaydet( $post_id ) {
	global $post;
//Güvenlik kontrolü
	if ( !wp_verify_nonce( $_POST['panelimiz_noncename'], plugin_basename(__FILE__) )) {
		return $post_id;
	}
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ))
			return $post_id;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ))
			return $post_id;
	}
//Kullanıcının yetkisi kontrolu
	
	$resim = $_POST['resim'];
	$isim = $_POST['isim'];
	$sehir = $_POST['sehir'];
	$semt = $_POST['semt'];
	$gorusme = $_POST['gorusme'];
	$egitim = $_POST['egitim'];
	$telefon = $_POST['telefon'];
	$webadresi = $_POST['webadresi'];
	$yas = $_POST['yas'];
	$boy = $_POST['boy'];
	$kilo = $_POST['kilo'];
	$gogus = $_POST['gogus'];
	$bel = $_POST['bel'];
	$kalca = $_POST['kalca'];
	$tenrengi = $_POST['tenrengi'];
	$sacrengi = $_POST['sacrengi'];
	$gozrengi = $_POST['gozrengi'];
	$ucretsaat = $_POST['ucretsaat'];
	$ucretgece = $_POST['ucretgece'];
	$sira = $_POST['sira'];
	
//Panele girilen değerler
	
	if(get_post_meta($post_id, 'resim') == "")
		add_post_meta($post_id, 'resim', $resim, true);
	elseif($resim != get_post_meta($post_id, 'resim', true))
		update_post_meta($post_id, 'resim', $resim);
	elseif($resim == "")
		delete_post_meta($post_id, 'resim', get_post_meta($post_id, 'resim', true));
	
	if(get_post_meta($post_id, 'isim') == "")
		add_post_meta($post_id, 'isim', $isim, true);
	elseif($isim != get_post_meta($post_id, 'isim', true))
		update_post_meta($post_id, 'isim', $isim);
	elseif($isim == "")
		delete_post_meta($post_id, 'isim', get_post_meta($post_id, 'isim', true));
	
	if(get_post_meta($post_id, 'sehir') == "")
		add_post_meta($post_id, 'sehir', $sehir, true);
	elseif($sehir != get_post_meta($post_id, 'sehir', true))
		update_post_meta($post_id, 'sehir', $sehir);
	elseif($sehir == "")
		delete_post_meta($post_id, 'sehir', get_post_meta($post_id, 'sehir', true));
	
	if(get_post_meta($post_id, 'semt') == "")
		add_post_meta($post_id, 'semt', $semt, true);
	elseif($semt != get_post_meta($post_id, 'semt', true))
		update_post_meta($post_id, 'semt', $semt);
	elseif($semt == "")
		delete_post_meta($post_id, 'semt', get_post_meta($post_id, 'semt', true));
	
	if(get_post_meta($post_id, 'gorusme') == "")
		add_post_meta($post_id, 'gorusme', $gorusme, true);
	elseif($gorusme != get_post_meta($post_id, 'gorusme', true))
		update_post_meta($post_id, 'gorusme', $gorusme);
	elseif($gorusme == "")
		delete_post_meta($post_id, 'gorusme', get_post_meta($post_id, 'gorusme', true));
	
	if(get_post_meta($post_id, 'egitim') == "")
		add_post_meta($post_id, 'egitim', $egitim, true);
	elseif($egitim != get_post_meta($post_id, 'egitim', true))
		update_post_meta($post_id, 'egitim', $egitim);
	elseif($egitim == "")
		delete_post_meta($post_id, 'egitim', get_post_meta($post_id, 'egitim', true));
	
	if(get_post_meta($post_id, 'telefon') == "")
		add_post_meta($post_id, 'telefon', $telefon, true);
	elseif($telefon != get_post_meta($post_id, 'telefon', true))
		update_post_meta($post_id, 'telefon', $telefon);
	elseif($telefon == "")
		delete_post_meta($post_id, 'telefon', get_post_meta($post_id, 'telefon', true));
	
	if(get_post_meta($post_id, 'webadresi') == "")
		add_post_meta($post_id, 'webadresi', $webadresi, true);
	elseif($webadresi != get_post_meta($post_id, 'webadresi', true))
		update_post_meta($post_id, 'webadresi', $webadresi);
	elseif($webadresi == "")
		delete_post_meta($post_id, 'webadresi', get_post_meta($post_id, 'webadresi', true));
	
	if(get_post_meta($post_id, 'yas') == "")
		add_post_meta($post_id, 'yas', $yas, true);
	elseif($yas != get_post_meta($post_id, 'yas', true))
		update_post_meta($post_id, 'yas', $yas);
	elseif($yas == "")
		delete_post_meta($post_id, 'yas', get_post_meta($post_id, 'yas', true));
	
	if(get_post_meta($post_id, 'boy') == "")
		add_post_meta($post_id, 'boy', $boy, true);
	elseif($boy != get_post_meta($post_id, 'boy', true))
		update_post_meta($post_id, 'boy', $boy);
	elseif($boy == "")
		delete_post_meta($post_id, 'boy', get_post_meta($post_id, 'boy', true));
	
	if(get_post_meta($post_id, 'kilo') == "")
		add_post_meta($post_id, 'kilo', $kilo, true);
	elseif($kilo != get_post_meta($post_id, 'kilo', true))
		update_post_meta($post_id, 'kilo', $kilo);
	elseif($kilo == "")
		delete_post_meta($post_id, 'kilo', get_post_meta($post_id, 'kilo', true));
	
	if(get_post_meta($post_id, 'gogus') == "")
		add_post_meta($post_id, 'gogus', $gogus, true);
	elseif($gogus != get_post_meta($post_id, 'gogus', true))
		update_post_meta($post_id, 'gogus', $gogus);
	elseif($gogus == "")
		delete_post_meta($post_id, 'gogus', get_post_meta($post_id, 'gogus', true));
	
	if(get_post_meta($post_id, 'bel') == "")
		add_post_meta($post_id, 'bel', $bel, true);
	elseif($bel != get_post_meta($post_id, 'bel', true))
		update_post_meta($post_id, 'bel', $bel);
	elseif($bel == "")
		delete_post_meta($post_id, 'bel', get_post_meta($post_id, 'bel', true));
	
	if(get_post_meta($post_id, 'kalca') == "")
		add_post_meta($post_id, 'kalca', $kalca, true);
	elseif($kalca != get_post_meta($post_id, 'kalca', true))
		update_post_meta($post_id, 'kalca', $kalca);
	elseif($kalca == "")
		delete_post_meta($post_id, 'kalca', get_post_meta($post_id, 'kalca', true));
	
	if(get_post_meta($post_id, 'tenrengi') == "")
		add_post_meta($post_id, 'tenrengi', $tenrengi, true);
	elseif($tenrengi != get_post_meta($post_id, 'tenrengi', true))
		update_post_meta($post_id, 'tenrengi', $tenrengi);
	elseif($tenrengi == "")
		delete_post_meta($post_id, 'tenrengi', get_post_meta($post_id, 'tenrengi', true));
	
	if(get_post_meta($post_id, 'sacrengi') == "")
		add_post_meta($post_id, 'sacrengi', $sacrengi, true);
	elseif($sacrengi != get_post_meta($post_id, 'sacrengi', true))
		update_post_meta($post_id, 'sacrengi', $sacrengi);
	elseif($sacrengi == "")
		delete_post_meta($post_id, 'sacrengi', get_post_meta($post_id, 'sacrengi', true));
	
	if(get_post_meta($post_id, 'gozrengi') == "")
		add_post_meta($post_id, 'gozrengi', $gozrengi, true);
	elseif($gozrengi != get_post_meta($post_id, 'gozrengi', true))
		update_post_meta($post_id, 'gozrengi', $gozrengi);
	elseif($gozrengi == "")
		delete_post_meta($post_id, 'gozrengi', get_post_meta($post_id, 'gozrengi', true));
	
	if(get_post_meta($post_id, 'ucretsaat') == "")
		add_post_meta($post_id, 'ucretsaat', $ucretsaat, true);
	elseif($ucretsaat != get_post_meta($post_id, 'ucretsaat', true))
		update_post_meta($post_id, 'ucretsaat', $ucretsaat);
	elseif($ucretsaat == "")
		delete_post_meta($post_id, 'ucretsaat', get_post_meta($post_id, 'ucretsaat', true));
	
	if(get_post_meta($post_id, 'ucretgece') == "")
		add_post_meta($post_id, 'ucretgece', $ucretgece, true);
	elseif($ucretgece != get_post_meta($post_id, 'ucretgece', true))
		update_post_meta($post_id, 'ucretgece', $ucretgece);
	elseif($ucretgece == "")
		delete_post_meta($post_id, 'ucretgece', get_post_meta($post_id, 'ucretgece', true));
	
	if(get_post_meta($post_id, 'sira') == "")
		add_post_meta($post_id, 'sira', $sira, true);
	elseif($sira != get_post_meta($post_id, 'sira', true))
		update_post_meta($post_id, 'sira', $sira);
	elseif($sira == "")
		delete_post_meta($post_id, 'sira', get_post_meta($post_id, 'sira', true));
	
//Verilerin daha önceden olup olmadığı kontrol ediliyor
}
add_action('save_post', 'verileri_kaydet');

//Kayıt tamamlandı.

//etiketleri küçültme ıvır zıvır
function orz_tag_cloud_filter($args = array()) {
	$args['smallest'] = 12;
	$args['largest'] = 14;
	$args['unit'] = 'px';
	return $args;
}
add_filter('widget_tag_cloud_args', 'orz_tag_cloud_filter', 90); 


function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)."...";
	echo $excerpt;
}
function content($num) {
	$theContent = get_the_content();
	$output = preg_replace('/<img[^>]+./','', $theContent);
	$limit = $num+1;
	$content = explode(' ', $output, $limit);
	array_pop($content);
	$content = implode(" ",$content)."...";
	echo $content;
}
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'before_widget' => '<div class="yanmenu"><ul><li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li></ul></div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
}

function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; 
	echo get_avatar($comment,$size='100' ); ?>

	<div class="yorum-liste">
		<p class="yorum-yazar"><?php printf(__('<cite>%s</cite>'), get_comment_author_link()) ?><small>
			<?php comment_date('M d, Y'); 
			edit_comment_link('Düzenle',' [',']'); ?>
		</small></p>
		<div class="yorum-icerik" id="comment-<?php comment_ID() ?>">
			<?php comment_text(); 
			if ($comment->comment_approved == '0') : ?>
				<span><b>
					<?php _e('Yorumunuz onaylandıktan sonra yayımlanacaktır.') ?>
				</b></span>
			<?php endif; ?>
			<span class="yanit">
				<?php comment_reply_link(array_merge( $args, array('add_below' => 'yorum-icerik', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</span></div>
		</div>
<?php } ?>
