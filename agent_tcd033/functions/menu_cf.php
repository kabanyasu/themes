<?php


//アイキャッチ画像にメッセージを追加
add_action( 'current_screen', 'add_message_to_cmb');
function add_message_to_cmb() {
  $currentScreen = get_current_screen();
  if( $currentScreen->post_type === "menu" ) {
    add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
    function add_featured_image_instruction( $content ) {
      return $content .= __('<p>Recommend image size. Width:830px Height:500px</p>', 'tcd-w');
    };
  }
}


//カスタムメタボックスを追加
function tcd_template_meta_box2() {
  add_meta_box(
    'add_custom_fields',//ID of meta box
    __('Slider image setting', 'tcd-w'),//label
    'show_tcd_template_meta_box2',//callback function
    'menu',// post type
    'normal',// context
    'high'// priority
  );
}
add_action('add_meta_boxes', 'tcd_template_meta_box2');

function show_tcd_template_meta_box2() {
  global $post;
  $options =  get_desing_plus_option();

  echo '<input type="hidden" name="custom_fields_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

  echo '<p class="ml_custom_fields_instruction">' , __('If this feild is blank, Featured image will be displayed at single page.', 'tcd-w') , '</p>';

  //画像の登録 ***********************************************************************************************************************************************************************************
  echo '<dl class="ml_custom_fields">';

  //画像1
  echo '<dt><label>' , __('Slider image', 'tcd-w') ,'1</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for slider.<br />Recommend image size. Width:830px Height:500px', 'tcd-w') , '</p>';
    mlcf_media_form('menu_sub_image1', __('Image', 'tcd-w'));
  echo '</dd>';

  //画像2
  echo '<dt><label>' , __('Slider image', 'tcd-w') ,'2</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for slider.<br />Recommend image size. Width:830px Height:500px', 'tcd-w') , '</p>';
    mlcf_media_form('menu_sub_image2', __('Image', 'tcd-w'));
  echo '</dd>';

  //画像3
  echo '<dt><label>' , __('Slider image', 'tcd-w') ,'3</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for slider.<br />Recommend image size. Width:830px Height:500px', 'tcd-w') , '</p>';
    mlcf_media_form('menu_sub_image3', __('Image', 'tcd-w'));
  echo '</dd>';

  echo '</dl>';

}

function save_custom_fields_meta_box2( $post_id ) {

  // verify nonce
  if (!isset($_POST['custom_fields_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_fields_meta_box_nonce'], basename(__FILE__))) {
    return $post_id;
  }

  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
  }

  // check permissions
  if ('menu' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id)) {
      return $post_id;
    }
  } elseif (!current_user_can('edit_post', $post_id)) {
      return $post_id;
  }

  // save or delete
  $cf_keys = array('menu_main_image', 'menu_main_image_mobile', 'menu_sub_image1', 'menu_sub_image2', 'menu_sub_image3');
  foreach ($cf_keys as $cf_key) {
    $old = get_post_meta($post_id, $cf_key, true);

    if (isset($_POST[$cf_key])) {
      $new = $_POST[$cf_key];
    } else {
      $new = '';
    }

    if ($new && $new != $old) {
      update_post_meta($post_id, $cf_key, $new);
    } elseif ('' == $new && $old) {
      delete_post_meta($post_id, $cf_key, $old);
    }
  }

}
add_action('save_post', 'save_custom_fields_meta_box2');


