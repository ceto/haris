<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
<div class="row ps">
  <div class="columns tablet-6 medium-centered">
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'haris'); ?>
    </div>
    <?php get_search_form(); ?>
  </div>
</div>
<?php else:  ?>
  <section class="ps">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content'); ?>
    <?php endwhile; ?>
    <?php the_posts_navigation(); ?>
  </section>
<?php endif; ?>