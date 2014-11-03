<?php
/* Template Name: Home Page */
get_header();
the_post();
?>

<section class="hero home01">
  <div class="wrapper">
    <h1>A better Tri-Cities starts with you.</h1>
    <h2>Let’s be productive together.</h2>
    <div class="hr"></div>
    <p>
      <a class="btn" href="/coworking">What is coworking?</a>
      <a class="btn" href="/membership">Is this for me?</a>
    </p>
  </div>
</section>

<section class="stories limited">
  <?
    display_storyboxes(get_children(array(
      'post_parent' => STORIES_PAGE_ID,
      'post_type' => 'page',
      'post_status' => 'published',
      'posts_per_page' => 3,
      'orderby' => 'rand'
    )));
  ?>
  <hr>
  <p>
    <a class="btn iconr next round secondary small" href="<?= get_permalink(STORIES_PAGE_ID) ?>">
      All Stories</a>
  </p>
</section>

<? include 'partials/mailchimp.php' ?>

<section class="hero home02">
  <div class="wrapper">
    <h1>
      "You have infinite potential...If you change<br>
      the world, the world will change."
    </h1>
    <h2>&mdash;Neil Gaiman</h2>
  </div>
</section>

<?
get_footer();
