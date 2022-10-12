<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="合同会社オントロジーのホームページ">
    <!--
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/question.css" rel="stylesheet">
    -->
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
            <p>お気軽にご相談ください</p>

        </div>
        <div class="question-form">
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="question-form-text">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>