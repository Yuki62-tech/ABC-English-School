<?php get_header(); ?>

<!-- course -->
<section id="course" class="l-course l-section">
    <div class="c-title__wrapper">
        <h2 class="c-title__wrapper--item">
            コース紹介
        </h2>
    </div>
    <div class="p-course__wrapper">
        <div class="p-course__wrapper--left u-fadeIn u-fadeIn-left">
            <h3 class="p-course--title">初心者コース</h3>
            <p class="p-course--text">
                英語の基礎をゼロから学びたい方のためのコースです。
                発音、文法、日常英会話を中心に楽しく学びます。
            </p>
            <p class="p-course--price">月額10,000円</p>
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/beginner'); ?>">
                    詳細を見る
                </a>
            </div>
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/'); ?>">
                    申し込む
                </a>
            </div>
        </div>
        <div class="p-course__wrapper--right u-fadeIn u-fadeIn-right">
            <h3 class="p-course--title">中級者コース</h3>
            <p class="p-course--text">
                基本的な英語力を持つ方のために、
                より高度な文法や語彙、会話スキルを向上させるコースです。
            </p>
            <p class="p-course--price">月額15,000円</p>
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/intermediate'); ?>">
                    詳細を見る
                </a>
            </div>
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/'); ?>">
                    申し込む
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /course -->

<!-- feature -->
<section id="feature" class="l-feature l-section">
    <div class="l-container">
        <div class="c-title__wrapper">
            <h2 class="c-title__wrapper--item">
                スクールの特徴
            </h2>
        </div>
        <div class="p-feature u-fadeIn u-fadeIn-left">
            <h3 class="p-feature__title">特徴</h3>
            <p class="p-feature__text">
                初級から中級までに対応し、個別指導とグループ指導のハイブリット型カリキュラムを採用しています。
            </p>
        </div>
        <div class="p-feature u-fadeIn u-fadeIn-right">
            <h3 class="p-feature__title">講師</h3>
            <p class="p-feature__text">
                経験豊富なプロ講師が一人ひとりに合わせた丁寧な指導を行います。
            </p>
        </div>
        <div class="p-teacher__wrapper u-fadeIn u-fadeIn-bottom">
            <div class="p-teacher__wrapper--item">
                <img class="p-teacher__image" src="<?php echo get_theme_file_uri('./assets/img/teacher1.jpg'); ?>" alt="teacher">
                <dl class="c-desc__list">
                    <dt class="c-desc__list--term">
                        担当:
                    </dt>
                    <dd class="c-desc__list--data">
                        初心者コース
                    </dd>
                    <dt class="c-desc__list--term">
                        一言:
                    </dt>
                    <dd class="c-desc__list--data">
                        これからの時代には英語は必須です。皆さんで楽しく英語を学習しましょう。
                    </dd>
                </dl>
            </div>
            <div class="p-teacher__wrapper--item">
                <img class="p-teacher__image" src="<?php echo get_theme_file_uri('./assets/img/teacher2.jpg'); ?>" alt="teacher">
                <dl class="c-desc__list">
                    <dt class="c-desc__list--term">
                        担当:
                    </dt>
                    <dd class="c-desc__list--data">
                        初心者コース
                    </dd>
                    <dt class="c-desc__list--term">
                        一言:
                    </dt>
                    <dd class="c-desc__list--data">
                        これからの時代には英語は必須です。皆さんで楽しく英語を学習しましょう。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<!-- /feature -->

<!-- voice -->
<section id="voice" class="l-voice l-section">
    <div class="l-container">
        <div class="c-title__wrapper">
            <h2 class="c-title__wrapper--item">
                利用者の声
            </h2>
        </div>
        <div class="p-voice__wrapper">
            <div class="p-voice__wrapper--top">
                <div class="p-voice__image u-fadeIn u-fadeIn-left">
                    <img class="p-voice__image--item" src="<?php echo get_theme_file_uri('./assets/img/face1.jpg'); ?>" alt="face">
                    <p class="p-voice__image--text">30代 男性</p>
                </div>
                <div class="p-voice__text u-fadeIn u-fadeIn-right">
                    <p class="p-voice__text--item">
                        このスクールのおかげで英語を話す自信がつきました。<span class="u-lineBreak"></span>
                        先生たちもとても親切で毎回のレッスンが楽しみです。
                    </p>
                </div>
            </div>
            <div class="p-voice__wrapper--bottom">
                <div class="p-voice__image u-fadeIn u-fadeIn-right">
                    <img class="p-voice__image--item" src="<?php echo get_theme_file_uri('./assets/img/face2.jpg'); ?>" alt="face">
                    <p class="p-voice__image--text">40代 女性</p>
                </div>
                <div class="p-voice__text u-fadeIn u-fadeIn-left">
                    <p class="p-voice__text--item">
                        初心者だった私でも今では日常英会話がスムーズに出来るようになりました。<span class="u-lineBreak"></span>
                        ありがとうございました。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /voice -->

<!-- news -->
<section id="news" class="l-news l-section">
    <div class="l-container">
        <div class="c-title__wrapper">
            <h2 class="c-title__wrapper--item">
                お知らせ
            </h2>
        </div>

        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 5
        ];
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()): ?>
            <div class="p-news__wrapper">
                <?php while ($the_query->have_posts()): ?>
                    <?php $the_query->the_post(); ?>
                    <div class="p-news__wrapper--item">
                        <time class="p-news__time"><?php echo get_the_date(); ?></time>
                        <span class="p-news__label"><?php the_category(', '); ?></span>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="p-news__title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p class="p-news__noPost">お知らせがありません</p>
        <?php endif; ?>
        <div class="c-button__wrapper">
            <a class="c-button--item" href="<?php echo home_url('/news') ?>">一覧を見る</a>
        </div>
    </div>
</section>
<!-- /news -->

<?php get_footer(); ?>