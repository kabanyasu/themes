<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>合同会社オントロジー</title>
    <meta name="description" content="合同会社オントロジーのホームページ">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/style.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/frontblog.css" rel="stylesheet">
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
        <div class="first-view">
            <div class="first-view-text">
                <h1>一人ひとりの課題向き合い<br>最適なサービスを提供する</h1>
                <p>Continuing to deal with issues and provide optimal services</p>
            </div>
        </div>
        <div class="background-white-color">
            <div class="start-question">
                <h2>こんなお悩みありませんか？</h2>
                <ul>
                    <li class="start-question-text">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/checkbox-g4b7be5b8b_640.png" alt="">
                        <p>IPOを考えているが何をすればいいのかわからない…</p>
                    </li>
                    <li class="start-question-text">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/checkbox-g4b7be5b8b_640.png" alt="">
                        <p>起業したけれど、何をすればいいのかわからない</p>
                    </li>
                    <li class="start-question-text">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/checkbox-g4b7be5b8b_640.png" alt="">
                        <p>社内のシステム基盤を構築したい</p>

                    </li>
                    <li class="start-question-text">
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/checkbox-g4b7be5b8b_640.png" alt="">
                        <p>同じことの繰り返し業務ばかり…</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contact-service">
            <h3>お問い合わせいただいた方に…</h3>
            <div class="content-service-detail">
                <ul class="contact-service-img">
                    <li>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/slide1-1.png" alt="">
                    </li>
                    <li>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/slide2.png" alt="">
                    </li>
                    <li>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/slide3.png" alt="">
                    </li>
                    <li>
                        <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/slide4-1.png" alt="">
                    </li>
                </ul>
                <p class="contact-service-p">
                    会計システムやクラウド会計ソフトが隆盛したことにより、会計管理・経理処理はとても便利になりました。<br>
                    しかし、「そもそもどうやって選べば良いかわからない」「どう設定したら良いかわからない」というお声も耳にします。<br>
                    このホワイトパーパーでは、当社が今まで培ってきた知見を生かして、クラウド会計ソフトの選び方・初期構築についてまとめました。
                </p>
                <div class="link-button-area">
                    <a class="link-button" href="">
                        さらに詳しく
                    </a>
                </div>
            </div>
        </div>
        <div class="our-company">
            <div class="our-company-text">
                <h2>当社の強み</h2>
                <p>Our strength</p>
            </div>
        </div>
        <div class="our-company-background-color">
            <div class="our-company-grid">
                <ul class="our-company-grid-text">
                    <li>
                        <div class="pic">
                            <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/city-scape-and-network-connection-concept-SBI-301985213-3.png" alt="">
                        </div>
                        <dt>ITシステム</dt>
                        <dd>
                            当社では、会計・税務にとどまらず、システム監査技術者の資格を持つ専門家が在籍しており、開発も自社でできることから、エンジニアとのコミュニケーションも可能です。
                            そのため、経営を行う上で重要なクラウド会計サービスの初期導入はもちろん、各企業の成長フェーズに合わせて拡張性のあるシステム導入が得意です。
                            会計システムのみならず、社内の基幹システム等との接続など、全社的なプロセスに対してサービスを提供しております。
                        </dd>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/city-scape-and-network-connection-concept-SBI-301985213-3.png" alt="">
                        </div>
                        <dt>IPO支援</dt>
                        <dd>
                            IPOの部署に所属していたナレッジを生かし、IPOのフェーズごとで何を対応すれば良いのか理解しております。
                            事務所内でショートレビューから申請まで全て対応でき、中堅事務所でも対応できない、システム監査技術者としてのシステム監査領域（J-SOX・Fintech・自社開発システムなど様々）もカバーしております。
                        </dd>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/city-scape-and-network-connection-concept-SBI-301985213-3.png" alt="">
                        </div>
                        <dt>業務プロセス改善提案</dt>
                        <dd>
                            会計士としての経験を活かした経理体制構築支援・内部統制構築支援・経理効率化が得意です。
                            またIPO支援の強みを生かした会社規模と拡張性を踏まえたサービス提供、ITシステム構築の強みを生かした、上流のデータ基盤・オペレーション構築など、様々な視点から業務プロセス改善提案を行っております。
                        </dd>
                    </li>
                </ul>
            </div>
            <div class="link-button-area">
                <a class="link-button" href="">
                    さらに詳しく
                </a>
            </div>
        </div>
        <div class="front-blog">
            <h2>最新ブログ</h2>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="front-blog-detail">
                        <div class="pic">
                            <div class="front-blog-img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/city-scape-and-network-connection-concept-SBI-301985213-3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="front-blog-text">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <div class="front-blog-tag-time">
                                <div class="front-blog-tag">
                                    <?php echo the_category(); ?>
                                </div>
                                <a class="front-blog-time" href="">
                                    <?php the_time("Y-m-d"); ?>
                                </a>
                            </div>
                            <div class="text-detail">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="for-blog-button">
                <a class="blog-button" href="http://ontologywpthemetest.local/blog/">詳しく見る</a>
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