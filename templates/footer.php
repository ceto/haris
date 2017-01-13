<aside class="siteinfo ps ps--dark ps--nobottom">
    <div class="row">
        <div class="columns xlarge-6">
            <svg class="icon"><use xlink:href="#icon-hp_haris_park"></use></svg>
        </div>
        <div class="columns xlarge-6">

            <?php dynamic_sidebar('sidebar-footer'); ?>
            <?php if (!is_user_logged_in()) : ?>
            <p><a class="button small" href="<?= wp_registration_url();  ?>">
                <?= __('Register','haris')  ?>
            </a></p>
            <?php endif; ?>
        </div>
    </div>
</aside>
<footer class="sitefooter ps ps--dark ps--narrow">
    <div class="row wow fadeInUp">
        <div class="columns">
            <?= __('&copy; 2016 All rights reserved &middot; Haris Park Kft. &middot; Site by <a href="http://hydrogene.hu" target="_blank">Hydrogene</a>','haris')  ?>
        </div>
    </div>
</footer>