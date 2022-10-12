<footer class="footer">
    <nav class="site-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
            )
        );
        ?>
    </nav>
    <a class="footer-logo" href="./index.html">
        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/common/logo-footer.png" alt="フッターロゴ">
    </a>
    <p class="footer-tel">電話番号</p>
    <p class="footer-time">営業時間</p>
    <p class="copyright"><small>&copy;オントロジー</small></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>