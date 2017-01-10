<?php use Roots\Sage\Titles; ?>
<section class="hero hero--narrow">
  <?php if (is_page() && has_post_thumbnail() ): ?>
    <?php the_post_thumbnail(large); ?>
  <?php else : ?>
  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <?php endif; ?>
  <div class="hero__content">
    <div class="row">
      <div class="columns">
        <?php if (is_page() ): ?>
          <h2 class="hero__maintext"><?= get_post_meta($post->ID, 'subtitle', true ); ?></h2>
        <?php elseif (!is_single()) : ?>
          <h2 class="hero__maintext"><?= Titles\title(); ?></h2>
        <?php else: ?>
          <h2 class="hero__maintext">
            <a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>">
              <?= __('News', 'haris');  ?>
            </a>
          </h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>