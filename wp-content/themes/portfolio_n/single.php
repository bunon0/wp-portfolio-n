<?php get_header(); ?>
<!-- 制作事例一覧 -->
<div class="p-product">
  <div class="p-product__container l-container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h3 class="p-product__title p-product-title">
          <div class="p-product-title__head c-title-line --large">
            <span class="p-product-title__line c-title-line__line"></span>
            <?php the_title(); ?>
          </div>

          <span class="p-product-title__label">
            <!-- categoryの表示 -->
            <?php
            $terms = get_the_terms($POST->ID, "category");
            foreach ($terms as $term) :
            ?>
              <span class="c-product-title__category"><?php echo "カテゴリー：" . $term->name; ?></span>
            <?php endforeach; ?>
            <!-- tagの表示 -->
            <?php
            $tags = get_the_terms($POST->ID, "post_tag");
            foreach ($tags as $tag) :
            ?>
              <span class="c-product-title__tag"><?php echo $tag->name; ?></span>
            <?php endforeach; ?>
          </span>
        </h3>

        <div class="p-product__contents">
          <!-- product lists -->
          <article class="p-product__area">

            <!-- ====== 【ACF】カスタムフィールド ====== -->
            <!-- 概要 -->
            <?php
            $filed = get_field("overview");
            if ($filed) :
            ?>
              <div class="p-product__lists">
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">概要</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php echo nl2br(esc_html($filed)); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- サイト規模 -->
              <?php
              $filed = get_field("scale");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">サイト規模</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php echo nl2br(esc_html($filed)); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- サイト規模 -->
              <?php
              $filed = get_field("function");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">サイトに実装した機能</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php echo nl2br(esc_html($filed)); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- レスポンシブ -->
              <?php
              $filed = get_field("responsive");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">レスポンシブ対応範囲</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php the_field("responsive"); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- 担当した範囲 -->
              <?php
              $filed = get_field("pic");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">担当した範囲</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php the_field("pic"); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- 制作期間 -->
              <?php
              $filed = get_field("period");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">制作期間</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php echo nl2br(esc_html($filed)); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- 使用したツール -->
              <?php
              $filed = get_field("tool");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">使用したツール</span>
                  </div>
                  <div class="c-note__body">
                    <p class="c-note__text">
                      <?php the_field("tool"); ?>
                    </p>
                  </div>
                </div>
              <?php endif; ?>

              <!-- 事例へのリンク -->
              <?php
              $filed = get_field("link");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">事例へのリンク</span>
                  </div>
                  <div class="c-note__body">
                    <a href="<?php echo esc_url($filed); ?>" class="c-note__link" target="_blank" rel="noopener noreferrer">
                      <?php echo esc_url($filed); ?>
                    </a>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Basic認証 -->
              <?php
              $filed = get_field("basic");
              if ($filed) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title">事例サイトのBasic認証</span>
                  </div>
                  <div class="c-note__body">
                    <?php echo nl2br(esc_html($filed)); ?>
                  </div>
                </div>
              <?php endif; ?>

              <!-- webサイト画像PC -->
              <?php
              $field_img_id = get_field("full_img_pc");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_full_pc");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">レスポンシブPC</span>
                  </div>
                  <div class="c-note__img --pc">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のPC画像">
                  </div>
                </div>
              <?php endif; ?>

              <!-- webサイト画像SP -->
              <?php
              $field_img_id = get_field("full_img_sp");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_full_sp");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">レスポンシブSP</span>
                  </div>
                  <div class="c-note__img --sp">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のSP画像">
                  </div>
                </div>
              <?php endif; ?>

              <!-- バナー画像-01 -->
              <?php
              $field_img_id = get_field("banner_01");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_banner");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">バナーの画像</span>
                  </div>
                  <div class="c-note__img">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のバナー画像">
                  </div>
                </div>
              <?php endif; ?>

              <!-- バナー画像-02 -->
              <?php
              $field_img_id = get_field("banner_02");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_banner");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">バナーの画像</span>
                  </div>
                  <div class="c-note__img">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のバナー画像">
                  </div>
                </div>
              <?php endif; ?>

              <!-- バナー画像-03 -->
              <?php
              $field_img_id = get_field("banner_03");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_banner");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">バナーの画像</span>
                  </div>
                  <div class="c-note__img">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のバナー画像">
                  </div>
                </div>
              <?php endif; ?>

              <!-- バナー画像-04 -->
              <?php
              $field_img_id = get_field("banner_04");
              $img_attr = wp_get_attachment_image_src($field_img_id, "product_banner");
              if ($field_img_id) :
              ?>
                <div class="p-product__list c-note">
                  <div class="c-note__head">
                    <span class="c-note__title --icon">バナーの画像</span>
                  </div>
                  <div class="c-note__img">
                    <img src="<?php echo esc_url($img_attr[0]); ?>" alt="制作事例のバナー画像">
                  </div>
                </div>
              <?php endif; ?>

              </div>
              <!-- // end 【ACF】カスタムフィールド ====== -->

              <div class="p-product__paginate">
                <?php get_template_part("parts/part", "paginate"); ?>
              </div>

              <div class="p-product__button">
                <a href="<?php echo esc_url(home_url("/products")) ?>" class="c-line-btn">
                  <span class="c-line-btn__text">ALLへ</span>
                  <span class="c-line-btn__line"></span>
                </a>
              </div>
          </article>

          <?php get_sidebar(); ?>
        </div>
        <?php get_template_part("parts/part", "category-scroll"); ?>

      <?php endwhile ?>
    <?php endif; ?>

  </div>
</div>
<?php get_footer(); ?>