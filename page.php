<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'hero'); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="row content ps ps--notop">
      <div class="columns tablet-9 tablet-push-3 xlarge-8 xlarge-push-2">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
<?php endwhile; ?>
