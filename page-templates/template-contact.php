<?php
/**
 * Template Name: Contacto
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<section>
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div>
            <?php the_title('<h2 class="entry-title">', '</h2>');?>
          </div>
          <div>
          
          </div>
          <?php
				    while ( have_posts() ) {
				    	the_post();
				    	get_template_part( 'loop-templates/content', 'page' );
            
				    	// If comments are open or we have at least one comment, load up the comment template.
				    	if ( comments_open() || get_comments_number() ) {
				    		comments_template();
				    	}
				    }
				  ?>
          <div>
            <?php echo do_shortcode('[contact-form-7 id="19" title="Contact Form"]');?>
          </div>
        </div>
        <div class="col-lg-7">
          <img src="https://picsum.photos/1200/1600" alt="Imagen de una Pkana">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();