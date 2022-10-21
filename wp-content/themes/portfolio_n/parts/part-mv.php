<!-- main-visual -->
<div class="p-mv u-space-mv">
  <div class="p-mv__container l-container">
    <div class="p-mv__contents">
      <h2 class="p-mv__title p-mv-title">
        <span class="p-mv-title__name"><span class="p-mv-title__head">N</span>OBU</span>
        <span class="p-mv-title__text">Portfolio</span>
      </h2>
      <span class="p-mv__initial c-mv-initial c-mv-initial--o">O</span>
      <span class="p-mv__initial c-mv-initial c-mv-initial--b">B</span>
      <span class="p-mv__initial c-mv-initial c-mv-initial--u">U</span>

      <div class="p-mv__vertical-text c-mv-vertical-text c-mv-vertical-text--coding">
        <span class="c-mv-vertical-text__line"></span>
        <p class="c-mv-vertical-text__text">Coding</p>
      </div>
      <div class="p-mv__vertical-text c-mv-vertical-text c-mv-vertical-text--design">
        <span class="c-mv-vertical-text__line"></span>
        <p class="c-mv-vertical-text__text">Design</p>
      </div>

      <!-- swiper -->
      <div class="p-mv__swiper p-swiper-area">
        <div class="p-swiper swiper">
          <div class="p-swiper__wrapper swiper-wrapper">
            <?php
            $args = [
              "post_type" => "post",
              "category_name" => "web_production,banner",
              "posts_per_page" => 6,
              "orderby" => "rand"
            ];
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="p-swiper__slide p-swiper-slide swiper-slide">
                  <a href="<?php the_permalink(); ?>" class="p-swiper-slide__item" tabindex="-1">
                    <?php if (has_post_thumbnail()) : ?>
                      <div class="p-swiper-slide__img">
                        <?php the_post_thumbnail("products", ["alt" => "制作事例の画像"]); ?>
                      </div>
                    <?php endif; ?>
                  </a>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="p-swiper__pagination swiper-pagination"></div>
      </div>

      <!-- button -->
      <div class="p-mv__button">
        <a href="<?php echo esc_url(home_url("/products")); ?>" class="c-line-btn">
          <span class="c-line-btn__text">制作事例へ</span>
          <span class="c-line-btn__line"></span>
        </a>
      </div>
    </div>
  </div>
</div>