<?php $options = get_desing_plus_option(); ?>
<a href="<?php echo esc_url(get_permalink()); ?>" style="color:inherit; text-decoration:none">
  <article class="row" id="post-<?php the_ID(); ?>" style="margin-bottom:20px; padding-left:15px; padding-right:15px;">
    <?php 
      $url = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail-size', true);
      echo "<div class='col-xs-30 heightaswidth' style='background-image:url($url[0]); height:100px' class='blog-item-featured'></div>";

      echo "<div class='col-xs-90'>";
      echo "<span class='fa fa-clock-o'></span><span class='timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>";
      echo "<b style='display:block; margin-bottom:10px; margin-top:10px'>" . get_the_title() . "</b>";
      echo "</div>";
    ?>
  </article>
</a>