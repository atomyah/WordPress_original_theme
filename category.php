<!-- カテゴリー一覧ページ。どうやらcategory.phpというファイルにindex.phpと同じような一覧表示コードを
書くだけで、いちいち「カテゴリーが○○だったら～」というif文を書く必要がないようだ． -->

<?php get_header(); ?>

<div id="container">
    <main class="main">
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        ?>
        <h1 class="page-title"><?php echo $catname; ?>一覧</h1>
        <!-- ↑ <?php single_cat_title(); ?>でも良い -->

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