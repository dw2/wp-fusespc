<?php
/* Template Name: Story Page */
get_header();
the_post();
?>

<section class="page">
  <div class="wrapper">
    <h1><? the_title() ?></h1>
    <div class="imgr"><? the_post_thumbnail() ?></div>
    <? the_content() ?>
  </div>
</section>

<?
get_footer();
