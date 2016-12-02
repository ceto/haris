<!-- <?php get_template_part('templates/page', 'header'); ?> -->
<?php if (!have_posts()) : ?>
<div class="row ps">
  <div class="columns tablet-6 medium-centered">
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'haris'); ?>
    </div>
    <?php get_search_form(); ?>
  </div>
</div>
<?php else: ?>
  <section class="ps">
    <?php $i=0; while (have_posts()) : the_post(); ?>
      <?php
          if (is_home() && ($i++==0)) {
              get_template_part('templates/featcontent', get_post_type() != 'post' ? get_post_type() : get_post_format());
          } else {
              get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
          }
      ?>
    <?php endwhile; ?>
    <?php the_posts_navigation(); ?>
  </section>
<?php endif; ?>