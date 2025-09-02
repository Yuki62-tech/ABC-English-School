<?php get_header(); ?>
<section class="l-intermediate">
    <div class="c-title__wrapper">
        <h2 class="c-title__wrapper--item">
            Not Found
        </h2>
    </div>

    <div class="p-notFound__wrapper">
        <p class="p-notFound__text">
            申し訳ございませんが、指定されたページが存在しないか、移動または削除された可能性があります。<span class="u-lineBreak"></span>
            ホームページに戻るか、メニューから他のメニューから他のページをメニューから他のページをご覧ください。
        </p>
    </div>
    
    <div class="c-button__wrapper">
        <div class="c-button">
            <a class="c-button--item" href="<?php echo home_url('/'); ?>">
                TOPへ戻る
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>