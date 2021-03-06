<!DOCTYPE html>
<html class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137694237-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-137694237-1');
    </script>


    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header>
    <div class="hamburger-wrapper">
      <div class="hamburger-menu"></div>
    </div>

    <div class="mobile-menu-wrapper">
      <div class="menu-mobile-menu-container">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
      </div>

      <div class="socials">
        <a href="" alt="Share on Facebook" title="Share on Facebook" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>

        <a href="" alt="Share on Twitter" title="Share on Twitter" target="_blank">
          <i class="fab fa-twitter-square"></i>
        </a>
      </div>
    </div>

    <div class="top-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
    </div>

    <div class="container">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-horizontal-black.png" class="desktop">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-horizontal-white.png" class="responsive">
      </a>

      <div class="main-menu-container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
      </div>
    </div>
  </header>
<main>