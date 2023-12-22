<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <title>Website Menu #4</title>
  </head>
  <body <?php body_class(); ?> >


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="float-left">
                  <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top-header-left-utility',
                        'menu_id' => 'menu-header-utility-left-1',
                        'menu_class' => 'header-utility-left',
                    ));
                    ?>
                </div>


              <div class="float-right">

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top-header-right-utility',
                        'menu_id' => 'menu-header-utility-right-1',
                        'menu_class' => 'header-utility-right',
                    ));
                ?>
              </div>

            </div>

          </div>

        </div>
      </div>
        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_id' => 'menu-main-menu',
                        'menu_class' => 'site-menu main-menu js-clone-nav ml-auto d-none d-lg-block',
                    ));
                ?>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

    <div class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero_1.jpg);">
    </div>