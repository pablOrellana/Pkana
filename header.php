<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>P'KANA - Frutos secos y más</title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" href="https://www.pkanashop.com/wp-content/uploads/2020/08/cropped-c4a4ff97-24ac-445d-adf2-c1baef1ff9a6-2-32x32.png" sizes="32x32">
  <link rel="icon" href="https://www.pkanashop.com/wp-content/uploads/2020/08/cropped-c4a4ff97-24ac-445d-adf2-c1baef1ff9a6-2-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="https://www.pkanashop.com/wp-content/uploads/2020/08/cropped-c4a4ff97-24ac-445d-adf2-c1baef1ff9a6-2-180x180.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="7AH4SFOP"></script>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="header--clear">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">
      
			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container">

        <div class="page-name page-name--white">
          <h1>P'KANA</h1>
        </div>
        <div class="menu-icon menu-icon--white">
          <span></span>
        </div>
        <!-- The WordPress Menu goes here -->
        <div class="sp-menu">
          <div class="page-name">
            <h2>P'KANA</h2>
          </div>  

          <?php
				    wp_nav_menu(
					  array(
              'theme_location'  => 'primary',
				  		'container_class' => 'navbar-collapse',
				  		'container_id'    => 'navbarNavDropdown',
						  'menu_class'      => 'navbar-nav ml-lg-auto main-menu--white',
						  'fallback_cb'     => '',
					  	'menu_id'         => 'main-menu',
					  	'depth'           => 2,
						  'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
             )
            );
          ?>
          <div class="nav-icons nav-icons--white">
            <a href="https://web.facebook.com/Pkana-Frutos-secos-y-m%C3%A1s-104222451580555" target="_blank">
              <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
            </a>
          </div>
        </div>
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

  </div><!-- #wrapper-navbar end -->
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