<?php

add_theme_support('menus');
register_nav_menu('Header', 'Top level links, displayed in the header.');

add_theme_support('post-thumbnails');

define('TEMPLATE_URL', get_bloginfo('template_url'));

define('POLICIES_PAGE_ID', 11);
define('PRIVACY_POLICY_PAGE_ID', 9);
define('TERMS_OF_USE_PAGE_ID', 14);
define('STORIES_PAGE_ID', 33);

define('MEMBERSHIP_PAGE_ID', 123);
define('MEMBERSHIP_CHECKOUT_PAGE_ID', 126);
define('MEMBERSHIP_AVAILABILITY_PAGE_ID', 171);

define('BASIC_MEMBERSHIP_LEVEL', 1);
define('HOT_DESK_1_LEVEL', 2);
define('HOT_DESK_2_LEVEL', 3);
define('FIXED_DESK_LEVEL', 4);

define('ANNUAL_REPORT_PAGE_ID', 208);

function display_storyboxes ($posts)
{
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

# Remove PMPro CSS
function dequeue_pmpro_css ()
{
  wp_dequeue_style('pmpro_frontend');
  wp_dequeue_style('pmpro_print');
}
add_action('wp_print_styles','dequeue_pmpro_css', 10);
