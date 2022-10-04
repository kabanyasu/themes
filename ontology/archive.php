<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>合同会社オントロジー・Blog</title>
    <meta name="description" content="合同会社オントロジーのホームページ">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/style.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="title">
            <h1>
                <?php if (is_month()) : ?>
                    月別アーカイブ：「<?php echo get_the_date('Y年n月'); ?>」の検索結果
                    <p><?php echo get_the_date('Y年n月'); ?>に限定した記事を表示しています。</p>
                <?php else : ?>
                    タグ名：「<?php single_term_title(); ?>」の検索結果
                    <p><?php single_term_title(); ?>に限定した記事を表示しています。</p>
                <?php endif; ?>
            </h1>
        </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) :
                the_post(); ?>
                <div class="blog">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/concept/img-item01.gif" alt="コーヒーを入れている画像">
                    </a>
                    <div class="blog-text">
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <div class="blog-info">
                            <div class="blog-tag">
                                <a href="">
                                    <?php the_category(); ?>
                                </a>
                            </div>
                            <div class="blog-time">
                                <a href="">
                                    <?php the_time('Y-m-d'); ?>
                                </a>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="pagination">
            <?php
            $paginationhtml = get_the_posts_pagination();
            echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $paginationhtml);
            ?>
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
</body>

</html>