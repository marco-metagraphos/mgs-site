<?php
/**
 * The theme header
 * 
 * @package mgs
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!--wordpress head-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="page-container">
      <?php do_action('before'); ?>

<!--*********************
MENÚ
*********************-->
      <div id="cover"></div>
      <h1 class="hidden">Metagraphos</h1>

      <nav class="navbar navbar-mgs navbar-fixed-top">
        <header>
          <h2 class="hidden">metagraphos nav</h2>
        </header>

        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
            </a>
          </div>
              
          <div id="navbar" class="navbar-collapse collapse">
              <?php dynamic_sidebar('menu'); ?>
          </div><!--.navbar-collapse-->

        </div>

      </nav>

<!--*********************
GOOGLE MAPS
*********************-->
      <div id="gmap">
        <?php dynamic_sidebar('contacto'); ?>
      </div>
      
      <div id="content" class="">