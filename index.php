<?php get_header(); ?>

<div id="container">
    <main class="main">
        <!-- 【2023/12消去】お知らせ（ヘッダー）ここから -->
        <!-- <?php
                $data = get_posts('post_type=post&order=DESC&orderby=date&showposts=1');
                if (isset($data[0])) {
                    echo '<p style="margin: 0 10px 10px; padding: 0 10px;">';
                    echo sprintf(
                        '【お知らせ】 <a href="%s">%s %s</a>',
                        get_permalink($data[0]->ID),
                        date('Y年m月d日', strtotime($data[0]->post_date)),
                        esc_html($data[0]->post_title)
                    );
                    echo '</p>';
                }
                ?> -->
        <!-- お知らせ（ヘッダー）ここまで -->


        <?php if (have_posts()) :
            // ↓ 記事をループさせて表示するコードをloop.phpにリファクタリング
            get_template_part('loop');

            // <!-- ページネーション -->
            if (function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
            }

        endif;
        ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>