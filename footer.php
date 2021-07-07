<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <?php wp_nav_menu([
                    'theme_location' => 'bottom_menu',
                    'container' => 'nav',
                    'container_class' => 'footer__nav nav',
                    'menu_class' => 'nav__list',
                    'menu_id' => '',
                ]); ?>
                <a href="<?php echo home_url();  ?>"><img class="logo" src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="">
                </a>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>