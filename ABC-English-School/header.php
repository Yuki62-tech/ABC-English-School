<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ABC英会話スクールは初心者コース、中級者コースからなる英会話スクールです。英語学習を楽しみましょう!">
    <title>ABC 英会話スクール</title>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('./assets/css/style.css'); ?>">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('./assets/img/favicon.ico'); ?>" type="image/x-icon">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Noto+Sans+JP:wght@100..900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <!-- header -->
    <header class="l-header">
        <div class="l-inner">
            <h1 class="p-header__logo">
                <a class="p-header__logo--link" href="<?php echo home_url('/'); ?>">
                    <img class="p-header__logo--img" src="<?php echo get_theme_file_uri('./assets/img/logo.svg'); ?>" alt="logo">
                </a>
            </h1>
            <div id="navArea">
                <!-- burger -->
                <div class="c-burger">
                    <span class="c-burger--line"></span>
                    <span class="c-burger--line"></span>
                    <span class="c-burger--line"></span>
                </div>
                <nav class="p-header__nav">
                    <ul class="p-header__list">
                        <li class="p-header__list--item">
                            <a class="p-header__list--link" href="<?php echo home_url('/#course'); ?>">
                                コース紹介
                            </a>
                        </li>
                        <li class="p-header__list--item">
                            <a class="p-header__list--link" href="<?php echo home_url('/#feature'); ?>">
                                スクールの特徴
                            </a>
                        </li>
                        <li class="p-header__list--item">
                            <a class="p-header__list--link" href="<?php echo home_url('/#voice'); ?>">
                                利用者の声
                            </a>
                        </li>
                        <li class="p-header__list--item">
                            <div class="c-button__reverse">
                                <a class="c-button__reverse--item" href="<?php echo home_url('/'); ?>">
                                    お問い合わせ
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div id="mask"></div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- keyVisual -->
    <div class="l-keyVisual">
        <div class="p-catchCopy u-fadeIn--scroll u-fadeIn-diagonal">
            <p class="p-catchCopy__top">
                Learn English with
                <span class="u-lineBreak--xl"></span>
                Fun and Confidence!
            </p>
            <p class="p-catchCopy__bottom">
                英会話スクールで楽しく、
                <span class="u-lineBreak--xl"></span>
                自信を持って英語を学びましょう！
            </p>
        </div>
        <div class="c-scroll">
            <span class="c-scroll__item">Scroll</span>
        </div>
    </div>
    <!-- /keyVisual -->

    <main>