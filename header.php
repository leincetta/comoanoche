<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title> -->
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Output any code that need to come before closing the head tag -->
    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav>
      <div class="nav-wrapper container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><?php bloginfo('title'); ?></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <!-- Desktop menu -->
        <div class="right hide-on-med-and-down">
          <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
        </div>
        <!-- Mobile menu -->
        <div class="side-nav" id="mobile-demo">
          <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
        </div>
      </div>
    </nav>
