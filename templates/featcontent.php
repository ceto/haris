<article <?php post_class('hentry--inarchive hentry--leader row ps ps--notop'); ?>>
  <div class="columns">
    <header class="hentry__header">
      <h2 class="hentry__title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <div class="hentry__meta">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="hentry__summary lead">
      <?php the_excerpt(); ?>
      <a class="readmore" href="<?php the_permalink(); ?>"><?= __('Tovább a részletekre', 'haris') ?></a>
    </div>
  </div>
</article>