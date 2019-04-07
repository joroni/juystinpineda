<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'paged' => 1
  );

if ( isset($_GET["paged"]) ) {
  require("../../../../wp-blog-header.php");
  header("HTTP/1.1 200 OK");
  $args["paged"] = $_GET["paged"];
}

$query = new WP_Query($args);
$found_posts = $query->found_posts;

foreach ($query->posts as $item){
  ?>
  <div class="item">
    <?php echo $item->post_title; ?>
  </div>
  <?php
}
?>


<button class="button read_more" data-found-posts="<?php echo $found_posts; ?>" style="display:none;">Ver mais...</button>