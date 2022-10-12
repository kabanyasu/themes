<?php get_header(); ?>
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
</main>
<?php get_footer(); ?>