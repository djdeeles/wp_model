<?php get_header(); ?>

<div class="solkisim">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="yazilar">
    <div class="has4">
      <h2 class="baslik">
        <?php the_title(); ?>
      </h2>
      <div class="domestos"></div>
    </div>
    <div class="ana-tam">
      <div class="tiii">
        <?php the_content();?>
      </div>
    </div>
  </div>
  <?php endwhile; else: ?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
