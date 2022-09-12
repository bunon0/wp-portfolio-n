<aside id="category" class="js-sidebar p-products__sidebar l-sidebar">
  <!-- categories -->
  <h3 class="l-sidebar__title">カテゴリー</h3>
  <div class="l-sidebar__categories c-categories">
    <?php
    $query = get_queried_object();
    ?>
    <?php
    if (home_url("/") . $query->post_name === home_url("/products")) :
    ?>
      <a href="<?php echo esc_url(home_url("/products")); ?>" class="c-categories__list c-category is-current">
      <?php else : ?>
        <a href="<?php echo esc_url(home_url("/products")); ?>" class="c-categories__list c-category">
        <?php endif; ?>
        <span class="c-category__number">01</span>
        <span class="c-category__title">ALL</span>
        </a>
        <?php
        $query = get_queried_object();
        $categories = get_terms("category");
        $count = 2;
        foreach ($categories as $category) :
        ?>
          <?php if ($query->slug === $category->slug) : ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-categories__list c-category is-current">
            <?php else : ?>
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-categories__list c-category">
              <?php endif; ?>
              <span class="c-category__number"><?php echo sprintf("%02d", $count); ?></span>
              <span class="c-category__title"><?php echo $category->name; ?></span>
              </a>
              <?php $count++; ?>
            <?php endforeach; ?>
  </div>
  <!-- tag -->
  <h3 class="l-sidebar__title">タグ</h3>
  <div class="l-sidebar__tags c-tags">
    <?php
    $query = get_queried_object();
    $tags = get_terms("post_tag");
    foreach ($tags as $tag) :
    ?>
      <?php if ($query->slug === $tag->slug) : ?>
        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="c-tags__list c-tag is-current"><?php echo $tag->name; ?></a>
      <?php else : ?>
        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="c-tags__list c-tag"><?php echo $tag->name; ?></a>
      <?php endif; ?>
    <?php endforeach ?>
  </div>
</aside>