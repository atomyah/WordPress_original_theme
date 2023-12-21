
<?php
/* 
<?php get_header(); ?>

<div id="container">
  <main class="main">
    <h1 class="main-title">ページが存在しません。</h1>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
*/
?>

<?php
  wp_safe_redirect(home_url(), 301);
  exit;
?>
