<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="container">
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <!-- <div class="container"> -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-grafit-wektor.svg" alt="Logo"
                        width="200" height="auto" /></a>
                        <!-- </div> -->
                

            <ul>
                <li><a href="article.html">Oferta</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Kontakt</a></li>
                <li><a href="#">Raty</a></li>
                <li><a href="#">Lokalizacja</a></li>
            </ul>


        </nav>
    </header>

    <!-- <?php
                // wp_nav_menu( array(
                //     'theme_location'    => 'primary',
                //     'depth'             => 2,
                //     'container'         => 'div',
                //     'container_class'   => 'collapse navbar-collapse',
                //     'container_id'      => 'bs-example-navbar-collapse-1',
                //     'menu_class'        => 'nav navbar-nav',
                //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                //     'walker'            => new WP_Bootstrap_Navwalker()
                // ) );
                ?>  -->