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


        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/logo-grafit-wektor.svg" alt="Logo"
                    width="200" height="auto" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">

                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="article.html">Oferta</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">O nas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Raty</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lokalizacja</a></li>
                </ul>

            </div>
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