<?php
/* Template Name: Contact Page */
get_header();
the_post();
?>

<section class="page">
  <div class="wrapper">
    <h1><? the_title() ?></h1>
    <? the_content() ?>
  </div>
</section>

<? include 'partials/mailchimp.php' ?>

<section class="map">
  <iframe frameborder="0" height="480px" src="https://a.tiles.mapbox.com/v4/fuse.j753mma4/attribution,zoompan,geocoder.html?access_token=pk.eyJ1IjoiZnVzZSIsImEiOiJMWVVpZlI4In0.sX7bLMpRfW4gbv-4b7dlgw" width="100%"></iframe>
</section>

<?
get_footer();
