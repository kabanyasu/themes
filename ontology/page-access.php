<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>合同会社オントロジー・access</title>
    <meta name="description" content="合同会社オントロジーのホームページ">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/style.css" rel="stylesheet">
    <link href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/common.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_template_directory_uri(); ?>/wp-content/themes/ontology/access.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
        <div class="title">
            <h1>access</h1>
            <p>アクセス</p>
        </div>
        <div class="map">
            <h2>アクセスマップ</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202.51368620666338!2d139.7743471567926!3d35.69622855999862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea84b2c2bed%3A0xfdf679e9d112ce23!2z44CSMTAxLTAwNDEg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw6aCI55Sw55S677yS5LiB55uu77yR77yT4oiS77yRIOODjuODq-ODs-eni-iRieWOn-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1663759689552!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact">
            <h2>お問い合わせフォーム</h2>
            <form action="#">
                <dl class="form-area">
                    <dt><span class="required">お名前</span></dt>
                    <dd><input class="input-text" type="text" name="name" required></dd>
                    <dt><span class="required">メールアドレス</span></dt>
                    <dd><input class="input-text" type="email" name="email" required></dd>
                    <dt><span class="required">お電話番号</span></dt>
                    <dd><input class="input-text" type="tel" name="tel"></dd>
                    <dt>お問い合わせ種別</dt>
                    <dd>
                        <select class="select-box" name="genre">
                            <option value="質問・相談" selected>質問・ご相談</option>
                            <option value="セミナー・講演">セミナー・講演について</option>
                            <option value="当社サービス">当社のサービスについて</option>
                        </select>
                    </dd>
                    <dt>お客様について</dt>
                    <dd>
                        <label class="radio-button">
                            <input type="radio" name="user-type" value="一般のお客様" checked>一般のお客様
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="user-type" value="お取引先様">お取引先様
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="user-type" value="その他">その他
                        </label>
                    </dd>
                    <dt><span class="required">お問い合わせ内容</span></dt>
                    <dd>
                        <textarea class="message" name="message" required></textarea>
                    </dd>
                </dl>
            </form>
            <p class="confirm-text">
                ご入力内容をご確認の上、
                お間違いがなければ[Submit]
                ボタンを押してください。
            </p>
            <button class="submit-button" type="submit">Submit</button>
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
</body>

</html>