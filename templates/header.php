<div data-sticky-container>
  <header class="top-bar dark" data-sticky data-sticky-on="tablet" data-margin-top="0" data-top-anchor="180">
    <div class="row">
      <div class="columns">
        <div class="top-bar-title">
          <a class="homelogo" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
            <?php bloginfo('name'); ?>
          </a>
          <span class="csiki" data-responsive-toggle="responsive-menu" data-hide-for="tablet">
            <button class="menu-icon" type="button" data-toggle><!-- <?= __('Menu','haris')  ?> --></button>
          </span>
        </div>
        <div class="top-bar-userthings">
            <?php if (!is_user_logged_in()) : ?>
                <a class="button small" href="<?= wp_login_url();  ?>">
                  <?= __('Login','haris')  ?>
                </a>
            <?php else : ?>
                <a class="button small success" href="<?= wp_logout_url(); ?>">
                  <?= __('Logut','haris')  ?>
                </a>
            <?php endif; ?>
        </div>
        <div id="responsive-menu" class="responsive-menu">
          <nav class="top-bar-right primarynav">
            <?php
              if (has_nav_menu('primary_navigation')) {
                wp_nav_menu(  array(
                  'theme_location' => 'primary_navigation',
                  'menu_class' => 'menu menu--main',
                  )
                );
              }
            ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>