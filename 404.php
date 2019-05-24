<?php
/*
 * The template for displaying 404 pages (not found).
 */

get_header(); ?>

<div class="container-fluid notfound404">

	<h1 class="clip-text cover-404 animated galaxy faster">404</h1>
	
	<h2 class="animated fadeIn delay-05s"><?php _e( 'Kurwa mać! Istnieje wiele stron w galaktyce, ale ta nie została odnaleziona.', 'motywgrafit' ); ?></h2>

	<p class="animated fadeIn delay-1s"><?php _e( 'Wygląda na to, że wpisałeś błędny adres. Sprawdź jeszcze raz.', 'motywgrafit' ); ?></p>

</div>

<?php get_footer(); ?>