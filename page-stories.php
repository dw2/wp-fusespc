<?php
/* Template Name: Stories Page */
get_header();
the_post();
?>

<section class="page">
  <div class="wrapper">
    <h1><? the_title() ?></h1>
    <? the_content() ?>
  </div>
</section>

<section class="stories">
  <div class="wrapper">
    <?
      display_storyboxes(get_children(array(
        'post_parent' => STORIES_PAGE_ID,
        'post_type' => 'page',
        'post_status' => 'published',
        'posts_per_page' => -1,
        'order' => 'ASC'
      )));
    ?>
  </div>
</section>

<?
get_footer();
