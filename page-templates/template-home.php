<?php
/**
 * Template Name: Inicio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$portada_1 = get_field( 'portada_1' );
$portada_2 = get_field( 'portada_2' );

get_header();
?>


<!-- Sección hero banner -->
<section>
  <div class="home-banner">
    <div class="main-visual main-visual--top"></div>
    <div class="over-ray">
        <img class="reile-logo" sizes="(max-width: 1248px) 100vw, 1248px" srcset="
        <?php echo get_template_directory_uri(); ?>/img/pkana_logo.png 375w,
          <?php echo get_template_directory_uri(); ?>/img/pkana_logo.png 884w,
          <?php echo get_template_directory_uri(); ?>/img/pkana_logo.png 1248w" src="<?php echo get_template_directory_uri(); ?>/img/pkana_logo.png" alt="P'KANA">
      </div>
  </div>
</section>
<!-- Fin sección hero banner -->
<!-- Sección sobre nosotros -->
<section class="mt-5 mb-5">
  <div class="about-us"  data-aos="flip-left">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="extract text-lg-right">
            <h2>Sobre Nosotros</h2>
            <p>
              <?php the_field( 'descripcion_1' ); ?>
            </p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="image-holder">
          <?php if ( $portada_1 ) : ?>
	          <img src="<?php echo esc_url( $portada_1['url'] ); ?>" alt="<?php echo esc_attr( $portada_1['alt'] ); ?>" />
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin sección sobre nosotros -->
<!-- Sección que ofrecemos -->
<section class="mt-5">
  <div class="what-we-offer" data-aos="flip-right">
    <div class="container">
      <div class="row flex-column-reverse flex-lg-row">
        <div class="col-lg-7">
          <div class="image-holder">
          <?php if ( $portada_2 ) : ?>
	          <img src="<?php echo esc_url( $portada_2['url'] ); ?>" alt="<?php echo esc_attr( $portada_2['alt'] ); ?>" />
          <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="extract">
            <h2>Que ofrecemos</h2>
            <p><?php the_field( 'descripcion_2' ); ?></p>
          </div>
          <div class="text-right text-lg-left mb-3 mb-lg-0">
            <a href="/productos" class="button">
              Ver Productos
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin sección que ofrecemos -->

<?php
get_footer();
