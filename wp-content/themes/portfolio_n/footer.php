</main>

<footer class="js-footer l-footer u-space-footer">
  <div class="l-footer__container l-container">
    <div class="l-footer__contents">
      <div class="l-footer__logo c-logo">
        <a class="c-logo__svg" href="<?php echo esc_url(home_url("/")); ?>"></a>
      </div>
      <nav class="l-footer__nav p-sub-nav">
        <ul class="p-sub-nav__lists">
          <!-- トップページと、他のページでリンクを切り替える -->
          <?php if (is_front_page()) : ?>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/")); ?>" class="p-sub-nav__link">ホーム</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/products")); ?>" class="p-sub-nav__link">制作事例</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/about")); ?>" class="p-sub-nav__link">私について</a></li>
            <li class="p-sub-nav__list"><a href="#service" class="p-sub-nav__link">私が出来ること</a></li>
            <li class="p-sub-nav__list"><a href="#contact" class=" p-sub-nav__link">お問い合わせ</a></li>
          <?php else : ?>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/")); ?>" class="p-sub-nav__link">ホーム</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/products")); ?>" class="p-sub-nav__link">制作事例</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/about")); ?>" class="p-sub-nav__link">私について</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/#service")); ?>" class="p-sub-nav__link">私が出来ること</a></li>
            <li class="p-sub-nav__list"><a href="<?php echo esc_url(home_url("/#contact")); ?>" class=" p-sub-nav__link">お問い合わせ</a></li>
          <?php endif; ?>
        </ul>
      </nav>
      <div class="l-footer__sns c-sns">
        <a class="c-sns__link c-sns__twitter" href="https://twitter.com/Nobuu_777" target="_blank" rel="noopener noreferrer"></a>
        <a class="c-sns__link c-sns__github" href="https://github.com/bunon0" target="_blank" rel="noopener noreferrer"></a>
      </div>
    </div>
    <small class="l-footer__copyright c-copyright">&copy; 2022 nobuhiro uriu</small>
    <?php if (is_front_page()) : ?>
      <p class="c-recaptcha-policy">
        This site is protected by reCAPTCHA and the Google
        <a href="https://policies.google.com/privacy">Privacy Policy</a> and
        <a href="https://policies.google.com/terms">Terms of Service</a> apply.
      </p>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>