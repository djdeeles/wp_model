<div class="aciklama">
  <div class="bilgibaslik2">Bilgiler</div>
  <div class="sayacbaslik">
    <?php if(function_exists('the_views')) { the_views(); } ?>
    kez görüntülendi.</div>
  <div class="ustkutu">
    <div class="sehirkutu"><a><strong>Şehir : </strong></a><?php echo get_post_meta($post->ID, "sehir", true); ?></div>
    <div class="semtkutu"><a><strong>Semt : </strong></a><?php echo get_post_meta($post->ID, "semt", true); ?></div>
    <div class="webkutu"><a href="<?php echo get_post_meta($post->ID, "webadresi", true); ?>">
      <center>
        <strong>Web Adresi</strong>
      </center>
      </a></div>
  </div>
  <div class="ustkutu">
    <div class="telkutu"><a><strong>Telefon : </strong></a><?php echo get_post_meta($post->ID, "telefon", true); ?></div>
    <div class="egitimkutu"><a><strong>Eğitim : </strong></a><?php echo get_post_meta($post->ID, "egitim", true); ?></div>
    <div class="gorusmekutu"><a><strong>Görüşme : </strong></a><?php echo get_post_meta($post->ID, "gorusme", true); ?></div>
  </div>
  <div class="ortakutu">
    <div class="olcukutu"><a><strong>Yaş : </strong></a><?php echo get_post_meta($post->ID, "yas", true); ?></div>
    <div class="olcukutu"><a><strong>Boy : </strong></a><?php echo get_post_meta($post->ID, "boy", true); ?></div>
    <div class="olcukutu"><a><strong>Kilo : </strong></a><?php echo get_post_meta($post->ID, "kilo", true); ?></div>
  </div>
  <div class="ortakutu">
    <div class="olcukutu"><a><strong>Göğüs : </strong></a><?php echo get_post_meta($post->ID, "gogus", true); ?></div>
    <div class="olcukutu"><a><strong>Bel : </strong></a><?php echo get_post_meta($post->ID, "bel", true); ?></div>
    <div class="olcukutu"><a><strong>Kalça : </strong></a><?php echo get_post_meta($post->ID, "kalca", true); ?></div>
  </div>
  <div class="buyukkutu">
    <div class="ufakkutu"><a><strong>Ten Rengi : </strong></a><?php echo get_post_meta($post->ID, "tenrengi", true); ?></div>
    <div class="ufakkutu"><a><strong>Saç Rengi : </strong></a><?php echo get_post_meta($post->ID, "sacrengi", true); ?></div>
    <div class="ufakkutu"><a><strong>Göz Rengi : </strong></a><?php echo get_post_meta($post->ID, "gozrengi", true); ?></div>
  </div>
  <div class="ucretkutu">
    <div class="ucretbilgi"><a><strong>Ücret</strong></a>
      <div class="tarife"><a><strong>1 Saat : </strong></a><?php echo get_post_meta($post->ID, "ucretsaat", true); ?></div>
      <div class="tarife"><a><strong>1 Gece : </strong></a><?php echo get_post_meta($post->ID, "ucretgece", true); ?></div>
    </div>
  </div>
</div>
