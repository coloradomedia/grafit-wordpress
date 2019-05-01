<?php
/*
 * The template for displaying 404 pages (not found).
 */

get_header(); ?>

<div class="container section-padding">
	<div class="row">

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

			<div class="">
				<div class="entry-container">
					<section class="error-404 not-found">
						<div class="error-404-img">
							<i class="fa fa-thumbs-down"></i>
						</div>
						<header>
							<h1 class="page-title"><?php _e( 'Ups! Taka strona nie istnieje.', 'grafitmotyw' ); ?></h1>
						</header><!-- .page-header -->

					
						<div class="page-content">
							<p><?php _e( 'Wygląda na to, że wpisałeś błędny adres. Sprawdź jeszcze raz albo skorzystaj z wyszukiwarki.', 'grafitmotyw' ); ?></p>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->
				</div><!-- .entry-content -->
			</div><!-- .card -->

		</main><!-- #main -->
	</div><!-- #primary -->

	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
