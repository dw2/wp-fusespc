<?php
get_header();
while(have_posts()): the_post();
?>

<section class="post">
  <div class="title">
    <h1><a href="<? the_permalink() ?>"><? the_title() ?></a></h1>
    <h3 class="date">Posted <? the_time('F j, Y') ?> at <? the_time('g:ia') ?></h3>
  </div>
  <? the_content() ?>
</section>

<?
endwhile;
get_footer();