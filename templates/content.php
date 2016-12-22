<article <?php post_class('hentry--inarchive ps ps--narrow'); ?>>
  <div class="row">
    <header class="hentry__header columns">
      <div class="row">
        <div class="columns tablet-9 xlarge-8 tablet-push-3 xlarge-push-2">
          <h2 class="hentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="columns tablet-3 xlarge-2 tablet-pull-9 xlarge-pull-10">
          <div class="hentry__meta">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="row">
    <div class="columns tablet-9 xlarge-8 tablet-push-3 xlarge-push-2">
      <div class="hentry__summary">
        <?php the_excerpt(); ?>
        <a class="readmore" href="<?php the_permalink(); ?>"><?= __('Tovább a részletekre', 'haris') ?></a>
      </div>
    </div>
  </div>
</article>