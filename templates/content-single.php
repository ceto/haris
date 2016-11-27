<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('ps'); ?>>
    <?php get_template_part('templates/post','header'); ?>
    <div class="row">
      <div class="columns tablet-3">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
      <div class="columns tablet-9 large-9">
        <?php if (has_post_thumbnail() ) :?>
          <figure class="pageheader__fig">
            <?php the_post_thumbnail( $size, $attr ); ?>
          </figure>
        <?php endif; ?>
        <div class="entry-content">
          <?php the_content('', true); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'haris'), 'after' => '</p></nav>']); ?>
        </footer>
      </div>
    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
