<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- テーマディレクトリのURIは「get_theme_file_uri()」関数で取得. 通常esc_url()とあわせて使用-->
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>" <?php wp_head(); ?> </head>

<body>
    <header class="header">
        <div class="header-title-wrapper">
            <!-- サイトのURLはhome_url()関数で取得. esc_url()とあわせて使用.
            例えばニュース一覧ページのURLは、<?php echo esc_url(home_url()); ?>/category/news/-->
            <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
            <<?php echo $html_tag; ?> class="site-title">
                <a href="/"><?php bloginfo('name'); ?></a>
            </<?php echo $html_tag; ?>>
        </div>
        <nav class="navi">
            <!-- メニュー -->
            <div class="navi-container">
                <ul class="nav_list">
                    <li><a href="<?php echo esc_url(home_url('/category/news')) ?>">タウン</a></li>
                    <li><a href="<?php echo esc_url(home_url('category/column')); ?>">旅路</a></li>
                    <li><a href="<?php echo esc_url(home_url('/category/hotel')); ?>">宿泊</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィール</a></li>
                </ul>
            </div>
            <!-- ハンバーガーメニュー -->
            <div class="hamburger">
                <!-- ハンバーガーメニューの線 -->
                <span></span>
                <span></span>
                <span></span>
                <!-- /ハンバーガーメニューの線 -->
            </div>
        </nav>

    </header>