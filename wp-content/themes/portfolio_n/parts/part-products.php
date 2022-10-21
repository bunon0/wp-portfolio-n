<!-- 制作事例一覧 -->
<div class="p-products u-space-products">
  <h2 class="p-products__title c-title-page">
    <span class="c-title-page__text">制作事例</span>
    <span class="c-title-page__line"></span>
  </h2>
  <div class="p-products__container l-container">
    <div class="p-products__label c-title-line">
      <span class="p-products__line c-title-line__line"></span>
      <?php if (is_home()) {
        echo "ALL";
      } else {
        single_cat_title();
      } ?>
    </div>
    <div class="p-products__contents">
      <!-- products lists -->
      <article class="p-products__area">
        <div class="p-products__lists">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="p-products__list c-products-item">
                <div class="c-products-item__head">
                  <h3 class="c-products-item__title"><?php the_title(); ?></h3>
                  <div class="c-products-item__label">
                    <!-- categoryの表示 -->
                    <?php
                    $terms = get_the_terms($POST->ID, "category");
                    foreach ($terms as $term) :
                    ?>
                      <span class="c-products-item__category">カテゴリ：<?php echo $term->name; ?></span>
                    <?php endforeach; ?>
                    <!-- tagの表示 -->
                    <?php
                    $tags = get_the_terms($POST->ID, "post_tag");
                    foreach ($tags as $tag) :
                    ?>
                      <span class="c-products-item__tag"><?php echo $tag->name; ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                  <div class="c-products-item__img">
                    <?php the_post_thumbnail("products", ["alt" => "制作事例の画像"]); ?>
                  </div>
                <?php endif; ?>
              </a>

            <?php endwhile; ?>
          <?php endif; ?>
          <?php get_template_part("parts/part", "pagination"); ?>
        </div>
      </article>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <?php get_template_part("parts/part", "category-scroll"); ?>
</div>