<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
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
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>
                <div class="detail">
                    <h1><?php the_title(); ?></h1>
                    <div class="detail-config">
                        <div class="category">
                            <?php
                            $cat = get_the_category();
                            $cat = $cat[0];
                            ?>
                            <a href="<?php echo get_category_link($cat->term_id); ?>/?post_type=tools">
                                <?php echo $cat->cat_name; ?>
                            </a>
                        </div>
                        <div class="time">
                            <?php
                            $year = get_the_date('Y');
                            $month = get_the_date('m');
                            ?>
                            <a href="<?php echo get_month_link($year, $month); ?>/?post_type=tools">
                                <time datetime="<?php the_time('Y-m-d'); ?>">
                                    <?php the_time('Y-m-d'); ?>
                                </time>
                            </a>
                        </div>
                    </div>
                    <div class="detail-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
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