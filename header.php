<!DOCTYPE html>
<html>
<head>
  <title><? if(!is_front_page()){ the_title(); echo ' | '; } bloginfo('title'); ?></title>
  <link rel="icon" type="image/x-icon" href="<? bloginfo('template_url') ?>/images/favicon.png" />

  <meta name='viewport' content='width=device-width, initial-scale=.9'/>
  <meta property="article:publisher", content="http://www.fusespc.com"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="<? the_permalink() ?>"/>
  <meta property="og:title" content="<? the_title() ?>"/>
  <meta property="og:image" content="<? bloginfo('template_url') ?>/images/fuse-avatar-v3.jpg"/>
  <meta property="og:description" content="<? the_excerpt() ?>"/>
  <?php
    if (!!$post) {
      $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
      if ($thumb_url) echo '<meta property="og:image" content="' . $thumb_url . '" />';
    }

    //scripts
    wp_enqueue_script('jquery');
    if(is_singular()) wp_enqueue_script('comment-reply');
    wp_enqueue_script('theme', get_bloginfo('template_url') . '/js/theme.js');

    //css
    wp_enqueue_style('icons', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
    wp_enqueue_style('font-dosis', '//fonts.googleapis.com/css?family=Dosis:200,400,600');
    wp_enqueue_style('theme', get_bloginfo('template_url') . '/css/theme.css');
    
    //head
    wp_head();
  ?>
</head>

<body <? body_class() ?>>
  <header>
    <div class="wrapper">
      <a class="branding" href="/">
        <img src='<? bloginfo('template_url') ?>/images/fuse-branding.png' alt='Fuse | Coworking, Tri-Cities, WA'/>
      </a>
      <nav>
        <a href='/about'>About</a>
        <a href='/stories'>Stories</a>
        <a href='/membership'>Membership</a>
        <a href='/board'>Board</a>
        <a href='/contact'>Contact</a>
      </nav>
    </div>
  </header>

  <article>
