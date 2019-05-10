<?php
/**
 * The sidebar containing the footer widget area.
 */
?>

<div class="footer-widgets-wrapper container-fluid">
	<div class="footer-widgets-wrapper-inner row">
		<div class="col-xs-12 col-md-5 footer-widget open-footer">
			<h3>Godziny Otwarcia</h3>
			<div class="open-footer">Poniedziałek-Piątek: 8:00-17:00 <br> Sobota: 8:00-14:00</div>
		</div>
		<div class="col-xs-12 col-md-2 footer-widget">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
		<div class="col-xs-12 col-md-2 footer-widget">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="col-xs-12 col-md-3 footer-widget contact-footer">
			<p class="facebook"><i class="fab fa-facebook"></i>&nbsp;Grafit na Facebooku</p>
			<p class="phone"><i class="fas fa-phone"></i>&nbsp;14 613 21 04</p>
			<p class="mail"><a href="mailto:biuro@meblegrafit.pl"><i class="fas fa-at"></i>&nbsp;biuro@meblegrafit.pl</a></p>
			<p class="map-mark"><i class="fas fa-map-marker-alt"></i>&nbsp;32-731 Żegocina 10</p>
		</div>
	</div>
</div>
