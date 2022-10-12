<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="合同会社オントロジーのホームページ">
    <!--
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/about.css">
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
            <h1>ABOUT</h1>
            <p>会計税務×ITスキルを以て、<br>
                経営者の作りたい未来をサポートする</p>
        </div>
        <div class="about-summary">
            <h2>
                会計税務の専門知識とITスキルをクライアントに合わせてオーダーメイド。<br>
                経営者の創りたい未来をサポートします。
            </h2>
            <p>
                会計管理・経理処理は会計システムや会計SaaSなどの<br>
                テクノロジーサービスが隆盛したことにより、<br>
                とても便利に事業運営ができるようになりました。<br>
                しかし、会計に関連するテクノロジーサービスを上手に<br>
                使いこなすためには、会計・税務の専門知識はもちろん、<br>
                ビジネス理解やITスキルなど多角的なアプローチが必要不可欠です。<br>
                当事務所では会計・税務処理だけではなく、テクノロジーの知見を生かし、<br>
                経営者の創りたい未来をサポートしていきます。<br>

            </p>
        </div>
        <div class="our-company">
            <div class="our-company-text">
                <h2>当社の特徴</h2>
                <p>OUR FEATURES</p>
            </div>
        </div>
        <div class="our-company-strength">
            <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/city-scape-and-network-connection-concept-SBI-301985213-3.png" alt="">
            <div class="our-company-strength-text">
                <h2>ITシステム構築</h2>
                <p>
                    当社では、会計・税務にとどまらず、システム監査技術者の資格を持つ専門家が在籍しており、開発も自社でできることから、エンジニアとのコミュニケーションも可能です。
                    そのため、経営を行う上で重要なクラウド会計サービスの初期導入はもちろん、各企業の成長フェーズに合わせて拡張性のあるシステム導入が得意です。
                    会計システムのみならず、社内の基幹システム等との接続など、全社的なプロセスに対してサービスを提供しております。
                </p>
            </div>
        </div>
        <div class="link-button-area">
            <a href="" class="link-button">
                詳しくはこちら
            </a>
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
        <a class="footer-logo" href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/images/common/logo-footer.png" alt="フッターロゴ">
        </a>
        <p class="footer-tel">電話番号</p>
        <p class="footer-time">営業時間</p>
        <p class="copyright"><small>&copy;オントロジー</small></p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>