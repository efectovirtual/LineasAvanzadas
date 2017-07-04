<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lineasavanzadas
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lineasavanzadas' ); ?></a>


	<header id="masthead" class="site-header" role="banner">
		


			<!-- Header -->
		<div class="rheader">

		<div class="topinfo">
			<div class="row align-center">
				<div class="medium-6 large-3 columns"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@lineasavanzadas.com</div>
				<div class="medium-6 large-4 columns"><i class="fa fa-mobile" aria-hidden="true"></i><strong>Llámanos: </strong>(575) 358 78 12 - 310 665 2338</div>
				<div class="medium-6 large-3 columns">Síguenos en:

					<div id="socialicons">
						<a class="icon" href="#" title="Follow with Facebook" target="_blank"><i class="fa fa-facebook"></i></a>

						<a class="icon" href="#" title="Follow with Instagram" target="_blank"><i class="fa fa-instagram"></i></a>

						<a class="icon" href="#" title="Follow with Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>

							<!-- 			<a class="icon" href="#" title="Follow with Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a class="icon" href="#" title="Follow with Bloglovin" target="_blank"><i class="fa fa-heart"></i></a>
							<a class="icon" href="#" title="Follow with Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
							<a class="icon" href="#" title="Follow with YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
							<a class="icon" href="#" title="Follow with Tumblr" target="_blank"><i class="fa fa-tumblr"></i></a>
							<a class="icon" href="#" title="Follow with RSS" target="_blank"><i class="fa fa-rss"></i></a>
							<a class="icon" href="mailto:#" title="Email Me" target="_blank"><i class="fa fa-envelope"></i></a> -->
					</div>

				</div>
				<div class="medium-6 large-2 columns contacto-top"><a href="<?php the_permalink(); ?>contactos">Contáctanos</a></div>
			</div>
		</div>






		<div class="logomenu-top">
	
			<div class="row">

					<div class="medium-12 large-5 columns imglogotop">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logotop-la.png" alt="Logo">
					</div>

					<!-- Menu -->
					<div class="medium-12 large-7 columns menumen">

						<nav id="site-navigation" class="main-navigation" role="navigation">

							<span data-responsive-toggle="primary-menu" data-hide-for="medium">
								<button class="menu-icon" type="button" data-toggle></button>
							</span>

							<?php wp_nav_menu( array(
								'theme_location' => 'primary', 
								'menu_id' => 'primary-menu',
								'items_wrap' => '<ul id="%1$s" class="%2$s menu vertical medium-horizontal text-center">%3$s</ul>',
			 				) ); ?>

						</nav>

					</div><!-- #Fin Menu -->
				
			</div>

		</div>






	</div>
			<!-- Fin Header -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
