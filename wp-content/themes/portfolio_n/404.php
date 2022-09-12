<?php get_header(); ?>
<div class="p-404">
  <div class="p-404__container l-container">
    <div class="p-404__img">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/404.svg")); ?>" alt="">
    </div>
    <div class="p-404__text">
      <p>お探しのページは、<br class="u-pc-hidden">見つかりませんでした。</p>
    </div>
    <div class="p-404__button">
      <a href="<?php echo esc_url(home_url("/")); ?>" class="c-button-line">
        <span class="c-button-line__text">ホームへ</span>
        <span class="c-button-line__line"></span>
      </a>
    </div>
  </div>
</div>
<?php get_footer(); ?>