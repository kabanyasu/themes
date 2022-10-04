<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>合同会社オントロジー・blog</title>
    <meta name="description" content="合同会社オントロジーのホームページ">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/style.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/question.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <a class="header-logo" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/common/logo-header.png" alt="会社ロゴ">
            </a>
            <button class="toggle-menu-button"></button>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                            )
                        );
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="title">
            <h1><?php the_title(); ?></h1>
            <p>お気軽にご質問・ご相談ください</p>

        </div>
        <div class="question-form">
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="question-form-text">
                <?php the_content(); ?>
            </div>
        </div>
        <footer class="footer">
            <nav class="site-menu">
                <ul>
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                            )
                        );
                        ?>
                </ul>
            </nav>
            <a class="footer-logo" href="./index.html">
                <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/common/logo-footer.png" alt="フッターロゴ">
            </a>
            <p class="footer-tel">電話番号</p>
            <p class="footer-time">営業時間</p>
            <p class="copyright"><small>&copy;オントロジー</small></p>
        </footer>
</body>

</html>