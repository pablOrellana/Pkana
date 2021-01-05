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

get_header();
?>

<div class="loader">
  <div class="loader__wrap">
    <div class="loader__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="P'KANA - Frutos secos y más">
    </div>
    <div id="noTrespassingOuterBarG">
      <div id="noTrespassingFrontBarG" class="noTrespassingAnimationG">
        <div class="noTrespassingBarLineG"></div>
        <div class="noTrespassingBarLineG"></div>
        <div class="noTrespassingBarLineG"></div>
        <div class="noTrespassingBarLineG"></div>
        <div class="noTrespassingBarLineG"></div>
        <div class="noTrespassingBarLineG"></div>
      </div>
    </div>
  </div>
</div>
<section>
  <div class="home-banner">
    <div class="main-visual main-visual--top"></div>
    <div class="over-ray">
        <img class="reile-logo" sizes="(max-width: 1248px) 100vw, 1248px" srcset="
        <?php echo get_template_directory_uri(); ?>/img/logo.png 375w,
          <?php echo get_template_directory_uri(); ?>/img/logo.png 884w,
          <?php echo get_template_directory_uri(); ?>/img/logo.png 1248w" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="P'KANA">
      </div>
  </div>
</section>
<section></section>
<section></section>

<?php
get_footer();
