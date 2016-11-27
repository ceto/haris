<article <?php post_class('row ps ps--narrow'); ?>>
  <div class="columns tablet-3">
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <div class="columns tablet-9">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>