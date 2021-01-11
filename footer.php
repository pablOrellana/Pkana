<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="wrapper mt-5 mt-lg-0" id="wrapper-footer">
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-section">
            <div class="title">Contacto</div>
            <dl class="footer-section-item">
              <dt>Horario de atención (Delivery):</dt>
              <dd class="ml-3">Lun - Dom (9am- 6pm)</dd>

              <dt>Teléfono:</dt>
              <dd class="ml-3">+51 912349543</dd>

              <dt>Correo:</dt>
              <dd class="ml-3">ventas@pkanashop.com</dd>
            </dl>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="footer-section">
            <div class="title">Enlaces</div>
            <ul>
              <li class="footer-section-item mb-2">
                <a href="/productos">Productos</a>
              </li>
              <li class="footer-section-item">
                <a href="/contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0 d-flex">
          <div class="embedded-fb">
            <div class="fb-page" data-href="https://www.facebook.com/Pkana-Frutos-secos-y-m%C3%A1s-104222451580555/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/Pkana-Frutos-secos-y-m%C3%A1s-104222451580555/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Pkana-Frutos-secos-y-m%C3%A1s-104222451580555/">P&#039;kana - Frutos secos y más</a></blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- wrapper end -->
<div class="footer-end py-5 py-lg-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex">
        <div class="m-auto ml-lg-0 text-center">
          ©2021 P'KANA. Todos los derechos reservados
        </div>
      </div>
      <div class="col-lg-6 d-flex mt-3 mt-lg-0">
        <div class="m-auto mr-lg-0">
          Página creada por Pablo Orellana R.
        </div>
      </div>
    </div>
  </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-out-back',
    duration: 1000,
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
<script>
  new Splide( '.splide', {
	// type   : 'loop',
  perPage: 5,
  autoWidth: true,
  breakpoints: {
    576: {
      perPage: 3,
    },
    300: {
      perPage: 2,
    },
  },
  focus  : 'center',
  pagination: false,
} ).mount();
</script>
<!-- end Scripts -->
</body>

</html>

