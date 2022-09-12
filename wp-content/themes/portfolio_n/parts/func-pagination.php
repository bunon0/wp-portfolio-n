<div class="p-products__pagination c-pagination">
  <?php
  $args = array(
    "mid_size" => 1,
    "prev_next" => true,
    "prev_text" => "<span></span>",
    "next_text" => "<span></span>",
    // 'type'      => 'list',
    "screen_reader_text" => "ページャー"
  );
  the_posts_pagination($args);
  ?>
</div>