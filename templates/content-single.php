<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('hentry--single ps'); ?>>
  <div class="row">
    <div class="columns">
      <?php get_template_part('templates/post','header'); ?>
    </div>
  </div>
  <div class="row ps">
    <div class="columns tablet-9 tablet-push-3 xlarge-8 xlarge-push-2">
      <?php if (has_post_thumbnail() ) :?>
      <figure class="hentry__featimg">
        <?php the_post_thumbnail( $size, $attr ); ?>
      </figure>
      <?php endif; ?>
      <div class="hentry__content content">
        <?php the_content('', true); ?>
      </div>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'haris'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php //comments_template('/templates/comments.php'); ?>
    </div>
  </div>
</article>
<?php endwhile; ?>