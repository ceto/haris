<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="row ps">
      <div class="columns medium-10 large-8 medium-push-2">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
<?php endwhile; ?>
