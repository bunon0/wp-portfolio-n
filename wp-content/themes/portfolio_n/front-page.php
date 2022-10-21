<?php get_header(); ?>

<!-- IntroDuction -->
<section class="p-sec-introduction u-space-introduction">
  <div class="p-sec-introduction__container l-container">
    <p class="p-sec-introduction__message">千葉県を拠点にWeb制作をメインに活動しています。<br>ひとりひとりの目的に寄り添うコーディングやデザインをお作りします。仕事も、遊びも情熱をもって楽しむ人であること。</p>
    <div class="p-sec-introduction__button">
      <a href="<?php echo esc_url(home_url("/about")); ?>" class="c-line-btn">
        <span class="c-line-btn__text">私について</span>
        <span class="c-line-btn__line"></span>
      </a>
    </div>
  </div>
</section>

<!-- Section Service -->
<section id="service" class="p-sec-service u-space-service">
  <div class="p-sec-service__container l-container">
    <div class="p-sec-service__title c-title-sec">
      <div class="c-title-sec__sub">
        <span class="c-title-sec__vertical-text">service</span>
      </div>
      <h2 class="c-title-sec__main">私が出来ること</h2>
    </div>
    <div class="p-sec-service__wrapper">
      <ul class="p-sec-service__cards p-cards-type01">
        <li class="p-sec-service__card p-card-type01">
          <div class="c-card-type01__head">
            <div class="p-card-type01__img">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/code-01.svg")) ?>" alt="コーディングのアイコン">
            </div>
            <h3 class="p-card-type01__title">
              HTML / CSS<br>コーディング
            </h3>
          </div>
          <div class="c-card-type01__content">
            <div class="p-card-type01__body">
              <p class="p-card-type01__heading">・サイトのコーディング</p>
              <p class="p-card-type01__heading">・サイトのメンテナンス</p>
            </div>
            <div class="p-card-type01__text">
              <p>他の人が見ても、分かりやすいコードを考えながらコーディングしています。CSS設(BEMなど)を取り入れながら、メンテナンス性も考えたコードを作ります。</p>
            </div>
          </div>
        </li>

        <li class="p-sec-service__card p-card-type01">
          <div class="c-card-type01__head">
            <div class="p-card-type01__img">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/desktop-01.svg")) ?>" alt="デスクトップのアイコン">
            </div>
            <h3 class="p-card-type01__title">
              WordPressサイト<br>
              構築 / メンテナンス
            </h3>
          </div>
          <div class="c-card-type01__content">
            <div class="p-card-type01__body">
              <p class="p-card-type01__heading">・サイトの構築</p>
              <p class="p-card-type01__heading">・サイトのメンテナンス</p>
            </div>
            <div class="p-card-type01__text">
              <p>ご要望に寄り添う、サイトの構築を行います。どうしたら使いやすいのか？管理画面で編集出来る部分はどうするのか？メンテナンス性を考えながら作ります。</p>
            </div>
          </div>
        </li>

        <li class="p-sec-service__card p-card-type01">
          <div class="c-card-type01__head">
            <div class="p-card-type01__img">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/palette-01.svg")) ?>" alt="パレットのアイコン">
            </div>
            <h3 class="p-card-type01__title">
              WEB<br>
              デザイン
            </h3>
          </div>
          <div class="c-card-type01__content">
            <div class="p-card-type01__body">
              <p class="p-card-type01__heading">・Webサイトのデザイン</p>
              <p class="p-card-type01__heading">・バナーの作成等</p>
            </div>
            <div class="p-card-type01__text">
              <p>こめる想い、ご要望や目的などをデザインに落とし込んでいきます。コーディング出来るデザインなのか？作り手のことも考慮したデザインを作ります。</p>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
</section>

<!-- Contact -->
<div id="contact" class="p-contact u-space-contact">
  <div class="p-contact__container l-container">
    <div class="p-contact__title c-title-sec">
      <div class="c-title-sec__sub">
        <span class="c-title-sec__vertical-text">contact</span>
      </div>
      <h2 class="c-title-sec__main">お問い合わせ</h2>
    </div>
    <div class="p-contact__flow p-form-flow">
      <span class="p-form-flow__item is-current">内容入力</span>
      <span class="p-form-flow__item">送信完了</span>
    </div>
    <div class="p-form__area">
      <?php echo do_shortcode('[contact-form-7 id="158" title="コンタクトフォーム"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>