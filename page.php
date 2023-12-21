<?php get_header(); ?>

<div id="container">
    <main class="main">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php
                $cat = get_the_category();
                $catname = !empty($cat) ? $cat[0]->cat_name : ''; // カテゴリーが存在する場合のみアクセス
                ?>
        <section>
            <h1 class="main-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>
            <div class="main-thumnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="main-text"><?php the_content(); ?></div>
        </section>
        <?php endwhile; ?>

        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>