<?php
/*
* The header for our theme
*/
?>
<DOCTYPE html>

    <html <?php language_attributes(); ?>>
      <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Custom Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

        <!-- fontawesome -->

        <script src="https://kit.fontawesome.com/55db7e6003.js" crossorigin="anonymous"></script>


        <title><?php wp_title(''); ?></title>
        <?php wp_head(); ?>
      </head>
      <body <?php body_class(); ?>>
        <!-- ==== HEADER ==== -->
        <header>
            <nav class="navbar navbar-expand-md navbar-expand-sm light">
              <div class="logo"><a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="TerraStorm Software Development Logo" ></a></div>
              <button type="button" class="navbar-light navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                <!-- <span class="sr-only">Toggle Navigation</span> -->
                <span class="navbar-light navbar-toggler-icon"></span>
              </button>
              <?php wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse justify-content-end text-uppercase',
                  'container_id'    => 'navbarNav',
                  'menu_class'      => 'navbar-nav',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
                
            </nav>
        </header>
