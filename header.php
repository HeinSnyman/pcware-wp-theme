<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PCware
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pcware' ); ?></a>

	<header id="masthead" class="site-header">

		<nav>

			<div class="header__logo-box">
				<?php the_custom_logo(); ?>
			</div><!--header__logo-box-->

			<div class="header__navigation">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1'
						)
						);
				?>
			</div><!--header__navigation-->

		</nav><!--Navbar-->

	</header>



	<div id="content" class="site-content">
