<div class="p-paginate">
  <div class="p-paginate__inner">
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    // var_dump($prev_post);
    if ($prev_post || $next_post) :
    ?>
      <?php if ($prev_post) : ?>
        <a class="p-paginate__item" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
          <div class="p-paginate__head">
            <span>&lt; 前へ</span>
            <h3 class="p-paginate__title">
              <span><?php echo $prev_post->post_title; ?></span>
            </h3>
            <span class="p-paginate__category">
              <?php $terms = get_the_terms($prev_post->ID, "category");
              foreach ($terms as $term) {
                echo "カテゴリー：" . $term->name;
              }
              ?>
            </span>
            <div class="p-paginate__tags">
              タグ：
              <?php $tags = get_the_terms($prev_post->ID, "post_tag");
              foreach ($tags as $tag) :
              ?>
                <span class="p-paginate__tag">
                  <?php echo $tag->name; ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="p-paginate__thumb">
            <?php echo get_the_post_thumbnail($prev_post->ID); ?>
          </div>
        </a>
      <?php endif; ?>

      <?php if ($next_post) : ?>
        <a class="p-paginate__item" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
          <div class="p-paginate__head">
            <span>&gt; 次へ</span>
            <h3 class="p-paginate__title">
              <span><?php echo $next_post->post_title; ?></span>
            </h3>
            <span class="p-paginate__category">
              <?php $terms = get_the_terms($next_post->ID, "category");
              foreach ($terms as $term) {
                echo "カテゴリー：" . $term->name;
              }
              ?>
            </span>
            <div class="p-paginate__tags">
              タグ：
              <?php $tags = get_the_terms($next_post->ID, "post_tag");
              foreach ($tags as $tag) :
              ?>
                <span class="p-paginate__tag">
                  <?php echo $tag->name; ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="p-paginate__thumb">
            <?php echo get_the_post_thumbnail($next_post->ID); ?>
          </div>
        </a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>