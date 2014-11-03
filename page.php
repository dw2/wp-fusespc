<?php
get_header();
the_post();
?>

<section class="page">
  <div class="wrapper">
    <h1><? the_title() ?></h1>
    <? the_content() ?>
  </div>
</section>

<?
get_footer();
