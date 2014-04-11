<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Lütfen bu sayfayı direkt yüklemeyin. Teşekkürler!');

	if ( post_password_required() ) { ?>

<p class="nocomments">Bu yazı parola korumalı.</p>
<?php
return;
}
?>
<?php if ( comments_open() ) : ?>
<?php else : ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<p class="yorum-yazmak-istermisin">Yorumlar:</p>
<div class="yorumsayi">
  <?php comments_number('Hiç Yorum Yapılmamış!', '1 Yorum Yapılmış!', '% Yorum Yapılmış!' ); ?>
</div>
<div id="comments" class="yorum">
  <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
</div>
<p class="yorum-yazmak-istermisin">Yorum yapmak ister misiniz?</p>
<div id="respond" class="yorumyaz">
  <div class="cancel-comment-reply"><small>
    <?php cancel_comment_reply_link(); ?>
    </small></div>
  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  <p>Yorum yapabilmek için <a href="<?php echo wp_login_url( get_permalink() ); ?>">giriş</a> yapmalısınız.</p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="yorumformu">
    <?php if ( is_user_logged_in() ) : ?>
    <p style="margin-top:10px;margin-bottom:10px;"><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yaptınız. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Çıkış yap"><small>Çıkış yap &raquo;</small></a></p>
    <?php else : ?>
    <div style="width:460px;float:left;">
      <div style="width:168px;float:left;"> <span class="ballon" id="rand" onmouseover="tooltip.show('Adınız, Soyadınız (*)');" onmouseout="tooltip.hide();">
        <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1"  />
        </span><span class="ballon" id="rand1" onmouseover="tooltip.show('E-posta Adresiniz (*)');" onmouseout="tooltip.hide();">
        <input class="mail" type="text" value="<?php echo esc_attr($comment_author_email); ?>" name="email" id="email" size="22" tabindex="2" />
        </span> <span class="ballon" id="rand2" onmouseover="tooltip.show('Web Siteniz (varsa)');" onmouseout="tooltip.hide();">
        <input class="url" type="text" value="<?php echo esc_attr($comment_author_url); ?>" name="url" id="url" size="22" tabindex="3" />
        </span> </div>
      <div class="yorum-paneli">
        <div style="width:285px;float:left;"> <span class="ballon" id="rand3" onmouseover="tooltip.show('Yorumunuz (*)');" onmouseout="tooltip.hide();">
          <textarea name="comment" id="comment" cols="100%" rows="100%"></textarea>
          </span></div>
      </div>
    </div>
    <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="" />
      <?php comment_id_fields(); ?>
    </p>
    <?php do_action('comment_form', $post->ID); ?>
    <?php endif; ?>
    <?php if ( is_user_logged_in() ) : ?>
    <div class="admin-yorum">
      <textarea name="comment" id="comment" cols="100%" rows="100%"></textarea>
    </div>
    <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="" />
      <?php comment_id_fields(); ?>
    </p>
    <?php do_action('comment_form', $post->ID); ?>
    <?php endif;?>
  </form>
  <?php endif;?>
</div>
<?php endif;?>
