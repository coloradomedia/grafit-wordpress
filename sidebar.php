<?php
/*
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'main' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">
	
		<?php dynamic_sidebar( 'main' ); ?>
	
</div>