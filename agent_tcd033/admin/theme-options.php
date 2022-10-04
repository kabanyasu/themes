<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * オプション初期値
 * @var array 
 */
global $dp_default_options;
$dp_default_options = array(
  'testmultiupload' => '',

	'pickedcolor1' => '3FA5F5',
	'pickedcolor2' => '2C73AB',
	'logotop' => 0,
	'logoleft' => 0,
  'logotop2' => 0,
  'logoleft2' => 0,
	'content_font_size' => '14',
	'show_date' => 1,
	'show_category' => 1,
	'show_tag' => 1,
	'show_comment' => 1,
	'show_author' => 1,
	'show_trackback' => 1,
	'show_related_post' => 1,
	'show_next_post' => 1,
	'show_thumbnail' => 1,
	'show_bookmark' => 1,

	'use_ogp' => 0,
	'fb_app_id' => '',
	'ogp_image' => '',
	'use_twitter_card' => 0,
	'twitter_account_name' => '',

	'show_sns_top' => 1,
	'show_sns_btm' => 1,
	'sns_type_top' => 'type1',
	'sns_type_btm' => 'type1',
	'show_twitter_top' => 1,
	'show_fblike_top' => 1,
	'show_fbshare_top' => 1,
	'show_google_top' => 1,
	'show_hatena_top' => 1,
	'show_pocket_top' => 1,
	'show_feedly_top' => 1,
	'show_rss_top' => 1,
	'show_pinterest_top' => 1,
	'show_twitter_btm' => 1,
	'show_fblike_btm' => 1,
	'show_fbshare_btm' => 1,
	'show_google_btm' => 1,
	'show_hatena_btm' => 1,
	'show_pocket_btm' => 1,
	'show_feedly_btm' => 1,
	'show_rss_btm' => 1,
	'show_pinterest_btm' => 1,
	'twitter_info' => '',

  'use_break_word' => 1,
	'css_code' => '',
  'custom_head' => '',
	'twitter_url' => '',
	'facebook_url' => '',
  'insta_url' => '',
  'pinterest_url' => '',
  'flickr_url' => '',
  'tumblr_url' => '',
	'show_rss' => 1,

  'fixed_header' => 1,

  'header_btnlabel' => '',
  'header_url' => '',

  'top_main_image1' => false,
  'top_main_image2' => false,
  'top_main_image3' => false,
  'top_main_image4' => false,
  'top_main_image5' => false,

  'slider_image1' => false,
  'slider_image2' => false,
  'slider_image3' => false,
  'slider_url1' => '',
  'slider_url2' => '',
  'slider_url3' => '', 

  'top_content1_headline' => '',
  'top_content1_btnlabel' => '',
  'top_content1_btnsize' => 140,
  'top_content1_btnsize_mobile' => 100,
  'top_content1_dropshadow_h' => '0', 
  'top_content1_dropshadow_v' => '0',
  'top_content1_dropshadow_b' => '10',
  'top_content1_dropshadow_c' => '666666',
  'top_content1_color' => 'FFFFFF',
  'top_content1_btncolor' => '3FA5F5',
  'top_content1_btnbgcolor' => 'FFFFFF',

  'top_content2_headline' => '',
  'top_content2_bodytext' => '',

  'top_content3_headline' => '',
  'top_content3_headline_sub' => '',
  'top_content3_banner_headline1' => '',
  'top_content3_banner_body1' => '',
  'top_content3_banner_btnlabel1' => '',
  'top_content3_banner_url1' => '',
  'top_content3_banner_image1' => false,
  'top_content3_banner_headline2' => '',
  'top_content3_banner_body2' => '',
  'top_content3_banner_btnlabel2' => '',
  'top_content3_banner_url2' => '',
  'top_content3_banner_image2' => false,
  'top_content3_banner_headline3' => '',
  'top_content3_banner_body3' => '',
  'top_content3_banner_btnlabel3' => '',
  'top_content3_banner_url3' => '',
  'top_content3_banner_image3' => false,

  'top_content4_headline' => '',
  'top_content4_headline_sub' => '',
  'top_content4_fontsize' => '16',
  'top_content4_showdate' => 1,
  'top_content4_showcate' => 1,
  'top_content4_indexurl' => '',
  'top_content4_indexlabel' => '',

  'top_content5_headline' => '',
  'top_content5_headline_sub' => '',
  'top_content5_banner_headline1' => '',
  'top_content5_banner_body1' => '',
  'top_content5_banner_btnlabel1' => '',
  'top_content5_banner_btnlabel_sub1' => '',
  'top_content5_banner_url1' => '',
  'top_content5_banner_image1' => false,
  'top_content5_banner_headline2' => '',
  'top_content5_banner_body2' => '',
  'top_content5_banner_btnlabel2' => '',
  'top_content5_banner_btnlabel_sub2' => '',
  'top_content5_banner_url2' => '',
  'top_content5_banner_image2' => false,
  'top_content5_banner_headline3' => '',
  'top_content5_banner_body3' => '',
  'top_content5_banner_btnlabel3' => '',
  'top_content5_banner_btnlabel_sub3' => '',
  'top_content5_banner_url3' => '',
  'top_content5_banner_image3' => false,
  'pickedcolor3' => '2C73AB',
  'pickedcolor4' => '2C73AB',
  'pickedcolor5' => '2C73AB',

  'top_content6_contents' => 'type1',
  'number_posts' => '6',
  'order_by' => 'date',

  'top_content6_banner_image1' => false,
  'top_content6_banner_url1' => '',
  'top_content6_banner_image2' => false,
  'top_content6_banner_url2' => '',
  'top_content6_banner_image3' => false,
  'top_content6_banner_url3' => '',
  'top_content6_banner_image4' => false,
  'top_content6_banner_url4' => '',
  'top_content6_banner_image5' => false,
  'top_content6_banner_url5' => '',

  'footer_image' => false,
  'footer_headline' => '',
  'footer_btnlabel' => '',
  'footer_url' => '',
  'footer_logo' => false,

  'contact_form_title' => 'Contact form',
  'contact_form_json' => '[]',
  'contact_form_conversion' => '',

  'blog_header_image' => false,

  'staff_headline' => '',
  'staff_headline_fontsize' => '48',
  'staff_desc' => '',
  'staff_desc_fontsize' => '14',

  'archive_headline' => '',
  'archive_fontsize' => '16',
  'archive_showdate' => 1,
  'archive_showcate' => 1,

  'single_fontsize' => '32',

  //'archive_image' => false

// フッターの固定メニュー
  //'show_footer_bar' => 1,
  'footer_bar_display' => 'type3',
  'footer_bar_tp' => 0.8,
  'footer_bar_bg' => 'FFFFFF',
  'footer_bar_border' => 'DDDDDD',
  'footer_bar_color' => '000000',
  'footer_bar_btns' => array(
    array(
      'type' => 'type1',
      'label' => '',
      'url' => '',
      'number' => '',
      'target' => 0,
      'icon' => 'file-text'
    )
  )
);

/**
 * Design Plusのオプションを返す
 * @global array $dp_default_options
 * @return array 
 */
function get_desing_plus_option(){
	global $dp_default_options;
	return shortcode_atts($dp_default_options, get_option('dp_options', array()));
}


// 登録
function theme_options_init(){
 register_setting( 'design_plus_options', 'dp_options', 'theme_options_validate' );
}


