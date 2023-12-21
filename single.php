<?php get_header(); ?>

<div id="container">
    <main class="main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php
                $cat = get_the_category();
                $catname = $cat[0]->cat_name;
                ?>
                <section>
                    <h1 class="main-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <p class="main-date"><?php the_time('Y/m/d'); ?> <?php echo $catname; ?></p>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="main-text"><?php the_content(); ?></div>
                </section>
            <?php endwhile; ?>

            <!-- 「次の記事へ」と「前の記事へ」のリンク -->
            <ul class="post-link">
                <li><?php previous_post_link('%link', '< 前の記事へ'); ?></li>
                <li><?php next_post_link('%link', '次の記事へ >'); ?></li>
            </ul>
        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>