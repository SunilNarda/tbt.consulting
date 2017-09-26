<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- Einbindung Stylesheet -->

        <? wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
          <? wp_enqueue_style( 'mobile', get_template_directory_uri() . '/mobile.css'  ); ?>
<!-- Font Awesome vom CDN laden -->
                <? wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'  );?>
                <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="<?php bloginfo('stylesheet_directory'); ?>/js/animatedCircle.js"></script>

        <?php wp_head(); ?>

      </head>

<body>

        <!-- Pfeil Navigation "Next & Prev Page" -->
        <?php
  $pagelist = get_pages(array('sort_column' => 'menu_order'));
  $pages = array();
  foreach ($pagelist as $page) {
     $pages[] += $page->ID;
  }

  $current = array_search(get_the_ID(), $pages);
  $prevID = $pages[$current-1];
  $nextID = $pages[$current+1];
  ?>

<div>
        <div>
          <a class="pfeil_links" href="<?php echo get_permalink($prevID); ?>" title="Prev">
          <img class="pfeil_links" src="<?php bloginfo('stylesheet_directory'); ?>/images/pfeil_grau_links.png" alt="vorherige Seite"></a>
        </div>

        <div>
          <a class="pfeil_rechts" href="<?php echo get_permalink($nextID); ?>" title="Next">
          <img class="pfeil_rechts" src="<?php bloginfo('stylesheet_directory'); ?>/images/pfeil_grau_rechts.png" alt="naechste Seite"></a>
        </div>
</div>
