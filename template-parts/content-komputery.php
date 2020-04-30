<?php
/* The template used for displaying post content in single-laptops.php */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="hits-container single-post-content animated fadeIn">
    <div class="row">
      <div class="col-md-5 single-post-img">
        <div class="hits">
          <?php 
                    $images = get_field('product_gallery');
                    if( $images ):
                    foreach( $images as $image ): ?>
          <a href="<?php echo $image['url']; ?>" data-lightbox="hits" data-title="<?php the_title(); ?>">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
          <?php endforeach;
                    endif; ?>
        </div>
        <div class="hits-nav">
          <?php 
                    $images = get_field('product_gallery');
                    if( $images ):
                    foreach( $images as $image ): ?>
          <img src="<?php echo $image['sizes']['Galeria']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endforeach;
                    endif; ?>
        </div>
        <div class="space"></div>
      </div>
      <div class="col-md-7 single-post-text product-content">
        <?php the_title('<h2 class="main-post-title">', '</h2>'); ?>
        <div class="line row">
          <div class="col-5"><b>Procesor:</b></div>
          <div class="col-7"><?php the_field('CPU'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Taktowanie procesora:</b></div>
          <div class="col-7"><?php the_field('CPU_clock_speed'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Ilość rdzeni:</b></div>
          <div class="col-7"><?php the_field('CPU_core'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Pamięć RAM:</b></div>
          <div class="col-7"><?php the_field('memory'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Grafika:</b></div>
          <div class="col-7"><?php the_field('graphics'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Przekątna ekranu:</b></div>
          <div class="col-7"><?php the_field('diagonal'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Rozdzielczość:</b></div>
          <div class="col-7"><?php the_field('resolution'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Typ ekranu:</b></div>
          <div class="col-7"><?php the_field('screen_type'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Dysk:</b></div>
          <div class="col-7"><?php the_field('disc'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Złącza:</b></div>
          <div class="col-7"><?php the_field('connectors'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Napęd optyczny:</b></div>
          <div class="col-7"><?php the_field('drive'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>System operacyjny:</b></div>
          <div class="col-7"><?php the_field('operating_system'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Gwarancja:</b></div>
          <div class="col-7"><?php the_field('warranty'); ?></div>
        </div>
        <div class="line row">
          <div class="col-5"><b>Dodatkowe informacje:</b></div>
          <div class="col-7"><?php the_field('others'); ?></div>
        </div>
        <div class="product-page-price">
          <?php if( get_field('price') ): ?>
          <div class="product-old-price"><?php the_field('price'); ?>&nbsp;zł</div>
          <?php endif;
                    if( get_field('promo_price') ): ?>
          <div class="product-price"><?php the_field('promo_price'); ?><span>,00&nbsp;zł</span></div>
          <?php endif; ?>
        </div>
        <div class="note">Podana specyfikacja ma charakter poglądowy. Pojemność dysku jak i pamięci RAM może zostać
          zwiększona lub zmniejszona zgodnie z oczekiwaniami.</div>
      </div>
    </div>
    <?php the_content(); ?>
  </div>
      <footer class="edit-footer">
        <?php edit_post_link( __( 'Edytuj' ), '<button class="edit-link btn animated zoomIn delay-05s">', '</button>' ); ?>
      </footer>
</article>