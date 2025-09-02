<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): ?>
        <?php the_post(); ?>

        <div class="l-post">
            <div class="l-post__wrapper">
                <time class="p-post__time" datetime="2025-08-01"><?php echo get_the_date(); ?></time>
                <div class="p-post__label">カテゴリー: <span class="p-news__label"><?php the_category(', '); ?></span></div>
                <h1 class="p-post__title"><?php the_title(); ?></h1>
                <div class="p-post__content"><?php the_content(); ?></div>
            </div>
        </div>

        <div class="c-button__wrapper">
            <div class="c-button">
                <a class="c-button--item" href="<?php echo home_url('/news'); ?>">
                    お知らせへ戻る
                </a>
            </div>
        </div>

    <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>