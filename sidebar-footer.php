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
		<div class="col-xs-12 col-md-2 footer-widget">
			<i class="fa fa-facebook-official"></i>
		</div>
	</div>
</div>
