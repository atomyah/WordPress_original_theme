<!-- サイドバー作成方法 -->
<!-- まず、サイドバーウィジェットの設定から行い、最後にindex.phpに<?php get_sidebar(); ?>を埋め込む．
やり方はhttps://code-jump.com/wp-sidebar/に． -->

<aside class="aside">
  <!-- 著者プロフィールブロック -->
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/sidebar/author.jpg')); ?>">
    <h3 class="author-title">サラ・アダムス</h3>
    <p class="author-text">世界を舞台に活動するプロの写真家。
      自然やポートレート写真において実績豊富。
      作品は独自のスタイルで知られ、世界各地を旅して、異文化や風土の写真を手がけることに注力している。</p>
  </section>

  <!-- 検索ボックスブロック -->
  <?php get_search_form(); ?>

  <!-- 記事アーカイブ表示ブロック -->
  <section class="archive">
    <!-- 「functions.php」で追加したid名「sidebar」を指定してウィジェットを呼び出し -->
    <?php dynamic_sidebar('sidebar'); ?>
  </section>

</aside>



<!-- //参考： 管理画面にウィジェットの設定メニューを表示させるfunction.phpに追記したコード.
これで管理画面の「外観」→「ウィジェット」から利用できるウィジェットとして「アーカイブ」を選び
「アーカイブ」→「ウィジェットを追加」ボタンで右の作成したウィジェット「サイドバー」に「アーカイブ」
が入る。タイトルを「記事アーカイブ」に、投稿数を表示にチェックをいれる．
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
  ));
} -->