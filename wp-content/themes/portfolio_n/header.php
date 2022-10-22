<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- icon-->
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri("/assets/images/favicon.ico")); ?>" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri("/assets/images/logo-180x180.png")); ?>">
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part("parts/part", "loading"); ?>
  <!-- header -->
  <header class="js-header l-header">
    <div class="l-header__container l-container">
      <?php if (is_front_page()) : ?>
        <h1 class="l-header__logo c-logo">
          <a class="c-logo__svg" href="<?php echo esc_url(home_url("/")); ?>"></a>
        </h1>
      <?php else : ?>
        <div class="l-header__logo c-logo">
          <a class="c-logo__svg" href="<?php echo esc_url(home_url("/")); ?>"></a>
        </div>
      <?php endif; ?>

      <!-- g-nav -->
      <nav class="l-header__g-nav p-global-nav">
        <ul class="p-global-nav__area">
          <!-- トップページと、それ以外でリンクを出し分ける -->
          <?php if (is_front_page()) : ?>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/")) ?>" class="p-global-nav__link">ホーム</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/products")) ?>" class="p-global-nav__link">制作事例</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/about")) ?>" class="p-global-nav__link">私について</a></li>
            <li class="p-global-nav__list"><a href="#service" class="p-global-nav__link">私が出来ること</a></li>
            <li class="p-global-nav__list"><a href="#contact" class="p-global-nav__link">お問い合わせ</a></li>
          <?php else : ?>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/")) ?>" class="p-global-nav__link">ホーム</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/products")) ?>" class="p-global-nav__link">制作事例</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/about")) ?>" class="p-global-nav__link">私について</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/#service")) ?>" class="js-smooth p-global-nav__link">私が出来ること</a></li>
            <li class="p-global-nav__list"><a href="<?php echo esc_url(home_url("/#contact")) ?>" class="js-smooth p-global-nav__link">お問い合わせ</a></li>
          <?php endif; ?>
        </ul>
      </nav>

      <!-- hamburger -->
      <div class="js−hamburger l-header__hamburger c-hamburger">
        <div class="c-hamburger__container">
          <span class="c-hamburger__line c-hamburger__line-top"></span>
          <span class="c-hamburger__line c-hamburger__line-mid"></span>
          <span class="c-hamburger__line c-hamburger__line-bot"></span>
        </div>
      </div>
    </div>
  </header>

  <!-- sp-nav -->
  <nav class="js-modal-nav l-header__modal p-modal-nav">
    <ul class="p-modal-nav__lists">
      <!-- トップページと、それ以外でリンクを出し分ける -->
      <?php if (is_front_page()) : ?>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="p-modal-nav__link">ホーム</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/products")) ?>" class="p-modal-nav__link">制作事例</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/about")) ?>" class="p-modal-nav__link">私について</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="#service" class="p-modal-nav__link">私が出来ること</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="#contact" class="p-modal-nav__link">お問い合わせ</a>
        </li>
      <?php else : ?>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="p-modal-nav__link">ホーム</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/products")) ?>" class="p-modal-nav__link">制作事例</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/about")) ?>" class="p-modal-nav__link">私について</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/#service")) ?>" class="p-modal-nav__link">私が出来ること</a>
        </li>
        <li class="p-modal-nav__list">
          <a href="<?php echo esc_url(home_url("/#contact")) ?>" class="p-modal-nav__link">お問い合わせ</a>
        </li>
      <?php endif; ?>
    </ul>
    <div class="p-modal-nav__sns c-sns">
      <a class="c-sns__link c-sns__twitter" href="https://twitter.com/Nobuu_777" target="_blank" rel="noopener noreferrer"></a>
      <a class="c-sns__link c-sns__github" href="https://github.com/bunon0" target="_blank" rel="noopener noreferrer"></a>
    </div>
  </nav>

  <main>
    <?php wp_body_open(); ?>

    <!-- 各ページのメイントップエリア条件分岐 -->
    <?php if (is_front_page()) { ?>
      <?php get_template_part("parts/part", "mv"); ?>
    <?php } else { ?>
      <?php return ?>
    <?php } ?>