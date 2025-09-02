<? get_header(); ?>

<section id="news" class="l-news l-section">
    <div class="l-container">
        <div class="c-title__wrapper">
            <h2 class="c-title__wrapper--item">
                お知らせ
            </h2>
        </div>
        <div class="p-category__title">
            カテゴリー: <span class="p-news__label--sub"><?php single_cat_title(); ?></span>
        </div>
        <?php if (have_posts()): ?>
            <div class="p-news__wrapper">
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="p-news__wrapper--item">
                        <time class="p-news__time" datetime="2025-08-01"><?php echo get_the_date(); ?></time>
                        <span class="p-news__label"><?php the_category(', '); ?></span>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="p-news__title"><?php the_title(); ?></h3>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else: ?>
            <p class="p-news__noPost">お知らせがありません</p>
        <?php endif; ?>
        <div class="c-button__wrapper">
            <a class="c-button--item" href="<?php echo home_url('/news') ?>">一覧を見る</a>
        </div>
        <div class="c-button__wrapper">
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/'); ?>">
                    TOPへ戻る
                </a>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>