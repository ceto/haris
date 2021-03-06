<aside class="siteinfo ps ps--dark ps--nobottom">
    <div class="row">
        <div class="columns xlarge-6">
            <svg class="icon"><use xlink:href="#icon-hp_haris_park"></use></svg>
        </div>
        <div class="columns xlarge-6">
            <?php dynamic_sidebar('sidebar-footer'); ?>
            <?php if (!is_user_logged_in()) : ?>
            <p><a class="button tiny success" href="<?= wp_registration_url();  ?>">
                <?= __('Register','haris')  ?>
            </a></p>
            <?php endif; ?>
        </div>
    </div>
</aside>
<footer class="sitefooter ps ps--dark ps--narrow">
    <div class="row wow fadeInUp">
        <div class="columns large-6 large-push-6">
            <ul class="sitefooter__socials">
                <li>
                    <a href="https://www.facebook.com/harisparkbudapest" target="_blank" title="Facebook"><svg class="icon"><use xlink:href="#icon-facebook"></use></svg></a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/harispark_bp/" target="_blank" title="Pinterest"><svg class="icon"><use xlink:href="#icon-pinterest"></use></svg></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/harispark_bp/" target="_blank" title="Instagram"><svg class="icon"><use xlink:href="#icon-instagram"></use></svg></a>
                </li>
            </ul>
        </div>
        <div class="columns large-6 large-pull-6">
            <?= __('&copy; 2016 All rights reserved &middot; Haris Park Kft. &middot; Site by <a href="http://hydrogene.hu" target="_blank">Hydrogene</a>','haris')  ?>
        </div>
    </div>
</footer>