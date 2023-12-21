    <footer class="footer">
        <div class="footer-wrapper">
            <div class="about">
                <h3 class="about-title">About</h3>
                <p class="about-text">
                    写・旅・住は、世界中の美しさ、多様性、そして独自性を捉えた写真の旅に誘うオンラインの冒険です。私たちは、驚くべき風景、文化、人々を通じて、世界の魅力を共有し、旅行の魔法を感じることができるプラットフォームを提供しています。
                </p>
                <ul class="about-list">
                    <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィール詳細</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お仕事の依頼</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 class="menu-title">Menu</h3>
                <ul class="menu-list">
                    <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">タウン</a></li>
                    <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">旅路</a></li>
                    <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">コラム</a></li>
                </ul>
            </div>
            <!-- <div class="twitter">
                <h3 class="twitter-title">Twitter</h3>
                <a class="twitter-timeline" data-height="315" href="https://twitter.com/TwitterJP?ref_src=twsrc%5Etfw">Tweets by TwitterJP</a>
                <script async src="https://platform.twitter.com/widgets.js"></script>
            </div> -->
        </div>
        <p class="copyright">&copy; sara adams</p>
    </footer>

    <!-- ハンバーガーメニューを動かすJavaScriptを埋め込んでいる．結局function.phpに書いても動かなかった． -->
    <script src="<?php echo get_template_directory_uri(); ?>/hamburger.js" type="text/javaScript" charset="utf-8">
    </script>

    <?php wp_footer(); ?>
    </body>

    </html>