<!DOCTYPE html>
<html>
<head>
  <title><? if(!is_front_page()){ the_title(); echo ' | '; } bloginfo('title'); ?></title>
  <link rel="icon" type="image/x-icon" href="<?= TEMPLATE_URL ?>/images/favicon.png" />

  <meta name='viewport' content='width=device-width, initial-scale=.9'/>
  <meta property="article:publisher", content="http://www.fusespc.com"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="<? the_permalink() ?>"/>
  <meta property="og:title" content="<? the_title() ?>"/>
  <meta property="og:image" content="<?= TEMPLATE_URL ?>/images/fuse-avatar-v3.jpg"/>
  <meta property="og:description" content="<?= strip_tags(get_the_excerpt()) ?>"/>
  <?php
    if (!!$post) {
      $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
      if ($thumb_url) echo '<meta property="og:image" content="' . $thumb_url . '" />';
    }

    //scripts
    wp_enqueue_script('jquery');
    if(is_singular()) wp_enqueue_script('comment-reply');
    wp_enqueue_script('froogaloop', TEMPLATE_URL . '/js/froogaloop.min.js',
        array('jquery'));
    wp_enqueue_script('theme', TEMPLATE_URL . '/js/theme.js',
        array('jquery', 'froogaloop'));

    //css
    wp_enqueue_style('icons', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
    wp_enqueue_style('font-dosis', '//fonts.googleapis.com/css?family=Dosis:200,400,600');
    wp_enqueue_style('theme', TEMPLATE_URL . '/css/theme.css');

    //head
    wp_head();
  ?>
</head>

<body <? body_class() ?>>
  <header>
    <div class="wrapper">
      <a class="branding" href="/">
        <img src='<?= TEMPLATE_URL ?>/images/fuse-branding.png' alt='Fuse | Coworking, Tri-Cities, WA'/>
      </a>
      <div class="social">
        <a href="http://www.facebook.com/fusespc" class="facebook">
          <img src="<?= TEMPLATE_URL ?>/images/facebookicon.png" alt="Fuse on Facebook">
        </a>
        <a href="http://www.twitter.com/fusespc" class="twitter">
          <img src="<?= TEMPLATE_URL ?>/images/twittericon.png" alt="Fuse on Twitter">
        </a>
      </div>
      <nav>
        <ul>
          <?
            echo strip_tags(wp_nav_menu(array(
              'theme_location' => 'Header',
              'items_wrap' => '%3$s',
              'echo' => false
            )), '<ul><li><a>');
          ?>
        </ul>
      </nav>
    </div>
  </header>

  <article>
