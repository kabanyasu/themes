<?php

 // Start class widget //
 class tcdw_menu_category_list_widget extends WP_Widget {

 // Constructor //
 function __construct() {
  $widget_ops = array( 'classname' => 'tcdw_menu_category_list_widget', 'description' => __('Displays Product category list.', 'tcd-w') ); // Widget Settings
  $control_ops = array( 'id_base' => 'tcdw_menu_category_list_widget' ); // Widget Control Settings
  parent::__construct( 'tcdw_menu_category_list_widget', __('Product category list (tcd ver)', 'tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 // Extract Args //
 function widget($args, $instance) {
  extract( $args );
   $title = apply_filters('widget_title', $instance['title']); // the widget title
   $exclude_cat_num = $instance['exclude_cat_num']; // category id to exclude
   $show_image = $instance['show_image'];

   // Before widget //
   echo $before_widget;

   // Title of widget //
   if ( $title ) { echo $before_title . $title . $after_title; }

   // Widget output //
   $cats = get_terms("menu_category",'hide_empty=0&orderby=date&order=DESC&exclude='.$exclude_cat_num);
   if($cats){
?>
<ul<?php if($show_image != 1) { echo " class='no_image'"; }; ?>>
 <?php
      foreach ($cats as $cat):
        $cat_id = $cat->term_id;
        $cat_name = $cat->name;
        $cat_slug = $cat->slug;
        $cat_data = get_option("taxonomy_$cat_id");
        if(!empty($cat_data['menu_category_image'])) {
          $image = wp_get_attachment_image_src( $cat_data['menu_category_image'], 'thumbnail' );
        };
 ?>
 <li>
  <ul class="list_outer">
   <li class="list_image">
    <a class="image" href="<?php echo get_term_link( $cat_slug, 'menu_category' ); ?>">
    <?php if ($show_image == 1) { ?>
    <?php if ($show_image == 1 && !empty($cat_data['menu_category_image']) ) { ?><img src="<?php echo $image[0]; ?>" alt="" title="" /><?php } else { ?><img src="<?php echo bloginfo('template_url'); ?>/img/common/no_image1.gif" alt="" title="" /><?php }; ?>
    <?php }; ?>
    </a>
   </li>
   <li class="list_title">
    <a class="title" href="<?php echo get_term_link( $cat_slug, 'menu_category' ); ?>">
    <?php echo $cat_name; ?>
   </a>
   </li>
  </ul>
 </li>
 <?php endforeach; ?>
</ul>
<?php
   };

   // After widget //
   echo $after_widget;

} // end function widget


 // Update Settings //
 function update($new_instance, $old_instance) {
  $instance['title'] = strip_tags($new_instance['title']);
  $instance['exclude_cat_num'] = $new_instance['exclude_cat_num'];
  $instance['show_image'] = $new_instance['show_image'];
  return $instance;
 }

 // Widget Control Panel //
 function form($instance) {
  $defaults = array( 'title' => __('Menu list', 'tcd-w'), 'exclude_cat_num' => '', 'show_image' => '1');
  $instance = wp_parse_args( (array) $instance, $defaults );
?>
<p>
 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tcd-w'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>'" type="text" value="<?php echo $instance['title']; ?>" />
</p>
<p>
 <label for="<?php echo $this->get_field_id('exclude_cat_num'); ?>"><?php _e('Menu categories to exclude:', 'tcd-w'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id('exclude_cat_num'); ?>" name="<?php echo $this->get_field_name('exclude_cat_num'); ?>'" type="text" value="<?php echo $instance['exclude_cat_num']; ?>" />
 <span><?php _e('Enter a comma-seperated list of category ID numbers, example 2,4,10<br />(Don\'t enter comma for last number).', 'tcd-w'); ?></span>
</p>
<p>
 <input id="<?php echo $this->get_field_id('show_image'); ?>" name="<?php echo $this->get_field_name('show_image'); ?>" type="checkbox" value="1" <?php checked( '1', $instance['show_image'] ); ?> />
 <label for="<?php echo $this->get_field_id('show_image'); ?>"><?php _e('Display image', 'tcd-w'); ?></label>
</p>
<?php
 } // end function form
}

// End class widget
add_action('widgets_init', function(){register_widget('tcdw_menu_category_list_widget');});
?>