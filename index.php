<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'haris'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>
<?php $i=0; while (have_posts()) : ?>
<?php the_post(); ?>
<?php
    if (is_home() && ($i++==0)) {
        get_template_part('templates/featcontent', get_post_type() != 'post' ? get_post_type() : get_post_format());
    } else {
        get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    }
?>
<?php endwhile; ?>
<?php the_posts_navigation(); ?>