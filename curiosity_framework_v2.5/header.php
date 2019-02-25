<?php
/**
 * @package Curiosity Marketing Group (www.curiositymg.com)
 **/?>
    <!DOCTYPE html>
    <html "<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="container-fluid site_header">
            <div class="row">
                <div class="container-fluid">
                    <div class="row hidden-lg">
                        <nav id="primary-bootstrap-menu" class="navbar navbar-default text-center" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
                                        <span>Menu</span>
                                    </button>
                                </div>
                                <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                            </div>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 text-left phonenumber">
                            <a href="tel:850-267-2299">850.267.2299</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right socialmedia">
                            <a href="https://www.facebook.com/Elmos-Grill-185463494836678/" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" /></a>
                            <a href="https://www.instagram.com/elmos_grill_30a/" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" /></a>
                            <a href="https://twitter.com/elmos_grill_30A" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" /></a>
                            <a href="https://plus.google.com/116444727736441362419" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" /></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center elmoslogo">
                            <img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/images/elmoslogo.png">
                        </div>
                    </div>
                    <div class="row hidden-sm hidden-xs">
                        <nav id="primary-bootstrap-menu" class="navbar navbar-default text-center" role="navigation">
                            <div class="container-fluid">
                                <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                            </div>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center scrollarrow">
                            <span class="transparent-circle"><span class="chevron bottom"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>