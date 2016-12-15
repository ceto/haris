<div data-sticky-container>
  <header class="top-bar" data-sticky data-sticky-on="small" data-margin-top="0" data-top-anchor="90">
    <div class="row">
      <div class="columns">
        <div class="top-bar-title">
          <a class="homelogo" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
            <svg class="homelogo__img" alt="<?php bloginfo('name'); ?>"><use xlink:href="#icon-hp"></use></svg>
          </a>
          <span class="csiki" data-responsive-toggle="responsive-menu" data-hide-for="tablet">
            <button class="menu-icon" type="button" data-toggle></button>
          </span>
        </div>
        <div id="responsive-menu" class="responsive-menu">
          <nav class="top-bar-right primarynav"
            <?php if (is_page_template('tmpl-home.php' )): ?>
            data-magellan data-threshold="0" data-bar-offset="90"
            <?php endif ?>
            >
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(  array(
            'theme_location' => 'primary_navigation',
            'menu_class' => 'menu menu--main',
            ));
            endif;
            ?>
          </nav>
        </div>
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
    </div>
  </header>
</div>