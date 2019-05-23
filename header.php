<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?>Grafit Salon Meblowy Żegocina</title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#">Menu Navwalker</a>
        <?//php
        // wp_nav_menu( array(
        //     'theme_location'    => 'primary',
        //     'depth'             => 2,
        //     'container'         => 'div',
        //     'container_class'   => 'collapse navbar-collapse justify-content-end',
        //     'container_id'      => 'navbarNavDropdown',
        //     'menu_class'        => 'navbar-nav',
        //     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        //     'walker'            => new WP_Bootstrap_Navwalker()
		// ) );
        ?>
    </div>
</nav> -->

<header class="nav-head animated fadeInDown">

        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/img/logo-grafit-wektor.svg" alt="Logo" width="200"
                    height="auto" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="about">O nas</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="salon">Pokoje dzienne</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="kitchen">Kuchnie - na wymiar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="teens">Pokoje młodzieżowe</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="kids">Pokoje dziecięce</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="bedrooms">Sypialnie</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="office">Biura</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="bathrooms">Łazienki</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="extras">Dodatki</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="agdrtv">AGD/RTV</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="doors">Drzwi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="wood">Panele</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="gateways">Bramy i ogrodzenia</a>
                        </>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link" href="installment">Raty</a></li>
                    <li class="nav-item"><a class="nav-link" href="map">Mapa</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/Grafit-MEBLE-%C5%BBegocina-1400822653517757/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                </ul>

            </div>
        </nav>

    </header>