// ロード
function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'tcd-w' ), __( 'TCD Theme Options', 'tcd-w' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

// トップページ第6ブロックの表示内容
global $top_content6_contents_options;
$top_content6_contents_options = array(
 'type1' => array(
  'value' => 'type1',
  'label' => __( 'Posts', 'tcd-w' )
 ),
 'type2' => array(
  'value' => 'type2',
  'label' => __( 'Images', 'tcd-w' )
 )
);

// トップページ第6ブロック postの並び順
global $order_by_options;
$order_by_options = array(
 'type1' => array(
  'value' => 'type1',
  'label' => __( 'Date', 'tcd-w' )
 ),
 'type2' => array(
  'value' => 'type2',
  'label' => __( 'Random', 'tcd-w' )
 )
);


/**
 * ソーシャルボタンの設定
 * @var array 
 */
global $sns_type_top_options;// 記事上ボタンタイプ
$sns_type_top_options = array(
'type1' => array( 'value' => 'type1', 'label' => __( 'style1', 'tcd-w' )),
'type2' => array( 'value' => 'type2', 'label' => __( 'style2', 'tcd-w' )),
'type3' => array( 'value' => 'type3', 'label' => __( 'style3', 'tcd-w' )),
'type4' => array( 'value' => 'type4', 'label' => __( 'style4', 'tcd-w' )),
'type5' => array( 'value' => 'type5', 'label' => __( 'style5', 'tcd-w' ))
);

global $sns_type_btm_options;// 記事下ボタンタイプ
$sns_type_btm_options = array(
'type1' => array( 'value' => 'type1', 'label' => __( 'style1', 'tcd-w' )),
'type2' => array( 'value' => 'type2', 'label' => __( 'style2', 'tcd-w' )),
'type3' => array( 'value' => 'type3', 'label' => __( 'style3', 'tcd-w' )),
'type4' => array( 'value' => 'type4', 'label' => __( 'style4', 'tcd-w' )),
'type5' => array( 'value' => 'type5', 'label' => __( 'style5', 'tcd-w' ))
);


// フッターの固定メニュー 表示タイプ
global $footer_bar_display_options;
$footer_bar_display_options = array(
 'type1' => array('value' => 'type1', 'label' => __( 'Fade In', 'tcd-w' )),
 'type2' => array('value' => 'type2', 'label' => __( 'Slide In', 'tcd-w' )),
 'type3' => array('value' => 'type3', 'label' => __( 'Hide', 'tcd-w' ))
);

// フッターの固定メニュー ボタンのタイプ
global $footer_bar_button_options;
$footer_bar_button_options = array(
 'type1' => array('value' => 'type1', 'label' => __( 'Default', 'tcd-w' )),
 'type2' => array('value' => 'type2', 'label' => __( 'Share', 'tcd-w' )),
 'type3' => array('value' => 'type3', 'label' => __( 'Telephone', 'tcd-w' ))
);

// フッターの固定メニューのアイコン
global $footer_bar_icon_options;
$footer_bar_icon_options = array(
 'file-text' => array('value' => 'file-text', 'label' => __( 'Document', 'tcd-w' )),
 'share-alt' => array('value' => 'share-alt', 'label' => __( 'Share', 'tcd-w' )),
 'phone' => array('value' => 'phone', 'label' => __( 'Telephone', 'tcd-w' )),
 'envelope' => array('value' => 'envelope', 'label' => __( 'Envelope', 'tcd-w' )),
 'tag' => array('value' => 'tag', 'label' => __( 'Tag', 'tcd-w' )),
 'pencil' => array('value' => 'pencil', 'label' => __( 'Pencil', 'tcd-w' ))
);


// テーマオプション画面の作成
function theme_options_do_page() {
 global $dp_upload_error, $top_content6_contents_options, $order_by_options, $sns_type_top_options, $sns_type_btm_options, $footer_bar_icon_options, $footer_bar_button_options, $footer_bar_display_options;
 $options = get_desing_plus_option(); 

 if ( ! isset( $_REQUEST['settings-updated'] ) )
  $_REQUEST['settings-updated'] = false;

?>

<div class="wrap" ng-app="optionsApp">

 <?php echo "<h2>" . __( 'TCD Theme Options', 'tcd-w' ) . "</h2>"; ?>

 <?php // 更新時のメッセージ
       if ( false !== $_REQUEST['settings-updated'] ) :
 ?>
 <div class="updated fade"><p><strong><?php _e('Updated', 'tcd-w');  ?></strong></p></div>
 <?php endif; ?>

 <?php /* ファイルアップロード時のメッセージ */ if(!empty($dp_upload_error['message'])): ?>
  <?php if($dp_upload_error['error']): ?>
   <div id="error" class="error"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php else: ?>
   <div id="message" class="updated fade"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php endif; ?>
 <?php endif; ?>
 
 <div id="my_theme_option" class="cf">

  <div id="my_theme_left">
   <ul id="theme_tab" class="cf">
    <li><a href="#tab-content1"><?php _e('Basic', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content2"><?php _e('Header Logo Setting', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content3"><?php _e('Index Page1', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content4"><?php _e('Index Page2', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content5"><?php _e('Index Page3', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content6"><?php _e('Index Page4', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content7"><?php _e('Index Page5', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content8"><?php _e('Index Page6', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content9"><?php _e('Footer Setting', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content10"><?php _e('Single page Setting', 'tcd-w');  ?></a></li>
    <li><a href="#tab-content11"><?php _e('Other page Setting', 'tcd-w');  ?></a></li>
   </ul>
  </div>

  <div id="my_theme_right">

  <form method="post" action="options.php" enctype="multipart/form-data">

  <?php settings_fields( 'design_plus_options' ); ?>

  <div id="tab-panel">

  <!-- #tab-content1 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content1">

    <!--
    <div class="upload-group theme_option_field cf">
      <h3 class="theme_option_headline"><?php _e('Multi upload demo', 'tcd-w');  ?></h3>
      <div class="upload-preview"></div>
      <input type="text" style="display:none" name="dp_options[testmultiupload]" value="<?php esc_attr_e( $options['testmultiupload'] ); ?>">
      <button class="set_custom_images button-ml" data-multiple="true"><?php _e('Upload', 'tcd-w');  ?></button>
      <button class="clear_custom_images button-ml"><?php _e('Clear', 'tcd-w');  ?></button>
      <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div> -->

   <?php // サイトカラー ?>
   <div id="color_pattern">
    <div class="theme_option_field cf">
     <h3 class="theme_option_headline"><?php _e('Color setting', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('Primary color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color1" class="color" name="dp_options[pickedcolor1]" value="<?php esc_attr_e( $options['pickedcolor1'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color1').color.fromString('3FA5F5')">
     <h4 class="theme_option_headline2"><?php _e('Secondary color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color2" class="color" name="dp_options[pickedcolor2]" value="<?php esc_attr_e( $options['pickedcolor2'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color2').color.fromString('2C73AB')">
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // フォントサイズ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Font size', 'tcd-w');  ?></h3>
    <p><?php _e('Font size of single page and wp-page.', 'tcd-w');  ?></p>
    <input id="dp_options[content_font_size]" class="font_size hankaku" type="text" name="dp_options[content_font_size]" value="<?php esc_attr_e( $options['content_font_size'] ); ?>" /><span>px</span>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // 投稿者名・タグ・コメント ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Display Setup', 'tcd-w');  ?></h3>
    <ul>
     <li><label><input id="dp_options[show_date]" name="dp_options[show_date]" type="checkbox" value="1" <?php checked( '1', $options['show_date'] ); ?> /> <?php _e('Display date', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_category]" name="dp_options[show_category]" type="checkbox" value="1" <?php checked( '1', $options['show_category'] ); ?> /> <?php _e('Display category', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_tag]" name="dp_options[show_tag]" type="checkbox" value="1" <?php checked( '1', $options['show_tag'] ); ?> /> <?php _e('Display tags', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_author]" name="dp_options[show_author]" type="checkbox" value="1" <?php checked( '1', $options['show_author'] ); ?> /> <?php _e('Display author', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_comment]" name="dp_options[show_comment]" type="checkbox" value="1" <?php checked( '1', $options['show_comment'] ); ?> /> <?php _e('Display comments and trackbacks', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_thumbnail]" name="dp_options[show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $options['show_thumbnail'] ); ?> /> <?php _e('Display thumbnail at single post page', 'tcd-w');  ?></label></li>
     <!--<li><label><input id="dp_options[show_trackback]" name="dp_options[show_trackback]" type="checkbox" value="1" <?php checked( '1', $options['show_trackback'] ); ?> /> <?php _e('Display trackbacks at single post page', 'tcd-w');  ?></label></li>-->
     <li><label><input id="dp_options[show_related_post]" name="dp_options[show_related_post]" type="checkbox" value="1" <?php checked( '1', $options['show_related_post'] ); ?> /> <?php _e('Display related post at single post page', 'tcd-w');  ?></label></li>
     <li><label><input id="dp_options[show_next_post]" name="dp_options[show_next_post]" type="checkbox" value="1" <?php checked( '1', $options['show_next_post'] ); ?> /> <?php _e('Display next previous post link at single post page', 'tcd-w');  ?></label></li>
    </ul>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // Break-wordを使用する ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Use "word-wrap:break-word;" CSS for title and excerpt', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[use_break_word]" name="dp_options[use_break_word]" type="checkbox" value="1" <?php checked( '1', $options['use_break_word'] ); ?> /> <?php _e('Use break-word', 'tcd-w');  ?></label></li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // ユーザーCSS用の自由記入欄 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for user definition CSS.', 'tcd-w');  ?></h3>
    <p><?php _e('Code example:<br /><strong>.example { font-size:12px; }</strong>', 'tcd-w');  ?></p>
    <textarea id="dp_options[css_code]" class="large-text" cols="50" rows="10" name="dp_options[css_code]"><?php echo esc_textarea( $options['css_code'] ); ?></textarea>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // custom head/script ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e( 'Free input area for user definition scripts.', 'tcd-w' ); ?></h3>
    <p><?php esc_html_e( 'Custom Script will output the end of the <head> tag. Please insert scripts (i.e. Google Analytics script), including <script>tag.', 'tcd-w' ); ?></p>
    <textarea id="dp_options[custom_head]" class="large-text" cols="50" rows="10" name="dp_options[custom_head]"><?php echo esc_textarea( $options['custom_head'] ); ?></textarea>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // fixed header ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Fixed header', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[fixed_header]" name="dp_options[fixed_header]" type="checkbox" value="1" <?php checked( '1', $options['fixed_header'] ); ?> /> <?php _e('Fixed header', 'tcd-w');  ?></label></li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Header button', 'tcd-w');  ?></h3>
    <p><?php _e('To display the button to the right of the header bar, enter the button label and the destination URL.', 'tcd-w');  ?></p>
    <h4 class="theme_option_headline2"><?php _e('Button label', 'tcd-w');  ?></h4>
    <p><?php _e('Please enter the string to be displayed on the button.', 'tcd-w');  ?></p>
    <input id="dp_options[header_btnlabel]" class="regular-text" type="text" name="dp_options[header_btnlabel]" value="<?php esc_attr_e( $options['header_btnlabel'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h4>
    <p><?php _e('Leave this field blank if you don\'t want to use link button.', 'tcd-w');  ?></p>
    <input id="dp_options[header_url]" class="regular-text" type="text" name="dp_options[header_url]" value="<?php esc_attr_e( $options['header_url'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  </div><!-- END #tab-content1 -->




  <!-- #tab-content2 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content2">

   <?php // ステップ１ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 1 : Upload image to use for logo.', 'tcd-w');  ?></h3>
    <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2.', 'tcd-w');  ?></p>
    <div class="button_area cf">
     <label for="dp_image"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
     <input type="file" name="dp_image" id="dp_image" value="" />
     <input type="submit" class="button-ml" value="<?php _e('Upload', 'tcd-w');  ?>" />
    </div>
    <?php if(dp_logo_exists()): $info = dp_logo_info(); ?>
    <div class="uploaded_logo">
     <h4><?php _e('Uploaded image.', 'tcd-w');  ?></h4>
     <div class="uploaded_logo_image" id="original_logo_size">
      <?php dp_logo_img_tag(false, '', '', 9999); ?>
     </div>
     <p><?php printf(__('Original image size : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></p>
    </div>
    <?php else: ?>
    <div class="uploaded_logo">
     <h4><?php _e('The image has not been uploaded yet.<br />A normal text will be used for a site logo.', 'tcd-w');  ?></h4>
    </div>
    <?php endif; ?>
   </div>

   <?php // ステップ２ ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 2 : Resize uploaded image.', 'tcd-w');  ?></h3>
    <p><?php _e('You can resize uploaded image.', 'tcd-w');  ?></p>
    <div class="uploaded_logo">
     <h4><?php _e('Please drag the range to cut off.', 'tcd-w');  ?></h4>
     <div class="uploaded_logo_image">
      <?php dp_logo_resize_base(9999); ?>
     </div>
     <div class="resize_amount">
      <label><?php _e('Ratio', 'tcd-w');  ?>: <input type="text" name="dp_resize_ratio" id="dp_resize_ratio" value="100" />%</label>
      <label><?php _e('Width', 'tcd-w');  ?>: <input type="text" name="dp_resized_width" id="dp_resized_width" />px</label>
      <label><?php _e('Height', 'tcd-w');  ?>: <input type="text" name="dp_resized_height" id="dp_resized_height" />px</label>
     </div>
     <div id="resize_button_area">
      <input type="submit" class="button-primary" value="<?php _e('Resize', 'tcd-w'); ?>" />
     </div>
    </div>
    <?php if($info = dp_logo_info(true)): ?>
    <div class="uploaded_logo">
     <h4><?php printf(__('Resized image : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></h4>
     <div class="uploaded_logo_image">
      <?php dp_logo_img_tag(true, '', '', 9999); ?>
     </div>
    </div>
    <?php endif; ?>
   </div>
   <?php endif; ?>

   <?php // ステップ３ ?>
   <div style="display:none;">
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <p><?php _e('Drag the logo image and adjust the position.', 'tcd-w');  ?></p>
    <div id="tcd-w-logo-adjuster" class="ratio-<?php echo '760-760'; ?>">
     <?php if(dp_logo_resize_tag(760, 760, $options['logotop'], $options['logoleft'])): ?>
     <?php else: ?>
     <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
     <?php endif; ?>
    </div>
    <div class="hide">
     <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop]" id="dp-options-logotop" value="<?php esc_attr_e( $options['logotop'] ); ?>" />px </label>
     <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft]" id="dp-options-logoleft" value="<?php esc_attr_e( $options['logoleft'] ); ?>" />px </label>
     <input type="button" class="button" id="dp-adjust-realvalue" value="adjust" />
    </div>
    <p><input type="submit" class="button-ml" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
   </div>
   <?php endif; ?>
   </div>

   <?php // 画像の削除 ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
    <p><a class="button-ml" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content2 -->




  <!-- #tab-content3 トップページ1　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content3">
  <?php // main image -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('First block of index page - Setting for header slider', 'tcd-w');  ?></h3>

     <h4 class="theme_option_headline2"><?php _e('Slider setting', 'tcd-w');  ?></h4>
      <?php for($i = 1; $i <= 3; $i++): ?>
      <div class="sub_box cf"> 
       <h5 class="theme_option_headline2"><?php _e('Slider image', 'tcd-w');  ?><?php echo $i; ?></h5>
       <p><?php _e('Recommend image size. Width:1600px, Height:900px.', 'tcd-w');  ?></p>
       <div class="image_box cf">
        <div class="cf cf_media_field hide-if-no-js slider_image<?php echo $i; ?>">
         <input type="hidden" value="<?php echo esc_attr( $options['slider_image'.$i] ); ?>" id="slider_image<?php echo $i; ?>" name="dp_options[slider_image<?php echo $i; ?>]" class="cf_media_id">
         <div class="preview_field"><?php if($options['slider_image'.$i]){ echo wp_get_attachment_image($options['slider_image'.$i], 'medium'); }; ?></div>
         <div class="buttton_area">
          <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
          <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['slider_image'.$i]){ echo 'hidden'; }; ?>">
         </div>
        </div>
       </div>
       <h5 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h5>
       <input id="dp_options[slider_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[slider_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['slider_url'.$i] ); ?>" />

       <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
      </div><!-- END .sub_box -->
      <?php endfor; ?>

   </div>

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('First block of index page - Setting for catch copy and button', 'tcd-w');  ?></h3>
    <h4 class="theme_option_headline2"><?php _e('Catch copy', 'tcd-w');  ?></h4>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?><?php _e('( &lt;a&gt; is invalid.)', 'tcd-w'); ?></p>
    <textarea id="dp_options[top_content1_headline]" class="large-text" cols="50" rows="3" name="dp_options[top_content1_headline]"><?php echo esc_textarea( $options['top_content1_headline'] ); ?></textarea>
     <h5 class="theme_option_headline2"><?php _e('Style setting of Catch copy', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="top_content1_color" class="color" name="dp_options[top_content1_color]" value="<?php esc_attr_e( $options['top_content1_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('top_content1_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[top_content1_dropshadow_h]" class="font_size" type="text" name="dp_options[top_content1_dropshadow_h]" value="<?php esc_attr_e( $options['top_content1_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[top_content1_dropshadow_v]" class="font_size" type="text" name="dp_options[top_content1_dropshadow_v]" value="<?php esc_attr_e( $options['top_content1_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[top_content1_dropshadow_b]" class="font_size" type="text" name="dp_options[top_content1_dropshadow_b]" value="<?php esc_attr_e( $options['top_content1_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="top_content1_dropshadow_c" class="color" name="dp_options[top_content1_dropshadow_c]" value="<?php esc_attr_e( $options['top_content1_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('top_content1_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>

    <h4 class="theme_option_headline2"><?php _e('Button label', 'tcd-w');  ?></h4>
    <p><?php _e('Label of circle button.', 'tcd-w');  ?><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?><?php _e('( &lt;a&gt; is invalid.)', 'tcd-w'); ?></p>
    <textarea id="dp_options[top_content1_btnlabel]" class="large-text" cols="50" rows="10" name="dp_options[top_content1_btnlabel]"><?php echo esc_textarea( $options['top_content1_btnlabel'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e('Button size', 'tcd-w');  ?></h3>
    <p><?php _e('Size of circle button.', 'tcd-w');  ?> <?php _e('Enter "0" in this field if you don\'t want to use this button.', 'tcd-w');  ?><br />
     <?php _e('Recommend image size. 137px.', 'tcd-w');  ?></p>
    <input id="dp_options[top_content1_btnsize]" class="font_size hankaku" type="text" name="dp_options[top_content1_btnsize]" value="<?php esc_attr_e( $options['top_content1_btnsize'] ); ?>" /><span>px</span>
    <h4 class="theme_option_headline2"><?php _e('Button size for mobile', 'tcd-w');  ?></h3>
    <p><?php _e('Size of circle button for mobile device.', 'tcd-w');  ?> <?php _e('Enter "0" in this field if you don\'t want to use this button.', 'tcd-w');  ?></p>
    <input id="dp_options[top_content1_btnsize_mobile]" class="font_size hankaku" type="text" name="dp_options[top_content1_btnsize_mobile]" value="<?php esc_attr_e( $options['top_content1_btnsize_mobile'] ); ?>" /><span>px</span>
     <h5 class="theme_option_headline2"><?php _e('Style setting of button', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Button label color', 'tcd-w');  ?></label>
         <input type="text" id="top_content1_btncolor" class="color" name="dp_options[top_content1_btncolor]" value="<?php esc_attr_e( $options['top_content1_btncolor'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('top_content1_btncolor').color.fromString('3FA5F5')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Button color', 'tcd-w');  ?></label>
         <input type="text" id="top_content1_btnbgcolor" class="color" name="dp_options[top_content1_btnbgcolor]" value="<?php esc_attr_e( $options['top_content1_btnbgcolor'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('top_content1_btnbgcolor').color.fromString('FFFFFF')">
       </li>
     </ul>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  </div><!-- END #tab-content3 -->




  <!-- #tab-content4 トップページ2　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content4">

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Second block of index page', 'tcd-w');  ?></h3>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
    <textarea id="dp_options[top_content2_headline]" class="large-text" cols="50" rows="3" name="dp_options[top_content2_headline]"><?php echo esc_textarea( $options['top_content2_headline'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e('Body text', 'tcd-w');  ?></h4>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
    <textarea id="dp_options[top_content2_bodytext]" class="large-text" cols="50" rows="10" name="dp_options[top_content2_bodytext]"><?php echo esc_textarea( $options['top_content2_bodytext'] ); ?></textarea>

     <h4 class="theme_option_headline2"><?php _e('contents image', 'tcd-w');  ?></h4>
     <p><?php _e('It is trimmed in a circle. If you want to display a positive circle, set the image of the square.', 'tcd-w');  ?><br />
     <?php _e('Recommend image size. Width:380px, Height:380px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_main_image2">
       <input type="hidden" value="<?php echo esc_attr( $options['top_main_image2'] ); ?>" id="top_main_image2" name="dp_options[top_main_image2]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_main_image2']){ echo wp_get_attachment_image($options['top_main_image2'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_main_image2']){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  </div><!-- END #tab-content4 -->




  <!-- #tab-content5 トップページ3　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content5">

  <?php // main image -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Third block of index page - Setting for heading', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('main image', 'tcd-w');  ?></h4>
     <p><?php _e('Recommend image size. Width:1600px, Height:600px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_main_image3">
       <input type="hidden" value="<?php echo esc_attr( $options['top_main_image3'] ); ?>" id="top_main_image3" name="dp_options[top_main_image3]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_main_image3']){ echo wp_get_attachment_image($options['top_main_image3'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_main_image3']){ echo 'hidden'; }; ?>">
       </div>
      </div>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content3_headline]" class="regular-text" type="text" name="dp_options[top_content3_headline]" value="<?php esc_attr_e( $options['top_content3_headline'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Headline description', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content3_headline_sub]" class="regular-text" type="text" name="dp_options[top_content3_headline_sub]" value="<?php esc_attr_e( $options['top_content3_headline_sub'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
     </div>
   </div>

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Third block of index page - Setting for linkbox contents', 'tcd-w');  ?></h3>
    <?php for($i = 1; $i <= 3; $i++): ?>
    <div class="sub_box cf"> 
     <h5 class="theme_option_headline2"><?php _e('Banner image', 'tcd-w');  ?><?php echo $i; ?></h5>
     <p><?php _e('It is trimmed in a circle. If you want to display a positive circle, set the image of the square.', 'tcd-w');  ?><br />
     <?php _e('Recommend image size. Width:380px, Height:380px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_content3_banner_image<?php echo $i; ?>">
       <input type="hidden" value="<?php echo esc_attr( $options['top_content3_banner_image'.$i] ); ?>" id="top_content3_banner_image<?php echo $i; ?>" name="dp_options[top_content3_banner_image<?php echo $i; ?>]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_content3_banner_image'.$i]){ echo wp_get_attachment_image($options['top_content3_banner_image'.$i], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_content3_banner_image'.$i]){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
     <h5 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h5>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
     <textarea id="dp_options[top_content3_banner_headline<?php echo $i; ?>]" class="large-text" cols="50" rows="3" name="dp_options[top_content3_banner_headline<?php echo $i; ?>]"><?php echo esc_textarea( $options['top_content3_banner_headline'.$i] ); ?></textarea>
     <h5 class="theme_option_headline2"><?php _e('Body text', 'tcd-w');  ?></h5>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
     <textarea id="dp_options[top_content3_banner_body<?php echo $i; ?>]" class="large-text" cols="50" rows="3" name="dp_options[top_content3_banner_body<?php echo $i; ?>]"><?php echo esc_textarea( $options['top_content3_banner_body'.$i] ); ?></textarea>
     <h5 class="theme_option_headline2"><?php _e('Button label', 'tcd-w');  ?></h5>
     <input id="dp_options[top_content3_banner_btnlabel<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content3_banner_btnlabel<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content3_banner_btnlabel'.$i] ); ?>" />
     <h5 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h5>
     <p><?php _e('Leave this field blank if you don\'t want to use link button.', 'tcd-w');  ?></p>
     <input id="dp_options[top_content3_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content3_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content3_banner_url'.$i] ); ?>" />
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div><!-- END .sub_box -->
    <?php endfor; ?>
   </div>

  </div><!-- END #tab-content5 -->




  <!-- #tab-content6 トップページ4　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content6">

  <?php // main image -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Fourth block of index page - Setting for heading', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('main image', 'tcd-w');  ?></h4>
     <p><?php _e('Recommend image size. Width:1600px, Height:600px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_main_image4">
       <input type="hidden" value="<?php echo esc_attr( $options['top_main_image4'] ); ?>" id="top_main_image4" name="dp_options[top_main_image4]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_main_image4']){ echo wp_get_attachment_image($options['top_main_image4'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_main_image4']){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content4_headline]" class="regular-text" type="text" name="dp_options[top_content4_headline]" value="<?php esc_attr_e( $options['top_content4_headline'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Headline description', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content4_headline_sub]" class="regular-text" type="text" name="dp_options[top_content4_headline_sub]" value="<?php esc_attr_e( $options['top_content4_headline_sub'] ); ?>" />
   </div>

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Fourth block of index page - Setting for blog contents', 'tcd-w');  ?></h3>

    <h4 class="theme_option_headline2"><?php _e('Font size', 'tcd-w');  ?></h4>
    <p><?php _e('Font size of titles of articles.', 'tcd-w');  ?><?php _e('Recommend image size. 16px.', 'tcd-w');  ?></p>
    <input id="dp_options[top_content4_fontsize]" class="font_size hankaku" type="text" name="dp_options[top_content4_fontsize]" value="<?php esc_attr_e( $options['top_content4_fontsize'] ); ?>" /><span>px</span>
    <h4 class="theme_option_headline2"><?php _e('Display the link button to Blog Index', 'tcd-w');  ?></h4>
    <p><?php _e('Input the link URL.', 'tcd-w'); ?><?php _e("Leave this field blank if you don't want to use link button.", 'tcd-w'); ?></p>
    <input id="dp_options[top_content4_indexurl]" class="regular-text" type="text" name="dp_options[top_content4_indexurl]" value="<?php esc_attr_e( $options['top_content4_indexurl'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Label of link button to Blog Index', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content4_indexlabel]" class="regular-text" type="text" name="dp_options[top_content4_indexlabel]" value="<?php esc_attr_e( $options['top_content4_indexlabel'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  </div><!-- END #tab-content6 -->




  <!-- #tab-content7 トップページ5　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content7">

  <?php // main image -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Fifth block of index page - Setting for heading', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('main image', 'tcd-w');  ?></h4>
     <p><?php _e('Recommend image size. Width:1600px, Height:600px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_main_image5">
       <input type="hidden" value="<?php echo esc_attr( $options['top_main_image5'] ); ?>" id="top_main_image5" name="dp_options[top_main_image5]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_main_image5']){ echo wp_get_attachment_image($options['top_main_image5'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_main_image5']){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content5_headline]" class="regular-text" type="text" name="dp_options[top_content5_headline]" value="<?php esc_attr_e( $options['top_content5_headline'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Headline description', 'tcd-w');  ?></h4>
    <input id="dp_options[top_content5_headline_sub]" class="regular-text" type="text" name="dp_options[top_content5_headline_sub]" value="<?php esc_attr_e( $options['top_content5_headline_sub'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Fifth block of index page - Setting for staff contents', 'tcd-w');  ?></h3>
    <?php for($i = 1; $i <= 3; $i++): ?>
    <div class="sub_box cf"> 
     <h5 class="theme_option_headline2"><?php _e('Banner image', 'tcd-w');  ?><?php echo $i; ?></h5>
     <p><?php _e('Recommend image size. Width:330px, Height:200px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_content5_banner_image<?php echo $i; ?>">
       <input type="hidden" value="<?php echo esc_attr( $options['top_content5_banner_image'.$i] ); ?>" id="top_content5_banner_image<?php echo $i; ?>" name="dp_options[top_content5_banner_image<?php echo $i; ?>]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_content5_banner_image'.$i]){ echo wp_get_attachment_image($options['top_content5_banner_image'.$i], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_content5_banner_image'.$i]){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
     <h5 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h5>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?><?php _e('( &lt;a&gt; is invalid.)', 'tcd-w'); ?></p>
     <textarea id="dp_options[top_content5_banner_headline<?php echo $i; ?>]" class="large-text" cols="50" rows="3" name="dp_options[top_content5_banner_headline<?php echo $i; ?>]"><?php echo esc_textarea( $options['top_content5_banner_headline'.$i] ); ?></textarea>
     <h5 class="theme_option_headline2"><?php _e('Body text', 'tcd-w');  ?></h5>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?><?php _e('( &lt;a&gt; is invalid.)', 'tcd-w'); ?></p>
     <textarea id="dp_options[top_content5_banner_body<?php echo $i; ?>]" class="large-text" cols="50" rows="3" name="dp_options[top_content5_banner_body<?php echo $i; ?>]"><?php echo esc_textarea( $options['top_content5_banner_body'.$i] ); ?></textarea>
     <h5 class="theme_option_headline2"><?php _e('Button label', 'tcd-w');  ?></h5>
     <input id="dp_options[top_content5_banner_btnlabel<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content5_banner_btnlabel<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content5_banner_btnlabel'.$i] ); ?>" />
     <h5 class="theme_option_headline2"><?php _e('Button label description', 'tcd-w');  ?></h5>
     <input id="dp_options[top_content5_banner_btnlabel_sub<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content5_banner_btnlabel_sub<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content5_banner_btnlabel_sub'.$i] ); ?>" />
     <h5 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h5>
     <p><?php _e('Leave this field blank if you don\'t want to use link button.', 'tcd-w');  ?></p>
     <input id="dp_options[top_content5_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content5_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content5_banner_url'.$i] ); ?>" />
     <h5 class="theme_option_headline2"><?php _e('Button color', 'tcd-w');  ?></h5>
     <input type="text" id="color<?php $n=2+$i; echo $n; ?>" class="color" name="dp_options[pickedcolor<?php $n=2+$i; echo $n; ?>]" value="<?php esc_attr_e( $options['pickedcolor'.$n] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color<?php $n=2+$i; echo $n; ?>').color.fromString('2C73AB')">

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div><!-- END .sub_box -->
    <?php endfor; ?>
   </div>

  </div><!-- END #tab-content7 -->




  <!-- #tab-content8 トップページ6　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content8">

  <?php // contents -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Sixth block of index page -  Setting of carousel contents', 'tcd-w');  ?></h3>
    <h4 class="theme_option_headline2"><?php _e('Select the content of carousel', 'tcd-w');  ?></h4>
     <fieldset class="cf"><legend class="screen-reader-text"><span><?php _e('Select the content of carousel', 'tcd-w');  ?></span></legend>
     <?php
          if ( ! isset( $checked ) )
          $checked = '';
          foreach ( $top_content6_contents_options as $option ) {
          $top_content6_contents_setting = $options['top_content6_contents'];
           if ( '' != $top_content6_contents_setting ) {
            if ( $options['top_content6_contents'] == $option['value'] ) {
             $checked = "checked=\"checked\"";
            } else {
             $checked = '';
            }
           }
     ?>
      <label class="description" style="margin-right: 15px;">
       <input type="radio" name="dp_options[top_content6_contents]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
       <?php echo $option['label']; ?>
      </label>
     <?php
          }
     ?>
     </fieldset>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />

    <h4 class="theme_option_headline2"><?php _e('Setting of posts for carousel', 'tcd-w');  ?></h4>
    <h5 class="theme_option_headline4"><?php _e('The number of posts to display at carousel', 'tcd-w');  ?></h5>
    <p><?php _e('Please be set to 6 or more in the sliding display.', 'tcd-w');  ?></p>
    <input id="dp_options[number_posts]" class="font_size hankaku" type="text" name="dp_options[number_posts]" value="<?php esc_attr_e( $options['number_posts'] ); ?>" />
    <h5 class="theme_option_headline4"><?php _e('Posts are sorted by', 'tcd-w');  ?></h5>
     <fieldset class="cf"><legend class="screen-reader-text"><span><?php _e('Select the content of carousel', 'tcd-w');  ?></span></legend>
     <?php
          if ( ! isset( $checked ) )
          $checked = '';
          foreach ( $order_by_options as $option ) {
          $order_by_setting = $options['order_by'];
           if ( '' != $order_by_setting ) {
            if ( $options['order_by'] == $option['value'] ) {
             $checked = "checked=\"checked\"";
            } else {
             $checked = '';
            }
           }
     ?>
      <label class="description" style="margin-right: 15px;">
       <input type="radio" name="dp_options[order_by]" value="<?php echo $option['value']; ?>" <?php echo $checked; ?> />
       <?php echo $option['label']; ?>
      </label>
     <?php
          }
     ?>
     </fieldset>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />

    <h4 class="theme_option_headline2"><?php _e('Setting of images for carousel', 'tcd-w');  ?></h4>
    <p><?php _e('It is trimmed in a circle. If you want to display a positive circle, set the image of the square.', 'tcd-w');  ?></p>
    <?php for($i = 1; $i <= 5; $i++): ?>
    <div class="sub_box cf"> 
     <h5 class="theme_option_headline2"><?php _e('Banner image', 'tcd-w');  ?><?php echo $i; ?></h5>
     <p><?php _e('Recommend image size. Width:224px, Height:224px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js top_content6_banner_image<?php echo $i; ?>">
       <input type="hidden" value="<?php echo esc_attr( $options['top_content6_banner_image'.$i] ); ?>" id="top_content6_banner_image<?php echo $i; ?>" name="dp_options[top_content6_banner_image<?php echo $i; ?>]" class="cf_media_id">
       <div class="preview_field"><?php if($options['top_content6_banner_image'.$i]){ echo wp_get_attachment_image($options['top_content6_banner_image'.$i], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['top_content6_banner_image'.$i]){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
     <h5 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h5>
     <input id="dp_options[top_content6_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[top_content6_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['top_content6_banner_url'.$i] ); ?>" />

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div><!-- END .sub_box -->
    <?php endfor; ?>
   </div>

  </div><!-- END #tab-content8 -->




  <!-- #tab-content9 footer　//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content9">

   <?php // コンテンツ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting of content in footer', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('main image', 'tcd-w');  ?></h4>
     <p><?php _e('Recommend image size. Width:1600px, Height:600px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js footer_image">
       <input type="hidden" value="<?php echo esc_attr( $options['footer_image'] ); ?>" id="footer_image" name="dp_options[footer_image]" class="cf_media_id">
       <div class="preview_field"><?php if($options['footer_image']){ echo wp_get_attachment_image($options['footer_image'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['footer_image']){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <input id="dp_options[footer_headline]" class="regular-text" type="text" name="dp_options[footer_headline]" value="<?php esc_attr_e( $options['footer_headline'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Button label', 'tcd-w');  ?></h4>
    <input id="dp_options[footer_btnlabel]" class="regular-text" type="text" name="dp_options[footer_btnlabel]" value="<?php esc_attr_e( $options['footer_btnlabel'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Link URL', 'tcd-w');  ?></h4>
    <p><?php _e('Leave this field blank if you don\'t want to use link button.', 'tcd-w');  ?></p>
    <input id="dp_options[footer_url]" class="regular-text" type="text" name="dp_options[footer_url]" value="<?php esc_attr_e( $options['footer_url'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // フッターのロゴ ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting of footer logo', 'tcd-w');  ?></h3>
    <div class="image_box cf">
     <div class="cf cf_media_field hide-if-no-js footer_logo">
      <input type="hidden" value="<?php echo esc_attr( $options['footer_logo'] ); ?>" id="footer_logo" name="dp_options[footer_logo]" class="cf_media_id">
      <div class="preview_field"><?php if($options['footer_logo']){ echo wp_get_attachment_image($options['footer_logo'], 'medium'); }; ?></div>
      <div class="buttton_area">
       <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
       <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['footer_logo']){ echo 'hidden'; }; ?>">
      </div>
     </div>
    </div>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // SNSボタン ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting of SNS button', 'tcd-w');  ?></h3>
    <p><?php _e('Enter url of your twitter and facebook page. If it is blank SNS button will not be shown.', 'tcd-w');  ?></p>
    <ul>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your twitter URL', 'tcd-w');  ?></label>
      <input id="dp_options[twitter_url]" class="regular-text" type="text" name="dp_options[twitter_url]" value="<?php esc_attr_e( $options['twitter_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your facebook URL', 'tcd-w');  ?></label>
      <input id="dp_options[facebook_url]" class="regular-text" type="text" name="dp_options[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your instagram URL', 'tcd-w');  ?></label>
      <input id="dp_options[insta_url]" class="regular-text" type="text" name="dp_options[insta_url]" value="<?php esc_attr_e( $options['insta_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your Pinterest URL', 'tcd-w');  ?></label>
      <input id="dp_options[pinterest_url]" class="regular-text" type="text" name="dp_options[pinterest_url]" value="<?php esc_attr_e( $options['pinterest_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your flickr URL', 'tcd-w');  ?></label>
      <input id="dp_options[flickr_url]" class="regular-text" type="text" name="dp_options[flickr_url]" value="<?php esc_attr_e( $options['flickr_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your tumblr URL', 'tcd-w');  ?></label>
      <input id="dp_options[tumblr_url]" class="regular-text" type="text" name="dp_options[tumblr_url]" value="<?php esc_attr_e( $options['tumblr_url'] ); ?>" />
     </li>
    </ul>
    <hr />
    <p><label><input id="dp_options[show_rss]" name="dp_options[show_rss]" type="checkbox" value="1" <?php checked( '1', $options['show_rss'] ); ?> /> <?php _e('Display RSS button', 'tcd-w');  ?></label></p>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // フッターバーの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e( 'Setting of the footer bar for smart phone', 'tcd-w' ); ?></h3>
    <p><?php _e( 'Please set the footer bar which is displayed with smart phone.', 'tcd-w' ); ?>

    <h4 class="theme_option_headline2"><?php _e('Display type of the footer bar', 'tcd-w'); ?></h4>
    <fieldset class="cf select_type2">
     <?php
          if ( ! isset( $checked ) )
          $checked = '';
          foreach ( $footer_bar_display_options as $option ) {
          $footer_bar_display_setting = $options['footer_bar_display'];
            if ( '' != $footer_bar_display_setting ) {
              if ( $options['footer_bar_display'] == $option['value'] ) {
                $checked = "checked=\"checked\"";
              } else {
                $checked = '';
              }
           }
     ?>
     <label class="description">
      <input type="radio" name="dp_options[footer_bar_display]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php echo $option['label']; ?>
     </label>
     <?php } ?>
    </fieldset>

    <h4 class="theme_option_headline2"><?php _e('Settings for the appearance of the footer bar', 'tcd-w'); ?></h4>
    <p>
     <?php _e('Background color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_bg" class="color" name="dp_options[footer_bar_bg]" value="<?php echo esc_attr( $options['footer_bar_bg'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_bg').color.fromString('FFFFFF')">
  </p>
    <p>
     <?php _e('Border color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_border" class="color" name="dp_options[footer_bar_border]" value="<?php echo esc_attr( $options['footer_bar_border'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_border').color.fromString('DDDDDD')">
  </p>
    <p>
     <?php _e('Font color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_color" class="color" name="dp_options[footer_bar_color]" value="<?php echo esc_attr( $options['footer_bar_color'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_color').color.fromString('000000')">
  </p>
  <p>
     <?php _e('Opacity of background', 'tcd-w'); ?>
     <input id="dp_options[footer_bar_tp]" class="font_size hankaku" type="text" name="dp_options[footer_bar_tp]" value="<?php echo esc_attr( $options['footer_bar_tp'] ); ?>" /><br>
     <?php _e('Please enter the number 0 - 1.0. (e.g. 0.8)', 'tcd-w'); ?>
  </p>

    <h4 class="theme_option_headline2"><?php _e('Settings for the contents of the footer bar', 'tcd-w'); ?></h4>
    <p><?php _e( 'You can display the button with icon in footer bar. (We recommend you to set max 4 buttons.)', 'tcd-w' ); ?><br><?php _e( 'You can select button types below.', 'tcd-w' ); ?></p>
    <table class="table-border">
     <tr>
      <th><?php _e( 'Default', 'tcd-w' ); ?></th>
      <td><?php _e( 'You can set link URL.', 'tcd-w' ); ?></td>
     </tr>
     <tr>
      <th><?php _e( 'Share', 'tcd-w' ); ?></th>
      <td><?php _e( 'Share buttons are displayed if you tap this button.', 'tcd-w' ); ?></td>
     </tr>
     <tr>
      <th><?php _e( 'Telephone', 'tcd-w' ); ?></th>
      <td><?php _e( 'You can call this number.', 'tcd-w' ); ?></td>
     </tr>
    </table>
    <p><?php _e( 'Click "Add item", and set the button for footer bar. You can drag the item to change their order.', 'tcd-w' ); ?></p>
    <div class="repeater-wrapper">
     <div class="repeater sortable" data-delete-confirm="<?php _e( 'Delete?', 'tcd-w' ); ?>">
<?php
    if ( $options['footer_bar_btns'] ) :
      foreach ( $options['footer_bar_btns'] as $key => $value ) :  
?>
      <div class="sub_box repeater-item repeater-item-<?php echo esc_attr( $key ); ?>">
       <h4 class="theme_option_subbox_headline"><?php echo esc_attr( $value['label'] ); ?></h4>
       <div class="sub_box_content">
        <p class="footer-bar-target" style="<?php if ( $value['type'] !== 'type1' ) { echo 'display: none;'; } ?>"><label><input name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][target]" type="checkbox" value="1" <?php checked( $value['target'], 1 ); ?>><?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
        <table class="table-repeater">
         <tr class="footer-bar-type">
          <th><label><?php _e( 'Button type', 'tcd-w' ); ?></label></th>
          <td>

           <select name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][type]">
            <?php foreach( $footer_bar_button_options as $option ) : ?>
            <option value="<?php echo esc_attr( $option['value'] ); ?>" <?php selected( $value['type'], $option['value'] ); ?>><?php esc_html_e( $option['label'], 'tcd-w' ); ?></option>
            <?php endforeach; ?>
           </select>
          </td>
         </tr>
         <tr>
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]"><?php _e( 'Button label', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]" class="regular-text repeater-label" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][label]" value="<?php echo esc_attr( $value['label'] ); ?>"></td>
         </tr>
         <tr class="footer-bar-url" style="<?php if ( $value['type'] !== 'type1' ) { echo 'display: none;'; } ?>">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]"><?php _e( 'Link URL', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][url]" value="<?php echo esc_attr( $value['url'] ); ?>"></td>
         </tr>
         <tr class="footer-bar-number" style="<?php if ( $value['type'] !== 'type3' ) { echo 'display: none;'; } ?>">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]"><?php _e( 'Phone number', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][number]" value="<?php echo esc_attr( $value['number'] ); ?>"></td>
         </tr>
         <tr>
          <th><?php _e( 'Button icon', 'tcd-w' ); ?></th>
          <td>
           <?php foreach( $footer_bar_icon_options as $option ) : ?>
           <p><label><input type="radio" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][icon]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $value['icon'] ); ?>><span class="icon icon-<?php echo esc_attr( $option['value'] ); ?>"></span><?php esc_html_e( $option['label'], 'tcd-w' ); ?></label></p>
           <?php endforeach; ?>
          </td>
         </tr>
        </table>
        <p class="delete-row right-align"><a href="#" class="button button-secondary button-delete-row"><?php _e( 'Delete item', 'tcd-w' ); ?></a></p>
       </div>
      </div>
<?php
      endforeach;
    endif;

    $key = 'addindex';
    ob_start();
?>
      <div class="sub_box repeater-item repeater-item-<?php echo $key; ?>">
       <h4 class="theme_option_subbox_headline"><?php _e( 'New item', 'tcd-w' ); ?></h4>
       <div class="sub_box_content">
        <p class="footer-bar-target"><label><input name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][target]" type="checkbox" value="1"><?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
        <table class="table-repeater">
         <tr class="footer-bar-type">
          <th><label><?php _e( 'Button type', 'tcd-w' ); ?></label></th>
          <td>
           <select name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][type]">
            <?php foreach( $footer_bar_button_options as $option ) : ?>
            <option value="<?php echo esc_attr( $option['value'] ); ?>"><?php esc_html_e( $option['label'], 'tcd-w' ); ?></option>
            <?php endforeach; ?>
           </select>
          </td>
         </tr>
         <tr>
          <th><label for="dp_options[repeater_footer_bar_btn<?php echo esc_attr( $key ); ?>_label]"><?php _e( 'Button label', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]" class="regular-text repeater-label" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][label]" value=""></td>
         </tr>
         <tr class="footer-bar-url">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]"><?php _e( 'Link URL', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][url]" value=""></td>
         </tr>
         <tr class="footer-bar-number" style="display: none;">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]"><?php _e( 'Phone number', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][number]" value=""></td>
         </tr>
         <tr>
          <th><?php _e( 'Button icon', 'tcd-w' ); ?></th>
          <td>
           <?php foreach( $footer_bar_icon_options as $option ) : ?>
           <p><label><input type="radio" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][icon]" value="<?php echo esc_attr( $option['value'] ); ?>"<?php if ( 'file-text' == $option['value'] ) { echo ' checked="checked"'; } ?>><span class="icon icon-<?php echo esc_attr( $option['value'] ); ?>"></span><?php esc_html_e( $option['label'], 'tcd-w' ); ?></label></p>
           <?php endforeach; ?>
          </td>
         </tr>
        </table>
        <p class="delete-row right-align"><a href="#" class="button button-secondary button-delete-row"><?php _e( 'Delete item', 'tcd-w' ); ?></a></p>
       </div>
      </div>
<?php
    $clone = ob_get_clean();
?>
     </div>
     <a href="#" class="button button-secondary button-add-row" data-clone="<?php echo esc_attr( $clone ); ?>"><?php _e( 'Add item', 'tcd-w' ); ?></a>
    </div>
    <input type="submit" class="button-ml" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>"> 
   </div>

  </div><!-- END #tab-content9 -->


  <!-- #tab-content10 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content10">

   <?php // Header Image ----------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting of header image', 'tcd-w');  ?></h3>
     <p><?php _e('Recommend image size. Width:1600px, Height:600px.', 'tcd-w');  ?></p>
     <div class="image_box cf">
      <div class="cf cf_media_field hide-if-no-js blog_header_image">
       <input type="hidden" value="<?php echo esc_attr( $options['blog_header_image'] ); ?>" id="blog_header_image" name="dp_options[blog_header_image]" class="cf_media_id">
       <div class="preview_field"><?php if($options['blog_header_image']){ echo wp_get_attachment_image($options['blog_header_image'], 'medium'); }; ?></div>
       <div class="buttton_area">
        <input type="button" value="<?php _e('Select Image', 'tcd-w'); ?>" class="cfmf-select-img button">
        <input type="button" value="<?php _e('Remove Image', 'tcd-w'); ?>" class="cfmf-delete-img button <?php if(!$options['blog_header_image']){ echo 'hidden'; }; ?>">
       </div>
      </div>
     </div>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // フォントサイズ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Font size of title', 'tcd-w');  ?></h3>
    <p><?php _e('Font size of the title of single page', 'tcd-w');  ?><?php _e('Recommend image size. 32px.', 'tcd-w');  ?></p>
    <input id="dp_options[single_fontsize]" class="font_size hankaku" type="text" name="dp_options[single_fontsize]" value="<?php esc_attr_e( $options['single_fontsize'] ); ?>" /><span>px</span>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

    <?php // Use OGP tag ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Facebook OGP setting', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e( 'OGP is a mechanism for correctly conveying page information.', 'tcd-w' ); ?></p>
     <p><label><input id="dp_options[use_ogp]" name="dp_options[use_ogp]" type="checkbox" value="1" <?php checked( '1', $options['use_ogp'] ); ?> /> <?php _e('Use OGP', 'tcd-w');  ?></label></p>
     <p><?php _e( 'To use Facebook OGP please set your app ID.', 'tcd-w' ); ?></p>
     <p><?php _e( 'Your app ID', 'tcd-w' );  ?> <input class="regular-text" type="text" name="dp_options[fb_app_id]" value="<?php esc_attr_e( $options['fb_app_id'] ); ?>"></p>
    </div>
    <h4 class="theme_option_headline2"><?php _e( 'OGP image', 'tcd-w' ); ?></h4>
	<p><?php _e( 'This image is displayed for OGP if the page does not have a thumbnail.', 'tcd-w' ); ?></p>
	<p><?php _e( 'Recommend image size. Width:1200px, Height:630px', 'tcd-w' ); ?></p>
	<div class="image_box cf">
		<div class="cf cf_media_field hide-if-no-js">
			<input type="hidden" value="<?php echo esc_attr( $options['ogp_image'] ); ?>" id="ogp_image" name="dp_options[ogp_image]" class="cf_media_id">
			<div class="preview_field"><?php if ( $options['ogp_image'] ) { echo wp_get_attachment_image( $options['ogp_image'], 'medium'); } ?></div>
			<div class="button_area">
				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $options['ogp_image'] ) { echo 'hidden'; } ?>">
			</div>
		</div>
    </div>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // Use twitter card ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Twitter Cards setting', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><label><input id="dp_options[use_twitter_card]" name="dp_options[use_twitter_card]" type="checkbox" value="1" <?php checked( '1', $options['use_twitter_card'] ); ?> /> <?php _e('Use Twitter Cards', 'tcd-w');  ?></label></p>
     <p><?php _e('Your Twitter account name (exclude @ mark)', 'tcd-w');  ?> <input id="dp_options[twitter_account_name]" class="regular-text" type="text" name="dp_options[twitter_account_name]" value="<?php esc_attr_e( $options['twitter_account_name'] ); ?>" /></p>
     <p><a href="http://design-plus1.com/tcd-w/2016/11/twitter-cards.html" target="_blank"><?php _e( 'Information about Twitter Cards.', 'tcd-w' ); ?></a></p>
    </div>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

   <?php // NEWソーシャルボタン ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Social button Setup', 'tcd-w');  ?></h3>
     <p><?php _e('You can display the social button at the top and bottom of the article page. To both the top and bottom of the case article is long, if it is shorter it is recommended that you display up and down either.', 'tcd-w');  ?></p>
    <div class="theme_option_input" style="margin:20px 0 20px !important;">
        <h4 class="theme_option_headline2"><?php _e('Set of articles top buttons', 'tcd-w');  ?></h4>
        <label><input id="dp_options[show_sns_top]" name="dp_options[show_sns_top]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_top'] ); ?> /> <?php _e('Buttons to the article top', 'tcd-w');  ?></label>

    <h4 class="theme_option_headline2" style="margin:30px 0 -5px;"><?php _e('Type of button on article top', 'tcd-w');  ?></h4>
    <fieldset class="cf">
    <ul class="cf">
    <?php
         if ( ! isset( $checked ) )
         $checked = '';
         foreach ( $sns_type_top_options as $option ) {
         $sns_type_top_setting = $options['sns_type_top'];
          if ( '' != $sns_type_top_setting ) {
           if ( $options['sns_type_top'] == $option['value'] ) {
            $checked = "checked=\"checked\"";
           } else {
            $checked = '';
           }
          }
    ?>
     <li>
      <label>
      <input type="radio" name="dp_options[sns_type_top]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php _e($option['label'], 'tcd-w'); ?>
      </label>
     </li>
    <?php
         }
    ?>
    </ul>
    </fieldset>
    <h4 class="theme_option_headline2" style="margin:10px 0 10px;"><?php _e('Select the social button to show on article top', 'tcd-w');  ?></h4>
      <ul>
        <li><label><input id="dp_options[show_twitter_top]" name="dp_options[show_twitter_top]" type="checkbox" value="1" <?php checked( '1', $options['show_twitter_top'] ); ?> /> <?php _e('Display twitter button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fblike_top]" name="dp_options[show_fblike_top]" type="checkbox" value="1" <?php checked( '1', $options['show_fblike_top'] ); ?> /> <?php _e('Display facebook like button -Button type 5 (Default button) only', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fbshare_top]" name="dp_options[show_fbshare_top]" type="checkbox" value="1" <?php checked( '1', $options['show_fbshare_top'] ); ?> /> <?php _e('Display facebook share button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_google_top]" name="dp_options[show_google_top]" type="checkbox" value="1" <?php checked( '1', $options['show_google_top'] ); ?> /> <?php _e('Display google+ button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_hatena_top]" name="dp_options[show_hatena_top]" type="checkbox" value="1" <?php checked( '1', $options['show_hatena_top'] ); ?> /> <?php _e('Display hatena button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pocket_top]" name="dp_options[show_pocket_top]" type="checkbox" value="1" <?php checked( '1', $options['show_pocket_top'] ); ?> /> <?php _e('Display pocket button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_feedly_top]" name="dp_options[show_feedly_top]" type="checkbox" value="1" <?php checked( '1', $options['show_feedly_top'] ); ?> /> <?php _e('Display feedly button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_rss_top]" name="dp_options[show_rss_top]" type="checkbox" value="1" <?php checked( '1', $options['show_rss_top'] ); ?> /> <?php _e('Display rss button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pinterest_top]" name="dp_options[show_pinterest_top]" type="checkbox" value="1" <?php checked( '1', $options['show_pinterest_top'] ); ?> /> <?php _e('Display pinterest button', 'tcd-w');  ?></label></li>
      </ul>
     </li>
     </ul>
      <hr style="margin:30px 0;" />
        <h4 class="theme_option_headline2"><?php _e('Set of articles bottom buttons', 'tcd-w');  ?></h4>
        <label><input id="dp_options[show_sns_btm]" name="dp_options[show_sns_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_btm'] ); ?> /> <?php _e('Buttons to the article bottom', 'tcd-w');  ?></label>
    <h4 class="theme_option_headline2" style="margin:30px 0 10px;"><?php _e('Type of button on article bottom', 'tcd-w');  ?></h4>
    <fieldset class="cf">
    <ul class="cf">
    <?php
         if ( ! isset( $checked ) )
         $checked = '';
         foreach ( $sns_type_btm_options as $option ) {
         $sns_type_btm_setting = $options['sns_type_btm'];
          if ( '' != $sns_type_btm_setting ) {
           if ( $options['sns_type_btm'] == $option['value'] ) {
            $checked = "checked=\"checked\"";
           } else {
            $checked = '';
           }
          }
    ?>
     <li>
      <label>
      <input type="radio" name="dp_options[sns_type_btm]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php _e($option['label'], 'tcd-w'); ?>
      </label>
     </li>
    <?php
         }
    ?>
    </ul>
    </fieldset>

    <h4 class="theme_option_headline2" style="margin:10px 0 10px;"><?php _e('Select the social button to show on article bottom', 'tcd-w');  ?></h4>
      <ul>
        <li><label><input id="dp_options[show_twitter_btm]" name="dp_options[show_twitter_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_twitter_btm'] ); ?> /> <?php _e('Display twitter button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fblike_btm]" name="dp_options[show_fblike_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_fblike_btm'] ); ?> /> <?php _e('Display facebook like button-Button type 5 (Default button) only', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fbshare_btm]" name="dp_options[show_fbshare_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_fbshare_btm'] ); ?> /> <?php _e('Display facebook share button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_google_btm]" name="dp_options[show_google_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_google_btm'] ); ?> /> <?php _e('Display google+ button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_hatena_btm]" name="dp_options[show_hatena_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_hatena_btm'] ); ?> /> <?php _e('Display hatena button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pocket_btm]" name="dp_options[show_pocket_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_pocket_btm'] ); ?> /> <?php _e('Display pocket button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_feedly_btm]" name="dp_options[show_feedly_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_feedly_btm'] ); ?> /> <?php _e('Display feedly button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_rss_btm]" name="dp_options[show_rss_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_rss_btm'] ); ?> /> <?php _e('Display rss button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pinterest_btm]" name="dp_options[show_pinterest_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_pinterest_btm'] ); ?> /> <?php _e('Display pinterest button', 'tcd-w');  ?></label></li>
      </ul>
     </li>
     </ul>

      <hr style="margin:30px 0;" />
    <h4 class="theme_option_headline2" style="margin:10px 0 10px;"><?php _e('Setting for the twitter button', 'tcd-w');  ?></h4>
         <label style="margin-top:20px;"><?php _e('Set of twitter account. (ex.designplus)', 'tcd-w');  ?></label>
         <input style="display:block; margin:.6em 0 1em;" id="dp_options[twitter_info]" class="regular-text" type="text" name="dp_options[twitter_info]" value="<?php esc_attr_e( $options['twitter_info'] ); ?>" />
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>
  </div>

  </div><!-- END #tab-content10 -->


  <!-- #tab-content11 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content11">

   <?php // Staff page settings ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting for Staff page', 'tcd-w');  ?></h3>
     <p><?php _e('You can make the top of the display setting is a common part of the Staff page from here.', 'tcd-w');  ?><br />
     <?php _e('For the part of the lower than it should be done from the [staff] → [new].', 'tcd-w');  ?></p>
    <h4 class="theme_option_headline2"><?php _e('Headline', 'tcd-w');  ?></h4>
    <input id="dp_options[staff_headline]" class="regular-text" type="text" name="dp_options[staff_headline]" value="<?php esc_attr_e( $options['staff_headline'] ); ?>" />
    <h4 class="theme_option_headline2"><?php _e('Font size', 'tcd-w');  ?></h4>
    <p><?php _e('Font size of headline', 'tcd-w');  ?><?php _e('Recommend image size. 48px.', 'tcd-w');  ?></p>
    <input id="dp_options[staff_headline_fontsize]" class="font_size hankaku" type="text" name="dp_options[staff_headline_fontsize]" value="<?php esc_attr_e( $options['staff_headline_fontsize'] ); ?>" /><span>px</span>
    <h4 class="theme_option_headline2"><?php _e('Body text', 'tcd-w');  ?></h4>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
    <textarea id="dp_options[staff_desc]" class="large-text" cols="50" rows="10" name="dp_options[staff_desc]"><?php echo esc_textarea( $options['staff_desc'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e('Font size', 'tcd-w');  ?></h4>
    <p><?php _e('Font size of body text', 'tcd-w');  ?><?php _e('Recommend image size. 14px.', 'tcd-w');  ?></p>
    <input id="dp_options[staff_desc_fontsize]" class="font_size hankaku" type="text" name="dp_options[staff_desc_fontsize]" value="<?php esc_attr_e( $options['staff_desc_fontsize'] ); ?>" /><span>px</span>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  <?php // Archive image -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Setting for Arcive page', 'tcd-w');  ?></h3>
    <h4 class="theme_option_headline2"><?php _e('Headline for Arcive page', 'tcd-w');  ?></h4>
    <p><?php _e('You can use HTML tags at this area.', 'tcd-w');  ?></p>
    <textarea id="dp_options[archive_headline]" class="large-text" cols="50" rows="3" name="dp_options[archive_headline]"><?php echo esc_textarea( $options['archive_headline'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e('Font size', 'tcd-w');  ?></h4>
    <p><?php _e('Font size of titles of articles.', 'tcd-w');  ?><?php _e('Recommend image size. 16px.', 'tcd-w');  ?></p>
    <input id="dp_options[archive_fontsize]" class="font_size hankaku" type="text" name="dp_options[archive_fontsize]" value="<?php esc_attr_e( $options['archive_fontsize'] ); ?>" /><span>px</span>
    <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>
  </div><!-- END #tab-content11 -->

  </div><!-- END #tab-panel -->

  </form>

  </div><!-- END #my_theme_right -->

 </div><!-- END #my_theme_option -->

</div><!-- END #wrap -->




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script type="text/javascript">


  jQuery(document).ready(function($){
    function clearSelection(button){
      var input = button.parent().find('input').first()

      input.val('')
      updatePreview(button.parent())
    }

    function updatePreview(group){
      var groups = []

      if(group){
        groups = [group]
      } else {
        $('.upload-group').each(function(){
          groups.push($(this))
        })
      }

      groups.forEach(function(group){
        var input = group.find('input').first()
        var imgWrap = group.find('.upload-preview').first()
        var images = input.val().split(' ')

        imgWrap.empty()

        images.forEach(function(img){
          if(img.length > 0){
            imgWrap.append("<img width='100' src='" + img + "' style='margin-right:10px' />")
          }
        })
      })
    }

    updatePreview()

    jQuery('.clear_custom_images').click(function(e) {
      e.preventDefault()
      clearSelection(jQuery(this))
    })

    jQuery('.set_custom_images').click(function(e) {
      e.preventDefault()
      clearSelection(jQuery(this))
      var button = jQuery(this)
      var input = button.parent().find('input').first()

      wp.media.editor.send.attachment = function(props, attachment) {
        if( button.attr('data-multiple') == "true" ){
          input.val(input.val() + attachment.url + ' ')
        } else {
          input.val(attachment.url)
        }
        updatePreview(button.parent())
      }

      wp.media.editor.open(button)
      return false
    })
  })




  angular.module('optionsApp', []).controller('FormCtrl', function($scope, $timeout){

    $scope.loadForm = function(){
      $scope.formStr = "<?php echo addslashes($options['contact_form_json']); ?>";
      try{
        $scope.formObj = JSON.parse($scope.formStr);
      } catch(e) {
        $scope.formObj = [];
      }
    }

    $scope.saveForm = function(refresh){
      $scope.formStr = angular.toJson($scope.formObj)

      if(refresh){
        $timeout(function(){
          jQuery("#submit-form").click()
        }, 100)
      }
    }

    $scope.newOpt = "";
    $scope.newRow = { title:"", type:"text", required:"0", options:[] }

    $scope.removeRow = function(i){
      $scope.formObj.splice(i, 1)
      $scope.saveForm(true)
    }

    $scope.addRow = function(){
      $scope.formObj.push($scope.newRow)
      $scope.saveForm(true)
    }

    $scope.addOption = function(opt){
      $scope.newRow.options.push($scope.newOpt)
      $scope.newOpt = ""
      $scope.saveForm()
    }

  })
</script>






<?php

 }


/**
 * チェック
 */
function theme_options_validate( $input ) {

 global $index_menu_num_options, $index_news_num_options, $index_blog_num_options, $footer_menu_num_options, $sns_type_top_options, $sns_type_btm_options, $footer_bar_icon_options, $footer_bar_button_options, $footer_bar_display_options, $top_content6_contents_options, $order_by_options;

 // test upload
 $input['testmultiupload'] = wp_filter_nohtml_kses( $input['testmultiupload'] );

 // 色の設定
 $input['pickedcolor1'] = wp_filter_nohtml_kses( $input['pickedcolor1'] );
 $input['pickedcolor2'] = wp_filter_nohtml_kses( $input['pickedcolor2'] );
 $input['pickedcolor3'] = wp_filter_nohtml_kses( $input['pickedcolor3'] );
 $input['pickedcolor4'] = wp_filter_nohtml_kses( $input['pickedcolor4'] );
 $input['pickedcolor5'] = wp_filter_nohtml_kses( $input['pickedcolor5'] );

 // フォントサイズ
 $input['content_font_size'] = wp_filter_nohtml_kses( $input['content_font_size'] );

 // 投稿者・タグ・コメント
 if ( ! isset( $input['show_date'] ) )
  $input['show_date'] = null;
  $input['show_date'] = ( $input['show_date'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_category'] ) )
  $input['show_category'] = null;
  $input['show_category'] = ( $input['show_category'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_tag'] ) )
  $input['show_tag'] = null;
  $input['show_tag'] = ( $input['show_tag'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_comment'] ) )
  $input['show_comment'] = null;
  $input['show_comment'] = ( $input['show_comment'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_trackback'] ) )
  $input['show_trackback'] = null;
  $input['show_trackback'] = ( $input['show_trackback'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_related_post'] ) )
  $input['show_related_post'] = null;
  $input['show_related_post'] = ( $input['show_related_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_next_post'] ) )
  $input['show_next_post'] = null;
  $input['show_next_post'] = ( $input['show_next_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_thumbnail'] ) )
  $input['show_thumbnail'] = null;
  $input['show_thumbnail'] = ( $input['show_thumbnail'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_bookmark'] ) )
  $input['show_bookmark'] = null;
  $input['show_bookmark'] = ( $input['show_bookmark'] == 1 ? 1 : 0 );

 // Facebook OGPの設定
 if ( ! isset( $input['use_ogp'] ) ) $input['use_ogp'] = null;
 $input['use_ogp'] = ( $input['use_ogp'] == 1 ? 1 : 0 );
 $input['fb_app_id'] = wp_filter_nohtml_kses( $input['fb_app_id'] );
 $input['ogp_image'] = wp_filter_nohtml_kses( $input['ogp_image'] );

 // Twitter Cardsの設定
 if ( ! isset( $input['use_twitter_card'] ) ) $input['use_twitter_card'] = null;
 $input['use_twitter_card'] = ( $input['use_twitter_card'] == 1 ? 1 : 0 );
 $input['twitter_account_name'] = wp_filter_nohtml_kses( $input['twitter_account_name'] );

 // ソーシャルボタンの表示設定
 if ( ! isset( $input['sns_type_top'] ) )
  $input['sns_type_top'] = null;
 if ( ! array_key_exists( $input['sns_type_top'], $sns_type_top_options ) )
  $input['sns_type_top'] = null;
 if ( ! isset( $input['show_sns_top'] ) )
  $input['show_sns_top'] = null;
  $input['show_sns_top'] = ( $input['show_sns_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_twitter_top'] ) )
  $input['show_twitter_top'] = null;
  $input['show_twitter_top'] = ( $input['show_twitter_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fblike_top'] ) )
  $input['show_fblike_top'] = null;
  $input['show_fblike_top'] = ( $input['show_fblike_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fbshare_top'] ) )
  $input['show_fbshare_top'] = null;
  $input['show_fbshare_top'] = ( $input['show_fbshare_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_google_top'] ) )
  $input['show_google_top'] = null;
  $input['show_google_top'] = ( $input['show_google_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_hatena_top'] ) )
  $input['show_hatena_top'] = null;
  $input['show_hatena_top'] = ( $input['show_hatena_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pocket_top'] ) )
  $input['show_pocket_top'] = null;
  $input['show_pocket_top'] = ( $input['show_pocket_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_feedly_top'] ) )
  $input['show_feedly_top'] = null;
  $input['show_feedly_top'] = ( $input['show_feedly_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss_top'] ) )
  $input['show_rss_top'] = null;
  $input['show_rss_top'] = ( $input['show_rss_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pinterest_top'] ) )
  $input['show_pinterest_top'] = null;
  $input['show_pinterest_top'] = ( $input['show_pinterest_top'] == 1 ? 1 : 0 );

 if ( ! isset( $input['sns_type_btm'] ) )
  $input['sns_type_btm'] = null;
 if ( ! array_key_exists( $input['sns_type_btm'], $sns_type_btm_options ) )
  $input['sns_type_btm'] = null;
 if ( ! isset( $input['show_sns_btm'] ) )
  $input['show_sns_btm'] = null;
  $input['show_sns_btm'] = ( $input['show_sns_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_twitter_btm'] ) )
  $input['show_twitter_btm'] = null;
  $input['show_twitter_btm'] = ( $input['show_twitter_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fblike_btm'] ) )
  $input['show_fblike_btm'] = null;
  $input['show_fblike_btm'] = ( $input['show_fblike_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fbshare_btm'] ) )
  $input['show_fbshare_btm'] = null;
  $input['show_fbshare_btm'] = ( $input['show_fbshare_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_google_btm'] ) )
  $input['show_google_btm'] = null;
  $input['show_google_btm'] = ( $input['show_google_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_hatena_btm'] ) )
  $input['show_hatena_btm'] = null;
  $input['show_hatena_btm'] = ( $input['show_hatena_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pocket_btm'] ) )
  $input['show_pocket_btm'] = null;
  $input['show_pocket_btm'] = ( $input['show_pocket_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_feedly_btm'] ) )
  $input['show_feedly_btm'] = null;
  $input['show_feedly_btm'] = ( $input['show_feedly_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss_btm'] ) )
  $input['show_rss_btm'] = null;
  $input['show_rss_btm'] = ( $input['show_rss_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pinterest_btm'] ) )
  $input['show_pinterest_btm'] = null;
  $input['show_pinterest_btm'] = ( $input['show_pinterest_btm'] == 1 ? 1 : 0 );

 if ( ! isset( $input['show_author'] ) )
  $input['show_author'] = null;
  $input['show_author'] = ( $input['show_author'] == 1 ? 1 : 0 );

 // break-word
 if ( ! isset( $input['use_break_word'] ) )
  $input['use_break_word'] = null;
  $input['use_break_word'] = ( $input['use_break_word'] == 1 ? 1 : 0 );

 // fixed header
 if ( ! isset( $input['fixed_header'] ) )
  $input['fixed_header'] = null;
  $input['fixed_header'] = ( $input['fixed_header'] == 1 ? 1 : 0 );

 // オリジナルスタイルの設定
 $input['css_code'] = $input['css_code'];

 // custom head/script
 $input['custom_head'] = $input['custom_head'];

 // header button
 $input['header_btnlabel'] = wp_filter_nohtml_kses( $input['header_btnlabel'] );
 $input['header_url'] = wp_filter_nohtml_kses( $input['header_url'] );

 // トップページ・メインイメージの設定
 $input['top_main_image1'] = wp_filter_nohtml_kses( $input['top_main_image1'] );
 $input['top_main_image2'] = wp_filter_nohtml_kses( $input['top_main_image2'] );
 $input['top_main_image3'] = wp_filter_nohtml_kses( $input['top_main_image3'] );
 $input['top_main_image4'] = wp_filter_nohtml_kses( $input['top_main_image4'] );
 $input['top_main_image5'] = wp_filter_nohtml_kses( $input['top_main_image5'] );

 //Slider
 $input['slider_image1'] = wp_filter_nohtml_kses( $input['slider_image1'] );
 $input['slider_image2'] = wp_filter_nohtml_kses( $input['slider_image2'] );
 $input['slider_image3'] = wp_filter_nohtml_kses( $input['slider_image3'] );
 $input['slider_url1'] = wp_filter_nohtml_kses( $input['slider_url1'] );
 $input['slider_url2'] = wp_filter_nohtml_kses( $input['slider_url2'] );
 $input['slider_url3'] = wp_filter_nohtml_kses( $input['slider_url3'] );

 //index page 1st block
 $input['top_content1_headline'] = $input['top_content1_headline'];
 $input['top_content1_btnlabel'] = $input['top_content1_btnlabel'];
 $input['top_content1_btnsize'] = wp_filter_nohtml_kses( $input['top_content1_btnsize'] );
 $input['top_content1_btnsize_mobile'] = wp_filter_nohtml_kses( $input['top_content1_btnsize_mobile'] );
 $input['top_content1_color'] = wp_filter_nohtml_kses( $input['top_content1_color'] );
 $input['top_content1_dropshadow_h'] = wp_filter_nohtml_kses( $input['top_content1_dropshadow_h'] );
 $input['top_content1_dropshadow_v'] = wp_filter_nohtml_kses( $input['top_content1_dropshadow_v'] );
 $input['top_content1_dropshadow_b'] = wp_filter_nohtml_kses( $input['top_content1_dropshadow_b'] );
 $input['top_content1_dropshadow_c'] = wp_filter_nohtml_kses( $input['top_content1_dropshadow_c'] );
 $input['top_content1_btncolor'] = wp_filter_nohtml_kses( $input['top_content1_btncolor'] );
 $input['top_content1_btnbgcolor'] = wp_filter_nohtml_kses( $input['top_content1_btnbgcolor'] );

 //index page 2nd block
 $input['top_content2_headline'] = $input['top_content2_headline'];
 $input['top_content2_bodytext'] = $input['top_content2_bodytext'];

 //index page 3rd block
 $input['top_content3_headline'] = wp_filter_nohtml_kses( $input['top_content3_headline'] );
 $input['top_content3_headline_sub'] = wp_filter_nohtml_kses( $input['top_content3_headline_sub'] );
 $input['top_content3_banner_image1'] = wp_filter_nohtml_kses( $input['top_content3_banner_image1'] );
 $input['top_content3_banner_image2'] = wp_filter_nohtml_kses( $input['top_content3_banner_image2'] );
 $input['top_content3_banner_image3'] = wp_filter_nohtml_kses( $input['top_content3_banner_image3'] );
 $input['top_content3_banner_url1'] = wp_filter_nohtml_kses( $input['top_content3_banner_url1'] );
 $input['top_content3_banner_url2'] = wp_filter_nohtml_kses( $input['top_content3_banner_url2'] );
 $input['top_content3_banner_url3'] = wp_filter_nohtml_kses( $input['top_content3_banner_url3'] );
 $input['top_content3_banner_btnlabel1'] = wp_filter_nohtml_kses( $input['top_content3_banner_btnlabel1'] );
 $input['top_content3_banner_btnlabel2'] = wp_filter_nohtml_kses( $input['top_content3_banner_btnlabel2'] );
 $input['top_content3_banner_btnlabel3'] = wp_filter_nohtml_kses( $input['top_content3_banner_btnlabel3'] );
 $input['top_content3_banner_headline1'] = $input['top_content3_banner_headline1'];
 $input['top_content3_banner_headline2'] = $input['top_content3_banner_headline2'];
 $input['top_content3_banner_headline3'] = $input['top_content3_banner_headline3'];
 $input['top_content3_banner_body1'] = $input['top_content3_banner_body1'];
 $input['top_content3_banner_body2'] = $input['top_content3_banner_body2'];
 $input['top_content3_banner_body3'] = $input['top_content3_banner_body3'];

 //index page 4th block
 $input['top_content4_headline'] = wp_filter_nohtml_kses( $input['top_content4_headline'] );
 $input['top_content4_headline_sub'] = wp_filter_nohtml_kses( $input['top_content4_headline_sub'] );
 $input['top_content4_fontsize'] = wp_filter_nohtml_kses( $input['top_content4_fontsize'] );
 if ( ! isset( $input['top_content4_showdate'] ) )
  $input['top_content4_showdate'] = null;
  $input['top_content4_showdate'] = ( $input['top_content4_showdate'] == 1 ? 1 : 0 );
 if ( ! isset( $input['top_content4_showcate'] ) )
  $input['top_content4_showcate'] = null;
  $input['top_content4_showcate'] = ( $input['top_content4_showcate'] == 1 ? 1 : 0 );
 $input['top_content4_indexurl'] = wp_filter_nohtml_kses( $input['top_content4_indexurl'] );
 $input['top_content4_indexlabel'] = wp_filter_nohtml_kses( $input['top_content4_indexlabel'] );

 //index page 5th block
 $input['top_content5_headline'] = wp_filter_nohtml_kses( $input['top_content5_headline'] );
 $input['top_content5_headline_sub'] = wp_filter_nohtml_kses( $input['top_content5_headline_sub'] );
 $input['top_content5_banner_image1'] = wp_filter_nohtml_kses( $input['top_content5_banner_image1'] );
 $input['top_content5_banner_image2'] = wp_filter_nohtml_kses( $input['top_content5_banner_image2'] );
 $input['top_content5_banner_image3'] = wp_filter_nohtml_kses( $input['top_content5_banner_image3'] );
 $input['top_content5_banner_url1'] = wp_filter_nohtml_kses( $input['top_content5_banner_url1'] );
 $input['top_content5_banner_url2'] = wp_filter_nohtml_kses( $input['top_content5_banner_url2'] );
 $input['top_content5_banner_url3'] = wp_filter_nohtml_kses( $input['top_content5_banner_url3'] );
 $input['top_content5_banner_btnlabel1'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel1'] );
 $input['top_content5_banner_btnlabel2'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel2'] );
 $input['top_content5_banner_btnlabel3'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel3'] );
 $input['top_content5_banner_btnlabel_sub1'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel_sub1'] );
 $input['top_content5_banner_btnlabel_sub2'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel_sub2'] );
 $input['top_content5_banner_btnlabel_sub3'] = wp_filter_nohtml_kses( $input['top_content5_banner_btnlabel_sub3'] );
 $input['top_content5_banner_headline1'] = $input['top_content5_banner_headline1'];
 $input['top_content5_banner_headline2'] = $input['top_content5_banner_headline2'];
 $input['top_content5_banner_headline3'] = $input['top_content5_banner_headline3'];
 $input['top_content5_banner_body1'] = $input['top_content5_banner_body1'];
 $input['top_content5_banner_body2'] = $input['top_content5_banner_body2'];
 $input['top_content5_banner_body3'] = $input['top_content5_banner_body3'];

 //index page 6th block
 $input['top_content6_banner_image1'] = wp_filter_nohtml_kses( $input['top_content6_banner_image1'] );
 $input['top_content6_banner_image2'] = wp_filter_nohtml_kses( $input['top_content6_banner_image2'] );
 $input['top_content6_banner_image3'] = wp_filter_nohtml_kses( $input['top_content6_banner_image3'] );
 $input['top_content6_banner_image4'] = wp_filter_nohtml_kses( $input['top_content6_banner_image4'] );
 $input['top_content6_banner_image5'] = wp_filter_nohtml_kses( $input['top_content6_banner_image5'] );
 $input['top_content6_banner_url1'] = wp_filter_nohtml_kses( $input['top_content6_banner_url1'] );
 $input['top_content6_banner_url2'] = wp_filter_nohtml_kses( $input['top_content6_banner_url2'] );
 $input['top_content6_banner_url3'] = wp_filter_nohtml_kses( $input['top_content6_banner_url3'] );
 $input['top_content6_banner_url4'] = wp_filter_nohtml_kses( $input['top_content6_banner_url4'] );
 $input['top_content6_banner_url5'] = wp_filter_nohtml_kses( $input['top_content6_banner_url5'] );

 if ( ! array_key_exists( $input['top_content6_contents'], $top_content6_contents_options ) )
  $input['top_content6_contents'] = null;

 if ( ! array_key_exists( $input['order_by'], $order_by_options ) )
  $input['order_by'] = null;


 // フッターの設定
 $input['twitter_url'] = wp_filter_nohtml_kses( $input['twitter_url'] );
 $input['facebook_url'] = wp_filter_nohtml_kses( $input['facebook_url'] );
 $input['insta_url'] = wp_filter_nohtml_kses( $input['insta_url'] );
 $input['pinterest_url'] = wp_filter_nohtml_kses( $input['pinterest_url'] );
 $input['flickr_url'] = wp_filter_nohtml_kses( $input['flickr_url'] );
 $input['tumblr_url'] = wp_filter_nohtml_kses( $input['tumblr_url'] );
 if ( ! isset( $input['show_rss'] ) )
  $input['show_rss'] = null;
  $input['show_rss'] = ( $input['show_rss'] == 1 ? 1 : 0 );
 $input['footer_image'] = wp_filter_nohtml_kses( $input['footer_image'] );
 $input['footer_headline'] = wp_filter_nohtml_kses( $input['footer_headline'] );
 $input['footer_btnlabel'] = wp_filter_nohtml_kses( $input['footer_btnlabel'] );
 $input['footer_url'] = wp_filter_nohtml_kses( $input['footer_url'] );
 $input['footer_logo'] = wp_filter_nohtml_kses( $input['footer_logo'] );

 //Single page settings
 $input['blog_header_image'] = wp_filter_nohtml_kses( $input['blog_header_image'] );
 $input['single_fontsize'] = wp_filter_nohtml_kses( $input['single_fontsize'] );

 //Staff page settings
 $input['staff_headline'] = wp_filter_nohtml_kses( $input['staff_headline'] );
 $input['staff_desc'] = $input['staff_desc'];
 $input['staff_headline_fontsize'] = wp_filter_nohtml_kses( $input['staff_headline_fontsize'] );
 $input['staff_desc_fontsize'] = wp_filter_nohtml_kses( $input['staff_desc_fontsize'] );

 //Archive page settings
 $input['archive_headline'] = $input['archive_headline'];
 $input['archive_fontsize'] = wp_filter_nohtml_kses( $input['archive_fontsize'] );
 if ( ! isset( $input['archive_showdate'] ) )
  $input['archive_showdate'] = null;
  $input['archive_showdate'] = ( $input['archive_showdate'] == 1 ? 1 : 0 );
 if ( ! isset( $input['archive_showcate'] ) )
  $input['archive_showcate'] = null;
  $input['archive_showcate'] = ( $input['archive_showcate'] == 1 ? 1 : 0 );

 //ロゴの位置
 if(isset($input['logotop'])){
	 $input['logotop'] = intval($input['logotop']);
 }
 if(isset($input['logoleft'])){
	 $input['logoleft'] = intval($input['logoleft']);
 }

 //ファイルアップロード
 if(isset($_FILES['dp_image'])){
	$message = _dp_upload_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //画像リサイズ
 if(isset($_REQUEST['dp_logo_resize_left'], $_REQUEST['dp_logo_resize_top']) && is_numeric($_REQUEST['dp_logo_resize_left']) && is_numeric($_REQUEST['dp_logo_resize_top'])){
	$message = _dp_resize_logo();
	add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }


 // スマホ用固定フッターバーの設定
 if ( ! array_key_exists( $input['footer_bar_display'], $footer_bar_display_options ) )
  $input['footer_bar_display'] = 'type3';
 $input['footer_bar_bg'] = wp_filter_nohtml_kses( $input['footer_bar_bg'] );
 $input['footer_bar_border'] = wp_filter_nohtml_kses( $input['footer_bar_border'] );
 $input['footer_bar_color'] = wp_filter_nohtml_kses( $input['footer_bar_color'] );
 $input['footer_bar_tp'] = wp_filter_nohtml_kses( $input['footer_bar_tp'] );

 //if ( ! isset( $input['show_footer_bar'] ) ) $input['show_footer_bar'] = null;
 //$input['show_footer_bar'] = ( $input['show_footer_bar'] == 1 ? 1 : 0 );
 $footer_bar_btns = array();
 if ( isset( $input['repeater_footer_bar_btns'] ) ):
   foreach ( (array)$input['repeater_footer_bar_btns'] as $key => $value ) {
    $footer_bar_btns[] = array(
     'type' => ( isset( $input['repeater_footer_bar_btns'][$key]['type'] ) && array_key_exists( $input['repeater_footer_bar_btns'][$key]['type'], $footer_bar_button_options ) ) ? $input['repeater_footer_bar_btns'][$key]['type'] : 'type1',
     'label' => isset( $input['repeater_footer_bar_btns'][$key]['label'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['label'] ) : '',
     'url' => isset( $input['repeater_footer_bar_btns'][$key]['url'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['url'] ) : '',
     'number' => isset( $input['repeater_footer_bar_btns'][$key]['number'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['number'] ) : '',
     'target' => ! empty( $input['repeater_footer_bar_btns'][$key]['target'] ) ? 1 : 0,
     'icon' => ( isset( $input['repeater_footer_bar_btns'][$key]['icon'] ) && array_key_exists( $input['repeater_footer_bar_btns'][$key]['icon'], $footer_bar_icon_options ) ) ? $input['repeater_footer_bar_btns'][$key]['icon'] : 'file-text'
    );
   }
 endif;
 $input['footer_bar_btns'] = $footer_bar_btns;


 return $input;
}

?>