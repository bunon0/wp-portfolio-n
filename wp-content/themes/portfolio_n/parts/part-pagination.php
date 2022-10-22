<div class="p-products__pagination c-pagination">
  <?php
  $args = array(
    "mid_size" => 1,
    "prev_next" => true,
    "prev_text" => "<span></span>",
    "next_text" => "<span></span>",
  );
  the_posts_pagination($args);
  ?>
</div>