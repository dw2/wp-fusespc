<?php

add_theme_support('menus');
register_nav_menu('Header', 'Top level links, displayed in the header.');

add_theme_support('post-thumbnails');

define('TEMPLATE_URL', get_bloginfo('template_url'));
define('POLICIES_PAGE_ID', 11);
define('PRIVACY_POLICY_PAGE_ID', 9);
define('TERMS_OF_USE_PAGE_ID', 14);
define('STORIES_PAGE_ID', 33);

function display_storyboxes($posts) {
  foreach($posts as $index=>$story) {
    $number = $index + 1;
    $title = $story->post_title;
    $image = get_the_post_thumbnail($story->ID);
    $job = get_post_meta($story->ID, 'Job Title', true);
    $quote = get_post_meta($story->ID, 'Short Quote', true);;
    $link = get_permalink($story->ID);
  
    include 'partials/storybox.php';
  }
}
