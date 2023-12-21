<?php

// CSSの読み込み。get_stylesheet_uri()はテーマディレクトリ直下のstyle.cssのパスを取得する関数
function my_enqueue_styles()
{
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


// ↓いちおうJavaScriptの埋め込み方．結局</body>タグの直前（footer.php）に埋め込まないと動かなかった．
// // ハンバーガーメニュー用JavaScript
// function my_scripts_method()
// {
//   wp_enqueue_script(
//     'hamburger_script',
//     get_template_directory_uri() . '/hamburger.js',
//   );
// }
// add_action('wp_enqueue_scripts', 'my_scripts_method');


// デフォルトでは投稿ページにアイキャッチを設定するメニューが表示されていない．
// アイキャッチの有効化
add_theme_support('post-thumbnails');


// 管理画面にウィジェットの設定メニューを表示させる.
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
}

// 検索フォームの初期設定では、投稿ページ、固定ページの両方が検索対象となる
// 検索対象を投稿ページだけにする
// function search_filter($query)
// {
//   if ($query->is_search) {
//     $query->set('post_type', 'post');
//   }
//   return $query;
// }
// add_filter('pre_get_posts', 'search_filter');



// ページネーション
function pagination($pages = '', $range = 2)
{
  $showitems = ($range * 2) + 1;

  // 現在のページ数
  global $paged;        // $paged-> WordPressのグローバル変数.現在のページ番号を取得
  if (empty($paged)) {
    $paged = 1;
  }

  // 全ページ数
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;      // $wp_query はWordPressのクエリオブジェクトで、
    if (!$pages) {                           // max_num_pagesプロパティはクエリ結果の総ページ数を格納してる.
      $pages = 1;
    }
  }

  // ページ数が2ページ以上の場合のみ、ページネーション表示
  if (1 != $pages) {
    echo '<section class="pagination">';
    echo '<ul>';
    //1ページ目でなければ、「前のページ」リンクを表示
    if ($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
    }
  }

  // ページ番号を表示（現在のページはリンクにしない）
  // 現在のページ番号を中心に前後に $rangeページずつ表示.
  for ($i = 1; $i <= $pages; $i++) {
    if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
      if ($paged == $i) {
        echo '<li class="active">' . $i . '</li>';
      } else {
        echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
      }
    }
  }

  // 最終ページでなければ「次のページ」リンクを表示
  if ($paged < $pages) {
    echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
  }
  echo '</ul>';
  echo '</section>';
}

// ページネーション ここまで