<?php get_header(); ?>

<div class="p-about">
  <h1 class="p-about__title c-title-page">
    <span class="c-title-page__text">私について</span>
    <span class="c-title-page__line"></span>
  </h1>
  <div class="p-about__container l-container">

    <div class="p-about__profile p-profile">
      <div class="p-profile__image">
        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/nobu-01.jpeg")); ?>" alt="nobuの写真">
      </div>
      <dl class="p-profile__data p-profile-data">
        <dt class="p-profile-data__title">名前</dt>
        <dd class="p-profile-data__data">瓜生修弘 / Nobuhiro Uriu</dd>
        <dt class="p-profile-data__title">所在地</dt>
        <dd class="p-profile-data__data">千葉県香取郡</dd>
        <dt class="p-profile-data__title">生年月日</dt>
        <dd class="p-profile-data__data">1991年2月28日</dd>
        <dt class="p-profile-data__title">出来ること</dt>
        <dd class="p-profile-data__data">HTML・CSSコーディング、WordPress構築、Webデザイン</dd>
      </dl>
    </div>

    <div class="p-about__lists">
      <?php
      $field = get_field("about_message");
      if ($field) :
      ?>
        <div class="p-about__list c-note">
          <div class="c-note__head">
            <span class="c-note__title">自己紹介</span>
          </div>
          <div class="c-note__body">
            <p class="c-note__text">
              <?php echo nl2br(esc_html($field)); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>

      <?php
      $field = get_field("about_important");
      if ($field) :
      ?>
        <div class="p-about__list c-note">
          <div class="c-note__head">
            <span class="c-note__title">大事にしていること</span>
          </div>
          <div class="c-note__body">
            <p class="c-note__text">
              <?php echo nl2br(esc_html($field)); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>

      <?php
      $field = get_field("about_vision");
      if ($field) :
      ?>
        <div class="p-about__list c-note">
          <div class="c-note__head">
            <span class="c-note__title">これからの目標</span>
          </div>
          <div class="c-note__body">
            <p class="c-note__text">
              <?php echo nl2br(esc_html($field)); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>

      <?php
      $field = get_field("about_web");
      if ($field) :
      ?>
        <div class="p-about__list c-note">
          <div class="c-note__head">
            <span class="c-note__title">Web制作を始めたきっかけ</span>
          </div>
          <div class="c-note__body">
            <p class="c-note__text">
              <?php echo nl2br(esc_html($field)); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>

      <!-- skill -->
      <div class="p-about__skills p-skills">
        <h2 class="p-skills__title p-skills-title">
          <span class="p-skills-title__text">スキル</span>
          <span class="p-skills-title__line"></span>
        </h2>
        <div class="p-skills__area">
          <div class="p-skills__skill c-skill">
            <div class="c-skill__label">Codingツール</div>
            <div class="c-skill__lists">
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>HTML</span>
                  <span>CSS / SCSS</span>
                </div>
                <div class="c-skill__body">
                  <p>BEM・FLOCSSなどのCSS設計を用いて静的Webサイトの制作・既存サイトの改修を行えます。わかりやすいコードを意識して日々取り組んでおります。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>JavaScript</span>
                  <span>jQuery</span>
                </div>
                <div class="c-skill__body">
                  <p>各種アニメーションの実装。プラグインなどを使って要望に答える機能をお作りします。シンプルな実装なら、GSAPを使ったアニメーションの実装も可能です。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>WordPress</span>
                </div>
                <div class="c-skill__body">
                  <p>オリジナルテーマの作成</p>
                  <p>カスタム投稿タイプ・カスタムタクソノミー・カスタムフィールドを使った実装も可能です。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>Gulp</span>
                </div>
                <div class="c-skill__body">
                  <p>WebサイトやWordPressの開発環境で使用しています。</p>
                  <p>
                    <a class="c-skill__link" href="https://github.com/bunon0/gulp-template-ejs-website-v2" target="_blank" rel="noopener noreferrer">GitHub</a>
                    でwebサイト制作用のテンプレートを公開しています。
                  </p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>GitHub</span>
                </div>
                <div class="c-skill__body">
                  <p>主にWebサイトや、自分で開発・実装したものを管理しています。ここ最近は、草を生やしておりません笑。</p>
                </div>
              </div>
            </div>
          </div>

          <div class="p-skills__skill c-skill">
            <div class="c-skill__label">Designツール</div>
            <div class="c-skill__lists">
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>Figma</span>
                </div>
                <div class="c-skill__body">
                  <p>Webサイトのデザインの作成・バナーの作成など、デザイン作業のメインツールとして使っています。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>XD</span>
                </div>
                <div class="c-skill__body">
                  <p>基本的には、XDはコーディングの時の情報の読み取りとして使っています。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>Photoshop</span>
                </div>
                <div class="c-skill__body">
                  <p>シンプルな写真加工、素材の切り抜きなどに使っています。</p>
                </div>
              </div>
              <div class="c-skill__list">
                <div class="c-skill__head">
                  <span>Illustrator</span>
                </div>
                <div class="c-skill__body">
                  <p>シンプルなロゴの作成に使っています。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>