<?php
/**
 * Template Name: Productos
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section>
  <div class="products">
    <div class="slider-wrapper">
      <div class="container">
        <div class="splide">
  	      <div class="splide__track">
  	      	<ul class="splide__list">
  	      		<li class="splide__slide" value="0">Frutos Secos</li>
  	      		<li class="splide__slide" value="1">Frutos Deshidratados</li>
  	      		<li class="splide__slide" value="2">Snacks</li>
  	      		<li class="splide__slide" value="3">Semillas</li>
  	      		<li class="splide__slide" value="4">Menestras</li>
  	      		<li class="splide__slide" value="5">Harina - Hojuelas</li>
  	      		<li class="splide__slide" value="6">Especias</li>
  	      		<li class="splide__slide" value="7">Otros</li>
  	      		<li class="splide__slide" value="8">Mix</li>
  	      	</ul>
  	      </div>
        </div>
      </div>
    </div>
    <div class="product-list">
      <div class="container">
        <div class="product-title">
          <h2>Frutos Secos</h2>
        </div>
      </div>
      <div class="container mt-3 mt-lg-4">
        <div class="row product-items">
            
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();