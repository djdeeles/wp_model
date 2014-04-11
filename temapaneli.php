<?php

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/temapanel/temapanel.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/temapanel/rm_script.js", false, "1.0");

}

$panel_adi = "Site Ayarları";
$panel_kisa_adi = "Site Ayarları";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Kategori Seçiniz"); 

$options = array (
 
array( "name" => $panel_adi." Options",
	"type" => "title"),
 
// Genel Ayarlar Aç
array( "name" => "Genel Ayarlar",
	"type" => "section"),
array( "type" => "open"),
 
array( "name" => "Logo URL",
    "desc" => "Örnek : http://site.com/wp-content/themes/MyEscort/logo.jpg",
    "id" => "logo",
    "type" => "text",
    "std" => ""),

array( "name" => "Favicon",
	"desc" => "Favicon Adresini Giriniz.",
	"id" => "favicon",
	"type" => "text",
	"std" => ""),
		
array( "name" => "Footer (Alt Kısım)",
	"desc" => "En Alt Kısımda Görünecek Açıklamayı Girin Örnek Olarak : © Tüm Hakları Saklıdır - www.site.com ",
	"id" => "footers",
	"type" => "textarea",
	"std" => ""),
		
array( "name" => "Sayaç Kodunuz",
	"desc" => "Site Sayacı İçin Kullandığınız Kodu Giriniz",
	"id" => "sayac",
	"type" => "textarea",
	"std" => ""),

// Ayarları Kapat		
array( "type" => "close"),

// Sosyal Paylaşım Ayarlarını Aç
array( "name" => "Sosyal Paylaşım Ayarları",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Twitter Adresiniz",
	"desc" => "Twitter Adresinizi Yazınız.",
	"id" => "twitter",
	"type" => "text",
	"std" => "#"),
	
array( "name" => "Facebook Adresiniz",
	"desc" => "Facebook Adresinizi Yazınız.",
	"id" => "facebook",
	"type" => "text",
	"std" => "#"),

array( "name" => "Rss Adresiniz",
	"desc" => "Rss Adresini Girin.",
	"id" => "rss",
	"type" => "text",
	"std" => "#"),

// Ayarları Kapat		
array( "type" => "close"),

// Kategori ID Ayarları Aç
array( "name" => "Kategori ID Ayarları",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Platin İlanlar Kategori ID Numarası",
	"desc" => "Platin İlanlar Kategori ID Numarası Girin",
	"id" => "platin_kat",
	"type" => "text",
	"std" => ""),
	
array( "name" => "Gold İlanlar Kategori ID Numarası",
	"desc" => "Gold İlanlar Kategori ID Numarası Girin",
	"id" => "gold_kat",
	"type" => "text",
	"std" => ""),
	
array( "name" => "Silver İlanlar Kategori ID Numarası",
	"desc" => "Silver İlanlar Kategori ID Numarası Girin",
	"id" => "silver_kat",
	"type" => "text",
	"std" => ""),	
	
array( "name" => "Slider Kategori ID Numarası",
	"desc" => "Slider Kategori ID Numarası Girin",
	"id" => "slider_kat",
	"type" => "text",
	"std" => ""),

// Ayarları Kapat		
array( "type" => "close"),

// Ana Sayfa Ayarları Aç
array( "name" => "Ana Sayfa Ayarları",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "<strong>Ana Sayfa Platin İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz.",
    "id" => "platin_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Ana Sayfa Gold İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz.",
    "id" => "gold_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Ana Sayfa Silver İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz.",
    "id" => "silver_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),
	
array( "name" => "<strong>Ana Sayfa Slider İlanlarını Aç-Kapa</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz.",
    "id" => "slider_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

// Ayarları Kapat		
array( "type" => "close"),
	
// Sidebar Ayarları Aç
array( "name" => "Sidebar Ayarları",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "<strong>Sidebar Platin İlanlar Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "side_platin_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Sidebar Gold İlanlar Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "side_gold_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Sidebar Silver İlanlar Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "side_silver_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Sidebar Tablı Kategori Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz. Tab İsimlerini Diğer Menüden Giriniz.",
    "id" => "side_tab_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Sidebar Sosyal Paylaşım Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "sosyal_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>Sidebar Rastgele İlanlar Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "rastgele_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

// Ayarları Kapat	
array( "type" => "close"),

// Tablı Kategori Ayarları Aç
array( "name" => "Tablı Kategori Ayarları",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "1. Tab Kategori İsmi",
	"desc" => "1. Tab Kategori İsmini Yazınız",
	"id" => "tab1",
	"type" => "text",
	"std" => ""),
	
array( "name" => "2. Tab Kategori İsmi",
	"desc" => "2. Tab Kategori İsmini Yazınız",
	"id" => "tab2",
	"type" => "text",
	"std" => ""),
	
array( "name" => "3. Tab Kategori İsmi",
	"desc" => "3. Tab Kategori İsmini Yazınız",
	"id" => "tab3",
	"type" => "text",
	"std" => ""),

// Ayarları Kapat		
array( "type" => "close"),

// İlan Sayfası Ayarları Aç
array( "name" => "İlan Sayfası Ayarları",
"type" => "section"),
array( "type" => "open"),

array( "name" => "<strong>İlan Sayfasındaki Escort Bilgileri Alanını Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "ilan_bilgi_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>İlan Sayfasındaki Sosyal Paylaşım Alanını Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "ilan_sosyal_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>İlan Sayfasındaki Platin İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "ilan_platin_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>İlan Sayfasındaki Gold İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "ilan_gold_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

array( "name" => "<strong>İlan Sayfasındaki Silver İlanları Aç-Kapat</strong>",
    "desc" => "'Aç' ya da 'Kapat' Seçeneklerinden Birini Seçiniz",
    "id" => "ilan_silver_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),

// Ayarları Kapat		
array( "type" => "close"),

// Reklam Ayarları Aç
array( "name" => "Site İçi Reklam Ayarları",
"type" => "section"),
array( "type" => "open"),

array( "name" => "Üst Banner 728x90 Reklam Kodunuz",
	"desc" => "Üst tarafta gözükecek olan  728x90 reklam kodunuzu yazınız.",
	"id" => "ust_banner",
	"type" => "textarea",
	"std" => ""),
	
array( "name" => "<strong>Sidebar 300x250 Reklam Alanı</strong>",
    "desc" => "300x250 Reklam Kodunu Aşağıdaki Kutuya Giriniz",
    "id" => "sidebar_reklam_ac_kapat",
    "type" => "select",
    "options" => array("Aç", "Kapat"),
    "std" => ""),
 
array( "name" => "Sidebar 300x250 Reklam Kodu",
    "desc" => "300x250 Reklam Kodu Giriniz.",
    "id" => "sidebar_reklam_300x250",
    "type" => "textarea",
    "std" => ""),

// Ayarları Kapat
array( "type" => "close"),

// Ana Sayfa Gif Reklamları Ayarları Aç

array( "name" => "Gif Reklamları Ayarları",
	"type" => "section"),
array( "type" => "open"),

 
array( "name" => "<strong>1. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_1",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 1. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_1",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 1. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_1",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>2. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_2",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 2. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_2",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 2. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_2",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>3. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_3",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 3. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_3",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 3. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_3",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>4. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_4",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 4. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_4",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 4. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "4_anasayfa_url_180x300_4",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>5. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_5",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 5. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_5",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 5. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_5",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>6. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_6",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 6. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_6",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 6. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_6",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>7. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_7",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 7. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_7",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 1. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_7",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>8. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_8",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 8. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_8",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 8. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_8",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>9. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_9",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 9. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_9",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 9. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_9",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>10. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_10",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 10. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_10",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 10. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_10",
    "type" => "textarea",
    "std" => ""),	

array( "name" => "<strong>11. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_11",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 11. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_11",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 11. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_11",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>12. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_12",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 12. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_12",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 12. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_12",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>13. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_13",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 13. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_13",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 13. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_13",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>14. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_14",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 14. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_14",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 14. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_14",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>15. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_15",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 15. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_15",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 15. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_15",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>16. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_16",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 16. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_16",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 16. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_16",
    "type" => "textarea",
    "std" => ""),
	
array( "name" => "<strong>17. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_17",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 17. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_17",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 17. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_17",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>18. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_18",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 18. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_18",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 18. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_18",
    "type" => "textarea",
    "std" => ""),

array( "name" => "<strong>19. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_19",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 19. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_19",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 19. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_19",
    "type" => "textarea",
    "std" => ""),	

array( "name" => "<strong>20. Ana Sayfa 180x300 Gif Reklamı</strong>",
    "desc" => "Gif Reklamını AÇ/KAPAT",
    "id" => "anasayfa_ac_180x300_20",
    "type" => "select",
    "options" => array("Evet", "Hayır"),
    "std" => ""),
 
array( "name" => "Ana Sayfa 20. 180x300 Gif Resim Linki",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_resim_180x300_20",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Ana Sayfa 20. 180x300 Gif URL",
    "desc" => "180x300 Resim Linkini Giriniz.",
    "id" => "anasayfa_url_180x300_20",
    "type" => "textarea",
    "std" => ""),	

// Ayarları Kapat
array( "type" => "close"),

);

function mytheme_add_admin() {
 
global $panel_adi, $panel_kisa_adi, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=temapaneli.php&kayit=tamam");

} 

else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=temapaneli.php&reset=true");

}
}

add_menu_page($panel_adi, $panel_adi, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_admin() {
 
global $panel_adi, $panel_kisa_adi, $options;
$i=0;
 
?>

<div class="wrap rm_wrap">
<div class="enust">
  <h3><?php echo $panel_adi; ?></h3>
</div>
<div class="rm_opts">
<form method="post">
  <?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
  <?php break;
 
case "close":
?>
  </div>
  </div>
  <br />
  <?php break;
 
case "title":
?>
  <?php break;
 
case 'text':
?>
  <div class="rm_input rm_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
    <div class="aciklama"><?php echo $value['desc']; ?></div>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case 'textarea':
?>
  <div class="rm_input rm_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?>
</textarea>
    <div class="aciklama"><?php echo $value['desc']; ?></div>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case 'select':
?>
  <div class="rm_input rm_select">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
      <?php foreach ($value['options'] as $option) { ?>
      <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
      <?php } ?>
    </select>
    <div class="aciklama"><?php echo $value['desc']; ?></div>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case "checkbox":
?>
  <div class="rm_input rm_checkbox">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
    <div class="aciklama"><?php echo $value['desc']; ?></div>
    <div class="clearfix"></div>
  </div>
  <?php break; 
case "section":

$i++;

?>
  <div class="rm_section">
  <div class="rm_title">
    <h3><img src="<?php bloginfo('template_directory')?>/temapanel/resimler/asagi.png" class="inactive" alt="""> <?php echo $value['name']; ?></h3>
    <span class="submit">
    <input name="save<?php echo $i ?>" type="submit" value="Kaydet" />
    </span>
    <div class="clearfix"></div>
  </div>
  <div class="rm_options">
  <?php break;

}
}
?>
  <input type="hidden" name="action" value="save" />
</form>
</form>
</div>
<div class="clearfix"></div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
