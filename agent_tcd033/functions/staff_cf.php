<?php

function tcd_template_meta_box3() {
  add_meta_box(
    'add_custom_fields',//ID of meta box
    __('Staff information', 'tcd-w'),//label
    'show_tcd_template_meta_box3',//callback function
    'staff',// post type
    'normal',// context
    'high'// priority
  );
}
add_action('add_meta_boxes', 'tcd_template_meta_box3');

function show_tcd_template_meta_box3() {
  global $post;
  $options =  get_desing_plus_option();

  //スタッフ nama
  $staff_name = array( 'name' => __('Name', 'tcd-w'), 'desc' => __('Enter the name of the staff.', 'tcd-w'), 'id' => 'staff_name', 'type' => 'textarea', 'std' => '' );
  $staff_name_meta = esc_html(get_post_meta($post->ID, 'staff_name', true));

  //スタッフ post
  $staff_post = array( 'name' => __('Post', 'tcd-w'), 'desc' => __('Enter the post of the staff.', 'tcd-w'), 'id' => 'staff_post', 'type' => 'textarea', 'std' => '' );
  $staff_post_meta = esc_html(get_post_meta($post->ID, 'staff_post', true));

  //スタッフ color
  $staff_color = array( 'name' => __('Key Color', 'tcd-w'), 'desc' => __('Enter the color code. Default color: 3FA5F5', 'tcd-w'), 'id' => 'staff_color', 'type' => 'textarea', 'std' => '' );
  $staff_color_meta = esc_html(get_post_meta($post->ID, 'staff_color', true));

  //スタッフ 見出し1
  $staff_headline1 = array( 'name' => __('Catchphrase for first row', 'tcd-w'), 'desc' => __('Enter catchphrase for first row.', 'tcd-w'), 'id' => 'staff_headline1', 'type' => 'textarea', 'std' => '' );
  $staff_headline1_meta = esc_html(get_post_meta($post->ID, 'staff_headline1', true));

  //スタッフ 説明文1
  $staff_desc1 = array( 'name' => __('Description for first row', 'tcd-w'), 'desc' => __('Enter description for first row.', 'tcd-w'), 'id' => 'staff_desc1', 'type' => 'textarea', 'std' => '' );
  $staff_desc1_meta = esc_html(get_post_meta($post->ID, 'staff_desc1', true));

  //スタッフ 見出し2
  $staff_headline2 = array( 'name' => __('Catchphrase for second row', 'tcd-w'), 'desc' => __('Enter catchphrase for second row.', 'tcd-w'), 'id' => 'staff_headline2', 'type' => 'textarea', 'std' => '' );
  $staff_headline2_meta = esc_html(get_post_meta($post->ID, 'staff_headline2', true));

  //スタッフ 説明文2
  $staff_desc2 = array( 'name' => __('Description for second row', 'tcd-w'), 'desc' => __('Enter description for second row.', 'tcd-w'), 'id' => 'staff_desc2', 'type' => 'textarea', 'std' => '' );
  $staff_desc2_meta = esc_html(get_post_meta($post->ID, 'staff_desc2', true));

  //スタッフ 見出し3
  $staff_headline3 = array( 'name' => __('Catchphrase for third row', 'tcd-w'), 'desc' => __('Enter catchphrase for third row.', 'tcd-w'), 'id' => 'staff_headline3', 'type' => 'textarea', 'std' => '' );
  $staff_headline3_meta = esc_html(get_post_meta($post->ID, 'staff_headline3', true));

  //スタッフ 説明文3
  $staff_desc3 = array( 'name' => __('Description for third row', 'tcd-w'), 'desc' => __('Enter description for third row.', 'tcd-w'), 'id' => 'staff_desc3', 'type' => 'textarea', 'std' => '' );
  $staff_desc3_meta = esc_html(get_post_meta($post->ID, 'staff_desc3', true));

  //スタッフ 見出し4
  $staff_headline4 = array( 'name' => __('Catchphrase for fourth row', 'tcd-w'), 'desc' => __('Enter catchphrase for fourth row.', 'tcd-w'), 'id' => 'staff_headline4', 'type' => 'textarea', 'std' => '' );
  $staff_headline4_meta = esc_html(get_post_meta($post->ID, 'staff_headline4', true));

  //スタッフ 見出し5
  $staff_headline5 = array( 'name' => __('Catchphrase for fifth row', 'tcd-w'), 'desc' => __('Enter catchphrase for fifth row.', 'tcd-w'), 'id' => 'staff_headline5', 'type' => 'textarea', 'std' => '' );
  $staff_headline5_meta = esc_html(get_post_meta($post->ID, 'staff_headline5', true));

  //スタッフ 説明文5
  $staff_desc5 = array( 'name' => __('Description for fifth row', 'tcd-w'), 'desc' => __('Enter description for fifth row.', 'tcd-w'), 'id' => 'staff_desc5', 'type' => 'textarea', 'std' => '' );
  $staff_desc5_meta = esc_html(get_post_meta($post->ID, 'staff_desc5', true));

  //スタッフ 見出し5-2
  $staff_headline52 = array( 'name' => __('Catchphrase for fifth row', 'tcd-w'), 'desc' => __('Enter catchphrase for fifth row.', 'tcd-w'), 'id' => 'staff_headline52', 'type' => 'textarea', 'std' => '' );
  $staff_headline52_meta = esc_html(get_post_meta($post->ID, 'staff_headline52', true));

  //スタッフ 説明文5-2
  $staff_desc52 = array( 'name' => __('Description for fifth row', 'tcd-w'), 'desc' => __('Enter description for fifth row.', 'tcd-w'), 'id' => 'staff_desc52', 'type' => 'textarea', 'std' => '' );
  $staff_desc52_meta = esc_html(get_post_meta($post->ID, 'staff_desc52', true));

  //スタッフ 見出し6
  $staff_headline6 = array( 'name' => __('Catchphrase for sixth row', 'tcd-w'), 'desc' => __('Enter catchphrase for sixth row.', 'tcd-w'), 'id' => 'staff_headline6', 'type' => 'textarea', 'std' => '' );
  $staff_headline6_meta = esc_html(get_post_meta($post->ID, 'staff_headline6', true));

  //スタッフ 見出し7
  $staff_headline7 = array( 'name' => __('Catchphrase for seventh row', 'tcd-w'), 'desc' => __('Enter catchphrase for seventh row.', 'tcd-w'), 'id' => 'staff_headline7', 'type' => 'textarea', 'std' => '' );
  $staff_headline7_meta = esc_html(get_post_meta($post->ID, 'staff_headline7', true));

  //スタッフ 説明文7
  $staff_desc7 = array( 'name' => __('Description for seventh row', 'tcd-w'), 'desc' => __('Enter description for seventh row.', 'tcd-w'), 'id' => 'staff_desc7', 'type' => 'textarea', 'std' => '' );
  $staff_desc7_meta = esc_html(get_post_meta($post->ID, 'staff_desc7', true));

  //スタッフ 見出し8
  $staff_headline8 = array( 'name' => __('Catchphrase for eighth row', 'tcd-w'), 'desc' => __('Enter catchphrase for eighth row.', 'tcd-w'), 'id' => 'staff_headline8', 'type' => 'textarea', 'std' => '' );
  $staff_headline8_meta = esc_html(get_post_meta($post->ID, 'staff_headline8', true));

  //スタッフ 説明文8
  $staff_desc8 = array( 'name' => __('Description for eighth row', 'tcd-w'), 'desc' => __('Enter description for eighth row.', 'tcd-w'), 'id' => 'staff_desc8', 'type' => 'textarea', 'std' => '' );
  $staff_desc8_meta = esc_html(get_post_meta($post->ID, 'staff_desc8', true));


  // ---------------------------------------------------------------------

  echo '<input type="hidden" name="custom_fields_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

  //メイン画像の登録 ***********************************************************************************************************************************************************************************
  echo '<dl class="ml_custom_fields" id="ml_custom_fields_box0">';

  echo '<dt><label>' , __('Main image', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for page header.<br />Recommend image size. Width:1450 Height:400px', 'tcd-w') , '</p>';
    mlcf_media_form('page_main_image', __('Image', 'tcd-w'));
  echo '</dd>';

  echo '<dt><label>' , __('Main image for mobile device', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('If this image is not registered, images that were previously registered will be displayed.<br />Recommend image size. Width:800px Height:Free size', 'tcd-w') , '</p>';
    mlcf_media_form('page_main_image_mobile', __('Image', 'tcd-w'));
  echo '</dd>';

  echo '</dl>';



  echo '<dl class="ml_custom_fields">';

  //Staff Name
  echo '<dt><label for="' , $staff_name['id'] , '">' , $staff_name['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_name['desc'] , '</p>';
  echo '<textarea name="', $staff_name['id'], '" id="', $staff_name['id'], '" cols="60" rows="4" style="width:97%">', $staff_name_meta ? $staff_name_meta : $staff_name['std'], '</textarea>';

  //Staff Post
  echo '<dt><label for="' , $staff_post['id'] , '">' , $staff_post['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_post['desc'] , '</p>';
  echo '<textarea name="', $staff_post['id'], '" id="', $staff_post['id'], '" cols="60" rows="4" style="width:97%">', $staff_post_meta ? $staff_post_meta : $staff_post['std'], '</textarea>';

  //Staff Color
  echo '<dt><label for="' , $staff_color['id'] , '">' , $staff_color['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_color['desc'] , '</p>';
  echo '<input name="', $staff_color['id'], '" id="', $staff_color['id'], '" size="10" style="width:15%" value="', $staff_color_meta ? $staff_color_meta : $staff_color['std'], '" type="text">';

  //１段目　見出し
  echo '<dt><label for="' , $staff_headline1['id'] , '">' , $staff_headline1['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline1['desc'] , '</p>';
  echo '<textarea name="', $staff_headline1['id'], '" id="', $staff_headline1['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline1_meta ? $staff_headline1_meta : $staff_headline1['std'], '</textarea>';

  //１段目　説明文
  echo '<dt><label for="' , $staff_desc1['id'] , '">' , $staff_desc1['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc1['desc'] , '</p>';
  echo '<textarea name="', $staff_desc1['id'], '" id="', $staff_desc1['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc1_meta ? $staff_desc1_meta : $staff_desc1['std'], '</textarea>';

  //１段目　画像
  echo '<dt><label>' , __('Image for first row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for first row.<br />Recommend image size. Width:1400px Height:390px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image1', __('Image', 'tcd-w'));
  echo '</dd>';

  //２段目　見出し
  echo '<dt><label for="' , $staff_headline2['id'] , '">' , $staff_headline2['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline2['desc'] , '</p>';
  echo '<textarea name="', $staff_headline2['id'], '" id="', $staff_headline2['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline2_meta ? $staff_headline2_meta : $staff_headline2['std'], '</textarea>';

  //２段目　説明文
  echo '<dt><label for="' , $staff_desc2['id'] , '">' , $staff_desc2['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc2['desc'] , '</p>';
  echo '<textarea name="', $staff_desc2['id'], '" id="', $staff_desc2['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc2_meta ? $staff_desc2_meta : $staff_desc2['std'], '</textarea>';

  //２段目　画像
  echo '<dt><label>' , __('Image for second row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for second row.<br />Recommend image size. Width:540px Height:340px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image2', __('Image', 'tcd-w'));
  echo '</dd>';

  //３段目　見出し
  echo '<dt><label for="' , $staff_headline3['id'] , '">' , $staff_headline3['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline3['desc'] , '</p>';
  echo '<textarea name="', $staff_headline3['id'], '" id="', $staff_headline3['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline3_meta ? $staff_headline3_meta : $staff_headline3['std'], '</textarea>';

  //３段目　説明文
  echo '<dt><label for="' , $staff_desc3['id'] , '">' , $staff_desc3['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc3['desc'] , '</p>';
  echo '<textarea name="', $staff_desc3['id'], '" id="', $staff_desc3['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc3_meta ? $staff_desc3_meta : $staff_desc3['std'], '</textarea>';

  //３段目　画像
  echo '<dt><label>' , __('Image for third row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for third row.<br />Recommend image size. Width:540px Height:340px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image3', __('Image', 'tcd-w'));
  echo '</dd>';

  //４段目　見出し
  echo '<dt><label for="' , $staff_headline4['id'] , '">' , $staff_headline4['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline4['desc'] , '</p>';
  echo '<textarea name="', $staff_headline4['id'], '" id="', $staff_headline4['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline4_meta ? $staff_headline4_meta : $staff_headline4['std'], '</textarea>';

  //４段目　画像
  echo '<dt><label>' , __('Image for fourth row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for fourth row.<br />Recommend image size. Width:224px Height:224px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image4', __('Image', 'tcd-w'));
  echo '</dd>';

  //5段目　見出し
  echo '<dt><label for="' , $staff_headline5['id'] , '">' , $staff_headline5['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline5['desc'] , '</p>';
  echo '<textarea name="', $staff_headline5['id'], '" id="', $staff_headline5['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline5_meta ? $staff_headline5_meta : $staff_headline5['std'], '</textarea>';

  //5段目　説明文
  echo '<dt><label for="' , $staff_desc5['id'] , '">' , $staff_desc5['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc5['desc'] , '</p>';
  echo '<textarea name="', $staff_desc5['id'], '" id="', $staff_desc5['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc5_meta ? $staff_desc5_meta : $staff_desc5['std'], '</textarea>';

  //5段目　見出し
  echo '<dt><label for="' , $staff_headline52['id'] , '">' , $staff_headline52['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline52['desc'] , '</p>';
  echo '<textarea name="', $staff_headline52['id'], '" id="', $staff_headline52['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline52_meta ? $staff_headline52_meta : $staff_headline52['std'], '</textarea>';

  //5段目　説明文
  echo '<dt><label for="' , $staff_desc52['id'] , '">' , $staff_desc52['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc52['desc'] , '</p>';
  echo '<textarea name="', $staff_desc52['id'], '" id="', $staff_desc52['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc52_meta ? $staff_desc52_meta : $staff_desc52['std'], '</textarea>';

  //6段目　見出し
  echo '<dt><label for="' , $staff_headline6['id'] , '">' , $staff_headline6['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline6['desc'] , '</p>';
  echo '<textarea name="', $staff_headline6['id'], '" id="', $staff_headline6['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline6_meta ? $staff_headline6_meta : $staff_headline6['std'], '</textarea>';

  //6段目　画像
  echo '<dt><label>' , __('Image for sixth row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for sixth row.<br />Recommend image size. Width:1400px Height:390px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image6', __('Image', 'tcd-w'));
  echo '</dd>';

  //7段目　見出し
  echo '<dt><label for="' , $staff_headline7['id'] , '">' , $staff_headline7['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline7['desc'] , '</p>';
  echo '<textarea name="', $staff_headline7['id'], '" id="', $staff_headline7['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline7_meta ? $staff_headline7_meta : $staff_headline7['std'], '</textarea>';

  //7段目　説明文
  echo '<dt><label for="' , $staff_desc7['id'] , '">' , $staff_desc7['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc7['desc'] , '</p>';
  echo '<textarea name="', $staff_desc7['id'], '" id="', $staff_desc7['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc7_meta ? $staff_desc7_meta : $staff_desc7['std'], '</textarea>';

  //7段目　画像
  echo '<dt><label>' , __('Image for seventh row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for seventh row.<br />Recommend image size. Width:540px Height:340px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image7', __('Image', 'tcd-w'));
  echo '</dd>';

  //8段目　見出し
  echo '<dt><label for="' , $staff_headline8['id'] , '">' , $staff_headline8['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_headline8['desc'] , '</p>';
  echo '<textarea name="', $staff_headline8['id'], '" id="', $staff_headline8['id'], '" cols="60" rows="4" style="width:97%">', $staff_headline8_meta ? $staff_headline8_meta : $staff_headline8['std'], '</textarea>';

  //8段目　説明文
  echo '<dt><label for="' , $staff_desc8['id'] , '">' , $staff_desc8['name'] , '</label></dt>';
  echo '<dd><p class="desc">' , $staff_desc8['desc'] , '</p>';
  echo '<textarea name="', $staff_desc8['id'], '" id="', $staff_desc8['id'], '" cols="60" rows="4" style="width:97%">', $staff_desc8_meta ? $staff_desc8_meta : $staff_desc8['std'], '</textarea>';

  //8段目　画像
  echo '<dt><label>' , __('Image for eighth row', 'tcd-w') ,'</label><dt>';
  echo '<dd><p class="desc">' , __('Register image for eighth row.<br />Recommend image size. Width:540px Height:340px', 'tcd-w') , '</p>';
    mlcf_media_form('staff_image8', __('Image', 'tcd-w'));
  echo '</dd>';

  echo '</dl>';
  
}

function save_custom_fields_meta_box3( $post_id ) {

  // verify nonce
  if (!isset($_POST['custom_fields_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_fields_meta_box_nonce'], basename(__FILE__))) {
    return $post_id;
  }

  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
  }

  // check permissions
  if ('page' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id)) {
      return $post_id;
    }
  } elseif (!current_user_can('edit_post', $post_id)) {
      return $post_id;
  }

  // save or delete
  $cf_keys = array('page_main_image', 'page_main_image_mobile', 'staff_image1', 'staff_image2', 'staff_image3', 'staff_image4', 'staff_image5', 'staff_image6', 'staff_image7', 'staff_image8', 'staff_image9', 'staff_headline1', 'staff_headline2', 'staff_headline3', 'staff_headline4', 'staff_headline5', 'staff_headline52', 'staff_headline6', 'staff_headline7', 'staff_headline8', 'staff_desc1' , 'staff_desc2', 'staff_desc3', 'staff_desc4', 'staff_desc5', 'staff_desc52', 'staff_desc6', 'staff_desc7', 'staff_desc8', 'staff_name', 'staff_post', 'staff_color');
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
add_action('save_post', 'save_custom_fields_meta_box3');

