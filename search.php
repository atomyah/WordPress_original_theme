<?php get_header(); ?>

<div id="container">
    <main class="main">
        <?php if (have_posts()) : ?>
        <?php if (!$_GET['s']) { ?>
        <!--$_GET['s']で検索窓で入力したキーワードが取得できる-->
        <p>検索ワードが未入力です</p>

        <?php } else { ?>
        <h1 class="main-title">
            「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
        </h1>

        <!-- レスポンスから取り出すというコードは必要なくて、もう＜？php if (have_posts()) : ？＞
            ＜？php while (have_posts()) : the_post(); ？＞だけで取得記事データを取得・表示（準備）できて
            しまうようだ．index.phpやcategory.phpなど全てにおいて． -->



        <?php
                // ↓ 記事をループさせて表示するコードをloop.phpにリファクタリング
                get_template_part('loop');

                // <!-- ページネーション -->
                if (function_exists("pagination")) {
                    pagination($wp_query->max_num_pages);
                }
                ?>

        <?php } ?>

        <?php else : ?>

        <p>検索されたキーワードに一致する記事はありませんでした</p>

        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>