<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>合同会社オントロジー・blog</title>
    <meta name="description" content="合同会社オントロジーのホームページ">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/style.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/blogdetail.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <a class="header-logo" href="./index.html">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/common/logo-header.png" alt="会社ロゴ">
            </a>
            <button class="toggle-menu-button"></button>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
                        </li>
                        <li><a href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/about.html">私たちについて</a></li>
                        <li><a href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/contact.html">ご質問・ご相談</a></li>
                        <li><a href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/access.html">アクセス</a></li>
                        <li><a href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/blog">ブログ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="title">
            <h1>blog</h1>
            <p>有益な情報を随時発信します。</p>
        </div>
        <div class="detail">
            <h2><?php the_title(); ?></h2>
            <div class="detail-config">
                <div class="detail-config-tag">
                    <a href="">
                        <?php the_category(' '); ?>
                    </a>
                </div>
                <a class="detail-config-time" href="">
                    <?php the_time('Y-m-d'); ?>
                </a>
            </div>
            <div class="detail-content">
                <?php the_content(); ?>
            </div>
        </div>





    </main>
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