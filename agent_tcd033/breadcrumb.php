<?php $options = get_desing_plus_option(); ?>

<ul id="bread_crumb" class="clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="home"><a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>"><span itemprop="name"><?php _e('Home', 'tcd-w'); ?></span></a><meta itemprop="position" content="1" /></li>

<?php if(is_paged()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php _e('Blog Archives', 'tcd-w'); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_post_type_archive('staff')) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php _e('Staff','tcd-w') ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif (is_category()) { ?>
  <?php $cat = get_queried_object(); ?>
  <?php $i=2; if($cat -> parent != 0): ?>
  <?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
  <?php foreach($ancestors as $ancestor): ?>
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo get_category_link($ancestor); ?>"><span itemprop="name"><?php echo get_cat_name($ancestor); ?></span></a><meta itemprop="position" content="<?php echo $i; ?>" /></li>
  <?php $i++; endforeach; ?>
  <?php endif; ?>
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name"><?php echo $cat -> cat_name; ?></span><meta itemprop="position" content="<?php echo $i; ?>" /></li>
<?php } elseif(is_tag()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php echo single_tag_title('', false); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_day()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php echo get_the_time(__('F jS, Y', 'tcd-w')); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_month()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php echo get_the_time(__('F, Y', 'tcd-w')); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_year()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php echo get_the_time(__('Y', 'tcd-w')); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_author()) { global $wp_query; $curauth = $wp_query->get_queried_object(); //get the author info ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php echo $curauth->display_name; ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_search()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php _e("SEARCH","tcd-w"); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_404()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php _e("Sorry, but you are looking for something that isn't here.","tcd-w"); ?></span><meta itemprop="position" content="2" /></li>

<?php } elseif(is_singular('staff')) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo get_post_type_archive_link('staff'); ?>"><span itemprop="name"><?php _e('Staff','tcd-w') ?></span></a><meta itemprop="position" content="2" /></li>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="3" /></li>

<?php } elseif(is_single()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
  <?php
    $categories=get_the_category();
    $count=1;
    foreach ($categories as $category) {
  ?>
  <a itemprop="item" href="<?php echo get_category_link($category->term_id) ?>"><span itemprop="name"><?php echo $category->name ?></span><?php if($count!=count($categories)) echo ',' ?></a>
  <?php $count++; ?>
  <?php } ?>
 <meta itemprop="position" content="2" /></li>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="3" /></li>

<?php } elseif(is_page()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="2" /></li>

 <?php } elseif(is_home() && !is_front_page()) { ?>
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="last"><span itemprop="name"><?php single_post_title(); ?></span><meta itemprop="position" content="2" /></li>

<?php }; ?>
</ul>
